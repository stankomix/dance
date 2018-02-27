<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/users" class="btn btn-primary">Member listing</a>
        <a href="/admin/users/view/<?php echo $user['Teilnehmerid']; ?>" class="btn btn-primary">Member profile</a>
      </div>
    </div>

    <div class="col-md-6">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit member</h3>
        </div>

        <form action="/admin/users/edit/<?php echo $user['Teilnehmerid']; ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="box-body">

            <?php if(validation_errors() != '') { ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>Error(s) occured:</h4>
                <?php echo validation_errors(); ?>
              </div>
            <?php } ?>

            <div class="form-group">
              <label for="user-note">Name:</label>
              <?php echo $user['Vorname']; ?> <?php echo $user['Nachname']; ?>
            </div>

            <div class="form-group">
              <label for="user-note">Email:</label>
              <?php echo $user['Email']; ?>
            </div>

            <div class="form-group">
              <label for="user-note">Notes:</label>
              <textarea id="user-note" class="form-control" name="Bemerkung"><?php echo $user['Bemerkung']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="user-type">Member type:</label>
              <?php echo form_dropdown('usertype',
                                        $conf['usertypes'],
                                        $user['usertype'],
                                        array('id' => 'user-type', 'class' => 'form-control'));
              ?>
            </div>

          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>

      </div>

    </div>

  </div>
</section>
