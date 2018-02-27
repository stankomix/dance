<div id="login">
  <h1 class="h1-title"><?php echo lang('forgot_title'); ?></h1>

  <div class='error_msg'>
    <?php
      echo validation_errors();
      if (isset($error_message)) {
        echo $error_message;
      }
    ?>
  </div>
  <?php echo form_open('forgot-password'); ?>

    <div class="input-group col-xs-12">
      <label><?php echo lang('email'); ?>:</label>
      <?php echo form_input('Email'); ?>
    </div>

    <div class="input-group col-xs-12">
      <button type="submit" class="button" name="submit">
        <i class="fa fa-lock"></i>
        <?php echo lang('reset_pass'); ?>
      </button>
    </div>

    <div class="input-group col-xs-12">
      <a class="link" href="<?php echo base_url(); ?>"><?php echo lang('login_link'); ?></a>
    </div>

  <?php echo form_close(); ?>

</div>
