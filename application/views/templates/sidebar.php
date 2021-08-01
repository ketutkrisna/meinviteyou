    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion d-none d-md-block" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center  justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <!-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
      </a>
  <?php if($title=='beranda'){ ?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active" style="margin-top:-17px;">
        <a class="nav-link" href="<?=base_url(); ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item" style="margin-top:-17px;">
        <a class="nav-link" href="<?=base_url('users/anggota'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Anggota</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item" style="margin-top:-17px;">
        <a class="nav-link" href="<?=base_url('users/kegiatan'); ?>">
          <i class="fas fa-fw fa-scroll"></i>
          <span>Kegiatan</span></a>
      </li>
  <?php }else if($title=='anggota'){ ?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item" style="margin-top:-17px;">
        <a class="nav-link" href="<?=base_url(); ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active" style="margin-top:-17px;">
        <a class="nav-link" href="<?=base_url('users/anggota'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Anggota</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item" style="margin-top:-17px;">
        <a class="nav-link" href="<?=base_url('users/kegiatan'); ?>">
          <i class="fas fa-fw fa-scroll"></i>
          <span>Kegiatan</span></a>
      </li>
  <?php }else{ ?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item" style="margin-top:-17px;">
        <a class="nav-link" href="<?=base_url(); ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item" style="margin-top:-17px;">
        <a class="nav-link" href="<?=base_url('users/anggota'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Anggota</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item active" style="margin-top:-17px;">
        <a class="nav-link" href="<?=base_url('users/kegiatan'); ?>">
          <i class="fas fa-fw fa-scroll"></i>
          <span>Kegiatan</span></a>
      </li>
  <?php } ?>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-block">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">