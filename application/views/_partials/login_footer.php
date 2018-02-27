<footer>
  <div class="max-width footer">
    <div class="col-xs-6">
      <?php echo lang('danzare_members_area'); ?>
    </div>
    <div class="col-xs-6">
      <?php if(isset($languages) && !empty($languages)) { ?>
        <?php echo form_dropdown('language', $languages, isset($_SESSION['language']) ? $_SESSION['language'] : false , array('id' => 'language-select-footer')); ?>
      <?php } ?>
    </div>
  </div>
</footer>
