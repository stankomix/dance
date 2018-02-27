<section class="content-header">

  <div class="form-group">
    <a href="/admin/course_categories" class="btn btn-primary">Course categories listing</a>
  </div>

  <h1>
    Course category page
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">

          <h3 class="profile-username text-center">
            <?php echo $course_category['name']; ?>
          </h3>

          <a href="/admin/course_categories/edit/<?php echo $course_category['id']; ?>" class="btn btn-primary btn-block"><b>Edit</b></a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#courses-tab" data-toggle="tab">Courses</a></li>
        </ul>
        <div class="tab-content">

          <div class="active tab-pane" id="courses-tab">
            <table class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Course Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Interval</th>
                <th>Course type</th>
                <th>&nbsp;</th>
              </tr>
              </thead>
              <tbody>
              <?php if($courses !== false) { ?>
                <?php foreach($courses as $k => $course) { ?>
                  <tr>
                    <td><?php echo $course['id']; ?></td>
                    <td><a href="/admin/courses/view/<?php echo $course['id']; ?>"><?php echo $course['name']; ?></a></td>
                    <td><?php echo $course['description']; ?></td>
                    <td><?php echo dmy_from_ymd($course['startdate'], '-'); ?> - <?php echo dmy_from_ymd($course['enddate'], '-'); ?></td>
                    <td><?php echo $course['coursetypedesc']; ?></td>
                    <td>
                      <a href="/admin/courses/view/<?php echo $course['id']; ?>">
                        <i class="fa fa-eye"></i> view
                      </a>
                      <a href="/admin/courses/edit/<?php echo $course['id']; ?>">
                        <i class="fa fa-edit"></i> edit
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              <?php } ?>
              </tfoot>
            </table>
          </div>
          <!-- /.tab-pane -->

        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

</section>
