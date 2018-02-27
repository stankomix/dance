<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/courses" class="btn btn-primary">Courses listing</a>
      </div>
    </div>

    <div class="col-md-6">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add course form</h3>
        </div>

        <form action="/admin/courses/add" method="post" role="form">
          <div class="box-body">

            <?php if(validation_errors() != '') { ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>Error(s) occured:</h4>
                <?php echo validation_errors(); ?>
              </div>
            <?php } ?>

            <div class="form-group">
              <label for="course-name">Name</label>
              <input type="text" id="course-name" class="form-control" name="name" value="<?php echo set_value('name'); ?>" />
            </div>

            <div class="form-group">
              <label for="course-desc">Description</label>
              <input type="text" id="course-desc" class="form-control" name="description" value="<?php echo set_value('description'); ?>" />
            </div>

            <div class="form-group">
              <label for="course-start">Start date</label>
              <input type="text" id="course-start" class="form-control default-calendar" readonly="readonly" name="startdate" value="<?php echo set_value('startdate'); ?>" />
            </div>

            <div class="form-group">
              <label for="course-end">End date</label>
              <input type="text" id="course-end" class="form-control default-calendar" readonly="readonly" name="enddate" value="<?php echo set_value('enddate'); ?>" />
            </div>

            <div class="form-group">
              <label for="select-course-type">Course type</label>
              <?php echo form_dropdown('type', $course_types, set_value('course_type'), array('id' => 'select-course-type', 'class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="select-course-type">Course category</label>
              <?php echo form_dropdown('category', $course_categories, set_value('category'), array('class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="course-reservation">Membership</label>
              <?php echo form_dropdown('abotype', $abo_types, set_value('abotype'), array('class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="course-reservation">Reservation</label>
              <?php echo form_dropdown('reservation', $conf['noyes'], set_value('reservation'), array('id' => 'course-reservation', 'class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="course-based-on">Based on</label>
              <?php echo form_dropdown('based_on', $conf['based_on'], set_value('based_on'), array('id' => 'course-based-on', 'class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="course-places">Num places</label>
              <input type="text" id="course-places" class="form-control" name="num_places" value="<?php echo set_value('num_places'); ?>" />

              <p class="help-block">0 = unlimited</p>
            </div>

            <div class="form-group">
              <label for="course-partner">Partner needed</label>
              <?php echo form_dropdown('needpartner', $conf['noyes'], set_value('needpartner'), array('id' => 'course-partner', 'class' => 'form-control')); ?>
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
