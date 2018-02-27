<html>
<head>
<title>Frontend - Members area</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/datepicker.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css" />
<script type="text/javascript" src="/js/common/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/js/common/datepicker/datepicker.min.js"></script>
<script type="text/javascript" src="/js/common/datepicker/i18n/datepicker.en.js"></script>
<script type="text/javascript" src="/js/members/admin.script.js"></script>
<script type="text/javascript" src="/js/common/common.script.js"></script>
</head>
<body class="clearfix">
  <?php $this->load->view('_partials/header'); ?>

    <?php
      $flash = $this->session->flashdata('flash_message');
      if (!empty($flash)) {
    ?>
      <div class="row">
        <div class="message max-width <?php echo $flash['type']; ?>">
          <?php echo $flash['text']; ?>
          <button class="icon-btn close-message" type="button">
            <i class="fa fa-close"></i>
          </button>
        </div>
      </div>
    <?php } ?>

  <?php $this->load->view($inner_page, $userdata); ?>

  <?php $this->load->view('_partials/footer'); ?>
</body>
</html>
