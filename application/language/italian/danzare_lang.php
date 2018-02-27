<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Header
$lang['menu'] = 'Menu';
$lang['overview'] = 'Panoramica';
$lang['settings'] = 'Impostazioni';
$lang['change_pass'] = 'Cambia la password';
$lang['change_language'] = 'Cambia lingua';
$lang['logout'] = 'Disconnettersi';

// Memberships
$lang['memberships'] = 'Appartenenze';
$lang['membership'] = 'Appartenenza';
$lang['buy_membership'] = 'Acquista appartenenza';
$lang['no_membership_yet'] = 'Non hai ancora nessun appartenenza.';
$lang['membership_not_available'] = 'Questa iscrizione non è disponibile.';
$lang['abo_type'] = 'Tipo Abo';
$lang['comment'] = 'Commento';
$lang['payment_amount'] = 'Importo del pagamento';
$lang['valid_from'] = 'Valido dal';
$lang['valid_until'] = 'Valido fino a';
$lang['break'] = 'Pausa';
$lang['set_break'] = 'Impostare la pausa';
$lang['break_settings_saved'] = 'Le impostazioni di interruzione sono state salvate.';
$lang['break_dates_invalid'] = 'Dalla data deve essere inferiore a Fino alla data e non nel passato.';
$lang['no_break_msg'] = 'Non hai impostato un periodo di pausa.';
$lang['move_membership_date'] = 'Sposta la data di iscrizione';
$lang['moved_membership_msg'] = "L'appartenenza è stata spostata.";
$lang['move_membership_date_invalid_msg'] = 'La nuova data deve essere successiva a quella di oggi.';
$lang['new_start_date'] = 'Nuova data di inizio';
$lang['auto_renew'] = 'Rinnovo automatico';
$lang['stop_auto_renew'] = 'Interrompe il rinnovo automatico';
$lang['start_auto_renew'] = 'Avvia il rinnovo automatico';
$lang['cancellation'] = 'Cancellazione';
$lang['confirm_cancellation'] = 'Confermare la cancellazione';
$lang['cancel_membership'] = 'Annulla iscrizione';
$lang['cannot_cancel_started_membership'] = "Non è possibile annullare questa appartenenza una volta che è già stato avviato.";
$lang['cannot_cancel_paid_membership'] = "Non è possibile annullare questa appartenenza una volta che è già stato pagato.";
$lang['membership_cancelled_msg'] = 'La tua iscrizione è stata cancellata con successo.';
$lang['confirm'] = 'Confermare';
$lang['reason'] = 'Ragionare';
$lang['break_deleted_msg'] = 'Il periodo di pausa è stato cancellato.';
$lang['renewal_stopped_msg'] = "Il rinnovo automatico è stato interrotto per l'iscrizione selezionata.";
$lang['renewal_started_msg'] = "Il rinnovo automatico è stato avviato per l'iscrizione selezionata.";

// Add membership/ Assistant
$lang['step'] = 'Passo';
$lang['select_course_type'] = 'Seleziona il tipo di corso';
$lang['select_course_type_msg'] = 'Si prega di scegliere un tipo di corso dalla lista.';
$lang['select_abo_type'] = 'Seleziona il tipo di abo';
$lang['select_abo_type_msg'] = 'Si prega di scegliere un tipo di Abo dalla lista.';
$lang['select_product'] = 'Seleziona prodotto';
$lang['select_product_msg'] = 'Si prega di scegliere un prodotto dalla lista.';
$lang['selected_abo_unavailable'] = "L'abotype selezionato non è disponibile.";
$lang['select_course'] = 'Seleziona il corso';
$lang['select_later_valid_date'] = 'Si prega di selezionare una data valida più tardi di oggi.';
$lang['select_course_msg'] = 'Si prega di scegliere un corso dalla lista.';
$lang['select_lessons'] = 'Seleziona le lezioni';
$lang['select_lessons_msg'] = 'Si prega di scegliere almeno una lezione dalla lista.';
$lang['course_or_lessons_msg'] = 'Ti piacerebbe iscriverti a un corso o semplicemente prendere alcune lezioni?';
$lang['course_only_msg'] = 'Le lezioni individuali non sono disponibili per questo corso.';
$lang['lessons_only_msg'] = 'Puoi scegliere solo lezioni individuali per questo tipo di corso.';
$lang['membership_added_msg'] = "L'iscrizione è stata aggiunta con successo.";
$lang['no_lessons_add_membership_msg'] = "Non ci sono ancora lezioni disponibili, ma puoi comunque aggiungere l'iscrizione.";
$lang['add_membership_only'] = "Aggiungere solo l'appartenenza";
$lang['add_lessons'] = 'Aggiungi lezioni';
$lang['membership_course_added_msg'] = "L'appartenenza e il corso sono stati aggiunti con successo.";
$lang['membership_lessons_added_msg'] = "L'appartenenza e le lezioni sono state aggiunte con successo.";

// Courses
$lang['courses'] = 'Corsi';
$lang['available_courses'] = 'Corsi disponibili';
$lang['enrolled_courses'] = 'Corsi registrati';
$lang['not_enrolled_courses_yet'] = 'Non sei ancora iscritto a nessun corso.';
$lang['course'] = 'Corso';
$lang['course_type'] = 'Tipo di corso';
$lang['leave_course_msg'] = 'Sei sicuro di voler lasciare questo corso?';
$lang['course_enroll_success_msg'] = "L'iscrizione al corso ha avuto successo.";
$lang['course_enroll_error_msg'] = "C'è stato un problema con l'iscrizione al corso.";
$lang['course_disenroll_success_msg'] = 'Hai lasciato con successo il corso.';
$lang['course_disenroll_error_msg'] = "C'è stato un problema nel lasciare il corso.";
$lang['course_not_available'] = 'Questo corso non è disponibile.';
$lang['courses_not_available_msg'] = 'Non ci sono ancora corsi disponibili.';
$lang['join_course'] = 'Unirsi corso';

