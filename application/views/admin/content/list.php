<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/content/add" class="btn btn-primary">Add</a>
      </div>
    </div>

    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Content files</h3>
          <div class="box-tools pull-right">
            <ul class="pagination pagination-sm inline">
              <?php echo $pagination_links; ?>
            </ul>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Title</th>
              <th>File</th>
              <th>Date</th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php if($contents !== false) { ?>
              <?php foreach($contents as $k => $content) { ?>
                <tr>
                  <td><?php echo $content['title']; ?></td>
                  <td><?php echo $content['file_name']; ?></td>
                  <td><?php echo dmy_from_ymd($content['created_date'], '-'); ?></td>
                  <td>
                    <a href="/admin/content/view/<?php echo $content['id']; ?>">
                      <i class="fa fa-eye"></i> view
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
