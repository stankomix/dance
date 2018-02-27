<section class="content">
  <div class="row">

    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Base memberships list</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Days</th>
              <th>Course type</th>
              <th>Based on</th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php if($memberships !== false) { ?>
              <?php foreach($memberships as $k => $membership) { ?>
                <tr>
                  <td>
                    <a href="/admin/memberships/view/<?php echo $membership['abotype']; ?>">
                      <?php echo $membership['Description']; ?>
                    </a>
                  </td>
                  <td><?php echo $membership['preis']; ?></td>
                  <td><?php echo $membership['abodays']; ?></td>
                  <td><?php echo $membership['coursetypedesc']; ?></td>
                  <td><?php echo $conf['based_on'][$membership['based_on']]; ?></td>
                  <td>
                    <a href="/admin/memberships/view/<?php echo $membership['abotype']; ?>">
                      <i class="fa fa-eye"></i> view
                    </a>
                    <a href="/admin/memberships/edit/<?php echo $membership['abotype']; ?>">
                      <i class="fa fa-edit"></i> edit
                    </a>
                  </td>
                </tr>
              <?php } ?>
            <?php } ?>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col -->
  </div>
</section>
