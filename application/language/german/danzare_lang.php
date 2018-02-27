<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Header
$lang['menu'] = 'Menü';
$lang['overview'] = 'Überblick';
$lang['settings'] = 'Einstellungen';
$lang['change_pass'] = 'Passwort ändern';
$lang['change_language'] = 'Sprache ändern';
$lang['logout'] = 'Ausloggen';

// Memberships
$lang['memberships'] = 'Mitgliedschaften';
$lang['membership'] = 'Mitgliedschaft';
$lang['buy_membership'] = 'Mitgliedschaft kaufen';
$lang['no_membership_yet'] = 'Sie haben noch keine Mitgliedschaft.';
$lang['membership_not_available'] = 'Diese Mitgliedschaft ist nicht verfügbar.';
$lang['abo_type'] = 'Abo-Typ';
$lang['comment'] = 'Bemerkung';
$lang['payment_amount'] = 'Zahlungsbetrag';
$lang['valid_from'] = 'Gültig von';
$lang['valid_until'] = 'Gültig bis';
$lang['break'] = 'Pause';
$lang['set_break'] = 'Pause setzen';
$lang['break_settings_saved'] = 'Pause Einstellungen gespeichert wurden.';
$lang['break_dates_invalid'] = 'Von Datum muss kleiner sein als Bis Datum und nicht in der Vergangenheit.';
$lang['no_break_msg'] = 'Sie haben keine Pause festgelegt.';
$lang['move_membership_date'] = 'Verschieben Sie das Mitgliedschaftsdatum';
$lang['moved_membership_msg'] = 'Die Mitgliedschaft wurde verschoben.';
$lang['move_membership_date_invalid_msg'] = 'Neues Datum muss später als heute sein.';
$lang['new_start_date'] = 'Neues Startdatum';
$lang['auto_renew'] = 'Automatische Verlängerung';
$lang['stop_auto_renew'] = 'Stoppen Sie die automatische Verlängerung';
$lang['start_auto_renew'] = 'Starten Sie die automatische Verlängerung';
$lang['cancellation'] = 'Stornierung';
$lang['confirm_cancellation'] = 'Stornierung bestätigen';
$lang['cancel_membership'] = 'Mitgliedschaft kündigen';
$lang['cannot_cancel_started_membership'] = "Sie können diese Mitgliedschaft nicht kündigen, sobald es bereits begonnen.";
$lang['cannot_cancel_paid_membership'] = "Sie können diese Mitgliedschaft nicht kündigen, sobald es bereits bezahlt worden sind.";
$lang['membership_cancelled_msg'] = 'Ihre Mitgliedschaft wurde erfolgreich gekündigt.';
$lang['confirm'] = 'Bestätigen';
$lang['reason'] = 'Grund';
$lang['break_deleted_msg'] = 'Die Pauseperiode wurde gelöscht.';
$lang['renewal_stopped_msg'] = 'Die automatische Erneuerung wurde für die ausgewählte Mitgliedschaft beendet.';
$lang['renewal_started_msg'] = 'Die automatische Erneuerung wurde für die ausgewählte Mitgliedschaft gestartet.';

