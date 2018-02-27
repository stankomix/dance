<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title">
      Schedule plan -
      <?php if($trial == 1) { ?>
        try course
      <?php } else { ?>
        buy course
      <?php } ?>
    </h1>


    <div class="table-head clearfix">
      <span class="col-xs-12 col-sm-4 hide-xs"><?php echo lang('course'); ?></span>
      <span class="col-xs-12 col-sm-2 hide-xs"><?php echo lang('course_type'); ?></span>
      <span class="col-xs-12 col-sm-2 hide-xs">Category</span>
      <span class="col-xs-12 col-sm-2 hide-xs">&nbsp;</span>
    </div>

    <?php if (!empty($courses)) { ?>
      <?php foreach($courses as $key => $course) { ?>
        <div class="table-row table-row-mobile clearfix">
          <span class="col-xs-12 col-sm-4">
            <span class="mobile-head show-xs"><?php echo lang('course'); ?>: </span>
            <?php echo dmy_from_ymd($course['startdate'], '-'); ?>
            -
            <?php echo dmy_from_ymd($course['enddate'], '-'); ?>
            :
            <?php echo $course['name']; ?>
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
            <span class="mobile-head show-xs"><?php echo lang('course_type'); ?>: </span>
            <?php echo $course['coursetypedesc']; ?>
          </span>
          <span class="col-xs-12 col-sm-2">
            <span class="mobile-head show-xs">Category: </span>
            <?php echo $course['category']; ?>
          </span>
          <span class="col-xs-12 col-sm-2">

            <?php if($trial == 1) { ?>
              <a class="button grey-bg float-right" href="/try-course/<?php echo $course['id']; ?>">
                <?php echo lang('try'); ?>
                <i class="fa fa-sign-in"></i>
              </a>
            <?php } else { ?>
              <a class="button grey-bg float-right" href="/schedule-course/<?php echo $course['id']; ?>">
                <?php echo lang('enroll'); ?>
                <i class="fa fa-sign-in"></i>
              </a>
            <?php } ?>

          </span>
        </div>
      <?php } ?>
    <?php } else { ?>
      <div class="table-row clearfix">
        <span class="col-xs-12">
          <?php echo lang('courses_not_available_msg'); ?>
        </span>
      </div>
    <?php } ?>

  </div>
</div>
