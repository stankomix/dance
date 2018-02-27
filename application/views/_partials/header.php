<div id="menu-overlay-bg"></div>
<header class="clearfix">
  <div class="max-width header">
    <a class="logo" href="/members" title="Danzare">&nbsp;</a>

    <button id="mobile-menu-button" class="show-xs" type="button"><i class="fa fa-bars"></i></button>

    <ul class="main-nav">
      <li class="mobile-menu-title show-xs">
        <span><?php echo lang('menu'); ?></span>
        <button type="button" id="close-mobile-menu"><i class="fa fa-close"></i></button>
      </li>
      <li><a href="/members/memberships"><?php echo lang('overview'); ?></a></li>
      <li><a href="/members/content"><?php echo lang('content_files'); ?></a></li>
      <li><a href="/members/messages">Messages</a></li>

      <li class="dropdown">
        <a class="topnav-btn" href="javascript:void(0);">
          <?php echo lang('settings'); ?>
          <i class="fa fa-angle-down"></i>
        </a>

        <ul class="dropdown-menu">
          <li><a href="/members/change-password"><?php echo lang('change_pass'); ?></a></li>
          <li><a href="/members/change-language"><?php echo lang('change_language'); ?></a></li>
        </ul>
      </li>

      <li><a href="/logout"><?php echo lang('logout'); ?></a></li>
    </ul>

  </div>
</header>
