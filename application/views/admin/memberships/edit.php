<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/memberships" class="btn btn-primary">Base memberships listing</a>
      </div>
    </div>

    <div class="col-md-6">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit membership</h3>
        </div>

        <form action="/admin/memberships/edit/<?php echo $membership['abotype']; ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="box-body">

            <?php if(validation_errors() != '') { ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>Error(s) occured:</h4>
                <?php echo validation_errors(); ?>
              </div>
            <?php } ?>

            <div class="form-group">
              <label for="membership-title">Title</label>
              <input type="text" id="membership-title" class="form-control" name="description" value="<?php echo $membership['Description']; ?>" />
            </div>

            <div class="form-group">
              <label for="membership-promo">Promo description</label>
              <textarea id="membership-promo" class="form-control" name="promodescription"><?php echo $membership['promodescription']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="based-on">Based on</label>
              <?php echo form_dropdown('based_on', $conf['based_on'], $membership['based_on'], array('id' => 'based-on', 'class' => 'form-control')); ?>
            </div>

            <?php if(!empty($membership['filename'])) { ?>
              <div class="form-group">
                <label>Current image</label>
                <img src="/assets/uploads/memberships/<?php echo $membership['filename']; ?>" />
              </div>
            <?php } ?>

            <div class="form-group">
              <label for="image-file">Upload image</label>
              <input type="file" name="image" id="image-file">

              <p class="help-block">Allowed types: jpg,png,gif</p>
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
