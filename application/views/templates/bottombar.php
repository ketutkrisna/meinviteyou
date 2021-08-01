        <!-- bottombar -->
        <nav class="navbar fixed-bottom navbar-expand navbar-light bg-white topbar static-top d-flex justify-content-around d-md-none" style="height:50px;border-top:1px solid #ccc;">
      <?php if($title=='beranda'){ ?>
          <a class="nav-link" href="<?=base_url(); ?>" style="margin-top:8px;color:#423f3f;">
            <i style="font-size:20px;line-height:14px;" class="fas fa-home fa-fw"><br><span style="font-size:12px;margin-left:-7px;">beranda</span></i>
          </a>
          <a class="nav-link" href="<?=base_url('users/anggota'); ?>" style="margin-top:8px">
            <i style="font-size:20px;line-height:14px;text-shadow:1px 1px 1px black,-1px -1px 1px black" class="fas fa-users fa-fw text-white"><br><span class="text-secondary" style="font-size:12px;margin-left:-7px;text-shadow:0px 0px 0px white,-0px -0px 0px white;">anggota</span></i>
          </a>
          <a class="nav-link" href="<?=base_url('users/kegiatan'); ?>" style="margin-top:8px">
            <i style="font-size:20px;line-height:14px;text-shadow:1px 1px 1px black,-1px -1px 1px black" class="fas fa-scroll fa-fw text-white"><br><span class="text-secondary" style="font-size:12px;margin-left:-7px;text-shadow:0px 0px 0px white,-0px -0px 0px white;">kegiatan</span></i>
          </a>
      <?php }else if($title=='anggota'){ ?>
          <a class="nav-link" href="<?=base_url(); ?>" style="margin-top:8px;">
            <i style="font-size:20px;line-height:14px;text-shadow:1px 1px 1px black,-1px -1px 1px black" class="fas fa-home fa-fw text-white"><br><span class="text-secondary" style="font-size:12px;margin-left:-7px;text-shadow:0px 0px 0px white,-0px -0px 0px white;">beranda</span></i>
          </a>
          <a class="nav-link" href="<?=base_url('users/anggota'); ?>" style="margin-top:8px;color:#423f3f;">
            <i style="font-size:20px;line-height:14px;" class="fas fa-users fa-fw"><br><span style="font-size:12px;margin-left:-7px;">anggota</span></i>
          </a>
          <a class="nav-link" href="<?=base_url('users/kegiatan'); ?>" style="margin-top:8px">
            <i style="font-size:20px;line-height:14px;text-shadow:1px 1px 1px black,-1px -1px 1px black" class="fas fa-scroll fa-fw text-white"><br><span class="text-secondary" style="font-size:12px;margin-left:-7px;text-shadow:0px 0px 0px white,-0px -0px 0px white;">kegiatan</span></i>
          </a>
      <?php }else{ ?>
          <a class="nav-link" href="<?=base_url(); ?>" style="margin-top:8px;">
            <i style="font-size:20px;line-height:14px;text-shadow:1px 1px 1px black,-1px -1px 1px black" class="fas fa-home fa-fw text-white"><br><span class="text-secondary" style="font-size:12px;margin-left:-7px;text-shadow:0px 0px 0px white,-0px -0px 0px white;">beranda</span></i>
          </a>
          <a class="nav-link" href="<?=base_url('users/anggota'); ?>" style="margin-top:8px;">
            <i style="font-size:20px;line-height:14px;text-shadow:1px 1px 1px black,-1px -1px 1px black" class="fas fa-users fa-fw text-white"><br><span class="text-secondary" style="font-size:12px;margin-left:-7px;text-shadow:0px 0px 0px white,-0px -0px 0px white;">anggota</span></i>
          </a>
          <a class="nav-link" href="<?=base_url('users/kegiatan'); ?>" style="margin-top:8px;color:#423f3f;">
            <i style="font-size:20px;line-height:14px;" class="fas fa-scroll fa-fw"><br><span style="font-size:12px;margin-left:-7px;">kegiatan</span></i>
          </a>
      <?php } ?>
        </nav>
        <!-- End of bottombar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" style="margin-top:70px;padding-bottom:100px;min-height:500px;">