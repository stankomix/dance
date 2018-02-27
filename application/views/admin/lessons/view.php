<section class="content-header">

  <div class="form-group">
    <a href="/admin/lessons" class="btn btn-primary">Lessons listing</a>
  </div>

  <h1>
    Lesson:
    <?php echo $course_types[$lesson['coursetype']]; ?>
    <?php echo $conf['days'][$lesson['courseday']]; ?>
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
            <?php echo time_dots($lesson['starttime']); ?>
            -
            <?php echo time_dots($lesson['endtime']); ?>
          </h3>

          <p class="text-muted text-center">
            <?php echo dmy_from_datetime($lesson['validfrom'], '-'); ?>
            -
            <?php echo dmy_from_datetime($lesson['validuntil'], '-'); ?>
          </p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Terminals:</b> <a class="pull-right"><?php echo $lesson['terminals']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Instructor:</b> <a class="pull-right"><?php echo $lesson['Instructor']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Num places:</b>
              <a class="pull-right">
                <?php echo $lesson['num_places'] != 0 ? $lesson['num_places'] : 'No limit.'; ?>
              </a>
            </li>
            <li class="list-group-item clearfix">
              <b>Renewal:</b>
              <a class="pull-right">
                <?php echo $conf['noyes'][$lesson['renewal']]; ?>
              </a>
            </li>
            <li class="list-group-item">
              <b>Active status</b> <a class="pull-right"><?php echo $conf['active_status'][$lesson['aktiv']]; ?></a>
            </li>
          </ul>

          <a href="/admin/lessons/edit/<?php echo $lesson['id']; ?>" class="btn btn-primary btn-block">
            <b>Edit</b>
          </a>

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
                <th>Joined date</th>
                <th>Waiting</th>
                <th>Is trial</th>
              </tr>
              </thead>
              <tbody>
              <?php if($lesson_persons !== false) { ?>
                <?php foreach($lesson_persons as $k => $person) { ?>
                  <tr>
                    <td>
                      <a href="/admin/users/view/<?php echo $person['kursteilnehmerid']; ?>">
                        <?php echo $person['Vorname']; ?>
                        <?php echo $person['Nachname']; ?>
                      </a>
                    </td>
                    <td>
                      <?php echo dmy_datetime_from_ymd_datetime($person['erfasstam']); ?>
                    </td>
                    <td>
                      <?php if($person['waiting'] == 1) { ?>
                        Yes
                        - since: <?php echo dmy_datetime_from_ymd_datetime($person['waiting_since']); ?>
                      <?php } else { ?>
                        No
                      <?php } ?>
                    </td>
                    <td><?php echo $conf['noyes'][$person['trial']] ?></td>
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