// Add membership/ Assistant
$lang['step'] = 'Schritt';
$lang['select_course_type'] = 'Wählen Sie den Kurstyp';
$lang['select_course_type_msg'] = 'Bitte wählen Sie einen Kurstyp aus der Liste.';
$lang['select_abo_type'] = 'Wählen Sie Abo-Typ';
$lang['select_abo_type_msg'] = 'Bitte wählen Sie einen Abo-Typ aus der Liste.';
$lang['select_product'] = 'Produkt wählen';
$lang['select_product_msg'] = 'Bitte wählen Sie ein Produkt aus der Liste.';
$lang['selected_abo_unavailable'] = 'Der ausgewählte Abotyp ist nicht verfügbar.';
$lang['select_course'] = 'Wählen Sie den Kurs aus';
$lang['select_later_valid_date'] = 'Bitte wählen Sie ein gültiges Datum später als heute aus.';
$lang['select_course_msg'] = 'Bitte wählen Sie einen Kurs aus der Liste.';
$lang['select_lessons'] = 'Wählen Sie Lektionen';
$lang['select_lessons_msg'] = 'Bitte wählen Sie mindestens eine Lektion aus der Liste aus.';
$lang['course_or_lessons_msg'] = 'Möchten Sie sich für einen Kurs einschreiben oder nur einige Lektionen holen?';
$lang['course_only_msg'] = 'Einzelunterricht ist für diesen Kurs nicht verfügbar.';
$lang['lessons_only_msg'] = 'Sie können nur einzelne Lektionen für diesen Kurstyp auswählen.';
$lang['membership_added_msg'] = 'Die Mitgliedschaft wurde erfolgreich hinzugefügt.';
$lang['no_lessons_add_membership_msg'] = 'Es sind noch keine Lektionen verfügbar, Sie können jedoch die Mitgliedschaft hinzufügen.';
$lang['add_membership_only'] = 'Nur Mitgliedschaft hinzufügen';
$lang['add_lessons'] = 'Füge Lektionen hinzu';
$lang['membership_course_added_msg'] = 'Mitgliedschaft und Kurs wurden erfolgreich hinzugefügt.';
$lang['membership_lessons_added_msg'] = 'Mitgliedschaft und Lektionen wurden erfolgreich hinzugefügt.';

// Courses
$lang['courses'] = 'Kurse';
$lang['available_courses'] = 'Verfügbare Kurse';
$lang['enrolled_courses'] = 'Eingeschriebene Kurse';
$lang['not_enrolled_courses_yet'] = 'Sie sind noch keinem Kurs beigetreten.';
$lang['course'] = 'Kurs';
$lang['course_type'] = 'Kurstyp';
$lang['leave_course_msg'] = 'Möchtest du diesen Kurs wirklich verlassen?';
$lang['course_enroll_success_msg'] = 'Die Kursanmeldung war erfolgreich.';
$lang['course_enroll_error_msg'] = 'Es gab ein Problem mit der Kursanmeldung.';
$lang['course_disenroll_success_msg'] = 'Sie haben den Kurs erfolgreich verlassen.';
$lang['course_disenroll_error_msg'] = 'Es gab ein Problem mit dem Verlassen des Kurses.';
$lang['course_not_available'] = 'Dieser Kurs ist nicht verfügbar.';
$lang['courses_not_available_msg'] = 'Es sind noch keine Kurse verfügbar.';
$lang['join_course'] = 'Kurs beitreten';

// Lessons
$lang['lessons'] = 'Lektionen';
$lang['available_lessons'] = 'Verfügbare Lektionen';
$lang['book_lesson'] = 'Lektion buchen';
$lang['lesson'] = 'Lektion';
$lang['lesson_type'] = 'Lektion Typ';
$lang['my_lessons'] = 'Meine Lektionen';
$lang['leave_lesson_msg'] = 'Möchtest du diese Lektion wirklich verlassen?';
$lang['lesson_enroll_success_msg'] = 'Die Lektion Einschreibung war erfolgreich.';
$lang['lesson_enroll_error_msg'] = 'Es gab ein Problem mit der Lektion Einschreibung.';
$lang['lesson_disenroll_success_msg'] = 'Sie haben die Lektion verlassen.';
$lang['lesson_disenroll_error_msg'] = 'Es gab ein Problem mit dem Verlassen der Lektion.';
$lang['lesson_not_enrolled_msg'] = 'Du hast noch keine Lektionen gebucht.';
$lang['lesson_not_available_msg'] = 'Es sind noch keine Lektionen verfügbar.';
$lang['all_lessons'] = 'Alle Lektionen';

// Change password
$lang['change_pass_title'] = 'Ändern Sie Ihr Passwort';
$lang['new_pass'] = 'Neues Passwort';
$lang['repeat_pass'] = 'Passwort wiederholen';
$lang['change_pass_btn'] = $lang['change_pass'];
$lang['pass_change_success'] = 'Das Passwort wurde erfolgreich geändert.';

// Change language
$lang['change_site_language'] = 'Ändern Sie die Sprache der Website';
$lang['select_language'] = 'Sprache auswählen';
$lang['change_language_btn'] = $lang['change_language'];
$lang['lang_change_success'] = 'Die Sprache wurde erfolgreich geändert.';

