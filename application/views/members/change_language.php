<div class="row">
  <div class="box max-width clearfix">
    <div id="login">
      <h1 class="h1-title"><?php echo lang('change_site_language'); ?></h1>

      <div class='error_msg'>
        <?php
          echo validation_errors();
          if (isset($error_message)) {
            echo $error_message;
          }
        ?>
      </div>
      <?php echo form_open('/members/change-language'); ?>

        <div class="input-group col-xs-12">
          <label><?php echo lang('select_language'); ?>:</label>
          <?php echo form_dropdown('language', $languages, $userdata['language']); ?>
        </div>

        <div class="input-group col-xs-12">
          <button class="button" type="submit" name="submit">
            <i class="fa fa-language"></i>
            <?php echo lang('change_language_btn'); ?>
          </button>
        </div>

      <?php echo form_close(); ?>

    </div>
  </div>
</div>
