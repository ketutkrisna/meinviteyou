<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman admin</title>
  <meta content="Halaman pada admin" name="description">
  <meta content="undangan digital meinviteyou" name="keywords">
  <meta property="og:title" content="Admin meinviteyou">
  <meta property="og:site_name" content="meINVITEyou.com">
  <meta content='<?=base_url('assets/img/imgsharing/logosharingjpg.jpg'); ?>' property='og:image'/>

  <!-- Favicons -->
  <link href="<?=base_url('/'); ?>assets/img/favicon.png" rel="icon">
  <link href="<?=base_url('/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('/'); ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url('/'); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=base_url('/'); ?>assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?=base_url('/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url('/'); ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url('/'); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url('/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('/'); ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v3.1.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    /*html,body{
      height:100%;
      position:relative;
    }*/
    .mobile-nav-toggle{
      z-index: 999
    }
    .text-sendiri {
      color: #2298A4 !important;
    }
    .text-merah {
      color: #2298A4 !important;
    }
    .bg-sendiri {
      background-color: #2298A4 !important;
    }
    .mobile-nav-toggle {
      top: 30px;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color: #2298A4;">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <!-- <h1 class="logo mr-auto"><a href="<?=base_url('admin'); ?>" class="text-primary" style="font-size:25px">Admin<span class="text-white">(</span>M<span class="text-danger">I</span>Y<span class="text-white">)</span></a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="<?=base_url('admin'); ?>" style="border:0;" class="logo mr-auto"><img src="<?=base_url('/'); ?>assets/img/whiteok.png" alt="" class="img-fluid"><span class="text-light" style="font-size:25px"> Admin</span></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="<?=base_url(); ?>">Beranda</a></li>
              <li class="active"><a href="<?=base_url('admin'); ?>">Admin</a></li>
              <li><a href="<?=base_url('admin/ubahpassword'); ?>">Ubah password</a></li>
              <li><a href="<?=base_url('auth/logout'); ?>">Logout</a></li>
              <!-- <li><a href="#contact">Contact Us</a></li> -->
              <!-- <li><a href="#about">About Us</a></li> -->
              <!-- <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                  <li><a href="#">Drop Down 5</a></li>
                </ul>
              </li> -->

            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main" style="margin-top:100px;min-height:800px">

  <section>
    <div class="row">
      <div class="col-12 text-center">
        <h3>Daftar Pesanan</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-12 d-flex justify-content-end">
        <button type="button" class="btn btn-primary btn-sm mb-2 mr-2" data-toggle="modal" data-target="#modaltambahundangan">Tambah</button>
      </div>
    </div>

    <?=$this->session->flashdata('message'); ?>

    <div class="accordion" id="pengorder">
<?php foreach($allorder as $aorder): ?>
      <div class="card">
        <div class="card-header" id="headingorder<?=$aorder['id_pengundang']; ?>" style="padding:7px">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseorder<?=$aorder['id_pengundang']; ?>" aria-expanded="true" aria-controls="collapseorder<?=$aorder['id_pengundang']; ?>">
              <?=$aorder['namapanggilan_priawanita']; ?>
              <?php if($aorder['status_user']){ ?>
                <?php if($aorder['status_user']=='aktif'){ ?>
                  (<span class="text-success">Fitur ON</span>)
                <?php }else{ ?>
                  (<span class="text-danger">Fitur OFF</span>)
                <?php } ?>
              <?php }else{ ?>
                (<span class="text-warning">Akses belum dibuat</span>)
              <?php } ?>
            </button>
          </h2>
        </div>

        <div id="collapseorder<?=$aorder['id_pengundang']; ?>" class="collapse" aria-labelledby="headingorder<?=$aorder['id_pengundang']; ?>" data-parent="#pengorder">
          <div class="card-body" style="padding:2px 0px 10px 20px">

            <ul class="list-group">
              <!-- <li style="padding:5px 10px 5px 10px" class="list-group-item d-flex justify-content-between align-items-center">
                Nama pria:
                <span class="text-danger"><?=$aorder['namalengkap_pria']; ?></span>
              </li>
              <li style="padding:5px 10px 5px 10px" class="list-group-item d-flex justify-content-between align-items-center">
                Orang tua pria:
                <span class="text-danger"><?=$aorder['orangtua_pria']; ?></span>
              </li>
              <li style="padding:5px 10px 5px 10px" class="list-group-item d-flex justify-content-between align-items-center">
                Nama wanita:
                <span class="text-danger"><?=$aorder['namalengkap_wanita']; ?></span>
              </li>
              <li style="padding:5px 10px 5px 10px" class="list-group-item d-flex justify-content-between align-items-center">
                Orang tua wanita:
                <span class="text-danger"><?=$aorder['orangtua_wanita']; ?></span>
              </li> -->
              <li style="padding:5px 10px 5px 10px" class="list-group-item d-flex justify-content-between align-items-center">
                Nama diUrl:
                <span class="text-danger"><?=$aorder['url_pengundang']; ?></span>
              </li>
              <li style="padding:5px 10px 5px 10px" class="list-group-item d-flex justify-content-between align-items-center">
                Tgl resepsi:
                <span class="text-danger"><?=date('d M Y', strtotime($aorder['tanggal_acara'])).', '.$aorder['jam_acara']; ?></span>
              </li>
              <li style="padding:5px 10px 5px 10px" class="list-group-item d-flex justify-content-between align-items-center">
                Alamat resepsi:
                <span class="text-danger"><?=$aorder['alamat_acara']; ?></span>
              </li>
              <li style="padding:5px 10px 5px 10px" class="list-group-item d-flex justify-content-between align-items-center">
                Tema undangan:
                <span class="text-danger"><?=$aorder['tema_template']; ?></span>
              </li>
            </ul>
            <div class="row">
              <div class="col-12 d-flex justify-content-between">
                <?php if($aorder['ids']==0){ ?>
                  <a style="margin:5px 5px 0 0" class="btn btn-sm btn-danger ambildatapengundang" data-toggle="modal" data-target="#modalakseslogin" data-idpengundang="<?=$aorder['id_pengundang']; ?>" role="button">Buatkan akses login</a>
                <?php }else{ ?>
                  <a style="margin:5px 5px 0 0" class="btn btn-sm btn-warning lihatdetailuser" data-toggle="modal" data-target="#modallihatakseslogin" data-iduser="<?=$aorder['id_user']; ?>" role="button">Lihat akses login</a>
                <?php } ?>
                <a style="margin:5px 5px 0 0" class="btn btn-sm btn-primary" href="<?=base_url('admin/aturundangan/'.$aorder['id_pengundang']); ?>" role="button">Kelola</a>
              </div>
            </div>

            <!-- <div class="accordion" id="listnama<?=$aorder['id_pengundang']; ?>">
          <?php 
            $idpengundang=$aorder['id_pengundang'];
            $querylist="SELECT * from diundang where matchid_pengundang='$idpengundang' order by nama_diundang"; 
            $resultlist=$this->db->query($querylist)->result_array();
          ?>
          <?php $no=1; foreach($resultlist as $rlist): ?>
              <div class="card">
                <div class="card-header" id="headinglist <?=$rlist['id_diundang']; ?>" style="padding:0">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapselist<?=$rlist['id_diundang']; ?>" aria-expanded="true" aria-controls="collapselist<?=$rlist['id_diundang']; ?>">
                      <?=$no++; ?>. <?=$rlist['nama_diundang']; ?>
                    </button>
                  </h2>
                </div>

                <div id="collapselist<?=$rlist['id_diundang']; ?>" class="collapse" aria-labelledby="headinglist <?=$rlist['id_diundang']; ?>" data-parent="#listnama<?=$aorder['id_pengundang']; ?>">
                  <div class="card-body" style="padding:5px;">
                    <span>No.Tlp : <?=$rlist['nomer_diundang']; ?></span><br>
                    <span>Url : <?=base_url($aorder['jenis_acara'].'/'.$aorder['paket_acara'].'/'.$aorder['url_pengundang'].'/'.$rlist['url_diundang']); ?></span>
                  </div>
                </div>
              </div>
          <?php endforeach; ?>
            </div> -->

          </div>
        </div>
      </div>
<?php endforeach; ?>
    </div>
  </section>


  </main><!-- End #main -->

  <!-- Modal tambah undangan -->
  <div class="modal fade" id="modaltambahundangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah undangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form action="<?=base_url('admin/tambahundangan'); ?>" method="post" enctype="multipart/form-data">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama diUrl</span>
            </div>
            <input type="text" class="form-control" placeholder="Nama tidak boleh spasi.." aria-label="Username" aria-describedby="basic-addon1" name="tambahnamaurl">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama L & P</span>
            </div>
            <input type="text" class="form-control" placeholder="Alex & Bella" aria-label="Username" aria-describedby="basic-addon1" name="tambahnamalakiperempuan">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama L</span>
            </div>
            <input type="text" class="form-control" placeholder="Full name laki-laki" aria-label="Username" aria-describedby="basic-addon1" name="tambahfullnamalaki">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama ortu L</span>
            </div>
            <input type="text" class="form-control" placeholder="mr david & ms lina" aria-label="Username" aria-describedby="basic-addon1" name="tambahnamaortulaki">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama P</span>
            </div>
            <input type="text" class="form-control" placeholder="Full name perempuan" aria-label="Username" aria-describedby="basic-addon1" name="tambahfullnamaperempuan">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama ortu P</span>
            </div>
            <input type="text" class="form-control" placeholder="mr patrik & ms stevani" aria-label="Username" aria-describedby="basic-addon1" name="tambahnamaortuperempuan">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">No.Tlp L</span>
            </div>
            <input type="text" class="form-control" placeholder="Nomer tlp pengundang pria" aria-label="Username" aria-describedby="basic-addon1" name="tambahnomertlp">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">No.Tlp P</span>
            </div>
            <input type="text" class="form-control" placeholder="Nomer tlp pengundang wanita" aria-label="Username" aria-describedby="basic-addon1" name="tambahnomertlpw">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Ucapan awal</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" placeholder="Ucapan awal pada undangan" name="tambahucapanawal"></textarea>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Ucapan ahir</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" placeholder="Ucapan ahir pada undangan" name="tambahucapanahir"></textarea>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Tanggal akad</span>
            </div>
            <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="tambahtanggalakad">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Jam akad</span>
            </div>
            <input type="text" class="form-control" aria-label="Username" placeholder="10:00 - selesai" aria-describedby="basic-addon1" name="tambahjamakad">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Alamat akad</span>
            </div>
            <input type="text" class="form-control" aria-label="Username" placeholder="Tempat akad berlangsung" aria-describedby="basic-addon1" name="tambahalamatakad">
          </div>
          <!-- <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Maps akad</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" placeholder="Sematkan dari google maps" name="tambahmapakad"></textarea>
          </div> -->

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Tanggal resepsi</span>
            </div>
            <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="tambahtanggalacara">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Jam resepsi</span>
            </div>
            <input type="text" class="form-control" aria-label="Username" placeholder="10:00 - selesai" aria-describedby="basic-addon1" name="tambahjamacara">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Alamat resepsi</span>
            </div>
            <input type="text" class="form-control" aria-label="Username" placeholder="Tempat resepsi berlangsung" aria-describedby="basic-addon1" name="tambahalamatacara">
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Maps resepsi</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" placeholder="Sematkan dari google maps" name="tambahmapacara"></textarea>
          </div>
          <!-- <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Musik undangan</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" placeholder="Sematkan dari sound cloud" name="tambahmusikacara"></textarea>
          </div> -->
          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text">video undangan</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" placeholder="Sematkan dari youtube" name="tambahvideoacara"></textarea>
          </div>
          <!-- <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Stori undangan</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" placeholder="Stori pengundang" name="tambahstoriacara"></textarea>
          </div> -->
          <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Foto L</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="tambahfotolaki">
              <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
            </div>
          </div>
          <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon02">Foto P</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon02" name="tambahfotoperempuan">
              <label class="custom-file-label" for="inputGroupFile02">Pilih file</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Jenis undangan</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="tambahjenisacara">
              <option value="pernikahan">Pernikahan</option>
              <option value="ulangtahun" class="disabled" disabled>Ulang tahun</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect02">Tema undangan</label>
            </div>
            <select class="custom-select" id="inputGroupSelect02" name="tambahtemaundangan">
              <!-- <option value="standar">Standar</option> -->
              <option value="classic">Classic</option>
              <option value="rustic">Rustic</option>
              <option value="tematic">Tematic</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Paket undangan</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="tambahpaketacara">
              <option value="paketeasy">Paket easy(100rb)</option>
              <option value="paketmedium" class="disabled">Paket medium(200rb)</option>
              <option value="pakethard" class="disabled">Paket hard(300rb)</option>
              <option value="paketspesial" class="disabled">Paket spesial(400rb)</option>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" name="tambahsimpan">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Modal tambah akses login -->
  <div class="modal fade" id="modalakseslogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Buat akses login <span class="loader"><img src="<?=base_url('assets/img/preloader.gif'); ?>" width="25"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <div class="prebuka">
        <div class="modal-body">

        <form action="<?=base_url('admin/buatakseslogin'); ?>" method="post">
          <!-- <input type="hidden" name="idepengundang" value="<?=$detailundangan['id_pengundang']; ?>"> -->
          <input type="hidden" name="idpen" class="idpen">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1" style="background-color:#bbb">Full name</span>
            </div>
            <input type="text" class="form-control fullnamepengundang" placeholder="Nama lengkap" aria-label="Username" aria-describedby="basic-addon1" name="fullnamepengundang" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1" style="background-color:#bbb">Username</span>
            </div>
            <input type="text" class="form-control usernamepengundang" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="usernamepengundang" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1" style="background-color:#bbb">Password</span>
            </div>
            <input type="text" class="form-control passwordpengundang" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" value="<?=uniqid(); ?>" name="passwordpengundang" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" name="tambahakses">Buat</button>
        </div>
        </form>
      </div>

      </div>
    </div>
  </div>

  <!-- Modal tambah akses login -->
  <div class="modal fade" id="modallihatakseslogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Akses login <span class="namalogind"></span> <span class="loader"><img src="<?=base_url('assets/img/preloader.gif'); ?>" width="25"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <div class="prebukaakses">
        <div class="modal-body">

          <ul class="list-group">
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info usernamed"></span>
              <i class="notifkey ion-ios-unlocked"></i>
              <br>
              <span style="font-size:12px;color:grey"> (Username)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info passwordd"></span><br>
              <span style="font-size:12px;color:grey"> (Password)</span>
            </li>
          </ul>

        </div>
        <div class="modal-footer">
          <a onclick="return confirm('Pilih Oke untuk buka akses login')" type="button" class="btn btn-info btn-sm bukauser">Aktifkan Fitur</a>
          <a onclick="return confirm('Pilih Oke untuk tutup akses login')" type="button" class="btn btn-danger btn-sm tutupuser">Non aktifkan Fitur</a>
        </div>
      </div>

      </div>
    </div>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color:#262626;">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><a href="<?=base_url(); ?>"><span class="text-sendiri">me</span><span class="text-merah"><u>INVITE</u></span><span class="text-sendiri">you</span></a></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a class="text-sendiri" href="https://www.facebook.com/ketut.k.ii/">Ketut Krisna</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="<?=base_url('/'); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('/'); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url('/'); ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url('/'); ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?=base_url('/'); ?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?=base_url('/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url('/'); ?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?=base_url('/'); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=base_url('/'); ?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('/'); ?>assets/js/main.js"></script>

  <script>
    $(function(){

      $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
          $('.mobile-nav-toggle').css({
            'top':'25px',
            'transition':'.5s'
          })
        }else{
          $('.mobile-nav-toggle').css({
            'top':'30px',
            'transition':'.5s'
          })
        }
      })

      $('.loader').hide();
      $('body').on('click','.ambildatapengundang',function(){
        var idpengundang=$(this).data('idpengundang');
        $('.loader').show();
        $('.prebuka').hide();
        $.ajax({
          url: '<?=base_url('admin/ajaxambildatapengundang'); ?>',
          method: "POST",
          data: {idpengundang:idpengundang},
          dataType: "json",
          success:function(data){
            $('.loader').hide();
            $('.prebuka').show();
            $('.fullnamepengundang').val(data.namapanggilan_priawanita);
            $('.usernamepengundang').val(data.url_pengundang);
            $('.idpen').val(data.id_pengundang);
          }
        });
      });

      $('body').on('click','.lihatdetailuser',function(){
        var iduser=$(this).data('iduser');
        $('.loader').show();
        $('.prebukaakses').hide();
        $.ajax({
          url: '<?=base_url('admin/ajaxambildetailuser'); ?>',
          method: "POST",
          data: {iduser:iduser},
          dataType: "json",
          success:function(data){
            $('.loader').hide();
            $('.prebukaakses').show();
            // console.log(data);
            if(data.status_user=='aktif'){
              $('.tutupuser').show();
              $('.bukauser').hide();
              $('.notifkey').addClass('ion-ios-unlocked');
              $('.notifkey').removeClass('text-danger ion-ios-locked');
              $('.tutupuser').attr('href','<?=base_url('admin/tutupakseslogin/'); ?>'+data.id_user);
            }else{
              $('.tutupuser').hide();
              $('.bukauser').show();
              $('.notifkey').removeClass('ion-ios-unlocked');
              $('.notifkey').addClass('text-danger ion-ios-locked');
              $('.bukauser').attr('href','<?=base_url('admin/bukaakseslogin/'); ?>'+data.id_user);
            }
            $('.namalogind').text(data.namapanggilan_priawanita);
            $('.usernamed').text(data.username_user);
            $('.passwordd').text(data.password_user);
          }
        });
      });

    });
  </script>

</body>

</html>