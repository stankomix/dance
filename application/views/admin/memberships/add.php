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
          <h3 class="box-title">Add membership</h3>
        </div>

        <form action="/admin/memberships/create" method="post" enctype="multipart/form-data" role="form">
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
              <input type="text" id="membership-title" class="form-control" name="description" required value="" />
            </div>

            <div class="form-group">
              <label for="membership-promo">Promo description</label>
              <textarea id="membership-promo" class="form-control" required name="promodescription"></textarea>
            </div>

            <div class="form-group">
              <label for="based-on">Based on</label>
              <?php echo form_dropdown('based_on',$conf['based_on'],0, array('id' => 'based-on', 'class' => 'form-control')); ?>
            </div>
			 
			<div class="form-group">
              <label for="based-on">Course Type</label>
			  <?php 
			
			  $type_course = array();
				foreach($course_type as $data){
					$type_course[$data['coursetype']] = $data['coursetypedesc']; 
				}
			  
			  ?>
              <?php echo form_dropdown('coursetype',$type_course,0, array('id' => 'course-type', 'class' => 'form-control')); ?>
             </div>

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
