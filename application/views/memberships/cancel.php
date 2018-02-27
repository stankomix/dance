<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title"><?php echo lang('cancel_membership'); ?>: <?php echo $membership['Description']; ?></h1>

    <div class='error_msg'>
      <?php
        echo validation_errors();
        if (isset($error_message)) {
          echo $error_message;
        }
      ?>
    </div>

    <div id="cancel-membership" class="side-table clearfix">
      <form method="post" action="/members/memberships/cancel/<?php echo $membership['Teilnahmeid']; ?>">
        <div class="side-table-row clearfix">
          <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('confirm_cancellation'); ?>:</span>
          <span class="side-table-right col-xs-12 col-sm-8"><input id="cancel-membership-sure" <?php echo set_value('sure') == '1' ? 'checked="checked"' : ''; ?> type="checkbox" name="sure" value="1" /></span>
        </div>
        <div class="side-table-row clearfix" id="cancel-membership-reason-container">
          <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('reason'); ?>:</span>
          <span class="side-table-right col-xs-12 col-sm-8"><input id="cancel-membership-reason" type="text" name="reason" value="<?php echo set_value('reason'); ?>" /></span>
        </div>
        <div class="side-table-row clearfix" id="cancel-membership-submit-container">
          <span class="side-table-left col-xs-12 col-sm-4"></span>
          <span class="side-table-right col-xs-12 col-sm-8"><input type="submit" value=" <?php echo lang('cancel_membership'); ?> " /></span>
        </div>
      </form>
    </div>

  </div>
</div>
