<section class="content-header">

  <div class="form-group">
    <a href="/admin/courses" class="btn btn-primary">Courses listing</a>
  </div>

  <h1>
    Course: <?php echo $course['name']; ?>
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
            <?php echo dmy_from_ymd($course['startdate'], '-'); ?>
            -
            <?php echo dmy_from_ymd($course['enddate'], '-'); ?>
          </h3>

          <p class="text-muted text-center"><?php echo $course['description']; ?></p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Start date:</b> <a class="pull-right"><?php echo dmy_from_ymd($course['startdate'], '-'); ?></a>
            </li>
            <li class="list-group-item">
              <b>Type:</b> <a class="pull-right"><?php echo $course_types[$course['type']]; ?></a>
            </li>
            <li class="list-group-item">
              <b>Category:</b>
              <a class="pull-right">
                <?php echo isset($course_categories[$course['categoryid']]) ? $course_categories[$course['categoryid']] : 'None'; ?>
              </a>
            </li>
            <li class="list-group-item clearfix">
              <b>Membership:</b>
              <a class="pull-right">
                <?php echo isset($abo_types[$course['abotype']]) ? $abo_types[$course['abotype']] : 'None'; ?>
              </a>
            </li>
            <li class="list-group-item">
              <b>Reservation</b> <a class="pull-right"><?php echo $conf['noyes'][$course['reservation']]; ?></a>
            </li>
            <li class="list-group-item">
              <b>Based on:</b> <a class="pull-right"><?php echo $conf['based_on'][$course['based_on']]; ?></a>
            </li>
            <li class="list-group-item">
              <b>Num places:</b> <a class="pull-right"><?php echo $course['num_places']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Partner needed:</b> <a class="pull-right"><?php echo $conf['noyes'][$course['needpartner']]; ?></a>
            </li>
            <?php if($course['needpartner'] == 1) { ?>
              <li class="list-group-item">
                <b>Partner balance:</b>
                <a class="pull-right">
                  <?php if($course['num_males'] == $course['num_females']) { ?>
                    Gender balanced
                  <?php } elseif($course['num_males'] > $course['num_females']) { ?>
                    <?php echo ($course['num_males'] - $course['num_females']); ?> women needed
                  <?php } elseif($course['num_males'] < $course['num_females']) { ?>
                    <?php echo ($course['num_females'] - $course['num_males']); ?> men needed
                  <?php } ?>
                </a>
              </li>
            <?php } ?>
            <li class="list-group-item">
              <b>Enrolled men:</b> <a class="pull-right"><?php echo $course['num_males']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Enrolled women:</b> <a class="pull-right"><?php echo $course['num_females']; ?></a>
            </li>
          </ul>

          <a href="/admin/courses/edit/<?php echo $course['id']; ?>" class="btn btn-primary btn-block"><b>Edit</b></a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#persons-tab" data-toggle="tab">Persons</a></li>
        </ul>
        <div class="tab-content">

          <div class="active tab-pane" id="persons-tab">
            <table class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>User</th>
                <th>Created</th>
                <th>Waiting</th>
                <th>Is trial</th>
              </tr>
              </thead>
              <tbody>
              <?php if($course_persons !== false) { ?>
                <?php foreach($course_persons as $k => $person) { ?>
                  <tr>
                    <td><a href="/admin/users/view/<?php echo $person['person']; ?>"><?php echo $person['Email']; ?></a></td>
                    <td><?php echo $person['created']; ?></td>
                    <td>
                      <?php if($person['waiting'] == 1) { ?>
                        Yes
                        - since: <?php echo dmy_datetime_from_ymd_datetime($person['waiting_since']); ?>
                      <?php } else { ?>
                        No
                      <?php } ?>
                    </td>
                    <td><?php echo $conf['noyes'][$person['trial']]; ?></td>
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
