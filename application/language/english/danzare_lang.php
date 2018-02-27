<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Header
$lang['menu'] = 'Menu';
$lang['overview'] = 'Overview';
$lang['settings'] = 'Settings';
$lang['change_pass'] = 'Change password';
$lang['change_language'] = 'Change language';
$lang['logout'] = 'Logout';

// Memberships
$lang['memberships'] = 'Memberships';
$lang['membership'] = 'Membership';
$lang['buy_membership'] = 'Buy Membership';
$lang['no_membership_yet'] = 'You do not have any membership yet.';
$lang['membership_not_available'] = 'That membership is not available.';
$lang['abo_type'] = 'Abo type';
$lang['comment'] = 'Comment';
$lang['payment_amount'] = 'Payment amount';
$lang['valid_from'] = 'Valid from';
$lang['valid_until'] = 'Valid until';
$lang['break'] = 'Break';
$lang['set_break'] = 'Set break';
$lang['break_settings_saved'] = 'Break settings have been saved.';
$lang['break_dates_invalid'] = 'From date has to be smaller than Until date and not in the past.';
$lang['no_break_msg'] = 'You have no break period set.';
$lang['move_membership_date'] = 'Move membership date';
$lang['moved_membership_msg'] = 'The membership has been moved.';
$lang['move_membership_date_invalid_msg'] = 'New date has to be later than today.';
$lang['new_start_date'] = 'New start date';
$lang['auto_renew'] = 'Auto renewal';
$lang['stop_auto_renew'] = 'Stop auto-renewal';
$lang['start_auto_renew'] = 'Start auto-renewal';
$lang['cancellation'] = 'Cancellation';
$lang['confirm_cancellation'] = 'Confirm cancellation';
$lang['cancel_membership'] = 'Cancel Membership';
$lang['cannot_cancel_started_membership'] = "You cannot cancel this membership once it's already started.";
$lang['cannot_cancel_paid_membership'] = "You cannot cancel this membership once it's already been paid.";
$lang['membership_cancelled_msg'] = 'Your membership has been cancelled successfully.';
$lang['confirm'] = 'Confirm';
$lang['reason'] = 'Reason';
$lang['break_deleted_msg'] = 'Break period has been deleted.';
$lang['renewal_stopped_msg'] = 'The auto-renewal has been stopped for the selected membership.';
$lang['renewal_started_msg'] = 'The auto-renewal has been started for the selected membership.';

// Add membership/ Assistant
$lang['step'] = 'Step';
$lang['select_course_type'] = 'Select course type';
$lang['select_course_type_msg'] = 'Please pick a course type from the list.';
$lang['select_abo_type'] = 'Select abo type';
$lang['select_abo_type_msg'] = 'Please pick a abo type from the list.';
$lang['select_product'] = 'Select product';
$lang['select_product_msg'] = 'Please pick a product from the list.';
$lang['selected_abo_unavailable'] = 'Selected abotype is unavailable.';
$lang['select_course'] = 'Select course';
$lang['select_later_valid_date'] = 'Please select a valid date later than today.';
$lang['select_course_msg'] = 'Please pick a course from the list.';
$lang['select_lessons'] = 'Select lessons';
$lang['select_lessons_msg'] = 'Please pick at least one lesson from the list.';
$lang['course_or_lessons_msg'] = 'Would you like to enroll for a course or just pick some lessons?';
$lang['course_only_msg'] = 'Individual lessons are not available for this course.';
$lang['lessons_only_msg'] = 'You can only pick individual lessons for this course type.';
$lang['membership_added_msg'] = 'Membership has been successfully added.';
$lang['no_lessons_add_membership_msg'] = 'There are no lessons available yet, but you can still add the membership.';
$lang['add_membership_only'] = 'Add membership only';
$lang['add_lessons'] = 'Add lessons';
$lang['membership_course_added_msg'] = 'Membership and course have been successfully added.';
$lang['membership_lessons_added_msg'] = 'Membership and lessons have been successfully added.';

// Courses
$lang['courses'] = 'Courses';
$lang['available_courses'] = 'Available courses';
$lang['enrolled_courses'] = 'Enrolled courses';
$lang['not_enrolled_courses_yet'] = 'You are not enrolled in any courses yet.';
$lang['course'] = 'Course';
$lang['course_type'] = 'Course type';
$lang['leave_course_msg'] = 'Are you sure you want to leave this course?';
$lang['course_enroll_success_msg'] = 'You have successfully enrolled.';
$lang['course_enroll_error_msg'] = 'There was a problem with the course enrollment.';
$lang['course_disenroll_success_msg'] = 'You have successfully disenrolled.';
$lang['course_disenroll_error_msg'] = 'There was a problem with the course disenrollment.';
$lang['course_not_available'] = 'That course is not available.';
$lang['courses_not_available_msg'] = 'There are no available courses yet.';
$lang['join_course'] = 'Join course';

