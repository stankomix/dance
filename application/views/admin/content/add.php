<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/content" class="btn btn-primary">Content listing</a>
      </div>
    </div>

    <div class="col-md-6">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add content form</h3>
        </div>

        <form action="/admin/content/add" method="post" enctype="multipart/form-data" role="form">
          <div class="box-body">

            <?php if(validation_errors() != '') { ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>Error(s) occured:</h4>
                <?php echo validation_errors(); ?>
              </div>
            <?php } ?>

            <div class="form-group">
              <label for="content-title">Title</label>
              <input type="text" id="content-title" class="form-control" name="title" placeholder="Enter title">
            </div>

            <div class="form-group">
              <label for="content-file">File</label>
              <input type="file" name="file" id="content-file">

              <p class="help-block">Allowed types: <?php echo $allowed_types; ?></p>
            </div>

          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>

      </div>

    </div>


  </div>
</section>
