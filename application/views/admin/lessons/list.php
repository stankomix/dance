<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/lessons/add" class="btn btn-primary">Add</a>
      </div>
    </div>

    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lessons list</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Lesson</th>
              <th>Places</th>
              <th>Renewal</th>
              <th>Status</th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php if($lessons !== false) { ?>
              <?php foreach($lessons as $k => $lesson) { ?>
                <tr>
                  <td><?php echo $lesson['id']; ?></td>
                  <td>
                    <a href="/admin/lessons/view/<?php echo $lesson['id']; ?>">
                      <?php echo $course_types[$lesson['coursetype']]; ?>
                      <?php echo $conf['days'][$lesson['courseday']]; ?>
                      <?php echo time_dots($lesson['starttime']); ?>
                    </a>
                  </td>
                  <td>
                    <?php echo $lesson['num_places'] != 0 ? $lesson['num_places'] : 'No limit.'; ?>
                    (<?php echo $lesson['booked_places']; ?> booked)
                  </td>
                  <td><?php echo $conf['noyes'][$lesson['renewal']]; ?></td>
                  <td><?php echo $conf['active_status'][$lesson['aktiv']]; ?></td>
                  <td>
                    <a href="/admin/lessons/view/<?php echo $lesson['id']; ?>">
                      <i class="fa fa-eye"></i> view
                    </a>
                    <a href="/admin/lessons/edit/<?php echo $lesson['id']; ?>">
                      <i class="fa fa-edit"></i> edit
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
