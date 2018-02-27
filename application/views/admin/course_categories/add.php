<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/course_categories" class="btn btn-primary">Course categories listing</a>
      </div>
    </div>

    <div class="col-md-6">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add course category</h3>
        </div>

        <form action="/admin/course_categories/add" method="post" role="form">
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

          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>

      </div>

    </div>

  </div>
</section>
