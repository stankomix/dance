<section class="content-header">

  <div class="form-group">
    <a href="/admin/memberships" class="btn btn-primary">Memberships listing</a>
  </div>

  <h1>
    Base membership page
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
            <?php echo $membership['Description']; ?>
          </h3>

          <p class="text-muted text-center"><?php echo $membership['Beschreibung']; ?></p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Price:</b> <a class="pull-right"><?php echo $membership['preis']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Days</b> <a class="pull-right"><?php echo $membership['abodays']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Course type:</b> <a class="pull-right"><?php echo $membership['coursetypedesc']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Based on:</b> <a class="pull-right"><?php echo $conf['based_on'][$membership['based_on']]; ?></a>
            </li>
          </ul>

          <a href="/admin/memberships/edit/<?php echo $membership['abotype']; ?>" class="btn btn-primary btn-block"><b>Edit</b></a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#image-tab" data-toggle="tab">Image</a></li>
          <li><a href="#user-memberships-tab" data-toggle="tab">User memberships</a></li>
        </ul>
        <div class="tab-content">

          <div class="active tab-pane" id="image-tab">
            <?php if(!empty($membership['filename'])) { ?>
              <img src="/assets/uploads/memberships/<?php echo $membership['filename']; ?>" />
            <?php } else { ?>
              No image.
            <?php } ?>
          </div>

          <div class="tab-pane" id="user-memberships-tab">
            <table class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Member</th>
                <th>Interval</th>
                <th>Cancelled</th>
                <th>Is trial</th>
              </tr>
              </thead>
              <tbody>
              <?php if($user_memberships !== false) { ?>
                <?php foreach($user_memberships as $k => $membership) { ?>
                  <tr>
                    <td>
                      <a href="/admin/users/view/<?php echo $membership['Kursteilnehmerid']; ?>">
                        <?php echo $membership['Vorname']; ?> <?php echo $membership['Nachname']; ?>
                      </a>
                    </td>
                    <td>
                      <?php echo dmy_from_datetime($membership['Validfrom'], '-'); ?>
                      -
                      <?php echo dmy_from_datetime($membership['Validuntil'], '-'); ?>
                    </td>
                    <td><?php echo $conf['noyes'][$membership['cancelled']]; ?></td>
                    <td><?php echo $conf['noyes'][$membership['trial']]; ?></td>
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
