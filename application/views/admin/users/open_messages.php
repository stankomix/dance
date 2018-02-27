<section class="content-header">
  <div class="form-group">
    <a href="/admin/users/messages" class="btn btn-primary">View all</a>
  </div>
  <h1>
    Open messages
  </h1>
</section>

<section class="content">
  <div class="row">

    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Member</th>
              <th>Created at</th>
              <th>Created By</th>
              <th>Updated</th>
              <th>Type</th>
              <th>Status</th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php if($messages !== false) { ?>
              <?php foreach($messages as $k => $message) { ?>
                <tr>
                  <td>
                    <a href="/admin/users/view/<?php echo $message['person']; ?>">
                      <?php echo $message['member_firstname']; ?>
                      <?php echo $message['member_lastname']; ?>
                    </a>
                  </td>
                  <td><?php echo dmy_datetime_from_ymd_datetime($message['created_at']); ?></td>
                  <td>
                    <a href="/admin/users/view/<?php echo $message['created_by']; ?>">
                      <?php echo $message['created_by']; ?>
                    </a>
                  </td>
                  <td>
                    <?php if($message['updated_by'] != 0) { ?>
                      <?php echo dmy_datetime_from_ymd_datetime($message['updated_at']); ?>
                       -
                      <a href="/admin/users/view/<?php echo $message['updated_by']; ?>">
                        <?php echo $message['updated_by']; ?>
                      </a>
                      <?php } else { ?>
                        Not yet.
                    <?php } ?>
                  </td>
                  <td>
                    <?php if($message['parentid'] == 0) { ?>
                      Question
                    <?php } else { ?>
                      Answer
                    <?php } ?>
                  </td>
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
    <!-- /.col -->
  </div>
</section>
