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
          <h3 class="box-title">Edit course form</h3>
        </div>

        <form action="/admin/courses/edit/<?php echo $course['id']; ?>" method="post" role="form">
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
              <input type="text" id="course-name" class="form-control" name="name" value="<?php echo $course['name']; ?>" />
            </div>

            <div class="form-group">
              <label for="course-desc">Description</label>
              <input type="text" id="course-desc" class="form-control" name="description" value="<?php echo $course['description']; ?>" />
            </div>

            <div class="form-group">
              <label for="course-reservation">Course category</label>
              <?php echo form_dropdown('category', $course_categories, $course['categoryid'], array('class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="course-reservation">Membership</label>
              <?php echo form_dropdown('abotype', $abo_types, $course['abotype'], array('class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="course-reservation">Reservation</label>
              <?php echo form_dropdown('reservation', $conf['noyes'], $course['reservation'], array('id' => 'course-reservation', 'class' => 'form-control')); ?>
            </div>

            <div class="form-group">
              <label for="course-places">Num places</label>
              <input type="text" id="course-places" class="form-control" name="num_places" value="<?php echo $course['num_places']; ?>" />

              <p class="help-block">0 = unlimited</p>
            </div>

            <div class="form-group">
              <label for="course-partner">Partner needed</label>
              <?php echo form_dropdown('needpartner', $conf['noyes'], $course['needpartner'], array('id' => 'course-partner', 'class' => 'form-control')); ?>
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
