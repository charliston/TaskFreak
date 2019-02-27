<?php

/****************************************************************************\
 * TaskFreak!                                                                 *
 * multi user                                                                 *
 ******************************************************************************
 * Version: 0.6.3                                                             *
 * Authors: Stan Ozier <taskfreak@gmail.com>                                  *
 * License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
 * \****************************************************************************/

setLocale(LC_ALL, 'en_EN.UTF-8', 'en_GB.utf8', 'en_US.utf8', 'en_EN', 'en');

$GLOBALS["langTznCommon"] = array(
    'form_error' => 'Formoje yra klaid� - Informacija nei�saugota!',
    'field_compulsory' => '�is laukas yra privalomas'
);

$GLOBALS["langTznUser"] = array(
    "user_pass_mismatch" => "slapta�od�io neatitikimas",
    "user_pass_limit1" => "slapta�odis turi b�ti tarp ",
    "user_pass_limit2" => " ir ",
    "user_pass_limit3" => " simboli�",
    "user_pass_empty" => "slapta�odis negali b�ti paliktas tus�ias.",
    "user_pass_invalid" => "Blogas slapta�odis!",
    "user_name_limit1" => "vartotojo vardas turi b�ti tarp ",
    "user_name_limit2" => " ir ",
    "user_name_limit3" => " simboli�",
    "user_name_exists" => "vartotojo vardas jau egzistuoja",
    "user_name_empty" => "Pra�ome �vesti savo vartotojo vard�",
    "user_name_invalid" => "Vartotojo vardas neturi tur�ti joki� ypating� simboli� ar tarp�",
    "user_name_not_found" => "vartotojo vardas nerastas",
    "user_disabled" => "Vartotojo vardas yra blokuojamas.",
    "user_forbidden" => "Jums neleid�iama prisijungti.",
    "user_email_empty" => "Pra�ome �vesti j�s� e-pa�to adres�",
    "user_email_format" => "Pra�ome �vesti teising� e-pa�t�.",
    "user_email_invalid" => "E-pa�tas nerastas.",
    "user_password_invalid" => "Blogas slapta�odis.",
    "email_empty" => "Pra�ome �vesti j�s� e-pa�to adres�",
    "email_exists" => "toks e-pa�tas jau yra naudojamas kito vartotojo.",
    "email_invalid" => "Pra�ome �vesti teising� e-pa�t�",
    "document_wrong_type" => "blogas failo tipas",
    "document_empty" => "pra�ome pasirinkti fail�",
    "common_name_empty" => "pra�ome �vesti vartotojo vard�",
    "common_title_empty" => "pra�ome �vesti pavadinim�",
    "common_theme_empty" => "pra�ome �vesti tem�",
    "common_description_empty" => "pra�ome �vesti apib�dinim�",
    "common_message_empty" => "pra�ome �vesti �inut�",
    "common_date_empty" => "pra�ome pasirinkti dat�",
    "common_date_invalid" => "tokia data neegzistuoja",
    "common_city_empty" => "pra�ome �vesti miest�",
    "common_info_empty" => "pra�ome �vesti kontaktin� informacij�",
    "common_url_empty" => "pra�ome �vesti puslapio adres�",
    "common_file_empty" => "pra�ome pasirinkti fail� (spauskite 'Browse..' migtuk�) ",
    "login_email" => "J�s� E-pa�tas",
    "login_password" => "Slapta�odis",
    "login_error0" => "Reikalinga autentifikacija",
    "login_error1" => "B�tinas slapta�odis",
    "login_error2" => "Leidimas neduotas",
    "login_error3" => "Blogas vartotojo vardas arba slapta�odis",
    "login_last_date" => 'Paskutinio prisijungimo data',
    "login_last_address" => 'Paskutinio prisijungimo adresas',
    "post_user" => "narys",
    "post_category" => "kategorija",
    "post_title" => "pavadinimas",
    "post_documents" => "nuotraukos",
    "post_date" => "paskelbta",
    "post_by" => "para��",
    "doc_file_name" => "failo pavadinimas",
    "doc_file_size" => "failo dydis",
    "doc_file_type" => "failo tipas",
    "doc_remove" => "i�trinti",
    "doc_update" => "atnaujinti failus",
    "post_description" => "apib�dinimas",
    "button_create" => "Sukurti",
    "button_update" => "Atnaujinti",
    "button_delete" => "I�trinti",
    "button_login" => "Prisijungti",
    "profile_update_success" => "Vartotojas s�kmingai atnaujintas",
    "url" => "Puslapis&nbsp;:&nbsp;",
    "atsign" => "(eta)"
);

$GLOBALS['langTznDate'] = array(
    'today' => '�iandien',
    'tomorrow' => 'rytoj',
    'days' => 'dienos',
    'day' => 'diena',
    'weeks' => 'savait�s',
    'week' => 'savait�',
    'months' => 'm�nesiai',
    'month' => 'm�nesis',
    'years' => 'metai',
    'year' => 'metai',
    'january' => 'sausis',
    'february' => 'vasaris',
    'march' => 'kovas',
    'april' => 'balandis',
    'may' => 'gegu��',
    'june' => 'bir�elis',
    'july' => 'liepa',
    'august' => 'rugpj�tis',
    'september' => 'rugs�jis',
    'october' => 'spalis',
    'november' => 'lapkritis',
    'december' => 'gruodis',
    'jan' => 'saus.',
    'feb' => 'vasar.',
    'mar' => 'kov.',
    'apr' => 'baland.',
    'may' => 'gegu�.',
    'jun' => 'bir�el.',
    'jul' => 'liep.',
    'aug' => 'r�gp.',
    'sep' => 'rugs.',
    'oct' => 'spal.',
    'nov' => 'lapkr.',
    'dec' => 'gruod.',
    'monday' => 'pirmadienis',
    'tuesday' => 'antradienis',
    'wednesday' => 'tre�iadienis',
    'thursday' => 'ketvritadienis',
    'friday' => 'penktadienis',
    'saturday' => '�e�tadienis',
    'sunday' => 'sekmadienis',
    'mon' => 'pirmadien.',
    'tue' => 'antradien.',
    'wed' => 'tre�iadien.',
    'thu' => 'ketvritadien.',
    'fri' => 'penktadien.',
    'sat' => '�e�tadien.',
    'sun' => 'sekamdien.'
);

$GLOBALS['langEmail'] = array(
    'direction_in' => '��jo',
    'direction_out' => 'I��jo',
    'recipient_from' => 'Nuo',
    'recipient_to' => 'Kam',
    'check_recipient' => 'Pra�ome �vesti gav�jo adres�',
    'check_subject' => 'Pra�om �vesti tema',
    'check_injection' => 'Email header injection attempt detected',
    'check_active' => 'E-pa�to �sp�jimas n�ra �jungtas.'
);
