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
    'task' => 'U�duotis',
    'print_list' => 'Spausdininimo versija',
    'new_todo' => 'Naujas darbas',
    'view' => '�i�r�ti',
    'all_projects' => 'Visi projiektai',
    'future_tasks' => 'B�simos U�duotys',
    'past_tasks' => 'Pra�jusios U�duotys',
    'my_tasks' => 'Mano U�duotys',
    'all_tasks' => 'Visos U�duotys',
    'all_contexts' => 'Visi Kontekstai',
    'all_users' => 'Visi Vartotojai',
    'reload' => 'Perkraunti',
    'manage' => 'Tvarkyti',
    'projects' => 'Projektai',
    'users' => 'Vartotojai',
    'preferences' => 'Mano profilis',
    'settings' => 'Sistemos nustatymai',
    'login' => 'Prisijungti',
    'logout' => 'Atsijungti',
    'warning' => '�sp�jimas',
    'warning_install' => 'Install Aplankas vis dar egzistuoja, j�s turite pa�alinti j� saugumo tikslais'
);

// fields and column labels
$GLOBALS['langForm'] = array(
    'priority' => 'Prioritetas',
    'context' => 'Kontekstas',
    'deadline' => 'Galutinis terminas',
    'project' => 'Projektas',
    'tasks' => 'U�duotys',
    'title' => 'Pavadinimas',
    'description' => 'Apib�dinimas',
    'user' => 'Vartotojas',
    'visibility' => 'Matomumas',
    'private' => 'privatus',
    'internal' => 'vidaus',
    'public' => 'publikuojamas',
    'status' => 'Pad�tis',
    'create' => 'Sukurti',
    'save' => 'I�saugoti',
    'cancel' => 'At�aukti',
    'reset' => 'Perkrauti form�',
    'close' => 'i�jungti',
    'edit' => 'redaguoti',
    'delete' => 'i�trnti',
    'new' => 'Naujas',
    'project_new' => 'Naujas projiektas?',
    'project_list' => 'parodyti s�ra��',
    'compulsory_legend' => '<span class="compulsory">Raudoni</span> laukai yra privalomi.',
    'list_comments' => 'Kom.'
);

$GLOBALS['langTaskDetails'] = array(
    'tab_description' => 'apib�dinimas',
    'description_none' => 'n�ra apib�dinimo',
    'tab_comments' => 'komentarai',
    'comments_by' => 'para��',
    'comments_none' => 'joks komentaras dar neira�ytas',
    'comments_no_access' => 'komentarai yra konfidencial�s',
    'comments_new' => 'skelbti pirm� komentar�',
    'comments_reply' => 'atsakymas',
    'comments_edit' => 'redaguoti',
    'comments_delete' => 'i�trinti',
    'comments_delete_confirm' => 'tikrai i�trinti komentar�?',
    'tab_history' => 'istorija',
    'history_date' => 'data',
    'history_user' => 'vartotojas',
    'history_what' => 'veiksmas'
);

// date support
$GLOBALS['langDateMore'] = array(
    'day' => 'diena',
    'days' => 'dienos',
    'help' => 'p.s. �iandien, rytoj, 12 liep.'
);

// project related
$GLOBALS['langProject'] = array(
    'project' => 'Projektas',
    'projects' => 'Projiektai',
    'name' => 'Pavadinimas',
    'description' => 'Apra�ymas',
    'position' => 'Pad�tis',
    'members' => 'Nariai',
    'members_legend' => 'Projiekto nariai',
    'status' => 'Pad�tis',
    'action' => 'Veiksmas',
    'project_history' => 'Per�i�r�ti pad�ties keitimo istorij�',
    'remove_confirm' => 'tikrai panaikinti i� projiekt� ?',
    'user_add_legend' => 'Prid�ti vartotoj� prie �io projekto',
    'user_add_button' => 'Prid�ti vartotoj� prie �io projekto',
    'user_no_project' => 'Nepriklauso jokiam projektui',
    'user_added_ok' => 'Narys s�kmingai prid�tas prie projekto',
    'user_added_err' => 'Narys jau priklauso projektui ar n�ra pasiekiamas',
    'user_removed_ok' => 'Narys i�trintas i� projekto!',
    'user_removed_err' => 'Narys negali b�ti i�trintas ar buvo jau i�trintas',
    'user_position_ok' => 'Nario pad�tis s�kmingai atnaujinta',
    'project_info' => 'Projekto informacija',
    'history_date' => 'data',
    'history_user' => 'vartotojas',
    'history_what' => 'veiksmas',
    'action_save_ok' => 'Projektin�s detal�s atnaujintos!',
    'action_added_ok' => 'Projektas sukurtas!',
    'action_status_ok' => 'Projektin� pad�tis atnaujinta!'
);