// Lessons
$lang['lessons'] = 'Lessons';
$lang['available_lessons'] = 'Available lessons';
$lang['book_lesson'] = 'Book lesson';
$lang['lesson'] = 'Lesson';
$lang['lesson_type'] = 'Lesson type';
$lang['my_lessons'] = 'My lessons';
$lang['leave_lesson_msg'] = 'Are you sure you want to leave this lesson?';
$lang['lesson_enroll_success_msg'] = 'You have successfully enrolled.';
$lang['lesson_enroll_error_msg'] = 'There was a problem with the lesson enrollment.';
$lang['lesson_disenroll_success_msg'] = 'You have successfully disenrolled.';
$lang['lesson_disenroll_error_msg'] = 'There was a problem with the lesson disenrollment.';
$lang['lesson_not_enrolled_msg'] = 'You are not enrolled in any lessons yet.';
$lang['lessons_not_available_msg'] = 'There are no available lessons yet.';
$lang['all_lessons'] = 'All lessons';

// Change password
$lang['change_pass_title'] = 'Change your password';
$lang['new_pass'] = 'New password';
$lang['repeat_pass'] = 'Repeat password';
$lang['change_pass_btn'] = $lang['change_pass'];
$lang['pass_change_success'] = 'Password changed successfully.';

// Change language
$lang['change_site_language'] = 'Change site language';
$lang['select_language'] = 'Select language';
$lang['change_language_btn'] = $lang['change_language'];
$lang['lang_change_success'] = 'Language changed successfully.';

// Content
$lang['content'] = 'Content';
$lang['content_files'] = 'Content files';
$lang['no_content_files_yet'] = 'No content files are available yet.';
$lang['file'] = 'File';

// General
$lang['type'] = 'Type';
$lang['title'] = 'Title';
$lang['date'] = 'Date';
$lang['view'] = 'View';
$lang['leave'] = 'Leave';
$lang['enroll'] = 'Enroll';
$lang['try'] = 'Try';
$lang['enrolled'] = 'Enrolled';
$lang['start_time'] = 'Start time';
$lang['start_date'] = 'Start date';
$lang['days'] = array(
                    '1' => 'Monday',
                    '2' => 'Tuesday',
                    '3' => 'Wednesday',
                    '4' => 'Thursday',
                    '5' => 'Friday',
                    '6' => 'Saturday',
                    '7' => 'Sunday',
                    );
$lang['yes'] = 'Yes';
$lang['no'] = 'No';
$lang['from'] = 'From';
$lang['until'] = 'Until';
$lang['move'] = 'Move';
$lang['delete'] = 'Delete';
$lang['save'] = 'Save';
$lang['back'] = 'Back';
$lang['continue'] = 'Continue';
$lang['submit'] = 'Submit';
$lang['not_available'] = 'Not available';
$lang['free_places'] = 'Free places';
$lang['no_limit'] = 'No limit';
$lang['waiting'] = 'Waiting';
$lang['waiting_msg'] = 'You are on the waiting list.';
$lang['danzare_members_area'] = 'Danzare members area';

// Login
$lang['login_title'] = 'Login Form';
$lang['email'] = 'Email';
$lang['password'] = 'Password';
$lang['login'] = 'Login';
$lang['login_link'] = 'Login';
$lang['invalid_login'] = 'Invalid Email or Password.';
$lang['logged_out_msg'] = 'Logged out successfully.';
$lang['logged_in_msg'] = 'Logged in successfully.';
$lang['bad_login_code'] = 'Login code is invalid or has expired.';

// Register
$lang['register_title'] = 'Registration Form';
$lang['register_link'] = 'Register';
$lang['salutation'] = 'Salutation';
$lang['mr'] = 'Mr.';
$lang['mrs'] = 'Mrs.';
$lang['first_name'] = 'First name';
$lang['last_name'] = 'Last name';
$lang['street'] = 'Street';
$lang['city'] = 'City';
$lang['postal_code'] = 'Postal code';
$lang['mobile'] = 'Mobile';
$lang['birth_date'] = 'Birth date';
$lang['registration_successful_msg'] = 'Registration Successful. We have sent you an Email with a default password.';
$lang['email_exists_msg'] = 'There is already an account with the provided Email address.';
$lang['welcome_msg'] = 'Welcome to Danzare';
$lang['person_type'] = 'Person type';
$lang['select_person_type_msg'] = 'Please select your person type.';

// Forgot password
$lang['forgot_title'] = 'Forgot password';
$lang['forgot_pass_link'] = 'Forgot Password?';
$lang['forgot_success_msg'] = 'We have sent you an email with instructions to reset your password.';
$lang['forgot_no_account_msg'] = 'There is no account associated with the information you provided.';
$lang['reset_pass'] = 'Reset password';
$lang['reset_pass_subject'] = 'Reset password request | Danzare';

?>
