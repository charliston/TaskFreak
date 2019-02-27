<?php
/****************************************************************************\
 * TaskFreak!                                                                 *
 * multi user                                                                 *
 ******************************************************************************
 * Version: 0.6.3                                                             *
 * Authors: Stan Ozier <taskfreak@gmail.com>                                  *
 * License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
 * \****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">A�i� jums <?php echo $objEditItem->getName(); ?>!</h3>
    <?php
    switch (PRJ_REGISTRATION) {
        case 1:
            ?>
            <p class="ctr">Mes buvome prane�ti ir aktyvinsime j�s� prane�im� kiek galima grei�iau.</p>
            <p>&nbsp;</p>
            <?php
            break;
        case 2:
            ?>
            <p class="ctr">Pra�om patikrinti savo pa�to d��ut�.</p>
            <p class="ctr">J�s tur�jote gauti elektronin� lai�k�, kuriame bus aktyvacijos kodas.</p>
            <p class="ctr">Pra�om sekti instrukcijas elektroniniame pa�te, kad u�baigtum�te registracij�.</p>
        <?php
    }
    ?>
    <p>&nbsp;</p>