// project related
$GLOBALS['langUser'] = array(
    'information' => 'Asmeniniai duomenys',
    'user' => 'Vartotojas',
    'name' => 'Vardas',
    'title' => 'Pavadinimas',
    'first_name' => 'Vardas',
    'middle_name' => 'Antras vardas',
    'last_name' => 'Pavard�',
    'address' => 'Adresas',
    'location' => 'Vieta',
    'city' => 'Miestas',
    'state' => 'Valstyb�',
    'country' => '�alis',
    'email' => 'Elektroninis pa�tas',
    'position' => 'Lygmuo',
    'last_login' => 'Paskutinis prisijungimas',
    'last_login_from' => 'Nuo',
    'logout_goodbye' => 'J�s dabar atsijungiate. Viso gero!',
    'logout_login' => 'Spragtel�kite �ia jai norite prisijungti',
    'action' => 'Veiksmas',
    'delete_confirm' => 'i� tikr�j� pa�alinkite �� vartotoj�?',
    'enable_confirm' => 'i� tikr�j� �galinkite �iam vartotojui?',
    'disable_confirm' => 'i� tikr�j� drausti �� vartotoj�?',
    'account' => 'Laikykite mandatus',
    'account_legend' => 'Pra�om pasirinkti vartotojo vard� ir slapta�od�, kad �gytum�te prieig� prie TaskFreak!',
    'username' => 'Vartotojo vardas',
    'password' => 'Slapta�odis',
    'password_confirm' => 'Pakartokite slapta�od�',
    'auto_login' => 'atsiminkite mane �iame kompiuteryje',
    'password_legend' => '�veskite slapta�od� (ir patvirtinkite), tik jei j�s norite pakeisti j�.',
    'enabled_label' => 'Vartotojas atblokuotas',
    'login_signup' => 'Ne narys? U�siregistruok �ia',
    'account_created' => 'Sukurti',
    'account_disabled' => 'Vartotojas yra blokuojamas!',
    'state_us_only' => 'Only lithuanian'
);

// buttons
$GLOBALS['langButton'] = array(
    'add' => 'Sukurti',
    'add_account' => 'Testi',
    'update' => 'I�saugoti pakeitimus',
    'cancel' => 'At�aukti pakeitimus',
    'reset' => 'I�tu�tinti form�',
    'back' => 'Gr��ti � form�'
);


// error and information messages
$GLOBALS['langMessage'] = array(
    'not_found_or_denied' => 'Duomenys, nesurasti ar leidimas neduotas',
    'denied' => 'Prieiga negalima!',
    'project_delete' => 'Pa�alinti projekt�',
    'project_delete_confirm' => 'I� tikr�j� pa�alinkite �� projekt� ir jo u�duotis?',
    'project_delete_ok' => 'Project deleted',
    'project_delete_no' => 'Projektas negali b�ti pa�alintas!',
    'task_edit' => 'Redaguoti �i� u�duot�',
    'task_delete' => 'Pa�alinti �i� u�duot�',
    'task_delete_confirm' => 'I� tikr�j� pa�alinkite �i� u�duot�?',
    'error_no_title' => 'pra�om �vesti pavadinim�!',
    'done_deleted' => 'u�duotis pa�alinta!',
    'done_status' => 'u�duoties pad�tis atnaujinta',
    'done_updated' => 'u�duotis atnaujinta!',
    'done_added' => 'u�duotis sukurta!',
    'done_comment_added' => 'komentaras �d�tas!',
    'done_comment_updated' => 'komentaras atnaujintas',
    'done_comment_deleted' => 'komentaras i�trintas!',
    'operation_failed' => 'operacija nepavyko!',
    'purge_all' => 'i�valymas (pa�alina senas u�duotis) visiems projektams',
    'purge_all_confirm' => 'i� tikr�j� pa�alinti senas u�duotis i� vis� projekt�?',
    'delete_all' => 'pa�alinkite visus projektus (visas u�duotys)',
    'delete_all_confirm' => 'i� tikr�j� pa�alinti visas u�duotis i� vis� projekt�?',
    'purge_one' => 'i�valymas (pa�alina senas u�duotis)',
    'purge_one_confirm' => 'i� tikr�j� pa�alinti senas u�duotis i� �io projekto?',
    'delete_one' => 'pa�alinti vis� projekt�',
    'delete_one_confirm' => 'tikrai pa�alinti �� projekt�?',
    'no_task_found' => 'jokios u�duotys nerastos j�s� kriterijams',
    'no_project_found' => 'joks projektas nesurastas',
    'create_task' => 'Spragtel�kite �ia, kad prad�tum�te sukurti tok�',
    'no_project_found_1' => '#$%&*! Negali surasti projekto!!!',
    'no_project_found_2' => 'J�s turite sukurti i� prad�i� u�duot� ',
    'close_window' => 'u�darykite �� lang�',
    'session_expired' => 'Sesija baig�si'
);