// Lessons
$lang['lessons'] = 'Lezioni';
$lang['available_lessons'] = 'Lezioni disponibili';
$lang['book_lesson'] = 'Lezione libro';
$lang['lesson'] = 'Lezione';
$lang['lesson_type'] = 'Tipo di lezione';
$lang['my_lessons'] = 'Le mie lezioni';
$lang['leave_lesson_msg'] = 'Sei sicuro di voler lasciare questa lezione?';
$lang['lesson_enroll_success_msg'] = 'Ti sei iscritto con successo.';
$lang['lesson_enroll_error_msg'] = "C'è stato un problema con l'iscrizione alla lezione.";
$lang['lesson_disenroll_success_msg'] = 'Ti sei disenrollato con successo.';
$lang['lesson_disenroll_error_msg'] = "C'è stato un problema con l'abbandono della lezione.";
$lang['lesson_not_enrolled_msg'] = 'Non sei iscritto ad alcuna lezione ancora.';
$lang['lesson_not_available_msg'] = 'Non ci sono ancora lezioni disponibili.';
$lang['all_lessons'] = 'Tutte le lezioni';

// Change password
$lang['change_pass_title'] = 'Cambia la tua password';
$lang['new_pass'] = 'Nuova password';
$lang['repeat_pass'] = 'Ripeti la password';
$lang['change_pass_btn'] = $lang['change_pass'];
$lang['pass_change_success'] = 'Password cambiata con successo.';

// Change language
$lang['change_site_language'] = 'Cambia lingua del sito';
$lang['select_language'] = 'Seleziona la lingua';
$lang['change_language_btn'] = $lang['change_language'];
$lang['lang_change_success'] = 'Lingua cambiata con successo.';

// Content
$lang['content'] = 'Contenuto';
$lang['content_files'] = 'File di contenuto';
$lang['no_content_files_yet'] = 'Nessun file di contenuto è ancora disponibile.';
$lang['file'] = 'File';

// General
$lang['type'] = 'Tipo';
$lang['title'] = 'Titolo';
$lang['date'] = 'Data';
$lang['view'] = 'Vista';
$lang['leave'] = 'Partire';
$lang['enroll'] = 'Iscriversi';
$lang['try'] = 'Provare';
$lang['enrolled'] = 'Iscritto';
$lang['start_time'] = 'Ora di inizio';
$lang['start_date'] = "Data d'inizio";
$lang['days'] = array(
                    '1' => 'Lunedi',
                    '2' => 'Martedì',
                    '3' => 'Mercoledì',
                    '4' => 'Giovedì',
                    '5' => 'Venerdì',
                    '6' => 'Sabato',
                    '7' => 'Domenica',
                    );
$lang['yes'] = 'Sì';
$lang['no'] = 'No';
$lang['from'] = 'A partire dal';
$lang['until'] = 'Fino a';
$lang['move'] = 'Sposta';
$lang['delete'] = 'Elimina';
$lang['save'] = 'Salva';
$lang['back'] = 'Indietro';
$lang['continue'] = 'Continua';
$lang['submit'] = 'Spedire';
$lang['not_available'] = 'Non disponibile';
$lang['free_places'] = 'Posti liberi';
$lang['no_limit'] = 'Senza limiti';
$lang['waiting'] = 'Attesa';
$lang['waiting_msg'] = 'Siete in lista di attesa.';
$lang['danzare_members_area'] = 'Area membri Danzare';

// Login
$lang['login_title'] = 'Modulo di accesso';
$lang['email'] = 'E-mail';
$lang['password'] = 'Password';
$lang['login'] = 'Accedi';
$lang['login_link'] = 'Accesso';
$lang['invalid_login'] = 'E-mail o password non validi.';
$lang['logged_out_msg'] = 'Disconnesso con successo.';
$lang['logged_in_msg'] = 'Collegato con successo.';
$lang['bad_login_code'] = 'Il codice di accesso non è valido o è scaduto.';

// Register
$lang['register_title'] = 'Modulo di registrazione';
$lang['register_link'] = 'Registrare';
$lang['salutation'] = 'Saluto';
$lang['mr'] = 'Mr.';
$lang['mrs'] = 'Donna';
$lang['first_name'] = 'Nome';
$lang['last_name'] = 'Cognome';
$lang['street'] = 'Strada';
$lang['city'] = 'Città';
$lang['postal_code'] = 'Codice postale';
$lang['mobile'] = 'Del telefono mobile';
$lang['birth_date'] = 'Data di nascita';
$lang['registration_successful_msg'] = "Registrazione effettuata con successo. Ti abbiamo inviato un'e-mail con una password predefinita.";
$lang['email_exists_msg'] = "Esiste già un account con l'indirizzo e-mail fornito.";
$lang['welcome_msg'] = 'Benvenuto in Danzare';
$lang['person_type'] = 'Tipo di persona';
$lang['select_person_type_msg'] = 'Si prega di selezionare il tipo di persona.';

// Forgot password
$lang['forgot_title'] = 'Password dimenticata';
$lang['forgot_pass_link'] = 'Password dimenticata?';
$lang['forgot_success_msg'] = "Ti abbiamo inviato un'email con le istruzioni per reimpostare la password.";
$lang['forgot_no_account_msg'] = 'Non vi è alcun account associato con le informazioni fornite.';
$lang['reset_pass'] = 'Reimposta password';
$lang['reset_pass_subject'] = 'Reimposta richiesta password | Danzare';

?>
