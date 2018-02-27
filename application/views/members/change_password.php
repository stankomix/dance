<div class="row">
  <div class="box max-width clearfix">
    <div id="login">
      <h1 class="h1-title"><?php echo lang('change_pass_title'); ?></h1>


      <div class='error_msg'>
        <?php
          echo validation_errors();
          if (isset($error_message)) {
            echo $error_message;
          }
        ?>
      </div>
      <?php echo form_open('/members/change-password'); ?>

        <div class="input-group col-xs-12">
          <label><?php echo lang('new_pass'); ?>:</label>
          <input type="password" name="Passwort" value="" />
        </div>

        <div class="input-group col-xs-12">
          <label><?php echo lang('repeat_pass'); ?>:</label>
          <input type="password" name="Passwort2" value="" />
        </div>

        <div class="input-group col-xs-12">
          <input type="submit" value=" <?php echo lang('change_pass_btn'); ?> " name="submit" />
        </div>

      <?php echo form_close(); ?>

    </div>
  </div>
</div>
