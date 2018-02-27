<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title"><?php echo lang('memberships'); ?></h1>

    <div class="table-head clearfix">
      <span class="col-xs-12 col-sm-11 hide-xs"><?php echo lang('memberships'); ?></span>
      <span class="col-xs-12 col-sm-1 hide-xs">&nbsp;</span>
    </div>

    <div class="table-row clearfix">
      <span class="col-xs-12">
        <a class="button" href="/members/memberships/assistant">
          <?php echo lang('buy_membership'); ?>
        </a>
      </span>
    </div>

    <?php if (!empty($user_memberships)) { ?>
      <?php foreach($user_memberships as $key => $membership) { ?>
        <a href="/members/memberships/show/<?php echo $membership['Teilnahmeid'] ?>" class="table-row table-row-mobile clearfix">
          <span class="col-xs-12 col-sm-11">
            <span class="mobile-head show-xs"><?php echo lang('membership'); ?>: </span>
            <?php echo dmy_from_datetime($membership['Validfrom'], '-'); ?>
            -
            <?php echo dmy_from_datetime($membership['Validuntil'], '-'); ?>
            :
            <?php echo $membership['Description']; ?>
          </span>
          <span class="col-xs-12 col-sm-1">
            <!--<a class="go-to" href="/members/memberships/show/<?php echo $membership['Teilnahmeid'] ?>">-->
              <i class="fa go-to fa-arrow-right"></i>
            <!--</a>-->
          </span>
        </a>
      <?php } ?>
    <?php } else { ?>
      <div class="table-row clearfix">
        <span class="col-xs-12">
          <?php echo lang('no_membership_yet'); ?>
        </span>
      </div>
    <?php } ?>

  </div>
</div>

<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title"><?php echo lang('enrolled_courses'); ?></h1>
    <div class="table-head clearfix">
      <span class="col-xs-12 col-sm-8 hide-xs"><?php echo lang('course'); ?></span>
      <span class="col-xs-12 col-sm-2 hide-xs"><?php echo lang('free_places'); ?></span>
      <span class="col-xs-12 col-sm-2 hide-xs">&nbsp;</span>
    </div>

    <?php if (!empty($courses)) { ?>
      <?php foreach($courses as $key => $course) { ?>
        <div class="table-row table-row-mobile clearfix">
          <span class="col-xs-12 col-sm-8">
            <span class="mobile-head show-xs"><?php echo lang('course'); ?>: </span>
            <?php echo dmy_from_ymd($course['startdate'], '-'); ?>
            -
            <?php echo dmy_from_ymd($course['enddate'], '-'); ?>
            :
            <?php echo $course['name']; ?>
            <?php if($course['waiting'] == '1') { ?>
              - (<?php echo lang('waiting'); ?>)
            <?php } ?>
            <span class="col-xs-12 col-sm-12 table-cell-small"> <?php echo $course['description']; ?></span>

            <span class="col-xs-12">
              Partner needed: <?php echo $conf['noyes'][$course['needpartner']]; ?>
              <?php if($course['needpartner'] == 1) { ?>
                -
                <?php if($course['num_males'] > $course['num_females']) { ?>
                  <?php echo ($course['num_males'] - $course['num_females']); ?> women needed
                <?php } elseif($course['num_males'] < $course['num_females']) { ?>
                  <?php echo ($course['num_females'] - $course['num_males']); ?> men needed
                <?php } ?>

                (<?php echo $course['num_males']; ?> m, <?php echo $course['num_females']; ?> f )
              <?php } ?>
            </span>

          </span>
          <span class="col-xs-12 col-sm-2">
            <span class="mobile-head show-xs"><?php echo lang('free_places'); ?>: </span>
            <?php $free_places = (int)$course['free_places'] <= 0 ? 0 : $course['free_places']; ?>
            <?php if($course['num_places'] == 0) { ?>
              <?php echo lang('no_limit'); ?>
            <?php } elseif($free_places > 5) {
              echo '> 5';
            } else {
              echo $free_places;
            }
            ?>
          </span>
          <span class="col-xs-12 col-sm-2">
            <a  class="button float-right"
                href="/members/memberships/course_disenroll/<?php echo $course['id']; ?>"
                onclick="return confirm('<?php echo lang('leave_course_msg'); ?>');"
                >
              <?php echo lang('leave'); ?>
              <i class="fa fa-sign-out"></i>
            </a>
          </span>
        </div>
      <?php } ?>
    <?php } else { ?>
      <div class="table-row clearfix">
        <span class="col-xs-12">
          <?php echo lang('not_enrolled_courses_yet'); ?>
        </span>
      </div>
    <?php } ?>

    <div class="table-row clearfix">
      <span class="col-xs-12">
        <a class="button" href="/members/memberships/courses">
          <?php echo lang('available_courses'); ?>
        </a>
      </span>
    </div>

  </div>
</div>


<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title"><?php echo lang('my_lessons'); ?></h1>
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
            <?php echo lang('yes'); ?>

            <?php if($lesson['waiting'] == '1') { ?>
              - <?php echo lang('waiting'); ?>
            <?php } ?>
          </span>
          <span class="col-xs-2">
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
            <a  class="button float-right"
                href="/members/memberships/lesson_disenroll/<?php echo $lesson['id']; ?>"
                onclick="return confirm('<?php echo lang('leave_lesson_msg'); ?>');"
                >
              <?php echo lang('leave'); ?>
              <i class="fa fa-sign-out"></i>
            </a>
          </span>
        </div>
      <?php } ?>
    <?php } else { ?>
      <div class="table-row clearfix">
        <span class="col-xs-12">
          <?php echo lang('lesson_not_enrolled_msg'); ?>
        </span>
      </div>
    <?php } ?>

    <div class="table-row clearfix">
      <span class="col-xs-12">
        <a class="button" href="/members/memberships/lessons">
          <?php echo lang('book_lesson'); ?>
        </a>
      </span>
    </div>

  </div>
</div>
