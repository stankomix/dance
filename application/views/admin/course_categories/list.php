<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/course_categories/add" class="btn btn-primary">Add</a>
      </div>
    </div>

    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Course categories list</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Course Id</th>
              <th>Name</th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php if($course_categories !== false) { ?>
              <?php foreach($course_categories as $k => $course_categ) { ?>
                <tr>
                  <td><?php echo $course_categ['id']; ?></td>
                  <td><?php echo $course_categ['name']; ?></td>
                  <td class="col-sm-3 col-md-2">
                    <a href="/admin/course_categories/view/<?php echo $course_categ['id']; ?>">
                      <i class="fa fa-eye"></i> view
                    </a>
                    <a href="/admin/course_categories/edit/<?php echo $course_categ['id']; ?>">
                      <i class="fa fa-edit"></i> edit
                    </a>
                    <a href="/admin/course_categories/delete/<?php echo $course_categ['id']; ?>">
                      <i class="fa fa-close"></i> delete
                    </a>
                  </td>
                </tr>
              <?php } ?>
            <?php } ?>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col -->
  </div>
</section>
