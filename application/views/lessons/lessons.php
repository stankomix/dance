<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title"><?php echo lang('book_lesson'); ?></h1>
    <div class="table-head clearfix">
      <span class="col-xs-4"><?php echo lang('lesson'); ?></span>
      <span class="col-xs-2"><?php echo lang('start_time'); ?></span>
      <span class="col-xs-2"><?php echo lang('enrolled'); ?></span>
      <span class="col-xs-2"><?php echo lang('free_places'); ?></span>
      <span class="col-xs-2"></span>
    </div>

    <?php if (!empty($lessons)) { ?>
      <?php foreach($lessons as $key => $lesson) { ?>
        <div class="table-row clearfix">
          <span class="col-xs-4">

            <?php echo lang('days')[$lesson['courseday']]; ?>
             -
            <?php echo dmy_from_datetime($lesson['validfrom'], '-'); ?>
            <?php echo $lesson['coursetypedesc']; ?>

          </span>
          <span class="col-xs-2"> <?php echo time_dots($lesson['starttime']); ?></span>
          <span class="col-xs-2">
            <?php if(isset($lesson['enrolled']) && $lesson['enrolled'] == true) { ?>
              <?php echo lang('yes'); ?>

              <?php if($lesson['waiting'] == '1') { ?>
                - <?php echo lang('waiting'); ?>
              <?php } ?>
            <?php } else { ?>
              <?php echo lang('no'); ?>
            <?php } ?>
          </span>
          <span class="col-xs-12 col-sm-2">
            <?php $free_places = $lesson['free_places'] <= 0 ? 0 : $lesson['free_places']; ?>
            <?php if($lesson['num_places'] == 0) { ?>
              <?php echo lang('no_limit'); ?>
            <?php } elseif($free_places > 5) {
              echo '> 5';
            } else {
              echo $free_places;
            }
            ?>
          </span>
          <span class="col-xs-2">
            <?php if(isset($lesson['enrolled']) && $lesson['enrolled'] == true) { ?>
              <a  class="button green-bg float-right"
                  href="/members/memberships/lesson_disenroll/<?php echo $lesson['id']; ?>"
                  onclick="return confirm('<?php echo lang('leave_lesson_msg'); ?>');"
                  >
                <?php echo lang('leave'); ?>
                <i class="fa fa-sign-out"></i>
              </a>
            <?php } else { ?>
              <a class="button grey-bg float-right" href="/members/memberships/lesson_enroll/<?php echo $lesson['id']; ?>">
                <?php echo lang('enroll'); ?>
                <i class="fa fa-sign-in"></i>
              </a>
              <?php if($lesson['courseid'] != 0) { ?>
                <a class="button grey-bg float-right" href="/members/memberships/course_enroll/<?php echo $lesson['courseid']; ?>">
                  <?php echo lang('join_course'); ?>
                  <i class="fa fa-sign-in"></i>
                </a>
              <?php } ?>
            <?php } ?>
          </span>
        </div>
      <?php } ?>
    <?php } else { ?>
      <div class="table-row clearfix">
        <span class="col-xs-12">
          <?php echo lang('lessons_not_available_msg'); ?>
        </span>
      </div>
    <?php } ?>

    <div class="table-row clearfix">
      <span class="col-xs-12">
        <a class="button float-left" href="/members/memberships">
          <i class="fa fa-arrow-left"></i> <?php echo lang('overview'); ?>
        </a>
      </span>
    </div>

  </div>
</div>
