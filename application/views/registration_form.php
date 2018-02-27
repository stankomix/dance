<div id="register">
  <h1 class="h1-title"><?php echo lang('register_title'); ?></h1>

  <?php if($schedule) { ?>
    <div>

      <?php if($schedule['type'] == 'lesson') { ?>
        <div class="table-head clearfix">
          <span class="col-xs-12">Trial lesson:</span>
        </div>
        <div class="table-row clearfix">
          <span class="col-xs-10">
            <?php echo lang('days')[$schedule['data']['courseday']]; ?>
             -
            <?php echo dmy_from_datetime($schedule['data']['validfrom'], '-'); ?>
            <?php echo $schedule['data']['coursetypedesc']; ?>
          </span>
          <span class="col-xs-2">
            <a class="button grey-bg float-right" href="/schedule-lesson">
              Change
              <i class="fa fa-edit"></i>
            </a>
          </span>
        </div>
      <?php } elseif($schedule['type'] == 'course') { ?>
        <div class="table-head clearfix">
          <span class="col-xs-12">Trial course:</span>
        </div>
        <div class="table-row clearfix">
          <span class="col-xs-10">
            <?php echo dmy_from_ymd($schedule['data']['startdate'], '-'); ?>
            -
            <?php echo dmy_from_ymd($schedule['data']['enddate'], '-'); ?>
            :
            <?php echo $schedule['data']['name']; ?>
          </span>
          <span class="col-xs-2">
            <a class="button grey-bg float-right" href="/schedule-course">
              Change
              <i class="fa fa-edit"></i>
            </a>
          </span>
        </div>
      <?php } ?>
    </div>
  <?php } ?>

  <div class='error_msg'>
    <?php
      echo validation_errors();
    ?>
  </div>

  <?php echo form_open('/register'); ?>

    <div>
      <div class="input-group col-xs-12 col-sm-2 col-md-2">
        <label><?php echo lang('salutation'); ?>:</label>
        <select name="Anrede">
          <option value=""></option>
          <option value="m" <?php echo set_value('Anrede') == 'm' ? 'SELECTED' : ''; ?>><?php echo lang('mr'); ?></option>
          <option value="w" <?php echo set_value('Anrede') == 'w' ? 'SELECTED' : ''; ?>><?php echo lang('mrs'); ?></option>
        </select>
      </div>

      <div class="input-group col-xs-12 col-sm-5 col-md-5">
        <label><?php echo lang('first_name'); ?>:</label>
        <input type="text" name="Vorname" value="<?php echo set_value('Vorname'); ?>" />
      </div>

      <div class="input-group col-xs-12 col-sm-5 col-md-5">
        <label><?php echo lang('last_name'); ?>:</label>
        <input type="text" name="Nachname" value="<?php echo set_value('Nachname'); ?>" />
      </div>
    </div>

    <div>
      <div class="input-group col-xs-12 col-sm-6">
        <label><?php echo lang('email'); ?></label>
        <input type="email" name="Email" value="<?php echo set_value('Email'); ?>" />
      </div>
      <div class="input-group col-xs-12 col-sm-6">
        <label><?php echo lang('person_type'); ?>:</label>
        <?php echo form_dropdown('Persontyp', $persontypes, set_value('Persontyp')); ?>
      </div>
    </div>

    <div>
      <div class="input-group col-xs-12 col-sm-12 col-md-4">
        <label><?php echo lang('street'); ?>:</label>
        <input type="text" name="Strasse" value="<?php echo set_value('Strasse'); ?>" />
      </div>
      <div class="input-group col-xs-12 col-sm-12 col-md-4">
        <label><?php echo lang('city'); ?>:</label>
        <input type="text" name="Ort" value="<?php echo set_value('Ort'); ?>" />
      </div>
      <div class="input-group col-xs-12 col-sm-12 col-md-4">
        <label><?php echo lang('postal_code'); ?>:</label>
        <input type="text" name="PLZ" value="<?php echo set_value('PLZ'); ?>" />
      </div>
    </div>

    <div>
      <div class="input-group col-xs-12 col-sm-12 col-md-6">
        <label><?php echo lang('mobile'); ?>:</label>
        <input type="text" name="Mobiltelefon" value="<?php echo set_value('Mobiltelefon'); ?>" />
      </div>

      <div class="input-group col-xs-12 col-sm-12 col-md-6">
        <label><?php echo lang('birth_date'); ?>:</label>
        <input class="birthdate-calendar" type="text" name="Geburtsdatum" readonly="readonly" value="<?php echo set_value('Geburtsdatum'); ?>" />
      </div>
    </div>

    <div class="input-group col-xs-12">
      <button type="submit" class="button" name="submit"><i class="fa fa-user"></i> <?php echo lang('register_link'); ?></button>
    </div>

  <?php echo form_close(); ?>

  <div class="input-group col-xs-12">
    <a class="link" href="<?php echo base_url(); ?> "><?php echo lang('login_link'); ?></a>
  </div>

</div>
