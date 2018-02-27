<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('time_dots'))
{
  function time_dots($_time)
  {
    return substr($_time, 0, -2) . ':' . substr($_time, -2);
  }
}

if (!function_exists('get_site_language'))
{
  function get_site_language()
  {
    $language = 'german';
    if(isset($_SESSION['logged_in']['language']) && !empty($_SESSION['logged_in']['language'])) {
      $language = $_SESSION['logged_in']['language'];
    } elseif(isset($_SESSION['language']) && !empty($_SESSION['language'])) {
      $language = $_SESSION['language'];
    }
    return $language;
  }
}

?>
