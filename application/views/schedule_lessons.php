<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title">Schedule plan (lessons)</h1>

    <?php if (!empty($lessons)) { ?>
      <form method="post" action="/schedule-lesson">

        <?php if(validation_errors() != '') { ?>
          <div class='error_msg'>
            <?php echo validation_errors(); ?>
          </div>
        <?php } ?>

        <div class="table-head clearfix">

          <span class="input-group col-xs-12 col-sm-6">
            <?php echo form_dropdown('abotype', $memberships, set_value('abotype'), array()); ?>
          </span>

          <span class="input-group col-xs-12 col-sm-6">
            <input class="future-calendar-yesterday"
                    readonly="readonly"
                    type="text"
                    name="start_date"
                    value=""
                    placeholder="<?php echo lang('start_date'); ?>"
                    />
          </span>

        </div>

        <?php $courseday = 0; ?>
        <?php foreach($lessons as $key => $lesson) { ?>

          <?php if($courseday != $lesson['courseday']) { ?>
            <div class="table-head clearfix">
              <span class="col-xs-12"><?php echo lang('days')[$lesson['courseday']]; ?></span>
            </div>
            <div class="table-head clearfix">
              <span class="col-xs-6"><?php echo lang('lesson'); ?></span>
              <span class="col-xs-4"><?php echo lang('start_time'); ?></span>
              <span class="col-xs-2"></span>
            </div>
          <?php } ?>

          <?php $courseday = $lesson['courseday']; ?>

          <div class="table-row clearfix">
            <span class="col-xs-6">

              <?php echo lang('days')[$lesson['courseday']]; ?>
               -
              <?php echo dmy_from_datetime($lesson['validfrom'], '-'); ?>
              <?php echo $lesson['coursetypedesc']; ?>

            </span>
            <span class="col-xs-4">
              <?php echo time_dots($lesson['starttime']); ?>
            </span>

            <span class="col-xs-2">
              <!--<a class="button grey-bg float-right" href="/schedule-lesson/<?php echo $lesson['id']; ?>">-->
              <button type="submit" class="button grey-bg float-right" name="lesson" value="<?php echo $lesson['id']; ?>">
                <?php echo lang('enroll'); ?>
                <i class="fa fa-sign-in"></i>
              </button>
            </span>
          </div>
        <?php } ?>
      </form>
    <?php } else { ?>
      <div class="table-row clearfix">
        <span class="col-xs-12">
          <?php echo lang('lessons_not_available_msg'); ?>
        </span>
      </div>
    <?php } ?>

  </div>
</div>
