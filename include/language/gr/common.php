<?php

/****************************************************************************\
 * TaskFreak!                                                                 *
 * multi user                                                                 *
 ******************************************************************************
 * Version: 0.6.3                                                             *
 * Authors: Stan Ozier <taskfreak@gmail.com>                                  *
 * License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
 * \****************************************************************************/

setLocale(LC_ALL, 'en_EN.UTF-8', 'el_GR.utf8', 'el_GR.utf8', 'el_GR', 'el');

$GLOBALS["langTznCommon"] = array(
    'form_error' => '�������� ������ ���� ���� �����. �� ����������� ��� �������������!',
    'field_compulsory' => '���� �� ����� ����� �����������'
);

$GLOBALS["langTznUser"] = array(
    "user_pass_mismatch" => "����� �������",
    "user_pass_limit1" => "� ������� ������ �� ���� ��������� ",
    "user_pass_limit2" => " ��� ",
    "user_pass_limit3" => " ����������",
    "user_pass_empty" => "� ������� ��� ������ �� ����� ����",
    "user_pass_invalid" => "����� �������",
    "user_name_limit1" => "�� ����� ������ ������ �� ���� ������� ",
    "user_name_limit2" => " ��� ",
    "user_name_limit3" => " ����������",
    "user_name_exists" => "�� ����� ������ ��� �������",
    "user_name_empty" => "����������� ����������� �� ����� ������",
    "user_name_invalid" => "�� ����� ������ ��� ������ �� �������� �������� ���������� � ����",
    "user_name_not_found" => "�� ����� ������ ��� �������",
    "user_disabled" => "� ����������� ����������������",
    "user_forbidden" => "��� ����� ���������� ���������",
    "user_email_empty" => "�����������, ����� �� e-mail ���",
    "user_email_format" => "����������� ����� ��� ������ email",
    "user_email_invalid" => "�� Email ��� �������",
    "user_password_invalid" => "����� �������",
    "email_empty" => "�����������, ����� �� e-mail ���",
    "email_exists" => "���� ����������� �� ���� �� e-mail ��� �������",
    "email_invalid" => "����������� ����� ��� ������ email",
    "document_wrong_type" => "����� ����� �������",
    "document_empty" => "����������� �������� ��� ������",
    "common_name_empty" => "����������� ����������� ��� �����",
    "common_title_empty" => "����������� ����������� ���� �����",
    "common_theme_empty" => "����������� �������� ��� ����",
    "common_description_empty" => "����������� ����� ���������",
    "common_message_empty" => "����������� ����������� ��� ������",
    "common_date_empty" => "����������� �������� ��� ����������",
    "common_date_invalid" => "�� ����� ��� ����������� ��� ����� ������",
    "common_city_empty" => "����������� �������� ����",
    "common_info_empty" => "����������� ����������� �������� ������������",
    "common_url_empty" => "����������� ����������� �� e-mail",
    "common_file_empty" => "����������� �������� ��� ������ �������� ���� �� 'Browse..' ",
    "login_email" => "�� e-mail ���",
    "login_password" => "�������",
    "login_error0" => "���������� ���������",
    "login_error1" => "���������� �������",
    "login_error2" => "� �������� ������������ (���������� �������)",
    "login_error3" => "����������� ������� � ����� ������",
    "login_last_date" => '��������� ���������� �������',
    "login_last_address" => '��������� ��������� �������',
    "post_user" => "�������",
    "post_category" => "���������",
    "post_title" => "������",
    "post_documents" => "�����������",
    "post_date" => "������������ ��",
    "post_by" => "���",
    "doc_file_name" => "����� �������",
    "doc_file_size" => "������� �������",
    "doc_file_type" => "����� �������",
    "doc_remove" => "��������",
    "doc_update" => "�������� �������",
    "post_description" => "���������",
    "button_create" => "����������",
    "button_update" => "��������",
    "button_delete" => "��������",
    "button_login" => "�������",
    "profile_update_success" => "� ����������� ���������� �� ��������",
    "url" => "����������&nbsp;:&nbsp;",
    "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array(
    'today' => '������',
    'tomorrow' => '�����',
    'days' => '������',
    'day' => '�����',
    'weeks' => '���������',
    'week' => '��������',
    'months' => '�����',
    'month' => '����',
    'years' => '������',
    'year' => '�����',
    'january' => '����������',
    'february' => '�����������',
    'march' => '�������',
    'april' => '��������',
    'may' => '�����',
    'june' => '�������',
    'july' => '�������',
    'august' => '���������',
    'september' => '����������',
    'october' => '���������',
    'november' => '���������',
    'december' => '����������',
    'jan' => '���',
    'feb' => '���',
    'mar' => '���',
    'apr' => '���',
    'may' => '���',
    'jun' => '����',
    'jul' => '����',
    'aug' => '���',
    'sep' => '���',
    'oct' => '���',
    'nov' => '���',
    'dec' => '���',
    'monday' => '�������',
    'tuesday' => '�����',
    'wednesday' => '�������',
    'thursday' => '������',
    'friday' => '���������',
    'saturday' => '�������',
    'sunday' => '�������',
    'mon' => '���',
    'tue' => '���',
    'wed' => '���',
    'thu' => '���',
    'fri' => '���',
    'sat' => '���',
    'sun' => '���'
);

$GLOBALS['langEmail'] = array(
    'direction_in' => '����',
    'direction_out' => '���',
    'recipient_from' => '���',
    'recipient_to' => '��',
    'check_recipient' => '����������� ����������� �� e-mail ��� ���������',
    'check_subject' => '����������� ����������� �� ����',
    'check_injection' => 'Email header injection attempt detected',
    'check_active' => '� ���������� e-mail ��� ����� �������'
);
