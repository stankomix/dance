<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/lessons" class="btn btn-primary">Lessons listing</a>
      </div>
    </div>

    <div class="col-md-6">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add lesson form</h3>
        </div>

        <form action="/admin/lessons/add" method="post" role="form">
          <div class="box-body">

            <?php if(validation_errors() != '') { ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>Error(s) occured:</h4>
                <?php echo validation_errors(); ?>
              </div>
            <?php } ?>

            <div class="form-group">
              <label for="select-course-type">Course type</label>
              <?php echo form_dropdown('coursetype', $course_types, set_value('course_type'), array('id' => 'select-course-type', 'class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="course-day">Course day</label>
              <?php echo form_dropdown('courseday', $conf['days'], set_value('courseday'), array('id' => 'course-day', 'class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="lesson-valid-from">Valid from</label>
              <input type="text" id="lesson-valid-from" class="form-control default-calendar" readonly="readonly" name="validfrom" value="<?php echo set_value('validfrom'); ?>" />
            </div>

            <div class="form-group">
              <label for="lesson-valid-until">Valid until</label>
              <input type="text" id="lesson-valid-until" class="form-control default-calendar" readonly="readonly" name="validuntil" value="<?php echo set_value('validuntil'); ?>" />
            </div>

            <div class="form-group">
              <label for="lesson-start">Start time</label>
              <div>
                <span class="col-xs-6">
                  <?php echo form_dropdown('starthour', $hours_list, set_value('starthour'), array('class' => 'form-control')); ?>
                </span>
                <span class="col-xs-6">
                <?php echo form_dropdown('startminute', $minutes_list, set_value('startminute'), array('class' => 'form-control')); ?>
                </span>
              </div>
            </div>

            <div class="form-group">
              <label for="lesson-end">End time</label>
              <div>
                <span class="col-xs-6">
                  <?php echo form_dropdown('endhour', $hours_list, set_value('endhour'), array('class' => 'form-control')); ?>
                </span>
                <span class="col-xs-6">
                <?php echo form_dropdown('endminute', $minutes_list, set_value('endminute'), array('class' => 'form-control')); ?>
                </span>
              </div>
            </div>

            <div class="form-group">
              <label for="lesson-terminals">Terminals</label>
              <input type="text" id="lesson-terminals" class="form-control" name="terminals" value="<?php echo set_value('terminals'); ?>" />
            </div>

            <div class="form-group">
              <label for="lesson-instructor">Instructor</label>
              <input type="text" id="lesson-instructor" class="form-control" name="instructor" value="<?php echo set_value('instructor'); ?>" />
            </div>

            <div class="form-group">
              <label for="lesson-places">Num places</label>
              <input type="text" id="lesson-places" class="form-control" name="num_places" value="<?php echo set_value('num_places'); ?>" />

              <p class="help-block">0 = unlimited</p>
            </div>

            <div class="form-group">
              <label for="lesson-renewal">Renewal</label>
              <?php echo form_dropdown('renewal', $conf['noyes'], set_value('renewal'), array('id' => 'lesson-renewal', 'class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="lesson-active-status">Active status</label>
              <?php echo form_dropdown('aktiv', $conf['noyes'], set_value('aktiv'), array('id' => 'lesson-active-status', 'class' => 'form-control')); ?>
            </div>

          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>

      </div>

    </div>

  </div>
</section>
