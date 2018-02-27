<section class="content-header">
  <h1>
    <?php echo $title; ?>
    <?php if($is_search) { ?>
      <a href="/admin/users"><i class="fa fa-close"></i></a>
    <?php } ?>
  </h1>
</section>

<section class="content">
  <div class="row">

    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="col-xs-12 col-sm-6 col-md-7 pull-left">
            <?php if(isset($pagination_links)) { ?>
              <ul class="pagination pagination-sm inline">
                <?php echo $pagination_links; ?>
              </ul>
            <?php } ?>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-5 pull-right">
            <form class="input-group" action="/admin/users/" method="post">

              <input type="text" name="usersearch" class="form-control" value="<?php echo $usersearch; ?>">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-info btn-flat">Go!</button>
              </span>

            </form>
          </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Email</th>
              <th>Name</th>
              <th>Type</th>
              <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php if($users !== false) { ?>
              <?php foreach($users as $k => $user) { ?>
                <tr>
                  <td><?php echo $user['Teilnehmerid']; ?></td>
                  <td><?php echo $user['Email']; ?></td>
                  <td><?php echo $user['Vorname']; ?> <?php echo $user['Nachname']; ?></td>
                  <td><?php echo $conf['usertypes'][$user['usertype']]; ?></td>
                  <td>
                    <a href="/admin/users/view/<?php echo $user['Teilnehmerid']; ?>">
                      <i class="fa fa-eye"></i> view
                    </a>
                    <a href="/admin/users/edit/<?php echo $user['Teilnehmerid']; ?>">
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
