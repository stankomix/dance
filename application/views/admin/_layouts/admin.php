<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Danzare admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/assets/admin/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <!-- Ionicons
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/assets/admin/dist/css/skins/skin-blue.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" type="text/css" href="/css/datepicker.min.css" />
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/_partials/header'); ?>

  <?php $this->load->view('admin/_partials/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <!--<section class="content container-fluid">-->

    <?php
      $flash = $this->session->flashdata('flash_message');
      if (!empty($flash)) {
    ?>
      <section class="content-header">
        <div class="alert alert-<?php echo $flash['type']; ?> alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4></h4>
          <?php echo $flash['text']; ?>
        </div>
      </section>
    <?php } ?>

    <?php $this->load->view($inner_page, $userdata); ?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('admin/_partials/footer'); ?>

  <?php //$this->load->view('admin/_partials/control-sidebar'); ?>


</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/js/common/jquery-3.2.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/assets/admin/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/admin/dist/js/adminlte.min.js"></script>

<script type="text/javascript" src="/js/common/datepicker/datepicker.min.js"></script>
<script type="text/javascript" src="/js/common/datepicker/i18n/datepicker.en.js"></script>

<script src="/assets/admin/dist/js/admin.script.js"></script>

</body>
</html>
