<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'User_Authentication';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register'] = 'User_Authentication/register';
$route['forgot-password'] = 'User_Authentication/forgot_password';
$route['login'] = 'User_Authentication/user_login_process';
$route['login-code/(:any)/(:any)'] = 'User_Authentication/login_with_code/$1/$2';
$route['login-code/(:any)'] = 'User_Authentication/login_with_code/$1';
$route['logout'] = 'User_Authentication/logout';
$route['change-language'] = 'User_Authentication/change_language';

$route['schedule-lesson'] = 'Home/lessons_schedule';

$route['schedule-course/(:num)'] = 'Home/schedule_course/$1';
$route['schedule-course'] = 'Home/courses_schedule';
$route['try-course/(:num)'] = 'Home/schedule_course/$1/1';
$route['try-course'] = 'Home/courses_schedule/1';

$route['members'] = 'Members/index';
$route['members/change-password'] = 'Members/change_password';
$route['members/change-language'] = 'Members/change_language';
$route['members/messages/close/(:any)'] = 'Members/close_message/$1';
$route['members/messages'] = 'Members/messages';

$route['members/memberships'] = 'Memberships/index';
$route['members/memberships/show/(:any)'] = 'Memberships/membership/$1';
$route['members/memberships/delete_break/(:any)'] = 'Memberships/delete_break/$1';
$route['members/memberships/cancel/(:any)'] = 'Memberships/cancel/$1';
$route['members/memberships/stop_renewal/(:any)'] = 'Memberships/stop_renewal/$1';
$route['members/memberships/start_renewal/(:any)'] = 'Memberships/start_renewal/$1';

$route['members/memberships/assistant'] = 'Memberships/assistant';
$route['members/memberships/assistant/get_abo_list'] = 'Memberships/get_assistant_abo_list';
$route['members/memberships/assistant/add_membership'] = 'Memberships/assistant_add_membership';
$route['members/memberships/assistant/get_course_based_on'] = 'Memberships/get_assistant_course_based_on';

$route['members/memberships/payment/(:num)'] = 'Memberships/pay/$1';
$route['members/memberships/payment'] = 'Memberships/pay';

$route['members/memberships/confirmation/(:num)'] = 'Memberships/confirmation/$1';
$route['members/memberships/confirmation'] = 'Memberships/confirmation';

$route['members/memberships/courses'] = 'Courses/index';
$route['members/memberships/course_enroll/(:any)'] = 'Courses/course_enroll/$1';
$route['members/memberships/course_disenroll/(:any)'] = 'Courses/course_disenroll/$1';

$route['members/memberships/lessons'] = 'Lessons/lessons';
$route['members/memberships/lesson_enroll/(:any)'] = 'Lessons/lesson_enroll/$1';
$route['members/memberships/lesson_disenroll/(:any)'] = 'Lessons/lesson_disenroll/$1';

$route['members/content'] = 'Content/index';
$route['members/content/file/(:any)'] = 'Content/file/$1';

$route['admin'] = 'admin/Dashboard/index';
$route['admin/login'] = 'admin/Dashboard/login';
$route['admin/logout'] = 'admin/Dashboard/logout';

$route['admin/content/add'] = 'admin/Admin_Content/add';
$route['admin/content/view/(:any)'] = 'admin/Admin_Content/view/$1';
$route['admin/content/:num'] = 'admin/Admin_Content/index/$1';
$route['admin/content'] = 'admin/Admin_Content/index';

$route['admin/courses'] = 'admin/Admin_Courses/index';
$route['admin/courses/add'] = 'admin/Admin_Courses/add';
$route['admin/courses/view/(:any)'] = 'admin/Admin_Courses/view/$1';
$route['admin/courses/edit/(:any)'] = 'admin/Admin_Courses/edit/$1';

$route['admin/lessons'] = 'admin/Admin_Lessons/index';
$route['admin/lessons/add'] = 'admin/Admin_Lessons/add';
$route['admin/lessons/view/(:num)'] = 'admin/Admin_Lessons/view/$1';
$route['admin/lessons/edit/(:num)'] = 'admin/Admin_Lessons/edit/$1';

$route['admin/course_categories'] = 'admin/Admin_Course_Categories/index';
$route['admin/course_categories/add'] = 'admin/Admin_Course_Categories/add';
$route['admin/course_categories/delete/(:any)'] = 'admin/Admin_Course_Categories/delete/$1';
$route['admin/course_categories/edit/(:any)'] = 'admin/Admin_Course_Categories/edit/$1';
$route['admin/course_categories/view/(:any)'] = 'admin/Admin_Course_Categories/view/$1';

$route['admin/users/view/(:any)'] = 'admin/Users/view/$1';
$route['admin/users/edit/(:any)'] = 'admin/Users/edit/$1';
$route['admin/users'] = 'admin/Users/index';
$route['admin/users/:num'] = 'admin/Users/index/$1';
$route['admin/users/messages/:num'] = 'admin/Users/messages/$1';
$route['admin/users/messages'] = 'admin/Users/messages';
$route['admin/users/set-message-status/(:num)/(:num)'] = 'admin/Users/set_message_status/$1/$2';
$route['admin/users/open-messages'] = 'admin/Users/open_messages';

$route['admin/memberships'] = 'admin/Admin_Memberships/index';
$route['admin/memberships/view/(:any)'] = 'admin/Admin_Memberships/view/$1';
$route['admin/memberships/edit/(:any)'] = 'admin/Admin_Memberships/edit/$1';
$route['admin/memberships/add'] = 'admin/Admin_Memberships/add';
$route['admin/memberships/create'] = 'admin/Admin_Memberships/create_member';
