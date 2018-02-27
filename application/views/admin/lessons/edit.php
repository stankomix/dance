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
          <h3 class="box-title">Edit lesson form</h3>
        </div>

        <form action="/admin/lessons/edit/<?php echo $lesson['id']; ?>" method="post" role="form">
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
              <?php echo form_dropdown('coursetype', $course_types, $lesson['coursetype'], array('id' => 'select-course-type', 'class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="course-day">Course day</label>
              <?php echo form_dropdown('courseday', $conf['days'], $lesson['courseday'], array('id' => 'course-day', 'class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="lesson-valid-from">Valid from</label>
              <input type="text" id="lesson-valid-from" class="form-control default-calendar" readonly="readonly" name="validfrom" value="<?php echo dmy_from_datetime($lesson['validfrom']); ?>" />
            </div>

            <div class="form-group">
              <label for="lesson-valid-until">Valid until</label>
              <input type="text" id="lesson-valid-until" class="form-control default-calendar" readonly="readonly" name="validuntil" value="<?php echo dmy_from_datetime($lesson['validuntil']); ?>" />
            </div>

            <div class="form-group">
              <label for="lesson-start">Start time</label>
              <input type="text" id="lesson-start" class="form-control" name="starttime" value="<?php echo $lesson['starttime']; ?>" />

              <p class="help-block">Ex: 800, 1430, 1845</p>
            </div>

            <div class="form-group">
              <label for="lesson-end">End time</label>
              <input type="text" id="lesson-end" class="form-control" name="endtime" value="<?php echo $lesson['endtime']; ?>" />

              <p class="help-block">Ex: 800, 1430, 1845</p>
            </div>

            <div class="form-group">
              <label for="lesson-terminals">Terminals</label>
              <input type="text" id="lesson-terminals" class="form-control" name="terminals" value="<?php echo $lesson['terminals']; ?>" />
            </div>

            <div class="form-group">
              <label for="lesson-instructor">Instructor</label>
              <input type="text" id="lesson-instructor" class="form-control" name="instructor" value="<?php echo $lesson['Instructor']; ?>" />
            </div>

            <div class="form-group">
              <label for="lesson-places">Num places</label>
              <input type="text" id="lesson-places" class="form-control" name="num_places" value="<?php echo $lesson['num_places']; ?>" />

              <p class="help-block">0 = unlimited</p>
            </div>

            <div class="form-group">
              <label for="lesson-renewal">Renewal</label>
              <?php echo form_dropdown('renewal', $conf['noyes'], $lesson['renewal'], array('id' => 'lesson-renewal', 'class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="lesson-active-status">Active status</label>
              <?php echo form_dropdown('aktiv', $conf['noyes'], $lesson['aktiv'], array('id' => 'lesson-active-status', 'class' => 'form-control')); ?>
            </div>

          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>

      </div>

    </div>

  </div>
</section>
