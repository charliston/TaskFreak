<?php
/****************************************************************************\
 * TaskFreak!                                                                 *
 * multi user                                                                 *
 ******************************************************************************
 * Version: 0.6.3                                                             *
 * Authors: Stan Ozier <taskfreak@gmail.com>                                  *
 * License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
 * \****************************************************************************/

$GLOBALS['langParams'] = array(
    'jscalendar' => 'en'
);

// top menu / navigation
$GLOBALS['langMenu'] = array(
    'task' => 'Ergas;ia',
    'print_list' => '������ ���� ��������',
    'new_todo' => '��� Todo',
    'view' => '����������',
    'all_projects' => '���� �� ��������',
    'future_tasks' => '����������� ��������',
    'past_tasks' => '������������ ��������',
    'my_tasks' => '�� �������� ���',
    'all_tasks' => '���� �� ��������',
    'all_contexts' => '��� �� �����������',
    'all_users' => '���� �� �������',
    'reload' => '��������',
    'manage' => '����������',
    'projects' => '��������',
    'users' => '�������',
    'preferences' => '�� ������ ���',
    'settings' => '��������� ����������',
    'login' => '�������',
    'logout' => '������',
    'warning' => '�������������',
    'warning_install' => '� ������� Install ������� �����, ��������� ��� ��� ��������'
);

// fields and column labels
$GLOBALS['langForm'] = array(
    'priority' => '�������������',
    'context' => '�����������',
    'deadline' => '���������',
    'project' => '�������',
    'tasks' => '���������',
    'title' => '������',
    'description' => '���������',
    'user' => '�������',
    'visibility' => '���������',
    'private' => '��������',
    'internal' => '���������',
    'public' => '�������',
    'status' => '���������',
    'create' => '����������',
    'save' => '����������',
    'cancel' => '�����',
    'reset' => '���������� ������',
    'close' => '��������',
    'edit' => '�����������',
    'delete' => '��������',
    'new' => '���',
    'project_new' => '��� �������?',
    'project_list' => '�������� ������',
    'compulsory_legend' => '�� ����� �� <span class="compulsory">�������</span> ����� �����������.',
    'list_comments' => '������.'
);

$GLOBALS['langTaskDetails'] = array(
    'tab_description' => '���������',
    'description_none' => '����� ���������',
    'tab_comments' => '������',
    'comments_by' => '���',
    'comments_none' => '��� �������� ������ �����',
    'comments_no_access' => '�� ������ ����� ��������',
    'comments_new' => '����������� �� ����� ������',
    'comments_reply' => '��������',
    'comments_edit' => '�����������',
    'comments_delete' => '��������',
    'comments_delete_confirm' => '����� �������� ��� ��� ��������?',
    'tab_history' => '��������',
    'history_date' => '����������',
    'history_user' => '�������',
    'history_what' => '��������'
);

// date support
$GLOBALS['langDateMore'] = array(
    'day' => '����',
    'days' => '�����',
    'help' => '�.�. ������, �����, 12 ���'
);

// project related
$GLOBALS['langProject'] = array(
    'project' => '�������',
    'projects' => '��������',
    'name' => '�����',
    'description' => '���������',
    'position' => '����',
    'members' => '����',
    'members_legend' => '����� ��� ��������',
    'status' => '���������',
    'action' => '��������',
    'project_history' => '�������� ����������, ������ ���������',
    'remove_confirm' => '����� �������� ��� ��� �������� ��� ��� �������?',
    'user_add_legend' => '�������� ���� ������ �� ����� ��� �������',
    'user_add_button' => '�������� ������ ���� �������',
    'user_no_project' => '��� ������ �� ������ �������',
    'user_added_ok' => '�� ����� ���������� ���� ������� �� ��������',
    'user_added_err' => '�� ����� ��� ������ �� ������� � ��� ����� ���������',
    'user_removed_ok' => '�� ����� ����������� ��� ��� �������!',
    'user_removed_err' => '�� ����� ��� ������ �� ��������� � ���� ��� ���������',
    'user_position_ok' => '� ���� ��� ������ ���������� �� ��������',
    'project_info' => '����������� ��������',
    'history_date' => '����������',
    'history_user' => '�������',
    'history_what' => '�����',
    'action_save_ok' => '�� ����������� ��� �������� �����������!',
    'action_added_ok' => '� ������� �������������!',
    'action_status_ok' => '� ��������� ��� �������� ����������!'
);

