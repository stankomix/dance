<div class="row">
  <div class="box max-width clearfix">

    <h1 class="h1-title">Membership payment: <?php echo $membership['Description']; ?></h1>

    <div class="side-table clearfix">

      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4">Select method:</span>
        <span class="side-table-right col-xs-12 col-sm-8">
          <!--<select id="select-payment-method">
            <option value="0">Payment method...</option>
            <option value="invoice">Invoice</option>
            <option value="online">Pay online</option>
          </select>
        -->
          <a class="button" href="">Invoice</a>
          <a class="button" href="">Online</a>
        </span>
      </div>
      <!--
      <div id="invoice-payment-method" class="payment-method side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4">&nbsp;</span>
        <span class="side-table-right col-xs-12 col-sm-8">
          Invoice payment data
        </span>
      </div>

      <div id="online-payment-method" class="payment-method side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4">&nbsp;</span>
        <span class="side-table-right col-xs-12 col-sm-8">
          Online payment data
        </span>
      </div>
    -->
      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('course_type'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo $membership['coursetypedesc']; ?></span>
      </div>
      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('lesson_type'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo $membership['lessontypedesc']; ?></span>
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
      <div class="side-table-row clearfix">
        <span class="side-table-left col-xs-12 col-sm-4"><?php echo lang('abo_type'); ?>:</span>
        <span class="side-table-right col-xs-12 col-sm-8"><?php echo $membership['Description']; ?></span>
      </div>

    </div>

  </div>
</div>
