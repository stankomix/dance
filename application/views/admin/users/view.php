<section class="content-header">
  <div class="form-group">
    <a href="/admin/users" class="btn btn-primary">Member listing</a>
  </div>

  <h1>
    Member Profile
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="/assets/admin/dist/img/person256.png" alt="User profile picture">

          <h3 class="profile-username text-center"><?php echo $user['Vorname']; ?> <?php echo $user['Nachname']; ?> (<?php echo $user['Anrede']; ?>)</h3>

          <p class="text-muted text-center"><?php echo $conf['usertypes'][$user['usertype']]; ?></p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Birthdate:</b> <a class="pull-right"><?php echo dmy_from_datetime($user['Geburtsdatum'], '-'); ?></a>
            </li>
            <li class="list-group-item">
              <b>Language</b> <a class="pull-right"><?php echo $user['language']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Mobile #:</b> <a class="pull-right"><?php echo $user['Mobiltelefon']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Person type:</b> <a class="pull-right"><?php echo $user['Persontyp']; ?></a>
            </li>
          </ul>

          <a href="/admin/users/edit/<?php echo $user['Teilnehmerid']; ?>" class="btn btn-primary btn-block"><b>Edit</b></a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">About</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

          <p class="text-muted"><?php echo $user['Strasse']; ?></p>
          <p class="text-muted"><?php echo $user['Ort']; ?></p>
          <p class="text-muted"><?php echo $user['PLZ']; ?></p>

          <hr>

          <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

          <p><?php echo $user['Bemerkung']; ?></p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#memberships-tab" data-toggle="tab">Memberships</a></li>
          <li><a href="#courses-tab" data-toggle="tab">Courses</a></li>
          <li><a href="#lessons-tab" data-toggle="tab">Lessons</a></li>
          <li><a href="#content-tab" data-toggle="tab">Content</a></li>
          <li><a href="#messages-tab" data-toggle="tab">Messages</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="memberships-tab">
            <table class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Membership Id</th>
                <th>Desctiption</th>
                <th>Interval</th>
                <th>Course type</th>
                <th>Cancelled</th>
                <th>Is trial</th>
              </tr>
              </thead>
              <tbody>
              <?php if($user_memberships !== false) { ?>
                <?php foreach($user_memberships as $k => $membership) { ?>
                  <tr>
                    <td><?php echo $membership['Teilnahmeid']; ?></td>
                    <td><?php echo $membership['Description']; ?></td>
                    <td>
                      <?php echo dmy_from_datetime($membership['Validfrom'], '-'); ?>
                      -
                      <?php echo dmy_from_datetime($membership['Validuntil'], '-'); ?>
                    </td>
                    <td><?php echo $membership['coursetypedesc']; ?></td>
                    <td><?php echo $conf['noyes'][$membership['cancelled']]; ?></td>
                    <td><?php echo $conf['noyes'][$membership['trial']]; ?></td>
                  </tr>
                <?php } ?>
              <?php } ?>
              </tfoot>
            </table>
          </div>

          <div class="tab-pane" id="courses-tab">
            <table class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Course Id</th>
                <th>Name</th>
                <th>Desctiption</th>
                <th>Course type</th>
                <th>Waiting</th>
                <th>Is trial</th>
              </tr>
              </thead>
              <tbody>
              <?php if($user_courses !== false) { ?>
                <?php foreach($user_courses as $k => $course) { ?>
                  <tr>
                    <td><?php echo $course['id']; ?></td>
                    <td><a href="/admin/courses/view/<?php echo $course['id']; ?>"><?php echo $course['name']; ?></a></td>
                    <td><?php echo $course['description']; ?></td>
                    <td><?php echo $course['coursetypedesc']; ?></td>
                    <td><?php echo $conf['noyes'][$course['waiting']]; ?></td>
                    <td><?php echo $conf['noyes'][$course['trial']]; ?></td>
                  </tr>
                <?php } ?>
              <?php } ?>
              </tfoot>
            </table>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="lessons-tab">
            <table class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Lesson Id</th>
                <th>Lesson</th>
                <th>Start time</th>
                <th>Course type</th>
                <th>Waiting</th>
                <th>Is trial</th>
              </tr>
              </thead>
              <tbody>
              <?php if($user_lessons !== false) { ?>
                <?php foreach($user_lessons as $k => $lesson) { ?>
                  <tr>
                    <td><?php echo $lesson['id']; ?></td>
                    <td>
                      <?php echo $conf['days'][$lesson['courseday']]; ?>
                      <?php echo dmy_from_datetime($lesson['validfrom'], '-'); ?>
                    </td>
                    <td><?php echo time_dots($lesson['starttime']); ?></td>
                    <td><?php echo $lesson['coursetypedesc']; ?></td>
                    <td><?php echo $conf['noyes'][$lesson['waiting']]; ?></td>
                    <td><?php echo $conf['noyes'][$lesson['trial']]; ?></td>
                  </tr>
                <?php } ?>
              <?php } ?>
              </tfoot>
            </table>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="content-tab">
            <table class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Content Id</th>
                <th>Title</th>
                <th>Type</th>
                <th>Date</th>
                <th>&nbsp;</th>
              </tr>
              </thead>
              <tbody>
              <?php if($user_contents !== false) { ?>
                <?php foreach($user_contents as $k => $content) { ?>
                  <tr>
                    <td><?php echo $content['id']; ?></td>
                    <td><?php echo $content['title']; ?></td>
                    <td><?php echo $content['type']; ?></td>
                    <td><?php echo dmy_from_ymd($content['created_date']); ?></td>
                    <td>
                      <a href="/admin/content/view/<?php echo $content['id']; ?>">
                        <i class="fa fa-eye"></i> view
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              <?php } ?>
              </tfoot>
            </table>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="messages-tab">

            <form action="/admin/users/view/<?php echo $user['Teilnehmerid']; ?>" method="post" class="form-horizontal">
              <div class="form-group">
                <div class="col-sm-9">
                  <textarea class="form-control" placeholder="Message..." name="usermessage"></textarea>
                </div>
                <div class="col-sm-3">
                  <button type="submit" class="btn btn-success pull-right btn-block">Add</button>
                </div>
              </div>
            </form>

            <?php if($user_messages !== false) { ?>
              <?php foreach($user_messages as $k => $message) { ?>
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="/assets/admin/dist/img/person256.png" alt="User Image">
                    <span class="username">
                      <a href="/admin/users/view/<?php echo $message['created_by']; ?>">
                        <?php echo $message['created_by_firstname']; ?>
                        <?php echo $message['created_by_lastname']; ?>
                      </a>
                    </span>
                    <?php if($message['status'] == 0) { ?>
                      <a class="btn btn-primary pull-right" href="/admin/users/set-message-status/<?php echo $message['id']; ?>/1">
                        Re-open
                      </a>
                    <?php } else { ?>
                      <a class="btn btn-primary pull-right" href="/admin/users/set-message-status/<?php echo $message['id']; ?>/0">
                        Close
                      </a>
                    <?php } ?>
                    <span class="description"><?php echo dmy_datetime_from_ymd_datetime($message['created_at']); ?></span>
                  </div>
                  <p>
                    <?php echo $message['message']; ?>
                  </p>
                  <div class="col-xs-3 col-xs-2">
                    <span class="label <?php echo $message['status'] == 0 ? 'bg-aqua' : 'btn-success'; ?>">
                      <?php echo $conf['message_status_types'][$message['status']]; ?>
                    </span>
                  </div>

                  <form action="/admin/users/view/<?php echo $user['Teilnehmerid']; ?>" method="post" class="col-xs-12 form-horizontal">
                    <input type="hidden" name="parentid" value="<?php echo $message['id']; ?>" />
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <textarea class="form-control" placeholder="Answer..." name="usermessage"></textarea>
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-success pull-right btn-block">Add answer</button>
                      </div>
                    </div>
                  </form>

                  <?php if($message['answers'] != false) { ?>
                    <div class="col-xs-12">
                      <h4>Answers:</h4>
                      <?php foreach($message['answers'] as $k => $message) { ?>
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="/assets/admin/dist/img/person256.png" alt="User Image">
                          <span class="username">
                            <a href="/admin/users/view/<?php echo $message['created_by']; ?>">
                              <?php echo $message['created_by_firstname']; ?>
                              <?php echo $message['created_by_lastname']; ?>
                            </a>
                          </span>
                          <span class="description"><?php echo dmy_datetime_from_ymd_datetime($message['created_at']); ?></span>
                        </div>
                        <p>
                          <?php echo $message['message']; ?>
                        </p>
                      <?php } ?>
                    </div>
                  <?php } ?>

                </div>
              <?php } ?>
            <?php } ?>
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