// Content
$lang['content'] = 'Inhalt';
$lang['content_files'] = 'Inhaltsdateien';
$lang['no_content_files_yet'] = 'Es sind noch keine Inhaltsdateien verfügbar.';
$lang['file'] = 'Datei';

// General
$lang['type'] = 'Typ';
$lang['title'] = 'Titel';
$lang['date'] = 'Datum';
$lang['view'] = 'Ansehen';
$lang['leave'] = 'Verlassen';
$lang['enroll'] = 'Einschreiben';
$lang['try'] = 'Probieren';
$lang['enrolled'] = 'Eingeschrieben';
$lang['start_time'] = 'Startzeit';
$lang['start_date'] = 'Startdatum';
$lang['days'] = array(
                    '1' => 'Montag',
                    '2' => 'Dienstag',
                    '3' => 'Mittwoch',
                    '4' => 'Donnerstag',
                    '5' => 'Freitag',
                    '6' => 'Samstag',
                    '7' => 'Sonntag',
                    );
$lang['yes'] = 'Ja';
$lang['no'] = 'Nein';
$lang['from'] = 'Von';
$lang['until'] = 'Bis';
$lang['move'] = 'Verschieben';
$lang['delete'] = 'Löschen';
$lang['save'] = 'Speichern';
$lang['back'] = 'Zurück';
$lang['continue'] = 'Fortsetzen';
$lang['submit'] = 'Absenden';
$lang['not_available'] = 'Nicht verfügbar';
$lang['free_places'] = 'Freie Plätze';
$lang['no_limit'] = 'Keine Begrenzung';
$lang['waiting'] = 'Warten';
$lang['waiting_msg'] = 'Sie sind auf der Warteliste.';
$lang['danzare_members_area'] = 'Danzare Mitgliederbereich';

// Login
$lang['login_title'] = 'Login Formular';
$lang['email'] = 'Email';
$lang['password'] = 'Passwort';
$lang['login'] = 'Einloggen';
$lang['login_link'] = 'Einloggen';
$lang['invalid_login'] = 'Ungültige E-Mail oder Passwort.';
$lang['logged_out_msg'] = 'Wurde erfolgreich abgemeldet.';
$lang['logged_in_msg'] = 'Erfolgreich eingeloggt.';
$lang['bad_login_code'] = 'Der Login-Code ist ungültig oder abgelaufen.';

// Register
$lang['register_title'] = 'Anmeldeformular';
$lang['register_link'] = 'Registrieren';
$lang['salutation'] = 'Salutation';
$lang['mr'] = 'Herr';
$lang['mrs'] = 'Frau';
$lang['first_name'] = 'Vorname';
$lang['last_name'] = 'Nachname';
$lang['street'] = 'Strasse';
$lang['city'] = 'Ort';
$lang['postal_code'] = 'PLZ';
$lang['mobile'] = 'Mobiltelefon';
$lang['birth_date'] = 'Geburtsdatum';
$lang['registration_successful_msg'] = 'Registrierung erfolgreich. Wir haben Ihnen eine E-Mail mit einem Standardpasswort gesendet.';
$lang['email_exists_msg'] = 'Es gibt bereits ein Konto mit der angegebenen E-Mail-Adresse.';
$lang['welcome_msg'] = 'Willkommen bei Danzare';
$lang['person_type'] = 'Persontyp';
$lang['select_person_type_msg'] = 'Bitte wählen Sie Ihren Persontyp.';

// Forgot password
$lang['forgot_title'] = 'Passwort vergessen';
$lang['forgot_pass_link'] = 'Passwort vergessen?';
$lang['forgot_success_msg'] = 'Wir haben Ihnen eine E-Mail mit Anweisungen zum Zurücksetzen Ihres Passworts gesendet.';
$lang['forgot_no_account_msg'] = 'Mit den von Ihnen angegebenen Informationen ist kein Konto verknüpft.';
$lang['reset_pass'] = 'Passwort zurücksetzen';
$lang['reset_pass_subject'] = 'Passwortabfrage zurücksetzen | Danzare';

?>
