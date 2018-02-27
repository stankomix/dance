<div id="login">
  <h1 class="h1-title"><?php echo lang('login_title'); ?></h1>

  <div class='error_msg'>
    <?php
      echo validation_errors();
      if (isset($error_message)) {
        echo $error_message;
      }
    ?>
  </div>
  <?php echo form_open('login'); ?>

    <div class="input-group col-xs-12">
      <label><?php echo lang('email'); ?>:</label>
      <?php echo form_input('Email'); ?>
    </div>

    <div class="input-group col-xs-12">
      <label><?php echo lang('password'); ?></label>
      <?php echo form_password('Passwort'); ?>
    </div>

    <div class="input-group col-xs-12">
      <button type="submit" class="button" name="submit">
        <?php echo lang('login'); ?>
        <i class="fa fa-arrow-right"></i>
      </button>
    </div>

    <div class="input-group col-xs-12">
      <a class="link" href="<?php echo base_url() ?>register"><?php echo lang('register_link'); ?></a>
       |
      <a class="link" href="<?php echo base_url() ?>forgot-password"><?php echo lang('forgot_pass_link'); ?></a>
    </div>

  <?php echo form_close(); ?>

</div>
