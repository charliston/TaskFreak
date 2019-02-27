<?PHP
/****************************************************************************\
 * File Attachments Plugin 4 TaskFreak!                                       *
 * Version: 0.1.2                                                             *
 * Authors: Searcher <searcher@dracon.biz>                                    *
 ******************************************************************************
 * For: TaskFreak! Multi User                                                 *
 * Version: 0.6.1                                                             *
 * Authors: Stan Ozier <taskfreak@gmail.com>                                  *
 * License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
 * \****************************************************************************/

$pPageIsPublic = false;
include '_common.php';
set_time_limit(0);
ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '11M');

if ($pUser = intval($_REQUEST['sUser'])) {
    $objItemList->addWhere('ii.memberId = \'' . $pUser . '\'');
    $pLink = Tzn::concatUrl($pLink, 'sUser=' . $pUser);
    $_SESSION['selUser'] = $pUser;
    $pDefaultUserId = $pUser;
} else {
    unset($_SESSION['selUser']);
//    session_unregister('selUser');
    $pDefaultUserId = $objUser->id;
}
# Feed The File
if ($_SESSION['fp_fileId']) {
    $fileId = $_SESSION['fp_fileId'];
    $_SESSION['fp_fileId'] = '';
    $objFile = new ItemFile();
    $objFile->setUid($fileId);
    $objFile->load();
    // Check if file exists
    if (file_exists(FRK_ATTACHMENT_FOLDER . $fileId . ".frk")) {
        # Header Magic
        header("Pragma: public");
        header("Expires: Fri, 23 Jul 1999 01:00:00 GMT"); // cache control
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private", false);
        header("Content-Type: application/octet-stream");
        header('Content-Disposition: attachment; filename="' . $objFile->filename . '"');
        header("Content-Transfer-Encoding: binary");
        header('Content-Length: ' . filesize(FRK_ATTACHMENT_FOLDER . $fileId . ".frk"));
        // Get File
        readfile(FRK_ATTACHMENT_FOLDER . $fileId . ".frk");
        exit;
    } else {
        echo "Sorry, file not found - " . $fileId . ".frk";
        exit;
    }
}

# Exclusion Security
$exclude_List = explode(",", FRK_ATTACHMENT_LIST);
$exclude_ListLength = count($exclude_List);
if (FRK_ATTACHMENT_EXCLUSION == "allow") {
    // allowed only these
    if (FRK_ATTACHMENT_NOTIFY) {
        $exclude_Msg = '<span style="color:#666"> You are <strong>allowed</strong> to upload <strong>only</strong> these extensions: <strong style="color:#0000FF">';
        for ($i = 0; $i < $exclude_ListLength; $i++) {
            $exclude_Msg .= $exclude_List[$i];
            if ($i < $exclude_ListLength - 1) $exclude_Msg .= ', ';
            else $exclude_Msg .= '</strong></span><br />';
        }
    }
} else if (FRK_ATTACHMENT_EXCLUSION == "disallow") {
    // allowed all but these
    if (FRK_ATTACHMENT_NOTIFY) {
        $exclude_Msg = '<span style="color:#666">You are <strong>not allowed</strong> to upload these extensions: <strong style="color:#0066FF">';
        for ($i = 0; $i < $exclude_ListLength; $i++) {
            $exclude_Msg .= $exclude_List[$i];
            if ($i < $exclude_ListLength - 1) $exclude_Msg .= ', ';
            else $exclude_Msg .= '</strong></span><br />';
        }
    }
} else {
    // config error
    $exclude_Msg = '<span style="color:#FF0000">Please check your <strong>config</strong> file, there seems to be an <strong>error</strong> with <strong style="color:#0066FF">FRK_ATTACHMENT_EXCLUSION</strong></span><br />';
    $exclude_Error = true;
}

# Storage Folder Permissions
if (@is_dir(FRK_ATTACHMENT_FOLDER)) {  // check if exists
    @rmdir(FRK_ATTACHMENT_FOLDER . "tmp");    // just in case it was left there accidentally
    if (@mkdir(FRK_ATTACHMENT_FOLDER . "tmp")) {
        @rmdir(FRK_ATTACHMENT_FOLDER . "tmp");
    } else {
        $exclude_Msg = '<span style="color:#FF0000">Your file storage folder does <strong>not</strong> have <strong>write</strong> permissions, <br />please check <strong style="color:#0066FF">FRK_ATTACHMENT_FOLDER</strong> in the <strong>config</strong> file</span><br />';
        $exclude_Error = true;
    }
} else {
    $exclude_Msg = '<span style="color:#FF0000">Your file storage folder does <strong>not</strong> exist, <br />please check <strong style="color:#0066FF">FRK_ATTACHMENT_FOLDER</strong> in the <strong>config</strong> file</span><br />';
    $exclude_Error = true;
}


