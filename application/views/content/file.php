<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title"><?php echo lang('file'); ?>: <?php echo $content['title']; ?></h1>

    <div class="side-table clearfix">

      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4">
          <a class="button float-left" href="/members/content">
            <i class="fa fa-arrow-left"></i>
            <?php echo lang('content_files'); ?>
          </a>
        </span>
        <span class="side-table-right col-xs-12 col-sm-8">

        </span>
      </div>

      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('type'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo $content['type']; ?></span>
      </div>

      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('date'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo dmy_from_ymd($content['created_date'], '-'); ?></span>
      </div>

      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('file'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8">
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
            <video width="100%" controls>
              <source src="/assets/uploads/<?php echo $content['file_name']; ?>" type="video/<?php echo $content['extension']; ?>">
              Your browser does not support the video tag.
            </video>
            <?php break; ?>
            <?php case 'document': ?>
              <a href="/assets/uploads/<?php echo $content['file_name']; ?>" target="_blank">Open in new tab</a>
            <?php break; ?>
          <?php } ?>
        </span>
      </div>

    </div>

  </div>
</div>
