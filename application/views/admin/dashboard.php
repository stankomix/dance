<section class="content-header">
  <h1>
    Dashboard
  </h1>
</section>

<section class="content">
  <div class="row">

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo $num_members; ?></h3>
          <p>Members</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="/admin/users" class="small-box-footer">View all <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $num_open_messages; ?></h3>
          <p>Open messages</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="/admin/users/open-messages" class="small-box-footer">View all <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo $num_content_files; ?></h3>
          <p>Content files</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="/admin/content" class="small-box-footer">View all <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Latest members</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Email</th>
              <th>Name</th>
              <th>Type</th>
              <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <?php if($latest_members !== false) { ?>
              <?php foreach($latest_members as $k => $user) { ?>
                <tr>
                  <td>
                    <a href="/admin/users/view/<?php echo $user['Teilnehmerid']; ?>">
                      <?php echo $user['Email']; ?>
                    </a>
                  </td>
                  <td><?php echo $user['Vorname']; ?> <?php echo $user['Nachname']; ?></td>
                  <td><?php echo $conf['usertypes'][$user['usertype']]; ?></td>
                  <td><?php echo dmy_datetime_from_ymd_datetime($user['Startam']); ?></td>
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

    <div class="col-xs-12 col-sm-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Latest content files</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Title</th>
              <th>Type</th>
              <th>Date</th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php if($latest_contents !== false) { ?>
              <?php foreach($latest_contents as $k => $content) { ?>
                <tr>
                  <td><?php echo $content['title']; ?></td>
                  <td><?php echo $content['type']; ?></td>
                  <td><?php echo dmy_from_ymd($content['created_date'], '-'); ?></td>
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
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Latest open messages</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Member</th>
              <th>Updated at</th>
              <th>Status</th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php if($latest_open_messages !== false) { ?>
              <?php foreach($latest_open_messages as $k => $message) { ?>
                <tr>
                  <td>
                    <a href="/admin/users/view/<?php echo $message['person']; ?>">
                      <?php echo $message['member_firstname']; ?>
                      <?php echo $message['member_lastname']; ?>
                    </a>
                  </td>
                  <td><?php echo dmy_datetime_from_ymd_datetime($message['updated_at']); ?></td>
                  <td><?php echo $conf['message_status_types'][$message['status']]; ?></td>
                  <td>
                    <?php if($message['status'] == 0) { ?>
                      <a class="btn btn-primary" href="/admin/users/set-message-status/<?php echo $message['id']; ?>/1">
                        Re-open
                      </a>
                    <?php } else { ?>
                      <a class="btn btn-primary" href="/admin/users/set-message-status/<?php echo $message['id']; ?>/0">
                        Close
                      </a>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td colspan="7" style="padding-bottom: 50px;">
                    <?php echo $message['message']; ?>
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
  </div>

</section>
