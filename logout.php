<?php
/****************************************************************************\
 * TaskFreak!                                                                 *
 * multi user                                                                 *
 ******************************************************************************
 * Version: 0.6.4                                                            *
 * Authors: Stan Ozier <taskfreak@gmail.com>                                  *
 * License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
 ******************************************************************************
 * This file is part of "TaskFreak! multi user" program.                      *
 *                                                                            *
 * TaskFreak! multi user is free software; you can redistribute it and/or     *
 * modify it under the terms of the GNU General Public License as published   *
 * by the Free Software Foundation; either version 2 of the License, or (at   *
 * your option) any later version.                                            *
 *                                                                            *
 * TaskFreak! multi user is distributed in the hope that it will be           *
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty of     *
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the              *
 * GNU General Public License for more details.                               *
 *                                                                            *
 * You should have received a copy of the GNU General Public License          *
 * along with this program; if not, write to the Free Software                *
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA *
 * \****************************************************************************/

$pPageIsPublic = true;
include '_common.php';

if ($objUser->isLogged()) {
    $objUser->load();
}
$userTimeZone = $_SESSION['tznUserTimeZone'];
$objUser->logout();
$pUserIsLogged = false;
$objUser->level = 0;

header("Location: /login.php");
die();