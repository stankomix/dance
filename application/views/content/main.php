<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title"><?php echo lang('content_files'); ?></h1>
    <div class="table-head clearfix">
      <span class="col-xs-2"><?php echo lang('type'); ?></span>
      <span class="col-xs-6"><?php echo lang('title'); ?></span>
      <span class="col-xs-2"><?php echo lang('date'); ?></span>
      <span class="col-xs-2"></span>
    </div>

    <?php if (!empty($contents)) { ?>
      <?php foreach($contents as $key => $content) { ?>
        <div class="table-row clearfix">
          <span class="col-xs-2">
            <?php echo $content['type']; ?>
          </span>

          <span class="col-xs-6">
            <?php echo $content['title']; ?>
          </span>

          <span class="col-xs-2">
            <?php echo dmy_from_ymd($content['created_date'], '-'); ?>
          </span>

          <span class="col-xs-2">
            <a  class="button green-bg float-right" href="/members/content/file/<?php echo $content['id']; ?>">
              <?php echo lang('view'); ?>
              <i class="fa fa-arrow-right"></i>
            </a>
          </span>
        </div>
      <?php } ?>
    <?php } else { ?>
      <div class="table-row clearfix">
        <span class="col-xs-12">
          <?php echo lang('no_content_files_yet'); ?>
        </span>
      </div>
    <?php } ?>

  </div>
</div>
