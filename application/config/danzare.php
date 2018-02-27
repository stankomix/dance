<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['danzare'] = array(
  'days' => array(
    '1' => 'Monday',
    '2' => 'Tuesday',
    '3' => 'Wednesday',
    '4' => 'Thursday',
    '5' => 'Friday',
    '6' => 'Saturday',
    '7' => 'Sunday',
  ),
  'languages' => array(
    'german' => 'Deutsch',
    'english' => 'English',
    'italian' => 'Italiano',
  ),
  'filetypes' => array(
    'jpg' => array('type' => 'image', 'file_type' => 'jpeg'),
    'jpeg' => array('type' => 'image', 'file_type' => 'jpeg'),
    'png' => array('type' => 'image', 'file_type' => 'png'),
    'gif' => array('type' => 'image', 'file_type' => 'gif'),
    'pdf' => array('type' => 'document', 'file_type' => 'pdf'),
    'webm' => array('type' => 'video', 'file_type' => 'webm'),
    'mp4' => array('type' => 'video', 'file_type' => 'mp4'),
    'mp3' => array('type' => 'audio', 'file_type' => 'mpeg'),
    'wav' => array('type' => 'audio', 'file_type' => 'wav'),
    'ogg' => array('type' => 'audio', 'file_type' => 'ogg'),
  ),
  'usertypes' => array(
    0 => 'Member',
    1 => 'Admin',
  ),
  'message_status_types' => array(
    0 => 'Closed',
    1 => 'Open',
  ),
  'noyes' => array(
    0 => 'No',
    1 => 'Yes',
  ),
  'active_status' => array(
    0 => 'Inactive',
    1 => 'Active',
  ),
  'based_on' => array(
    1 => 'Course',
    2 => 'Membership',
  ),
  'admin_pagination_conf' => array(
    'per_page' => 1,
    'uri_segment' => 3,
    'use_page_numbers' => true,
    'first_tag_open' => '<li>',
    'first_tag_close' => '</li>',
    'prev_tag_open' => '<li>',
    'prev_tag_close' => '</li>',
    'cur_tag_open' => '<li><a class="bg-aqua" href="#">',
    'cur_tag_close' => '</a></li>',
    'num_tag_open' => '<li>',
    'num_tag_close' => '</li>',
    'next_tag_open' => '<li>',
    'next_tag_close' => '</li>',
    'last_tag_open' => '<li>',
    'last_tag_close' => '</li>',
  ),
);

?>
