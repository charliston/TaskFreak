<?php
if ($pPageIsPublic && (preg_match('/(log(in|out)|user_password)\.php/', $_SERVER['PHP_SELF']))) {
    ?>
    </div>
    <div id="footer" class="butt">
        <a href="http://www.taskfreak.com/" target="_blank">TaskFreak! Multi User</a> v<?php echo FRK_VERSION; ?> - Released
        on <?php echo FRK_VERSION_RELEASE; ?> under GNU General Public License v3
    </div>
    <?php
} else {
    ?>
    <div id="footer" style="margin:30px;">
        <?php
        if (@is_dir('install')) {
            echo '<p class="tznError"><b>' . $GLOBALS['langMenu']['warning'] . ':</b> ' . $GLOBALS['langMenu']['warning_install'] . '</p>';
        }
        ?>
        <a href="http://www.taskfreak.com/" target="_blank">TaskFreak! Multi User</a> v<?php echo FRK_VERSION; ?> - Released
        on <?php echo FRK_VERSION_RELEASE; ?> under GNU General Public License v3
    </div>
    </div>
    <?php
}
?>
</body>
</html>
