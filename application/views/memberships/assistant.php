<div class="row">
  <div class="box max-width clearfix">
    <div id="assistant-container">
      <h1 class="h1-title"><?php echo lang('buy_membership'); ?></h1>

      <div class='error_msg'>
        <?php
          echo validation_errors();
          if (isset($error_message)) {
            echo $error_message;
          }
        ?>
      </div>

      <div id="assistant" class="clearfix">

        <div id="assistant-tabs" class="clearfix">
          <span class="assistant-tab <?php if($page == 1) { echo 'assistant-tab-active'; } elseif($page > 1) { echo 'assistant-tab-completed'; } ?>">
            1: <?php echo lang('membership'); ?>
          </span>
          <span <?php if($page != 2) { echo 'style="display: none;"'; } ?> class="assistant-tab <?php if($page == 2) { echo 'assistant-tab-active'; } elseif($page > 2) { echo 'assistant-tab-completed'; } ?>">
            2: <?php echo lang('course'); ?>
          </span>
          <span id="step-3-tablink" <?php if($page < 3) { echo 'style="display: none;"'; } ?> class="assistant-tab <?php echo $page == 3 ? 'assistant-tab-active' : ''; ?>">
            2: <?php echo lang('lessons'); ?>
          </span>
        </div>

        <div id="assistant-form" class="clearfix">
          <?php echo form_open('/members/memberships/assistant'); ?>

          <?php if($page == 1) { ?>

            <div class="input-group col-xs-12 col-sm-5">
              <label><?php echo lang('select_course_type'); ?>:</label>
              <?php echo form_dropdown('course_type', $course_types, set_value('course_type'), array('id' => 'select-course-type')); ?>
            </div>

            <div class="input-group col-xs-12">
              <label><?php echo lang('select_product'); ?>:</label>
              <div id="select-abo-type"></div>
              <?php //echo form_dropdown('abo_type', array(), false, array('id' => 'select-abo-type')); ?>
            </div>

            <div class="input-group col-xs-12">
              <button id="continue-button" class="button" type="submit" name="continue" value="1">
                <!-- <?php //echo lang('select_course'); ?> -->
                <?php echo lang('continue'); ?>
                <i class="fa fa-arrow-right"></i>
              </button>
              <!--<button id="submit-button" class="button" type="submit" name="submit" value="1">
                <i class="fa fa-check"></i>
                <?php echo lang('continue'); ?>
              </button>
            -->
            </div>

          <?php } ?>

          <?php if($page == 2) { ?>

            <div class="input-group col-xs-12 col-sm-5">
              <label><?php echo lang('start_date'); ?>:</label>
              <input class="future-calendar-yesterday" readonly="readonly" type="text" name="start_date" value="" />
            </div>

            <div class="input-group col-xs-12">
              <label><?php echo lang('select_course'); ?>:</label>
              <?php echo form_dropdown('course', $courses_list, set_value('course'), array('id' => 'select-course')); ?>
            </div>

            <div class="input-group col-xs-12">
              <button id="back-button" class="button" type="submit" name="back" value="1">
                <i class="fa fa-arrow-left"></i>
                <?php echo lang('back'); ?>
              </button>
              <button id="submit-button" class="button" type="submit" name="submit" value="1">
                <i class="fa fa-check"></i>
                <?php echo lang('submit'); ?>
              </button>
            </div>

          <?php } ?>

          <?php if($page == 3) { ?>

            <div class="input-group col-xs-12 col-sm-5">
              <label><?php echo lang('start_date'); ?>:</label>
              <input class="future-calendar-yesterday" readonly="readonly" type="text" name="start_date" value="" />
            </div>

            <div class="input-group col-xs-12">
              <label><?php echo lang('select_lessons'); ?>:</label>

              <?php if(!empty($lessons_list)) { ?>
                <?php foreach($lessons_list as $k => $lesson) { ?>

                  <?php if(isset($lesson['enrolled']) && $lesson['enrolled'] == false) { ?>
                    <div class="table-row clearfix">
                      <span class="col-xs-8">

                        <?php echo lang('days')[$lesson['courseday']]; ?>
                         -
                        <?php echo dmy_from_datetime($lesson['validfrom'], '-'); ?>
                        <?php echo $lesson['coursetypedesc']; ?>

                      </span>

                      <span class="col-xs-3"><?php echo lang('start_time'); ?>: <?php echo time_dots($lesson['starttime']); ?></span>

                      <span class="col-xs-1">
                        <input type="checkbox" name="lessons[]" value="<?php echo $lesson['id'] ?>" />
                      </span>
                    </div>
                  <?php } ?>

                <?php } ?>
              <?php } else { ?>
                <?php echo lang('no_lessons_add_membership_msg'); ?>
              <?php } ?>

            </div>

            <div class="input-group col-xs-12">
              <button id="back-button" class="button" type="submit" name="back" value="1">
                <i class="fa fa-arrow-left"></i>
                <?php echo lang('back'); ?>
              </button>
              <button id="membership-only-button" class="button" type="submit" name="membership-only" value="1">
                <i class="fa fa-check"></i>
                <?php echo lang('add_membership_only'); ?>
              </button>
              <button id="submit-button" class="button" type="submit" name="submit" value="1">
                <i class="fa fa-check"></i>
                <?php echo lang('add_lessons'); ?>
              </button>
            </div>
          <?php } ?>

          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
