<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/courses/add" class="btn btn-primary">Add</a>
      </div>
    </div>

    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Courses list</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Name</th>
              <th>Interval</th>
              <th>Course type</th>
              <th>Partner needed</th>
              <th>M / F</th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php if($courses !== false) { ?>
              <?php foreach($courses as $k => $course) { ?>
                <tr>
                  <td><a href="/admin/courses/view/<?php echo $course['id']; ?>"><?php echo $course['name']; ?></a></td>
                  <td><?php echo dmy_from_ymd($course['startdate'], '-'); ?> - <?php echo dmy_from_ymd($course['enddate'], '-'); ?></td>
                  <td><?php echo $course['coursetypedesc']; ?></td>
                  <td>
                    <?php echo $conf['noyes'][$course['needpartner']]; ?>
                    <?php if($course['needpartner'] == 1) { ?>
                      -
                      <?php if($course['num_males'] == $course['num_females']) { ?>
                        Gender balanced
                      <?php } elseif($course['num_males'] > $course['num_females']) { ?>
                        <?php echo ($course['num_males'] - $course['num_females']); ?> women needed
                      <?php } elseif($course['num_males'] < $course['num_females']) { ?>
                        <?php echo ($course['num_females'] - $course['num_males']); ?> men needed
                      <?php } ?>
                    <?php } ?>
                  </td>
                  <td><?php echo $course['num_males']; ?> / <?php echo $course['num_females']; ?></td>
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
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col -->
  </div>
</section>
