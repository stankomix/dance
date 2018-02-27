<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('date_to_timestamp'))
{
  function date_to_timestamp($date, $separator)
  {
    $date_a = explode($separator, $date);

    if(isset($date_a[2])) {
      return mktime(0, 0, 0, $date_a[1], $date_a[0], $date_a[2]);
    } else {
      return FALSE;
    }
  }
}


if (!function_exists('datetime_to_timestamp'))
{
  function datetime_to_timestamp($datetime, $separator1="-", $separator2=":", $format='dmy')
  {
    $datetime_a = explode(" ", $datetime);

    if(!isset($datetime_a[1])) {
      return FALSE;
    }

    $date_a = explode($separator1, $datetime_a[0]);
    $time_a = explode($separator2, $datetime_a[1]);

    if(!isset($date_a[2]) || !isset($time_a[2])) {
      return FALSE;
    } else {
      if($format == 'ymd') {
        return mktime($time_a[0], $time_a[1], $time_a[2], $date_a[1], $date_a[2], $date_a[0]);
      } else { // dmy
        return mktime($time_a[0], $time_a[1], $time_a[2], $date_a[1], $date_a[0], $date_a[2]); // hmsmdy
      }
    }
  }
}


if (!function_exists('dmy_from_datetime'))
{
  function dmy_from_datetime($datetime, $separator='-')
  {
    $datetime_a = explode(" ", $datetime);

    if(isset($datetime_a[0])) {
      $date_a = explode($separator, $datetime_a[0]);

      if(isset($date_a[2])) {
        return $date_a[2] . '.' . $date_a[1] . '.' . $date_a[0];
      } else {
        return FALSE;
      }
    } else {
      return FALSE;
    }
  }

}

if (!function_exists('dmy_datetime_from_ymd_datetime'))
{
  function dmy_datetime_from_ymd_datetime($ymd_datetime, $separator_ymd='-', $separator_dmy='.')
  {
    $ymd_datetime_a = explode(" ", $ymd_datetime);

    if(isset($ymd_datetime_a[1])) {
      $date_a = explode($separator_ymd, $ymd_datetime_a[0]);

      if(isset($date_a[2])) {
        return $date_a[2] . $separator_dmy . $date_a[1] . $separator_dmy . $date_a[0] . ' ' . $ymd_datetime_a[1];
      } else {
        return FALSE;
      }
    } else {
      return FALSE;
    }
  }

}

if (!function_exists('dmy_from_ymd'))
{
  function dmy_from_ymd($ymd, $ymd_separator='-')
  {

    $ymd_a = explode($ymd_separator, $ymd);

    if(isset($ymd_a[2])) {
      return $ymd_a[2] . '.' . $ymd_a[1] . '.' . $ymd_a[0];
    } else {
      return FALSE;
    }

  }

}

if (!function_exists('ymd_from_dmy'))
{
  function ymd_from_dmy($dmy, $separator_dmy='.', $separator_ymd='-')
  {

    $dmy_a = explode($separator_dmy, $dmy);

    if(isset($dmy_a[2])) {
      return $dmy_a[2] . $separator_ymd . $dmy_a[1] . $separator_ymd . $dmy_a[0];
    } else {
      return FALSE;
    }

  }

}

if (!function_exists('dmy_from_ymd_datetime'))
{
  function dmy_from_ymd_datetime($ymd_datetime, $separator)
  {

    $datetime_a = explode(" ", $ymd_datetime);

    if(isset($datetime_a[1])) {
      $date_a = explode($separator, $datetime_a[0]);

      if(isset($date_a[2])) {
        return $date_a[2] . '.' . $date_a[1] . '.' . $date_a[0] . ' ' . $datetime_a[1];
      } else {
        return FALSE;
      }
    } else {
      return FALSE;
    }

  }

}

?>