# Upload
if ($_POST) {
    $file = $_FILES['fileupload']['name'];
    $desc = $_POST['filedesc'];
    $desc = preg_replace("/\r|\n/", "<br>", $desc);
    $desc = preg_replace("/(<br>)+/", "<br>", $desc);
    # Exclusion Security
    $ext = substr($file, strrpos($file, ".") + 1);
    if (FRK_ATTACHMENT_EXCLUSION == "allow") {  // allowed only these
        if (!in_array($ext, $exclude_List)) {
            $exclude_Msg = '<span style="color:#FF0000">Sorry, you uploaded a <strong>disallowed</strong> file type: <strong style="color:#0066FF">' . $ext . '</strong></span><br />';
            $exclude_Error = true;
        }
    } else if (FRK_ATTACHMENT_EXCLUSION == "disallow") {    // allowed all but these
        if (in_array($ext, $exclude_List)) {
            $exclude_Msg = '<span style="color:#FF0000">Sorry, you uploaded a <strong>disallowed</strong> file type: <strong style="color:#0066FF">' . $ext . '</strong></span><br />';
            $exclude_Error = true;
        }
    }
    if (!$exclude_Error) {  // upload allowed
        // check transfer success
        $tempfile = "temp_" . rand(1111, 9999) . ".frk";  // no insert id yet
        if (@is_uploaded_file($_FILES['fileupload']['tmp_name']) && @move_uploaded_file($_FILES['fileupload']['tmp_name'], FRK_ATTACHMENT_FOLDER . $tempfile)) {
            // call xajax to update db
            echo '<script type="text/javascript">';
            echo 'parent.freak_start();';
            echo 'parent.xajax_task_file_upload(parent.ff.elements[\'id\'].value,\'' . $file . '\',\'' . $desc . '\',\'' . $tempfile . '\');';
            echo '</script>';
        } else {
            // error messages
            $file_Error = array(
                0 => "There is no error, the file uploaded with success",
                1 => "The uploaded file exceeds the upload_max_filesize directive in php.ini",
                2 => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
                3 => "The uploaded file was only partially uploaded",
                4 => "No file was uploaded",
                6 => "Missing a temporary folder"
            );
            $exclude_Msg = '<span style="color:#0066FF">' . $file_Error[$_FILES["fileupload"]["error"]] . '</span><br /><br />';
            $exclude_Msg .= '<span style="color:#FF0000">Sorry, the file transfer was <strong>unsuccessful</strong>, please try again</span><br /><br />';
            $exclude_Error = true;
        }
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>TaskFreak!<?php if ($pPageTitle) {
            echo ' ' . $pPageTitle;
        } ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo FRK_CHARSET; ?>"/>
    <link rel="stylesheet" type="text/css" href="skins/<?php echo FRK_SKIN_FOLDER; ?>/css/freak.css"/>
    <script type="text/javascript">
        function freak_file_upload() {
            if (!document.getElementById('fileupload').value) {
                alert('please select a file!');
                return false;
            }
            else {
                document.forms[0].submit();
                document.getElementById('file_transfer_body').innerHTML =
                    '<div align="center" style="font-size:10px">'
                    + '<br><br><strong>Please wait while the file is being uploaded</strong><br><br>'
                    + '<img src="<?php echo FRK_SKIN_FOLDER; ?>/images/working.gif">'
                    + '</div>';
            }
        }
    </script>
</head>
<body style="font-family:tahoma; topmargin:0">
<div id="file_transfer_body" align="center" style="font-size:10px">
    <?php
    if ($exclude_Error) {
        echo '<br /><br />' . $exclude_Msg . '<br /><br />';
        echo '<a href="javascript:this.location = \'' . PRJ_WWW_URL . 'files.php\'" style="font-size:12px">'
            . 'try again'
            . '</a>';
        exit;
    }
    ?>
    <form method="post" enctype="multipart/form-data" style="margin:0; padding:0">
        <input type="hidden" name="MAX_FILE_SIZE" value="15000000"/>
        <?php echo $exclude_Msg; ?>
        <br/>
        Choose a file to upload (max <?php echo ini_get('upload_max_filesize'); ?>): <br/><input id="fileupload"
                                                                                                 name="fileupload"
                                                                                                 type="file"
                                                                                                 style="width:200px"/><br/>
        <br/>
        File description (optional):<br/>
        <textarea id="filedesc" name="filedesc" style="font-family:tahoma; font-size:10px; width:200px"></textarea><br/><br/>
        <input type="button" value=" <?php echo $GLOBALS['langForm']['save']; ?> " onClick="freak_file_upload()"> &nbsp;
        <input type="button" value=" <?php echo $GLOBALS['langForm']['cancel']; ?> "
               onClick="parent.freak_body_edit(); parent.hD(parent.gE('vfedit'))">
    </form>
</div>
</body>
</html>
