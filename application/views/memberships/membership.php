<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title"><?php echo lang('membership'); ?>: <?php echo $membership['Description']; ?></h1>

    <div class="side-table clearfix">

      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4">
          <a class="button float-left" href="/members/memberships">
            <i class="fa fa-arrow-left"></i> <?php echo lang('memberships'); ?>
          </a>
        </span>
        <span class="side-table-right col-xs-12 col-sm-8">

        </span>
      </div>

      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4 padding-button"><?php echo lang('auto_renew'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8">
          <?php if($membership['renewal'] == '1') { ?>
            <?php echo lang('yes'); ?>
            - <a class="button" href="/members/memberships/stop_renewal/<?php echo $membership['Teilnahmeid']; ?>">
                <i class="fa fa-close"></i>
                <?php echo lang('stop_auto_renew'); ?>
              </a>
          <?php } else { ?>
            <?php echo lang('no'); ?>
            - <a class="button green-bg" href="/members/memberships/start_renewal/<?php echo $membership['Teilnahmeid']; ?>">
                <i class="fa fa-repeat"></i>
                <?php echo lang('start_auto_renew'); ?>
              </a>
          <?php } ?>


        </span>
      </div>

      <?php if($membership['Validfrom_unix'] > time()) { ?>

        <div class="side-table-row clearfix">
          <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('move_membership_date'); ?>:</span>
          <div class="side-table-right col-xs-12 col-sm-8">

            <div class='error_msg'>
              <?php
                echo validation_errors();
                if (isset($error_message)) {
                  echo $error_message;
                }
              ?>
            </div>

            <?php echo form_open('/members/memberships/show/' . $membership['Teilnahmeid'] . ''); ?>
              <div class="clearfix">

                <span class="input-group r-padding col-xs-12 col-sm-5">
                  <span class="col-xs-12"><?php echo lang('new_start_date'); ?></span>
                  <span class="col-xs-12"><input class="future-calendar" readonly="readonly" type="text" name="MoveFrom" value="" /></span>
                </span>

                <span class="input-group r-padding col-xs-12 col-sm-2">
                  <span class="col-xs-12">&nbsp;</span>
                  <span class="col-xs-12">
                    <button class="button" type="submit" name="submit">
                      <?php echo lang('move'); ?>
                      <i class="fa fa-arrow-right"></i>
                    </button>
                  </span>
                </span>

              </div>
            <?php echo form_close(); ?>

          </div>
        </div>

      <?php } elseif($membership['Validuntil_unix'] > time()) { ?>
        <div class="side-table-row clearfix">
          <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('break'); ?>:</span>
          <div class="side-table-right col-xs-12 col-sm-8">
            <?php if($break !== false) { ?>

              <div class="clearfix">

                <span class="input-group col-xs-12 col-sm-5">
                  <span class="col-xs-12"><?php echo lang('from'); ?></span>
                  <span class="col-xs-12"><?php echo dmy_from_ymd_datetime($break['break_from'], '-'); ?></span>
                </span>
                <span class="input-group col-xs-12 col-sm-5">
                  <span class="col-xs-12"><?php echo lang('until'); ?></span>
                  <span class="col-xs-12"><?php echo dmy_from_ymd_datetime($break['break_until'], '-'); ?></span>
                </span>

                <span class="input-group col-xs-12 col-sm-2">
                  <span class="col-xs-12">&nbsp;</span>
                  <span class="col-xs-12">
                    <a class="button" href="/members/memberships/delete_break/<?php echo $membership['Teilnahmeid']; ?>">
                      <i class="fa fa-close"></i>
                      <?php echo lang('delete'); ?>
                    </a>
                  </span>
                </span>

              </div>
            <?php } else { ?>
              <span class="col-xs-12"><?php echo lang('no_break_msg'); ?></span>
            <?php } ?>
          </div>
        </div>

        <?php if($membership['breakable'] == 1) { ?>
          <div class="side-table-row clearfix">
            <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('set_break'); ?>:</span>
            <div class="side-table-right col-xs-12 col-sm-8">
              <div class='error_msg'>
                <?php
                  echo validation_errors();
                  if (isset($error_message)) {
                    echo $error_message;
                  }
                ?>
              </div>

              <?php echo form_open('/members/memberships/show/' . $membership['Teilnahmeid'] . ''); ?>
                <div class="clearfix">
                  <span class="input-group r-padding col-xs-12 col-sm-5">
                    <span class="col-xs-12"><?php echo lang('from'); ?></span>
                    <span class="col-xs-12"><input class="future-calendar" readonly="readonly" type="text" name="From" value="" /></span>
                  </span>
                  <span class="input-group r-padding col-xs-12 col-sm-5">
                    <span class="col-xs-12"><?php echo lang('until'); ?></span>
                    <span class="col-xs-12"><input class="future-calendar" readonly="readonly" type="text" name="Until" value="" /></span>
                  </span>
                  <span class="input-group r-padding col-xs-12 col-sm-2">
                    <span class="col-xs-12">&nbsp;</span>
                    <span class="col-xs-12">
                      <button class="button green-bg" type="submit" name="submit">
                        <i class="fa fa-check"></i>
                        <?php echo lang('save'); ?>
                      </button>
                    </span>
                  </span>
                </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        <?php } ?>

      <?php } ?>

      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('cancellation'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8">
          <?php if($membership['paid'] == 1 || $membership['has_started']) { ?>
            <?php echo lang('not_available'); ?>.
          <?php } else { ?>
            <a class="button" href="/members/memberships/cancel/<?php echo $membership['Teilnahmeid']; ?>">
              <i class="fa fa-close"></i>
              <?php echo lang('cancel_membership'); ?>
            </a>
          <?php } ?>
        </span>
      </div>

      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('course_type'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo $membership['coursetypedesc']; ?></span>
      </div>
      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('lesson_type'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo $membership['lessontypedesc']; ?></span>
      </div>
      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('lessons'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo $membership['Lektionen']; ?></span>
      </div>
      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('comment'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo $membership['Bemerkung']; ?></span>
      </div>
      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('valid_from'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo dmy_from_ymd_datetime($membership['Validfrom'], '-'); ?></span>
      </div>
      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('valid_until'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo dmy_from_ymd_datetime($membership['Validuntil'], '-'); ?></span>
      </div>
      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('payment_amount'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo $membership['Zahlungsbetrag']; ?></span>
      </div>
      <?php if($membership['paid'] == 0) { ?>
        <div class="side-table-row clearfix">
          <span class="side-table-left col-xs-12 col-sm-4"></span>
          <span class="side-table-right col-xs-12 col-sm-8">
            <a class="button" href="/members/memberships/payment/<?php echo $membership['Teilnahmeid']; ?>">
              <i class="fa fa-credit-card"></i>
              Pay now
            </a>
          </span>
        </div>
      <?php } ?>
      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('abo_type'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo $membership['Description']; ?></span>
      </div>

    </div>

  </div>
</div>
