<?php 

  $idp=$this->session->userdata('id_p');
  $queryundangan="SELECT * from pengundang where id_pengundang='$idp'";
  $detailundangan=$this->db->query($queryundangan)->row_array();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman dashboard</title>
  <meta content="Halaman atur undangan users" name="description">
  <meta content="undangan digital meinviteyou" name="keywords">
  <meta property="og:title" content="Users meinviteyou">
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
  <script>
    function copyToClipboard(element) {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).text()).select();
      document.execCommand("copy");
      $temp.remove();
    }
  </script>

  <!-- =======================================================
  * Template Name: BizPage - v3.1.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    html,body{
      height:100%;
      position:relative;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color:black">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">

          <a href="<?=base_url('users'); ?>" class="logo mr-auto"><img src="<?=base_url('/'); ?>assets/img/logomiy.png" alt="" class="img-fluid"><span class="text-primary" style="font-size:25px">Dashboard</span></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="<?=base_url('users/ubahpassworduser'); ?>">Ubah password</a></li>
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

  <main id="main" style="margin-top:100px;min-height:800px;margin-bottom:20px">

  <section style="margin:10px">
    <div class="row">
      <div class="col-12 text-center py-0">
        <h4>Kelola undangan <br> <span class="text-info"><?=$detailundangan['namapanggilan_priawanita']; ?></span></h4>
      </div>
    </div>

    <!-- div bgnkus data 1-->
    <hr style="border:1px solid grey;margin-bottom:10px;margin-top:0">
    <div>


    <ul class="list-group">
      <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=$detailundangan['url_pengundang']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Nama diURL)</span>
      </li>
      <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=$detailundangan['namalengkap_pria']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Nama lengkap mempelai pria)</span>
      </li>
      <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=$detailundangan['namalengkap_wanita']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Nama lengkap mempelai wanita)</span>
      </li>
      <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=date('d M Y', strtotime($detailundangan['tanggal_akad'])).', '.$detailundangan['jam_akad']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Tanggal akad pernikahan)</span>
      </li>
      <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=date('d M Y', strtotime($detailundangan['tanggal_acara'])).', '.$detailundangan['jam_acara']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Tanggal pesta pernikahan)</span>
      </li>
      <!-- <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=$detailundangan['jenis_acara']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Jenis undangan)</span>
      </li> -->
      <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=$detailundangan['tema_template']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Tema undangan)</span>
      </li>
      <!-- <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info">
          <?php 
            if($detailundangan['paket_acara']=='paketeasy'){
              $hargapaket='(100rb)';
            }else if($detailundangan['paket_acara']=='paketmedium'){
              $hargapaket='(200rb)';
            }else if($detailundangan['paket_acara']=='pakethard'){
              $hargapaket='(300rb)';
            }else{
              $hargapaket='(400rb)';
            }
          ?>
          <?=$detailundangan['paket_acara'].$hargapaket; ?>
        </span><br>
        <span style="font-size:12px;color:grey"> (Paket undangan)</span>
      </li> -->
    </ul>

    <div class="row">
      <div class="col-12 d-flex justify-content-end mt-2">
        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaldetailundangan">Lihat selengkapnya</button>
      </div>
    </div>
    
    </div>
    <hr style="border:1px solid grey;margin-bottom:10px;margin-top:10px">
    <!-- tutup div bungkus data 1-->

   
    <!-- <div class="embed-responsive embed-responsive-16by9">
      <span class="text-info"><?=$detailundangan['map_acara']; ?></span>
    </div> -->

    <!-- div bungkus daftar undangan -->
    <div>

      <?php 
        $idpengundangsum=$this->session->userdata('id_p');
        $queryhadir="SELECT SUM(jumlah_kehadiran) as jumlahhadir from diundang where matchid_pengundang='$idpengundangsum' and absen_diundang='hadir'"; 
        $resultsum=$this->db->query($queryhadir)->row_array();

        $querytidak="SELECT SUM(jumlah_kehadiran) as jumlahtidak from diundang where matchid_pengundang='$idpengundangsum' and absen_diundang='tidak'"; 
        $resultsumtidak=$this->db->query($querytidak)->row_array();

        $querynull="SELECT count(jumlah_kehadiran) as jumlahnull from diundang where matchid_pengundang='$idpengundangsum' and absen_diundang='null'"; 
        $resultsumnull=$this->db->query($querynull)->row_array();

        $querysemua="SELECT count(jumlah_kehadiran) as jumlahsemua from diundang where matchid_pengundang='$idpengundangsum'"; 
        $resultsumsemua=$this->db->query($querysemua)->row_array();
      ?>


      
    <div class="row">
      <div class="col-12 mt-0 mb-3">
        <div class="d-flex justify-content-between">
        <span class=""><i style="font-size:22px;font-weight:bold;" class="ion-android-checkbox-outline text-primary"></i> Hadir : <?=$resultsum['jumlahhadir']; ?> </span>
        <span><i style="font-size:22px;font-weight:bold;" class="ion-android-sync text-warning"></i> Belum confirmasi : <?=$resultsumnull['jumlahnull']; ?> </span>
        </div>
        <div class="d-flex justify-content-between">
        <span class=""><i style="font-size:22px" class="ion-close-round text-danger"></i> Tidak hadir : <?=$resultsumtidak['jumlahtidak']; ?> </span>
        <span class=""><i style="font-size:22px" class="ion-podium text-success"></i> Semua undangan : <?=$resultsumsemua['jumlahsemua']; ?> </span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 mt-0 mb-3 d-flex justify-content-start">
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaltambahdaftarundangan">Tambah daftar undangan</button>
      </div>
    </div>


   <?=$this->session->flashdata('message'); ?>

    <div class="row">
      <div class="col-12 mt-0 text-center">
        <h5>Daftar undangan</h5>
      </div>
    </div>

    <div class="accordion" id="listnama<?=$detailundangan['id_pengundang']; ?>" style="margin-top:-18px">
  <?php 
    $idpengundang=$this->session->userdata('id_p');
    $querylist="SELECT * from diundang where matchid_pengundang='$idpengundang' order by nama_diundang"; 
    $resultlist=$this->db->query($querylist)->result_array();
  ?>
  <?php $no=1; foreach($resultlist as $rlist): ?>
      <div class="card">
        <div class="card-header" id="headinglist <?=$rlist['id_diundang']; ?>" style="padding:0">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapselist<?=$rlist['id_diundang']; ?>" aria-expanded="true" aria-controls="collapselist<?=$rlist['id_diundang']; ?>">
              <span><?=$no++; ?>. <?=$rlist['nama_diundang']; ?></span>
            <?php if($rlist['absen_diundang']=='hadir'){ ?> 
              <span><i class="ion-android-checkbox-outline"></i>  <?=$rlist['jumlah_kehadiran']; ?></span>
            <?php }else if($rlist['absen_diundang']=='tidak'){ ?>
              <span><i class="ion-close-round text-danger"></i>  <?=$rlist['jumlah_kehadiran']; ?></span>
            <?php }else{} ?>
            </button>
          </h2>
        </div>

        <div id="collapselist<?=$rlist['id_diundang']; ?>" class="collapse" aria-labelledby="headinglist <?=$rlist['id_diundang']; ?>" data-parent="#listnama<?=$detailundangan['id_pengundang']; ?>">
          <div class="card-body" style="padding:2px 0px 5px 20px;">

            <div class="mb-0">
              <div class="card shadow" style="padding:0">
                <div class="card-body py-0" style="margin:0">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-0">
                      <div class="h5 mb-0 text-gray-800"><?=$rlist['url_diundang']; ?></div>
                      <div class="mb-0" style="font-size:14px">Nama diUrl</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php if($rlist['nomer_diundang']){ ?>
            <div class="mb-0">
              <div class="card shadow" style="padding:0">
                <div class="card-body py-0" style="margin:0">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-0">
                      <div class="h5 mb-0 text-gray-800"><?=$rlist['nomer_diundang']; ?></div>
                      <div class="mb-0" style="font-size:14px">Nomer telepon</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <div class="mb-0">
              <?php
                // $link=base_url('pernikahan'.'/'.$detailundangan['tema_template'].'/'.$detailundangan['url_pengundang'].'/'.$rlist['url_diundang'].'/');
                $link=base_url('wedding'.'/'.$detailundangan['url_pengundang'].'/'.$rlist['url_diundang'].'/');
              ?>
              <div class="card shadow" style="padding:0">
                <div class="card-body py-0" style="margin:0">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-0">
                      <div class="h5 mb-0 text-gray-800 clip<?=$rlist['id_diundang']; ?>"><?=$link; ?></div>
                      <span>Share : | 
                        <a class="whatsapp" href="https://api.whatsapp.com/send?text=<?=$link; ?>" title="Share this post on Whatsapp" target="_blank"><i style="font-weight:bold;font-size:22px;" class="ion-social-whatsapp text-success"></i></a>  |  
                        <a href="https://www.facebook.com/share.php?u=<?=$link; ?>" title="Share this post on Facebook" target="_blank"><i style="font-weight:bold;font-size:22px;" class="ion-social-facebook text-primary"></i></a>  |  
                        <span onclick="copyToClipboard('.clip<?=$rlist['id_diundang']; ?>');" class="clipboard" title="Copy on clipboard"><i style="font-weight:bold;font-size:23px;margin:0 6px 0 6px;" class="ion-ios-copy-outline text-secondary onclip" data-toggle="tooltip" data-placement="top" title="Copied!"></i></span> |
                        <!-- <a class="twitter" href="https://twitter.com/share?text=undangan&url=<?=$link; ?>" title="Share this post on Twitter" target="_blank"><i style="font-weight:bold;font-size:22px;" class="ion-social-twitter text-info"></i></a>  | -->
                      </span>
                      <div class="mb-0 d-flex justify-content-between" style="font-size:14px"><span>Link Url</span> <span><a target="_blank" style="margin:5px 5px 0 0" class="text-primary ml-auto" href="<?=$link; ?>">Lihat undangan</a></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-start ml-3">
                <a onclick="return confirm('Pilih Oke untuk hapus!');" style="margin:5px 5px 0 0" class="text-danger" href="<?=base_url('users/hapusdaftarundanganuser/'.$rlist['id_diundang']); ?>">Hapus</a>
                <a style="margin:5px 5px 0 10px" class="text-warning modaleditdaftar" data-toggle="modal" data-target="#modaleditdaftarundangan" data-iddiundang="<?=$rlist['id_diundang']; ?>">Edit</a>
              </div>
            </div>

          </div>
        </div>
      </div>
  <?php endforeach; ?>
    </div>

    </div>
    <hr class="mb-5" style="border:1px solid grey;margin-bottom:10px;margin-top:10px">
    <!-- div tutup bungkus daftar undangan -->

  </section>

  </main><!-- End #main -->


  <!-- Modal tambah daftar undangan -->
  <div class="modal fade" id="modaltambahdaftarundangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah daftar undangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form action="<?=base_url('users/tambahdaftarundanganuser'); ?>" method="post">
          <input type="hidden" name="idtpengundang" value="<?=$detailundangan['id_pengundang']; ?>">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama diUrl</span>
            </div>
            <input type="text" class="form-control" placeholder="Nama tidak boleh spasi.." aria-label="Username" aria-describedby="basic-addon1" name="tnamaurl" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama lengkap</span>
            </div>
            <input type="text" class="form-control" placeholder="nama yang diundang" aria-label="Username" aria-describedby="basic-addon1" name="tnamadiundang" required>
          </div>
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">No.Tlp</span>
            </div>
            <input type="text" class="form-control" placeholder="optional" aria-label="Username" aria-describedby="basic-addon1" name="tnomerdiundang">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Alamat</span>
            </div>
            <input type="text" class="form-control" placeholder="optional" aria-label="Username" aria-describedby="basic-addon1" name="talamatdiundang">
          </div> -->

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" name="tambahdaftar">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal tambah daftar undangan -->
  <div class="modal fade" id="modaleditdaftarundangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit daftar undangan <span class="loader"><img src="<?=base_url('assets/img/preloader.gif'); ?>" width="25"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <div class="prebuka">
        <div class="modal-body">

        <form action="<?=base_url('users/editdaftardiundanguser'); ?>" method="post">
          <input type="hidden" name="idepengundang" value="<?=$detailundangan['id_pengundang']; ?>">
          <input type="hidden" name="idediundang" class="idediundang">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama diUrl</span>
            </div>
            <input type="text" class="form-control enamaurl" placeholder="Nama tidak boleh spasi" aria-label="Username" aria-describedby="basic-addon1" name="enamaurl" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama lengkap</span>
            </div>
            <input type="text" class="form-control enamadiundang" placeholder="nama yang diundang" aria-label="Username" aria-describedby="basic-addon1" name="enamadiundang" required>
          </div>
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">No.Tlp</span>
            </div>
            <input type="text" class="form-control enomerdiundang" placeholder="optional" aria-label="Username" aria-describedby="basic-addon1" name="enomerdiundang">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Alamat</span>
            </div>
            <input type="text" class="form-control ealamatdiundang" placeholder="optional" aria-label="Username" aria-describedby="basic-addon1" name="ealamatdiundang">
          </div> -->

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" name="eeditdaftar">Simpan</button>
        </div>
        </form>
      </div>

      </div>
    </div>
  </div>


   <!-- Modal tambah undangan -->
  <div class="modal fade" id="modaldetailundangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail undangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <ul class="list-group">
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['url_pengundang']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama diURL)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['namapanggilan_priawanita']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama panggilan pria dan wanita)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['namalengkap_pria']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama lengkap mempelai pria)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['orangtua_pria']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama orang tua mempelai pria)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['namalengkap_wanita']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama lengkap mempelai wanita)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['orangtua_wanita']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama orang tua mempelai wanita)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=date('d M Y', strtotime($detailundangan['tanggal_akad'])).', '.$detailundangan['jam_akad']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Tanggal & jam akad pernikahan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['alamat_akad']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Alamat akad pernikahan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=date('d M Y', strtotime($detailundangan['tanggal_acara'])).', '.$detailundangan['jam_acara']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Tanggal & jam pesta pernikahan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['alamat_acara']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Alamat pesta pernikahan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['ucapan_awal']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Ucapan awal pada undangan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['ucapan_ahir']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Ucapan ahir pada undangan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['nomer_pengundang']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nomer telepon pengundang L)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['nomer_pengundangw']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nomer telepon pengundang P)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['jenis_acara']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Jenis undangan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['tema_template']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Tema undangan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item d-flex justify-content-between">
              <span>
              <span class="text-info"><?=$detailundangan['color_template']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Warna dasar)</span>
              </span>
              <span style="background-color:<?=$detailundangan['color_template']; ?>;height:30px;width:50%;margin-left:5px"></span>
            </li>
           <!--  <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info">
                <?php 
                  if($detailundangan['paket_acara']=='paketeasy'){
                    $hargapaket='(100rb)';
                  }else if($detailundangan['paket_acara']=='paketmedium'){
                    $hargapaket='(200rb)';
                  }else if($detailundangan['paket_acara']=='pakethard'){
                    $hargapaket='(300rb)';
                  }else{
                    $hargapaket='(400rb)';
                  }
                ?>
                <?=$detailundangan['paket_acara'].$hargapaket; ?>
              </span><br>
              <span style="font-size:12px;color:grey"> (Paket undangan)</span>
            </li> -->
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item d-flex justify-content-between align-items-center">
              <div class="text-center">
              <img width="50" height="50" style="border-radius:5px" src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>"><br>(mempelai pria)
              </div>
              <div class="text-center">
              <span class="text-info"><img width="50" height="50" style="border-radius:5px" src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>"></span><br>(mempelai wanita)
              </div>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item text-center">
              <audio controls style="width:100%">
                <source src="<?=base_url('assets/img/musikwedding/'.$detailundangan['musik_acara']); ?>" type="audio/mpeg">
              </audio><br>
              <span style="font-size:12px;color:grey"> (Musik undangan)</span>
            </li>
          </ul>

        </div>
        <!-- <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" name="tambahsimpan">Simpan</button>
        </div> -->
      </div>
    </div>
  </div>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><a href="<?=base_url(); ?>"><span class="text-primary">me</span><span class="text-danger"><u>INVITE</u></span><span class="text-primary">you</span></a></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a class="text-primary" href="https://www.facebook.com/ketut.k.ii/">Ketut Krisna</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- <style>
    .popover{
          position:absolute;
          bottom:30px;
          left: 0px;
          right: 0;

          /*height:50px;*/
        }
  </style> -->

  <!-- <div class="text-primary" style="position:fixed;bottom:30px;left:15px;border-radius:50%;z-index:1020;">
    <div style="background-color:rgba(26, 199, 84,);padding:4px;">
      <span style="bottom:70px;position:absolute;" class="cobain" data-placement="right" data-toggle="popover" title="Pesan via WA" data-html="true" data-content="
        <img class='imgradius' src='<?=base_url('assets/img/contoh/mpria.jpg'); ?>' width='25'><a class='text-success' href='#'> Mempelai Pria</a><br><img class='imgradius' src='<?=base_url('assets/img/contoh/mwanita.jpg'); ?>' width='25'><a class='text-success' href='#'> Mempelai Wanita</a>
      ">
      <i class="fa fa-whatsapp" style="font-size:50px;color:#00c45c;"></i>
      </span>
    </div>
  </div> -->

  <a href="#" style="bottom:30px" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
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
  <!-- script pribadi -->
  <script>
    $(document).ready(function(){


    $('[data-toggle="popover"]').popover();
    $('.loader').hide();
    $('body').on('click','.modaleditdaftar',function(){
        $('.loader').show();
        $('.prebuka').hide();
        var ideditdiundang=$(this).data('iddiundang');
        $.ajax({
          url: '<?=base_url('users/ajaxeditdiundanguser'); ?>',
          method: "POST",
          data: {ideditdiundang:ideditdiundang},
          dataType: "json",
          success:function(data){
            // console.log(data);
            $('.loader').hide();
            $('.prebuka').show();
            $('.idediundang').val(data.id_diundang);
            $('.enamaurl').val(data.url_diundang);
            $('.enamadiundang').val(data.nama_diundang);
            $('.enomerdiundang').val(data.nomer_diundang);
            $('.ealamatdiundang').val(data.alamat_diundang);
          }
        });
      });

    $('body').on('click','.onclip',function(){
      $(this).tooltip('show');
    });


  });
  </script>

</body>

</html>