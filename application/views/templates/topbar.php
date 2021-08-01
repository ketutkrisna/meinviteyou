        <!-- Topbar -->
        <nav class="navbar tampilkannav fixed-top navbar-expand navbar-light topbar mb-4 static-top" style="height:55px;border-bottom:0px solid #ccc;transition:.2s;">

          <!-- Sidebar Toggle (Topbar) -->
          <a class="nav-link">
            <!-- <img class="img-profile rounded-circle mr-auto" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" width="30" height="30"> -->
            <span class="d-lg-inline" style="font-weight:bold;font-size:20px;line-height:5px;">STT Kertasari</span>
          </a>

          <!-- Topbar Search -->
        <?php if($title == 'anggota'){ ?>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control border-1 small keywordnamadekstop" placeholder="Ketik nama.." aria-label="Search" aria-describedby="basic-addon2">
              <select class="custom-select bg-light border-0 keywordstatusdekstop" id="inputGroupSelect02">
                <option selected value="all">Semua anggota</option>
                <option value="a and n">Aktif & non aktif</option>
                <option value="aktif">Aktif</option>
                <option value="non aktif">Non aktif</option>
                <option value="menikah">Menikah</option>
                <option value="drop out">Drop out</option>
              </select>
              <div class="input-group-append d-flex">
                <img class="loadercaridekstop" style="margin-left:10px;align-items:center;" width="30" height="30" src="<?=base_url('assets/img/loader.gif'); ?>">
              </div>
            </div>
          </form>
        <?php }else{} ?>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
          <?php if($title == 'anggota'){ ?>
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
          <?php }else{} ?>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form action="<?=base_url('users/carianggota'); ?>" method="post" class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control border-1 small keywordnama" placeholder="Ketik nama.." aria-label="Search" aria-describedby="basic-addon2">
                    <select class="custom-select bg-light border-0 keywordstatus" id="inputGroupSelect02">
                      <option selected value="all">Semua anggota</option>
                      <option value="a and n">Aktif & non aktif</option>
                      <option value="aktif">Aktif</option>
                      <option value="non aktif">Non aktif</option>
                      <option value="menikah">Menikah</option>
                      <option value="drop out">Drop out</option>
                    </select>
                    <div class="input-group-append d-flex">
                      <img class="loadercari" style="margin-left:10px;align-items:center;" width="30" height="30" src="<?=base_url('assets/img/loader.gif'); ?>">
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php if($this->session->userdata('level_user')){ ?>
                <span class="mr-2  d-lg-inline text-gray-600 small"> Admin</span>
                <img class="img-profile rounded-circle" src="<?=base_url('assets/img/komenadmin.png'); ?>">
            <?php }else{ ?>
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-600"></i>
            <?php } ?>
                <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <?php if($this->session->userdata('level_user')){ ?>
                <a class="dropdown-item" href="<?=base_url('admin'); ?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Setting password
                </a>
            <?php } ?>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-file-signature fa-sm fa-fw mr-2 text-gray-400"></i>
                  Peraturan(demo)
                </a>
                <a class="dropdown-item" href="<?=base_url('users/aboutsttkertasari/'); ?>">
                  <i class="fas fa-info-circle fa-sm fa-fw mr-2 text-gray-400"></i>
                  About STT KERTASARI
                </a>
                <div class="dropdown-divider"></div>
            <?php if($this->session->userdata('level_user')){ ?>
                <a class="dropdown-item" href="<?=base_url('auth/logout/'); ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
            <?php }else{ ?>
                <a class="dropdown-item" href="<?=base_url('auth/'); ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Login
                </a>
            <?php } ?>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->