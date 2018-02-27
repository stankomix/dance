<?php foreach($abo_types as $k => $v) { ?>
  <label class="col-xs-12 col-sm-6 assistant-membership-box" for="abotype_<?php echo $k; ?>">
    <span>

      <?php if(!empty($v['filename'])) { ?>
        <img class="assistant-membership-img" src="/assets/uploads/memberships/<?php echo $v['filename']; ?>" alt="<?php echo $v['Description']; ?>" />
      <?php } ?>

      <b class="assistant-membership-promo">
        <?php echo !empty($v['promodescription']) ? $v['promodescription'] : $v['Description']; ?>
      </b>

      <h4><?php echo $v['Description']; ?></h4>

      <strong>
        <input type="radio" name="abo_type" id="abotype_<?php echo $k; ?>" value="<?php echo $k; ?>" />
      </strong>

    </span>
  </label>
<?php } ?>
