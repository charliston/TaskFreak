<?php
/****************************************************************************\
 * TaskFreak!                                                                 *
 * multi user                                                                 *
 ******************************************************************************
 * Version: 0.6.3                                                             *
 * Authors: Stan Ozier <taskfreak@gmail.com>                                  *
 * License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
 * \****************************************************************************/


if (@constant('PRJ_REGISTRATION')) {
    ?>
    <p><b>Jei j�s nesate narys</b> bet nor�t� tapti tokiu, <a href="user_register.php">pra�ykite �ia</a>.</p>
    <?php
}
?>
<p><b>Jei j�s turite problem7 kai jungetes</b>, tai gal�t� b�ti d�l vienos i� �i� prie�as�i�:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
    <li>J�s nesate registruotas, ar j�s� sesija baig�si</li>
    <li>J�s �v�d�te neteising� slapta�od�?
        <?php
        if (@constant('PRJ_PASSWORD_REMINDER')) {
        ?>
        <a href="user_password.php">Pra�ykite naujo elektroniniu pa�tu</a></li>
    <?php
    }
    ?>
    <li>J�s� nar�ykl� nepalaiko javascript</li>
    <li>J�s� nar�ykl� neleid�ia sausain�li�(cookies)</li>
    <li>J�s neturite pakankamai prieigos teisi� gauti prieig� prie puslapio.</li>
</ul>