// project related
$GLOBALS['langUser'] = array(
    'information' => '���������� �����������',
    'user' => '�������',
    'name' => '�����',
    'title' => '������',
    'first_name' => '�����',
    'middle_name' => '������ �����',
    'last_name' => '�������',
    'address' => '���������',
    'location' => '���������',
    'city' => '����',
    'state' => '�����',
    'country' => '����',
    'email' => 'Email',
    'position' => '�������',
    'last_login' => '��������� �������',
    'last_login_from' => '���',
    'logout_goodbye' => '�������������� �� ��������. ����� ���.',
    'logout_login' => '����� ���� ��� ��� �� ����������',
    'action' => '�����',
    'delete_confirm' => '����� �������� ��� ��� �������� ��� ������?',
    'enable_confirm' => '����� �������� ��� ��� ������������ ��� ������?',
    'disable_confirm' => '����� �������� ��� ��� �������������� ��� ������?',
    'account' => '�������������� �����������',
    'account_legend' => '����������� �������� ����� ������ ��� ������ ��� ������ ��� �������!',
    'username' => '����� ������',
    'password' => '�������',
    'password_confirm' => '(�����������)',
    'auto_login' => '������� �� �� ����� ��� ����������',
    'password_legend' => '����������� ������ ������� (��� ������������) ���� �� ������ �� �������� ��� ��� ������� ������ ���.',
    'enabled_label' => '� ����������� ��������������',
    'login_signup' => '��� ����� �����? ������� ���������� ���!',
    'account_created' => '������������� ���� ',
    'account_disabled' => '� ����������� ����� �����������������!',
    'state_us_only' => '��� ��������� �������� ����'
);

// buttons
$GLOBALS['langButton'] = array(
    'add' => '����������',
    'add_account' => '��������',
    'update' => '���������� �������',
    'cancel' => '������� �������',
    'reset' => '���������� ������',
    'back' => '���� ���� �����'
);


// error and information messages
$GLOBALS['langMessage'] = array(
    'not_found_or_denied' => '�� �������� ��� �������� �, � �������� ����������',
    'denied' => '������� ���������!',
    'project_delete' => '�������� ��������',
    'project_delete_confirm' => '����� �������� ��� ��� �������� ��� �������� ��� ���� ��� ��������� ���?',
    'project_delete_ok' => '� ������� �����������',
    'project_delete_no' => '� ������� ��� ������ �� ���������!',
    'task_edit' => '����������� ����� ��� ���������',
    'task_delete' => '�������� ����� ��� ���������',
    'task_delete_confirm' => '����� �������� ��� ��� �������� ��� ���������?',
    'error_no_title' => '����������� ����������� ��� �����!',
    'done_deleted' => '� �������� �����������!',
    'done_status' => '� ��������� ��������� ����������',
    'done_updated' => '� �������� ����������!',
    'done_added' => '� �������� �������������!',
    'done_comment_added' => '�� ������ ����������!',
    'done_comment_updated' => '�� ������ ����������!',
    'done_comment_deleted' => '�� ������ �����������!',
    'operation_failed' => '�������� �����������!',
    'purge_all' => '���������� (�������� ������ ���������) ��� ���� ��� ��������',
    'purge_all_confirm' => '����� �������� ��� ��� �������� ������ ��������� ��� ���� ��� ��������?',
    'delete_all' => '�������� ���� ��� �������� (���� ��� ���������)',
    'delete_all_confirm' => '����� �������� ��� ��� �������� ���� ��� ��������� ��� ���� ��� ��������?',
    'purge_one' => '���������� (�������� ������ ���������)',
    'purge_one_confirm' => '����� �������� ��� ��� �������� ���� ��� ������ ��������� ��� ����� ��� �������?',
    'delete_one' => '�������� ��������� ��� ��������',
    'delete_one_confirm' => '����� �������� ��� ��� �������� ����� ��� ��������?',
    'no_task_found' => '����� �������� ��� ��������� �� �� �������� ���',
    'no_project_found' => '� ������� ��� �������',
    'create_task' => '����� ���� ��� ��� �� ������������ �� ������������� ���',
    'no_project_found_1' => "��� ����� �� ��� ��� �������!!!",
    'no_project_found_2' => '������ ����� �� ������������� ��� ��������',
    'close_window' => '�������� ����� ��� ���������',
    'session_expired' => '� �������� ������� ��� �����',
    'clock_start' => '������ ������������',
    'clock_stop' => '��������� ������������',
    'clock_change' => '����������� ������������',
    'information_saved' => '�� ����������� ������������� �� ��������',
    'confirm_status_close' => '����� �������� ��� ������ �� �������� ����� ��� ��������?'
);

$GLOBALS['langRss'] = array(
    'no_task' => '��� �������� ��������� ��� ������',
    'error_login' => '�������� ��������������'
);
