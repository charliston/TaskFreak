<?php
/****************************************************************************\
 * TaskFreak!                                                                 *
 * multi user                                                                 *
 ******************************************************************************
 * Version: 0.6.3                                                             *
 * Authors: Stan Ozier <taskfreak@gmail.com>                                  *
 * License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
 * \****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
    0 => '���',           // 0 is for new project
    10 => '�������',      // anything between 0 and 40
    20 => '�� ��������',   // is free to be customized
    40 => '������������',     // anything 40 and over
    50 => '���������'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
    1 => '����������',    // see only, no action
    2 => '����������',    // add comments
    3 => '�����',    // add tasks, add comments, task status
    4 => '�����������', // add/edit all tasks, comments, project members and status
    5 => '������������'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
    1 => '����������',     // access own projects, view only public tasks
    2 => '����������',    // access own projects, create projects, create tasks
    3 => 'Manager',   // access own projects, create projects, tasks
    4 => 'Administrator' // everything
);

// task (item) status
$GLOBALS['langItemStatus'] = array(
    0 => '0%',
    1 => '20%',
    2 => '40%',
    3 => '60%',
    4 => '80%',
    5 => '100%'
);

// contexts

$GLOBALS['langItemContext'] = array(
    1 => '�������',
    2 => '���������',
    3 => '������',
    4 => 'Internet',
    5 => '��������',
    6 => 'Email',
    7 => '������',
    8 => '����'
);

$GLOBALS['langItemPriority'] = array(
    1 => '�������!',
    2 => '����� �������������',
    3 => '������ �������������',
    4 => '�������� �������������',
    5 => '������ �������������',
    6 => '������ �������������',
    7 => '���� ������ �������������',
    8 => '���� ������ �������������',
    9 => '���������'
);
?>
