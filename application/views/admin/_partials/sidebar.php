<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/assets/admin/dist/img/person256.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION['admin']['firstname'] ?> <?php echo $_SESSION['admin']['lastname'] ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <?php /*
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
      </div>
    </form>
    */ ?>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <!--<li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>-->
      <li><a href="/admin"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>

      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Memberships</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/memberships">Base memberships</a></li>
          <li><a href="/admin/memberships/add">Add memberships</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Courses</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/courses">Listing</a></li>
          <li><a href="/admin/courses/add">Add</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Course categories</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/course_categories">Listing</a></li>
          <li><a href="/admin/course_categories/add">Add</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Lessons</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/lessons">Listing</a></li>
          <li><a href="/admin/lessons/add">Add</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Content</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/content">Listing</a></li>
          <li><a href="/admin/content/add">Add</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Members</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/users">Listing</a></li>
          <li><a href="/admin/users/messages">Member messages</a></li>
          <li><a href="/admin/users/open-messages">Member messages (open)</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
