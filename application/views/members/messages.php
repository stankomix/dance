<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title">Messages</h1>

    <div class="table-row clearfix no-border">
      <div class="col-xs-12">

        <div class='error_msg'>
          <?php
            echo validation_errors();
            if (isset($error_message)) {
              echo $error_message;
            }
          ?>
        </div>
        <?php echo form_open('/members/messages'); ?>

          <div class="input-group col-xs-12 col-sm-11 r-padding">
            <textarea name="message" placeholder="Message..."><?php echo set_value('message'); ?></textarea>
          </div>

          <div class="input-group col-xs-2 col-sm-1">
            <button class="col-xs-12 button" type="submit" name="submit">
              Add
            </button>
          </div>

        <?php echo form_close(); ?>
      </div>
    </div>

    <div class="table-head clearfix">
      <span class="col-xs-12 col-sm-2 hide-xs">Time created:</span>
      <span class="col-xs-12 col-sm-6 hide-xs">Message:</span>
      <span class="col-xs-12 col-sm-2 hide-xs">Status:</span>
      <span class="col-xs-12 col-sm-2 hide-xs">&nbsp;</span>
    </div>

    <?php if (!empty($user_messages)) { ?>
      <?php foreach($user_messages as $key => $message) { ?>
        <div class="table-row table-row-mobile clearfix">
          <span class="col-xs-12 col-sm-2">
            <span class="mobile-head show-xs">Time created: </span>
            <?php echo dmy_from_datetime($message['created_at'], '-'); ?>
          </span>
          <span class="col-xs-12 col-sm-6">
            <span class="mobile-head show-xs">Message: </span>
            <?php echo $message['message']; ?>
          </span>
          <span class="col-xs-12 col-sm-2">
            <span class="mobile-head show-xs">Status: </span>
            <?php echo $conf['message_status_types'][$message['status']]; ?>
          </span>
          <span class="col-xs-12 col-sm-2">
            <?php if($message['created_by'] == $userdata['id'] && $message['status'] == '1') { ?>
              <a class="button float-right" href="/members/messages/close/<?php echo $message['id']; ?>">
                Close
                <i class="fa fa-close"></i>
              </a>
            <?php } ?>
          </span>
        </div>
      <?php } ?>
    <?php } else { ?>
      <div class="table-row clearfix">
        <span class="col-xs-12">
          You have no messages yet.
        </span>
      </div>
    <?php } ?>

  </div>
</div>
