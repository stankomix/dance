<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/content" class="btn btn-primary">Content listing</a>
      </div>
    </div>

    <div class="col-md-12">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">View content file</h3>
        </div>

          <div class="box-body">
            <div class="form-group">
              <label>Title: <?php echo $content['title']; ?></label>
            </div>

            <div class="form-group">
              <label>Type: <?php echo $content['type']; ?></label>
              <!--<p class="help-block">other text</p>-->
            </div>

            <div class="form-group">
              <label>File name: <?php echo $content['file_name']; ?></label>
            </div>

            <div class="form-group">
              <label>Date: <?php echo dmy_from_ymd($content['created_date'], '-'); ?></label>
            </div>

            <div class="form-group">
              <label>Extension: <?php echo $content['extension']; ?></label>
            </div>

            <div class="form-group">
              <label>Preview: </label>
              <?php switch($content['type']) {
                 case 'image': ?>
                  <img src="/assets/uploads/<?php echo $content['file_name']; ?>" />
                <?php break; ?>
                <?php case 'audio': ?>
                <audio controls>
                  <source src="/assets/uploads/<?php echo $content['file_name']; ?>" type="audio/<?php echo $conf['filetypes'][$content['extension']]['file_type']; ?>">
                  Your browser does not support the audio element.
                </audio>
                <?php break; ?>
                <?php case 'video': ?>
                <video width="320" height="240" controls>
                  <source src="/assets/uploads/<?php echo $content['file_name']; ?>" type="video/<?php echo $content['extension']; ?>">
                  Your browser does not support the video tag.
                </video>
                <?php break; ?>
                <?php case 'document': ?>
                  <a href="/assets/uploads/<?php echo $content['file_name']; ?>" target="_blank">Open in new tab</a>
                <?php break; ?>
              <?php } ?>
            </div>

          </div>

        </form>

      </div>

    </div>

  </div>
</section>
