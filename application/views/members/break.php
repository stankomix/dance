<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title">Current break period</h1>

    <div class="table-head clearfix">
      <span class="col-xs-5">From</span>
      <span class="col-xs-5">Until</span>
      <span class="col-xs-2">&nbsp;</span>
    </div>

    <div class="table-row clearfix">
      <?php if($saved_break !== false) { ?>
        <span class="col-xs-5"> <?php echo $saved_break['break_from']; ?></span>
        <span class="col-xs-5"> <?php echo $saved_break['break_until']; ?></span>
        <span class="col-xs-2">
          <a href="/members/break/delete">Delete</a>
        </span>
      <?php } else { ?>
        <span class="col-xs-12">You have no break period set.</span>
      <?php } ?>
    </div>

  </div>
</div>

<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title">Set break period</h1>

    <div class='error_msg'>
      <?php
        echo validation_errors();
        if (isset($error_message)) {
          echo $error_message;
        }
      ?>
    </div>

    <?php echo form_open('/members/break'); ?>
      <div class="table-head clearfix">
        <span class="col-xs-5">From</span>
        <span class="col-xs-5">Until</span>
        <span class="col-xs-2">&nbsp;</span>
      </div>

      <div class="table-row clearfix">
        <span class="input-group col-xs-5">
          <input class="default-calendar" type="text" name="From" value="" />
        </span>
        <span class="input-group col-xs-5">
          <input class="default-calendar" type="text" name="Until" value="" />
        </span>
        <span class="input-group col-xs-2">
          <input type="submit" value=" Save " name="submit" />
        </span>
      </div>
    <?php echo form_close(); ?>

  </div>
</div>
