<?php 

  $idp=$detailundangan['id_pengundang'];
  $queryundangan="SELECT * from pengundang where id_pengundang='$idp'";
  $detailundangan=$this->db->query($queryundangan)->row_array();

  $daftar_hari = array(
   'Sunday' => 'Minggu',
   'Monday' => 'Senin',
   'Tuesday' => 'Selasa',
   'Wednesday' => 'Rabu',
   'Thursday' => 'Kamis',
   'Friday' => 'Jumat',
   'Saturday' => 'Sabtu'
  );
  $dateakad=$detailundangan['tanggal_akad'];
  $namahariakad = date('l', strtotime($dateakad));

  $dateresepsi=$detailundangan['tanggal_acara'];
  $namahariresepsi = date('l', strtotime($dateresepsi));

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Setting undangan</title>
  <meta content="Halaman atur undangan admin" name="description">
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
  <script>
    function copyToClipboard(element) {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).text()).select();
      document.execCommand("copy");
      $temp.remove();
    }
  </script>
  <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

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
    .popover{
      max-width: 50%;
    }
    .mobile-nav-toggle{
      z-index: 999
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color:black">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <!-- <h1 class="logo mr-auto"><a href="<?=base_url('admin'); ?>" style="font-size:25px"><i class="fa fa-arrow-left"></i> <span class="text-primary">Admin<span class="text-white">(</span>M<span class="text-danger">I</span>Y<span class="text-white">)</span></span> </a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="<?=base_url('admin'); ?>" class="logo mr-auto"><i style="font-size:25px" class="fa fa-arrow-left text-white"></i><img src="<?=base_url('/'); ?>assets/img/logomiy.png" alt="" class="img-fluid"><span class="text-primary" style="font-size:25px">Admin</span></a>
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

    <div class="row">
      <div class="col-12 d-flex justify-content-between mb-1">
        <a onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/deletepengundang/'.$detailundangan['id_pengundang']); ?>" class="btn btn-danger btn-sm">Delete</a>
        <button type="button" class="btn btn-primary btn-sm editundangan" data-toggle="modal" data-target="#modaleditundangan" data-ideditundangan="<?=$detailundangan['id_pengundang']; ?>">Edit</button>
      </div>
    </div>

    <ul class="list-group text-center">
      <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=$detailundangan['namalengkap_pria']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Nama lengkap mempelai pertama)</span>
      </li>
      <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=$detailundangan['namalengkap_wanita']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Nama lengkap mempelai kedua)</span>
      </li>
      <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=$daftar_hari[$namahariakad].', '.date('d M Y', strtotime($detailundangan['tanggal_akad'])).', '.$detailundangan['jam_akad']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Tanggal akad pernikahan)</span>
      </li>
      <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
        <span class="text-info"><?=$daftar_hari[$namahariresepsi].', '.date('d M Y', strtotime($detailundangan['tanggal_acara'])).', '.$detailundangan['jam_acara']; ?></span><br>
        <span style="font-size:12px;color:grey"> (Tanggal resepsi pernikahan)</span>
      </li>
    </ul>

    <div class="row">
      <div class="col-12 d-flex justify-content-end mt-2">
        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaldetailundangan">Lihat selengkapnya</button>
      </div>
    </div>
    
    </div>
    <hr style="border:1px solid grey;margin-bottom:10px;margin-top:10px">
    <!-- tutup div bungkus data 1-->

    <!-- div bungkus galeri -->
    <div>

    <div class="row">
      <div class="col-12 d-flex justify-content-start">
        <button type="button" class="btn btn-primary btn-sm editundangan mb-1" data-toggle="modal" data-target="#modaltambahgaleri">Tambah galeri</button>
      </div>
    </div>

    <div class="card-group">
      <div class="row" style="padding:0;margin:0;">
    <?php 
      $idfpengundang=$detailundangan['id_pengundang'];
      $querylistf="SELECT * from galeris where idpengundang_galeri='$idfpengundang'"; 
      $resultlistfoto=$this->db->query($querylistf)->result_array();
    ?>
    <?php foreach($resultlistfoto as $rlf): ?>
        <div class="col-2 text-center" style="padding:0;margin:0;">
        <div class="card">
          <img src="<?=base_url('assets/img/fotogaleripelanggan/'.$rlf['foto_galeri']); ?>" class="card-img-top" alt="..." height="60">
          <div class="card-body" style="padding:0">
            <a onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/hapusgaleri/'.$rlf['id_galeri'].'/'.$detailundangan['id_pengundang']); ?>" class="text-danger">hapus</a>
          </div>
        </div>
        </div>
    <?php endforeach; ?>
      </div>
    </div>  

    </div>
    <hr style="border:1px solid grey;margin-bottom:10px;margin-top:10px">
    <!-- div tutup bungkus galeri -->

    <!-- div bungkus ganti background -->
    <div>

    <div class="row">
      <div class="col-12 d-flex justify-content-start mb-1">
        <button type="button" class="btn btn-primary btn-sm editundangana" data-toggle="modal" data-target="#modalgantibackground">Ganti Background</button>
      </div>
    </div>

    <div class="card-group">
      <div class="row">
        <div class="col-6 text-center d-flex justify-content-center">
        <div class="card">
          <span style="position:absolute;right:0px;font-size:15px;padding:2px;background-color:rgba(0,0,0,.5);color:white;">
            <?php 
              if($detailundangan['tema_template']=='classic'){
                echo "1600 x 972";
              }else if($detailundangan['tema_template']=='rustic'){
                echo "1600 x 1272";
              }else if($detailundangan['tema_template']=='tematic'){
                echo "1500 x 998";
              }
            ?>
          </span>
          <img src="<?=base_url('assets/img/backgroundawal/'.$detailundangan['background_welcome']); ?>" class="card-img-top" alt="..." widht="300">
          <div class="card-body" style="padding:0">
            <a onclick="return confirm('Pilih Oke untuk ubah ke Default!');" href="<?=base_url('admin/defaultbackground/'.$detailundangan['id_pengundang']); ?>" class="text-danger">Ganti Default</a>
          </div>
        </div>
        </div>
      </div>
    </div>  

    </div>
    <hr style="border:1px solid grey;margin-bottom:10px;margin-top:10px">
    <!-- div tutup bungkus ganti background -->


    <!-- div bungkus musik -->
    <div>

      <form id="upload_form" enctype="multipart/form-data">
        <div>
            <input type="hidden" class="idmusikpengundang" name="idmusikpengundang" value="<?=$detailundangan['id_pengundang']; ?>">
            <input type="file" name="datafilemusik" id="fileku"><br>
          <div class="progress mt-2 hideprogres">
            <div class="progress-bar progress-bar-striped" id="progressBar" role="progressbar" style="width: 0%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0%</div>
          </div>
            <span id="total"></span>
        </div>
        <div class="d-flex justify-content-end" style="margin-top:10px">
          <button type="button" class="btn btn-sm btn-primary ml-auto klikbutton">Update musik</button>
        </div>
      </form>

       

    </div>
    
    <hr style="border:1px solid grey;margin-bottom:10px;margin-top:10px">
    <!-- div tutup bungkus musik -->

    <!-- div bungkus shraing -->
    <div>
      <img width="50px" class="img-thumbnail" src="<?=base_url('assets/img/imgsharing/'.$detailundangan['img_sharing']); ?>"> <?=$detailundangan['namapanggilan_priawanita']; ?>
      <a class="text-danger bg-warning p-1" onclick="return confirm('Pilih Oke untuk ubah ke default!')" href="<?=base_url('admin/defaultimgsharing/'.$detailundangan['id_pengundang']); ?>">Set to dafault</a>
      <form action="<?=base_url('admin/updateimgsharing'); ?>" method="post" enctype="multipart/form-data">
        <div>
            <input type="hidden" class="idsharepengundang" name="idsharepengundang" value="<?=$detailundangan['id_pengundang']; ?>">
            <div style="display:flex;justify-content:space-around;">
            <input type="file" name="fotosharing">
            <button type="submit" class="btn btn-sm btn-primary ml-auto">Update</button>
            </div>
        </div>
      </form>

       

    </div>
    
    <hr style="border:1px solid grey;margin-bottom:10px;margin-top:10px">
    <!-- div tutup bungkus sharing -->



    <!-- <div class="embed-responsive embed-responsive-16by9">
      <span class="text-info"><?=$detailundangan['map_acara']; ?></span>
    </div> -->

    <!-- div bungkus daftar undangan -->
    <div>


      <?php 
        $idpengundangsum=$detailundangan['id_pengundang'];
        $queryhadir="SELECT SUM(jumlah_kehadiran) as jumlahhadir from diundang where matchid_pengundang='$idpengundangsum' and absen_diundang='hadir'"; 
        $resultsum=$this->db->query($queryhadir)->row_array();

        $querytidak="SELECT SUM(jumlah_kehadiran) as jumlahtidak from diundang where matchid_pengundang='$idpengundangsum' and absen_diundang='tidak'"; 
        $resultsumtidak=$this->db->query($querytidak)->row_array();

        $queryragu="SELECT SUM(jumlah_kehadiran) as jumlahragu from diundang where matchid_pengundang='$idpengundangsum' and absen_diundang='ragu'"; 
        $resultsumragu=$this->db->query($queryragu)->row_array();

        $querynull="SELECT count(jumlah_kehadiran) as jumlahnull from diundang where matchid_pengundang='$idpengundangsum' and absen_diundang='null'"; 
        $resultsumnull=$this->db->query($querynull)->row_array();

        $querysemua="SELECT count(jumlah_kehadiran) as jumlahsemua from diundang where matchid_pengundang='$idpengundangsum'"; 
        $resultsumsemua=$this->db->query($querysemua)->row_array();
      ?>


      
    <div class="row">
      <div class="col-12 mt-2 mb-3 d-flex justify-content-start">
        <button type="button" class="btn btn-primary btn-sm tambahdaftaru" data-toggle="modal" data-target="#modaltambahdaftarundangan">Tambah daftar undangan</button>
      </div>
    </div>

    <div class="row">
      <div class="col-12 mt-0 mb-3">
        <div class="d-flex justify-content-between">
        <span style="background-color:#eee;box-shadow:0 0 3px rgba(0,0,0,.4);padding:0 8px 0 8px;border-radius:5px;"><i style="font-size:22px;font-weight:bold;border-right:1px solid #ccc;padding-right:5px;" class="ion-android-checkbox-outline text-primary"></i> Hadir : <?=$resultsum['jumlahhadir']; ?> </span>
        <span style="background-color:#eee;box-shadow:0 0 3px rgba(0,0,0,.4);padding:0 8px 0 8px;border-radius:5px;"><i style="font-size:22px;font-weight:bold;border-right:1px solid #ccc;padding-right:5px;" class="ion-android-sync text-warning"></i> Belum confirmasi : <?=$resultsumnull['jumlahnull']; ?> </span>
        </div>
        <div class="d-flex justify-content-between mt-2">
        <span style="background-color:#eee;box-shadow:0 0 3px rgba(0,0,0,.4);padding:0 8px 0 8px;border-radius:5px;"><i style="font-size:22px;border-right:1px solid #ccc;padding-right:5px;" class="ion-close-round text-danger"></i> Tidak hadir : <?=$resultsumtidak['jumlahtidak']; ?> </span>
        <span style="background-color:#eee;box-shadow:0 0 3px rgba(0,0,0,.4);padding:0 8px 0 8px;border-radius:5px;"><i style="font-size:22px;font-weight:bold;border-right:1px solid #ccc;padding-right:5px;" class="ion-ios-infinite-outline text-secondary"></i> Masih ragu : <?=$resultsumragu['jumlahragu']; ?> </span>
        </div>
        <div class="d-flex justify-content-start mt-2">
        <span style="background-color:#eee;box-shadow:0 0 3px rgba(0,0,0,.4);padding:0 8px 0 8px;border-radius:5px;"><i style="font-size:22px;border-right:1px solid #ccc;padding-right:5px;" class="ion-podium text-success"></i> Semua undangan : <?=$resultsumsemua['jumlahsemua']; ?> </span>
        </div>
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
    $idpengundang=$detailundangan['id_pengundang'];
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
            <?php }else if($rlist['absen_diundang']=='ragu'){ ?>
              <span><i class="ion-ios-infinite-outline text-secondary" style="font-size:16px"></i>  <?=$rlist['jumlah_kehadiran']; ?></span>
            <?php }else{ ?>
              
            <?php } ?>
            </button>
          </h2>
        </div>

        <div id="collapselist<?=$rlist['id_diundang']; ?>" class="collapse" aria-labelledby="headinglist <?=$rlist['id_diundang']; ?>" data-parent="#listnama<?=$detailundangan['id_pengundang']; ?>">
          <div class="card-body" style="padding:2px 0px 5px 20px;">

            <!-- <div class="mb-0">
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
            </div> -->
            <!-- <?php if($rlist['nomer_diundang']){ ?> -->
            <!-- <div class="mb-0">
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
            </div> -->
            <!-- <?php } ?> -->
            <div class="mb-0">
              <?php
                // $link=base_url('pernikahan'.'/'.$detailundangan['tema_template'].'/'.$detailundangan['url_pengundang'].'/'.$rlist['url_diundang'].'/');
                $link=base_url('wedding'.'/'.$detailundangan['url_pengundang'].'/'.$rlist['url_diundang'].'/');
              ?>
              <div class="card shadow" style="padding:0">
                <div class="card-body py-0" style="margin:0">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-0">
                      <div class="h5 pr-2 pl-2 pt-1 pb-1 mb-0 mt-1 text-gray-800 clip<?=$rlist['id_diundang']; ?>" style="background-color:#fafafa;border-radius:5px;box-shadow:0 0 4px rgba(0,0,0,.4)"><?=$link; ?></div>
                      <span>Share : | 
                        <a class="whatsapp" href="https://api.whatsapp.com/send?text=<?=$link; ?>" title="Share this post on Whatsapp" target="_blank"><i style="font-weight:bold;font-size:22px;" class="ion-social-whatsapp text-success"></i></a>  |  
                        <a href="https://www.facebook.com/share.php?u=<?=$link; ?>" title="Share this post on Facebook" target="_blank"><i style="font-weight:bold;font-size:22px;" class="ion-social-facebook text-primary"></i></a>  |  
                        <span onclick="copyToClipboard('.clip<?=$rlist['id_diundang']; ?>');" class="clipboard" title="Copy on clipboard"><i style="font-weight:bold;font-size:23px;margin:0 6px 0 6px;cursor:copy;" class="ion-ios-copy-outline text-secondary onclip" data-toggle="tooltip" data-placement="top" title="Copied!"></i></span> |
                        <!-- <a class="twitter" href="https://twitter.com/share?text=undangan&url=<?=$link; ?>" title="Share this post on Twitter" target="_blank"><i style="font-weight:bold;font-size:22px;" class="ion-social-twitter text-info"></i></a>  | -->
                      </span>
                      <div class="mb-0 d-flex justify-content-between" style="font-size:14px"><span></span> <span><a target="_blank" style="margin:0px;font-size:15px;" class="text-primary ml-auto" href="<?=$link; ?>">Lihat undangan <span style="font-size:18px">&raquo;</span></a></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-start ml-3">
                <a onclick="return confirm('Pilih Oke untuk hapus!');" style="margin:5px 5px 0 0" class="text-danger" href="<?=base_url('admin/hapusdaftarundangan/'.$rlist['id_diundang'].'/'.$detailundangan['id_pengundang']); ?>">[<u>Hapus</u>]</a>
                <a style="margin:5px 5px 0 10px" class="text-success modaleditdaftar" data-toggle="modal" data-target="#modaleditdaftarundangan" data-iddiundang="<?=$rlist['id_diundang']; ?>">[<u>Edit</u>]</a>
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
  <div class="modal fade" id="modaltambahgaleri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah galeri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form action="<?=base_url('admin/tambahgaleri'); ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="idtambahgaleri" value="<?=$detailundangan['id_pengundang']; ?>">
          <input type="hidden" name="urltambahgaleri" value="<?=$detailundangan['url_pengundang']; ?>">
          <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
              <span style="padding:0" class="input-group-text" id="inputGroupFileAddon01">Foto galeri</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="tambahfgaleri" required>
              <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Caption</span>
            </div>
            <input type="text" class="form-control" placeholder="optional" aria-label="Username" aria-describedby="basic-addon1" name="tambahcaption">
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" name="tambahglr">Tambah</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Modal tambah daftar undangan -->
  <div class="modal fade" id="modalgantibackground" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ganti background awal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form action="<?=base_url('admin/gantibackground'); ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="idgantibg" value="<?=$detailundangan['id_pengundang']; ?>">
          <!-- <input type="hidden" name="urltambahgaleri" value="<?=$detailundangan['url_pengundang']; ?>"> -->
          <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
              <span style="padding:4px" class="input-group-text" id="inputGroupFileAddon01">Foto</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="fotogantibg" required>
              <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" name="okgantibg">Ganti</button>
        </div>
        </form>
      </div>
    </div>
  </div>


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
        <div class="modal-body pt-1 pb-1">

        <form action="<?=base_url('admin/tambahdaftarundangan'); ?>" method="post">
          <input type="hidden" name="idtpengundang" value="<?=$detailundangan['id_pengundang']; ?>">
          <div class="mb-3 p-1" style="background-color:rgba(232, 183, 7,.4);border-radius:3px;word-wrap:break-word;">
          <span><?=base_url('/wedding/'.$detailundangan['url_pengundang'].'/'); ?><span class="showlink" style="background-color:rgba(250, 209, 7,.9);border-radius:10px;box-shadow:0 0 3px rgba(250, 250, 250,.5)"></span>
          </span>
          <span><input style="border:1px solid #ccc;" type="hidden" class="showcustom" placeholder="custom nama" name="tnamaurl" required></span>
          <span class="pl-1 trigereditmanual" style="color:green;cursor:pointer;">[<u>edit</u>]</span>
        </div>

          <!-- <div class="input-group mb-3 customnamainvit">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama Link</span>
            </div>
            <input type="text" class="form-control" placeholder="Nama tidak boleh spasi.." aria-label="Username" aria-describedby="basic-addon1" name="tnamaurl" required>
          </div> -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama</span>
            </div>
            <input type="text" class="form-control customnamalengkap" placeholder="Ketik nama yang diundang" aria-label="Username" aria-describedby="basic-addon1" name="tnamadiundang" autocomplete="off" required>
          </div>

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

      <div class="prebukaedit">
        <div class="modal-body">

        <form action="<?=base_url('admin/editdaftardiundang'); ?>" method="post">
          <input type="hidden" name="idepengundang" value="<?=$detailundangan['id_pengundang']; ?>">
          <input type="hidden" name="idediundang" class="idediundang">
          <div class="mb-3 p-1" style="background-color:rgba(232, 183, 7,.4);border-radius:3px;word-wrap:break-word;">
            <span><?=base_url('/wedding/'.$detailundangan['url_pengundang'].'/'); ?><span class="eshowlink" style="background-color:rgba(250, 209, 7,.9);border-radius:10px;box-shadow:0 0 3px rgba(250, 250, 250,.5)"></span>
            </span>
            <span><input style="border:1px solid #ccc;" type="text" class="eshowcustom" placeholder="custom nama" name="enamaurl" required></span>
            <span class="pl-1 etrigereditmanual" style="color:green;cursor:pointer;">[<u>edit</u>]</span>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama</span>
            </div>
            <input type="text" class="form-control ecustomnamalengkap" placeholder="Ketik nama yang diundang" aria-label="Username" aria-describedby="basic-addon1" name="enamadiundang" autocomplete="off" required>
          </div>

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
  <div class="modal fade" id="modaleditundangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit undangan <span class="loader"><img src="<?=base_url('assets/img/preloader.gif'); ?>" width="25"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      
        <div class="modal-body">

        <div class="prebuka">
        <form action="<?=base_url('admin/editundangan'); ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="ideundangan" class="ideundangan" value="<?=$detailundangan['id_pengundang'] ?>">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama diUrl</span>
            </div>
            <input type="text" class="form-control tambahnamaurl" placeholder="Nama tidak boleh spasi.." aria-label="Username" aria-describedby="basic-addon1" name="tambahnamaurl" value="<?=$detailundangan['url_pengundang'] ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama L & W</span>
            </div>
            <input type="text" class="form-control tambahnamalakiperempuan" placeholder="Alex & Bella" aria-label="Username" aria-describedby="basic-addon1" name="tambahnamalakiperempuan">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama L</span>
            </div>
            <input type="text" class="form-control tambahfullnamalaki" placeholder="Full name laki-laki" aria-label="Username" aria-describedby="basic-addon1" name="tambahfullnamalaki">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text btn ortutoltip" id="basic-addon1" data-toggle="popover" title="Contoh template orang tua" data-content='
                  <span class="anakke">Putra pertama dari :</span><br>
                  <span class="ortu">Bapak Romeo & Ibu Romeo</span>
              '>Nama ortu L
              </span>
            </div>
            <input type="text" class="form-control tambahnamaortulaki" placeholder="mr david & ms lina" aria-label="Username" aria-describedby="basic-addon1" name="tambahnamaortulaki">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nama P</span>
            </div>
            <input type="text" class="form-control tambahfullnamaperempuan" placeholder="Full name perempuan" aria-label="Username" aria-describedby="basic-addon1" name="tambahfullnamaperempuan">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text btn ortutoltip" id="basic-addon1" data-toggle="popover" title="Contoh template orang tua" data-content='
                  <span class="anakke">Putri kedua dari :</span><br>
                  <span class="ortu">Bapak Juliete & Ibu Juliete</span>
              '>Nama ortu W
              </span>
            </div>
            <input type="text" class="form-control tambahnamaortuperempuan" placeholder="mr patrik & ms stevani" aria-label="Username" aria-describedby="basic-addon1" name="tambahnamaortuperempuan">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text btn ortutoltip" id="basic-addon1" data-toggle="popover" title="Contoh template no.tlp laki-laki" data-content='
                  +6282179471533l
              '>No.Tlp L
              </span>
            </div>
            <input type="text" class="form-control tambahnomertlp" placeholder="Nomer tlp pengundang L" aria-label="Username" aria-describedby="basic-addon1" name="tambahnomertlp">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text btn ortutoltip" id="basic-addon1" data-toggle="popover" title="Contoh template no.tlp perempuan" data-content='
                  +6282179471533w
              '>No.Tlp W
              </span>
            </div>
            <input type="text" class="form-control tambahnomertlpw" placeholder="Nomer tlp pengundang P" aria-label="Username" aria-describedby="basic-addon1" name="tambahnomertlpw">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Ucapan awal</span>
            </div>
            <textarea class="form-control tambahucapanawal" aria-label="With textarea" placeholder="Ucapan awal pada undangan" name="tambahucapanawal"></textarea>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Ucapan ahir</span>
            </div>
            <textarea class="form-control tambahucapanahir" aria-label="With textarea" placeholder="Ucapan ahir pada undangan" name="tambahucapanahir"></textarea>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Tanggal akad</span>
            </div>
            <input type="date" class="form-control tambahtanggalakad" aria-label="Username" aria-describedby="basic-addon1" name="tambahtanggalakad">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Jam akad</span>
            </div>
            <input type="text" class="form-control tambahjamakad" aria-label="Username" placeholder="10:00 - selesai" aria-describedby="basic-addon1" name="tambahjamakad">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Alamat akad</span>
            </div>
            <input type="text" class="form-control tambahalamatakad" aria-label="Username" placeholder="Tempat akad berlangsung" aria-describedby="basic-addon1" name="tambahalamatakad">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Maps akad</span>
            </div>
            <textarea class="form-control tambahmapakad" aria-label="With textarea" placeholder="Sematkan dari google maps" name="tambahmapakad"></textarea>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Tanggal resepsi</span>
            </div>
            <input type="date" class="form-control tambahtanggalacara" aria-label="Username" aria-describedby="basic-addon1" name="tambahtanggalacara">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Jam resepsi</span>
            </div>
            <input type="text" class="form-control tambahjamacara" aria-label="Username" placeholder="10:00 - selesai" aria-describedby="basic-addon1" name="tambahjamacara">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Alamat resepsi</span>
            </div>
            <input type="text" class="form-control tambahalamatacara" aria-label="Username" placeholder="Tempat resepsi berlangsung" aria-describedby="basic-addon1" name="tambahalamatacara">
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Maps resepsi</span>
            </div>
            <textarea class="form-control tambahmapacara" aria-label="With textarea" placeholder="Sematkan dari google maps" name="tambahmapacara"></textarea>
          </div>
          <!-- <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Musik undangan</span>
            </div>
            <textarea class="form-control tambahmusikacara" aria-label="With textarea" placeholder="Sematkan dari sound cloud" name="tambahmusikacara"></textarea>
          </div> -->
          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text">video</span>
            </div>
            <textarea class="form-control tambahvideoacara" aria-label="With textarea" placeholder="Sematkan dari youtube" name="tambahvideoacara"></textarea>
          </div>


          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text btn" data-toggle="modal" data-target="#exampleModalstori">Stori</span>
            </div>
            <textarea class="form-control tambahstoriacara" aria-label="With textarea" placeholder="Stori pengundang" name="tambahstoriacara"></textarea>
          </div>
          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text btn" data-toggle="modal" data-target="#exampleModalbank">Rekening</span>
            </div>
            <textarea class="form-control tambahrekeningacara" aria-label="With textarea" placeholder="Rekening pengundang" name="tambahrekeningacara"></textarea>
          </div>


          <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
              <span style="padding:0" class="input-group-text tambahfotolaki" id="inputGroupFileAddon01">Foto L</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="tambahfotolaki">
              <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
            </div>
          </div>
          <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
              <span style="padding:0" class="input-group-text tambahfotoperempuan" id="inputGroupFileAddon02">Foto P</span>
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
            <select class="custom-select tambahjenisacara" id="inputGroupSelect01" name="tambahjenisacara">
              <option value="pernikahan">Pernikahan</option>
              <option value="ulangtahun" class="disabled" disabled>Ulang tahun</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect02">Tema undangan</label>
            </div>
            <select class="custom-select tambahtemaundangan" id="inputGroupSelect02" name="tambahtemaundangan">
              <option value="classic">Classic</option>
              <option value="rustic">Rustic</option>
              <option value="tematic">Tematic</option>
              <option value="vantage">Vantage</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                Default: <?php if($detailundangan['tema_template']=='tematic'){
                  echo "#2484a6";
                }else if($detailundangan['tema_template']=='rustic'){
                  echo "#000000";
                }else if($detailundangan['tema_template']=='classic'){
                  echo "#ffffff";
                }else if($detailundangan['tema_template']=='vantage'){
                  echo "#dce0e0";
                } ?> 
                <span style="background-color:<?=$detailundangan['color_template']; ?>;height:20px;width:20px;margin-left:5px"></span>
              </span>
            </div>
            <input type="text" class="form-control tambahwarnadasar" aria-label="Username" placeholder="Warna dasar template" aria-describedby="basic-addon1" name="tambahwarnadasar">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                Default: <?php if($detailundangan['tema_template']=='tematic'){
                  echo "#2484a6";
                }else if($detailundangan['tema_template']=='rustic'){
                  echo "#000000";
                }else if($detailundangan['tema_template']=='classic'){
                  echo "#f2f2f2";
                }else if($detailundangan['tema_template']=='vantage'){
                  echo "#319e72";
                } ?> 
                <span style="background-color:<?=$detailundangan['color_template2']; ?>;height:20px;width:20px;margin-left:5px"></span>
              </span>
            </div>
            <input type="text" class="form-control tambahwarnadasar2" aria-label="Username" placeholder="Warna dasar template 2" aria-describedby="basic-addon1" name="tambahwarnadasar2">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text btn">Info modal</span>
            </div>
            <textarea class="form-control tambahinformasi" aria-label="With textarea" placeholder="Informasi pada pop up awal" name="tambahinformasi"></textarea>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Paket undangan</label>
            </div>
            <select class="custom-select tambahpaketacara" id="inputGroupSelect01" name="tambahpaketacara">
              <option value="paketeasy">Paket easy(100rb)</option>
              <option value="paketmedium" class="disabled">Paket medium(200rb)</option>
              <option value="pakethard" class="disabled">Paket hard(300rb)</option>
              <option value="paketspesial" class="disabled">Paket spesial(400rb)</option>
            </select>
          </div>
          </div>

        </div>
        <div class="prebuka">
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" name="tambahsimpan">Simpan</button>
        </div>
        </div>
        </form>

      </div>
    </div>
  </div>



<!-- <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script> -->
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
        <div class="modal-body text-center">

          <ul class="list-group">
            <li style="padding:5px 15px 5px 15px;line-height:16px" class="list-group-item d-flex justify-content-between align-items-center">
              <div class="text-center">
              <img width="50" height="50" style="border-radius:5px" src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>"><br>(Mempelai pertama)
              </div>
              <div class="text-center">
              <span class="text-info"><img width="50" height="50" style="border-radius:5px" src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>"></span><br>(Mempelai kedua)
              </div>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['namapanggilan_priawanita']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama panggilan mempelai pertama dan kedua)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['namalengkap_pria']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama lengkap mempelai pertama)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['orangtua_pria']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama orang tua mempelai pertama)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['namalengkap_wanita']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama lengkap mempelai kedua)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['orangtua_wanita']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Nama orang tua mempelai kedua)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$daftar_hari[$namahariakad].', '.date('d M Y', strtotime($detailundangan['tanggal_akad'])).', '.$detailundangan['jam_akad']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Tanggal & jam akad pernikahan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['alamat_akad']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Alamat akad pernikahan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$daftar_hari[$namahariresepsi].', '.date('d M Y', strtotime($detailundangan['tanggal_acara'])).', '.$detailundangan['jam_acara']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Tanggal & jam resepsi pernikahan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['alamat_acara']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Alamat resepsi pernikahan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['ucapan_awal']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Ucapan awal pada undangan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['ucapan_ahir']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Ucapan ahir pada undangan)</span>
            </li>
          <?php if(!empty($detailundangan['nomer_pengundang'])): ?>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=substr($detailundangan['nomer_pengundang'], 0, -1); ?></span><br>
              <span style="font-size:12px;color:grey"> (Nomer telepon pengundang pertama)</span>
            </li>
          <?php endif; ?>
          <?php if(!empty($detailundangan['nomer_pengundangw'])): ?>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=substr($detailundangan['nomer_pengundangw'], 0, -1); ?></span><br>
              <span style="font-size:12px;color:grey"> (Nomer telepon pengundang kedua)</span>
            </li>
          <?php endif; ?>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['jenis_acara']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Jenis undangan)</span>
            </li>
            <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item">
              <span class="text-info"><?=$detailundangan['tema_template']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Tema undangan)</span>
            </li>

            <!-- <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item d-flex justify-content-between">
              <span>
              <span class="text-info"><?=$detailundangan['color_template']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Warna dasar)</span>
              </span>
              <span style="background-color:<?=$detailundangan['color_template']; ?>;height:30px;width:50%;margin-left:5px"></span>
            </li> -->

            
            <li style="padding:5px 15px 5px 15px;line-height:15px;" class="list-group-item">
              <span style="word-wrap:break-word;" class="text-info"><?=base_url('wedding/').$detailundangan['url_pengundang']; ?></span><br>
              <span style="font-size:12px;color:grey"> (Link utama)</span>
            </li>
            <!-- <li style="padding:5px 15px 5px 15px;line-height:15px" class="list-group-item text-center">
              <audio controls style="width:100%">
                <source src="<?=base_url('assets/img/musikwedding/'.$detailundangan['musik_acara']); ?>" type="audio/mpeg">
              </audio><br>
              <span style="font-size:12px;color:grey"> (Musik undangan)</span>
            </li> -->
          </ul>

        </div>
        <!-- <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" name="tambahsimpan">Simpan</button>
        </div> -->
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalstori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Template Stori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body tempatcode" style="padding:0">
        <?php if($detailundangan['tema_template']=='classic'){ ?>
          <script async src="//jsfiddle.net/thisizanagi/cfdka3tm/1/embed/html/dark/"></script>
        <?php }else if($detailundangan['tema_template']=='vantage'){ ?>
          <script async src="//jsfiddle.net/thisizanagi/zd0msp4L/9/embed/html/dark/"></script>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalbank" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Template Rekening</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body tempatcode" style="padding:0">
        <?php if($detailundangan['tema_template']=='classic'){ ?>
          <script async src="//jsfiddle.net/thisizanagi/4aq61gop/3/embed/html/dark/"></script>
        <?php }else if($detailundangan['tema_template']=='vantage'){ ?>
          <script async src="//jsfiddle.net/thisizanagi/c0x3hu72/7/embed/html/dark/"></script>
        <?php } ?>
      </div>
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
  <!-- script pribadi -->
  <script>
    $(document).ready(function(){

    function uploadFile() {
          // membaca data file yg akan diupload, dari komponen 'fileku'
          var file = document.getElementById("fileku").files[0];
          var formdata = new FormData();
          formdata.append("datafilemusik", file);
           
          // proses upload via AJAX disubmit ke 'upload.php'
          // selama proses upload, akan menjalankan progressHandler()
          var ajax = new XMLHttpRequest();
          ajax.upload.addEventListener("progress", progressHandler, false);
          ajax.open("POST", "<?=base_url('admin/uploadmusik'); ?>", true);
          ajax.send(formdata);
      }
       
      function progressHandler(event){
          // hitung prosentase
          var percent = (event.loaded / event.total) * 100;
          $("#progressBar").css('width',percent+'%');
          $("#progressBar").text(Math.round(percent)+'%');
          document.getElementById("total").innerHTML = "Telah terupload "+Math.floor(event.loaded/1048576)+" MB dari "+Math.floor(event.total/1048576)+" MB";
          if(Math.round(percent)==100){
            setTimeout(function() {
              alert('Musik success diupload');
              window.location.reload();
            }, 4000);
          }
      }

      $('.hideprogres').hide();
      $('.klikbutton').on('click',function(){

        var idpengundang=$('.idmusikpengundang').val();
        var file = document.getElementById("fileku").files[0];
        var formdata = new FormData();
        formdata.append("datafilemusiku", file);
        formdata.append("idpengundang", idpengundang);
        $.ajax({
          url: '<?=base_url('admin/uploadmusik'); ?>',
          method: "POST",
          data: formdata,
          processData: false,
          contentType: false,
          dataType: "html",
          success:function(data){
            console.log(data);
            if(data=='Format tidak benar'){
              return alert('Format file harus MP3');
            }else if(data=='File terlalu besar'){
              return alert('Ukuran file terlalu besar MAX(7MB)');
            }else if(data=='musik kosong'){
              return alert('File musik tidak boleh kosong');
            }else{
              $('.hideprogres').show();
              uploadFile();
            }
          }
        });

      });

    $('.loader').hide();
    $('body').on('click','.editundangan',function(){
        var ideditundangan=$(this).data('ideditundangan');
        $('.loader').show();
        $('.prebuka').hide();
        // $('.divedit').hide();
        // $('.batal').hide();
        // $('.simpan').hide();

        // $('.divdetail').fadeIn();
        // $('.delete').fadeIn();
        // $('.edit').fadeIn();

        // $('.gantitext').text('Detail Anggota');
        // $('.loader').show();
        // $('.datahide').hide();
        $.ajax({
          url: '<?=base_url('admin/ajaxeditundangan'); ?>',
          method: "POST",
          data: {ideditundangan:ideditundangan},
          dataType: "json",
          success:function(data){
            $('.loader').hide();
            $('.prebuka').show();
            $('.tambahfotolaki').html('<img class="img-thumbnail" style="border-radius:5px;" width="60px" src="<?=base_url('assets/img/fotopelanggan/');?>'+data.foto_pria+'">');
            $('.tambahfotoperempuan').html('<img class="img-thumbnail" style="border-radius:5px;" width="60px" src="<?=base_url('assets/img/fotopelanggan/');?>'+data.foto_wanita+'">');
            $('.tambahnamaurl').val(data.url_pengundang);
            $('.tambahnamalakiperempuan').val(data.namapanggilan_priawanita);
            $('.tambahfullnamalaki').val(data.namalengkap_pria);
            $('.tambahnamaortulaki').val(data.orangtua_pria);
            $('.tambahfullnamaperempuan').val(data.namalengkap_wanita);
            $('.tambahnamaortuperempuan').val(data.orangtua_wanita);
            $('.tambahnomertlp').val(data.nomer_pengundang);
            $('.tambahnomertlpw').val(data.nomer_pengundangw);
            $('.tambahucapanawal').val(data.ucapan_awal);
            $('.tambahucapanahir').val(data.ucapan_ahir);
            $('.tambahtanggalakad').val(data.tanggal_akad);
            $('.tambahjamakad').val(data.jam_akad);
            $('.tambahalamatakad').val(data.alamat_akad);
            $('.tambahtanggalacara').val(data.tanggal_acara);
            $('.tambahjamacara').val(data.jam_acara);
            $('.tambahalamatacara').val(data.alamat_acara);

            $('.tambahmapakad').val(data.map_akad);
            $('.tambahmapacara').val(data.map_acara);
            $('.tambahmusikacara').val(data.musik_acara);
            $('.tambahvideoacara').val(data.video_acara);
            $('.tambahstoriacara').val(data.stori_pengundang);
            $('.tambahrekeningacara').val(data.rekening_pengundang);
            $('.tambahinformasi').val(data.informasi_modal);

            $('.tambahjenisacara').val(data.jenis_acara);
            $('.tambahtemaundangan').val(data.tema_template);
            $('.tambahwarnadasar').val(data.color_template);
            $('.tambahwarnadasar2').val(data.color_template2);
            $('.tambahpaketacara').val(data.paket_acara);

          }
        });
      });

    $('body').on('click','.tambahdaftaru',function(){
      setTimeout(function() {
        $('.customnamalengkap').focus();
      }, 500);
    });

    $('body').on('click','.modaleditdaftar',function(){
        var ideditdiundang=$(this).data('iddiundang');
        $('.loader').show();
        $('.prebukaedit').hide();
        $.ajax({
          url: '<?=base_url('admin/ajaxeditdiundang'); ?>',
          method: "POST",
          data: {ideditdiundang:ideditdiundang},
          dataType: "json",
          success:function(data){
            $('.loader').hide();
            $('.prebukaedit').show();
            $('.eshowlink').text(data.url_diundang)
            $('.idediundang').val(data.id_diundang);
            $('.eshowcustom').val(data.url_diundang);
            $('.ecustomnamalengkap').val(data.nama_diundang);
            $('.enomerdiundang').val(data.nomer_diundang);
            $('.ealamatdiundang').val(data.alamat_diundang);
          }
        });
      });

    // $('[data-toggle="tooltip"]').tooltip({
    //   title:'oke'
    // });

    // var exampleEl = document.getElementById('storitoltip');
    // var tooltip = new bootstrap.Tooltip(exampleEl,{
    //   'trigger':'click',
    // });
    // $('#storitoltip').tooltip({'trigger':'click','boundary':'scrollParent'});
    $('.ortutoltip').popover({
      'placement':'right',
      'boundary':'clippingParents',
      // 'html':true
    })

    $('body').on('click','.onclip',function(){
      $(this).tooltip('show');
    });

    $('.showcustom').hide();
    $('.trigereditmanual').hide();
    $('.customnamalengkap').on('keyup',function(){
      var stringUrl=$('.customnamalengkap').val();
      var bersihkan=stringUrl.replace(/[^a-zA-Z0-9\_\.\-]/g, "-");
      $('.showlink').text(bersihkan);
      $('.showcustom').val(bersihkan);
      if(stringUrl.length<1){
        $('.trigereditmanual').hide();
      }else{
        $('.trigereditmanual').show();
      }
    });

    var toggle=0;
    $('.trigereditmanual').on('click',function(){
      toggle++;
      if(toggle==1){
        $('.showcustom').show();
        $('.showcustom').focus();
        $('.showcustom').attr('type','text');
        $('.trigereditmanual').html(`[<u>ok</u>]`);
        $('.showcustom').val($('.showlink').text());
      }else{
        toggle=0;
        $('.showcustom').hide();
        $('.showcustom').attr('type','hidden');
        $('.trigereditmanual').html(`[<u>edit</u>]`);
      }
    });

    $('.showcustom').on('keyup',function(){
      var stringUrl=$('.showcustom').val();
      var bersihkan=stringUrl.replace(/[^a-zA-Z0-9\_\.\-]/g, "-");
      $('.showlink').text(bersihkan);
      $('.showcustom').val(bersihkan);
      if(stringUrl.length<1){
        $('.trigereditmanual').hide();
      }else{
        $('.trigereditmanual').show();
      }
    });

    $('.eshowcustom').hide();
    $('.etrigereditmanual').show();
    var toggle1=0;
    $('.etrigereditmanual').on('click',function(){
      toggle1++;
      if(toggle1==1){
        $('.eshowcustom').show();
        $('.eshowcustom').focus();
        $('.eshowcustom').attr('type','text');
        $('.etrigereditmanual').html(`[<u>ok</u>]`);
        $('.eshowcustom').val($('.eshowlink').text());
      }else{
        toggle1=0;
        $('.eshowcustom').hide();
        $('.eshowcustom').attr('type','hidden');
        $('.etrigereditmanual').html(`[<u>edit</u>]`);
      }
    });

    $('.eshowcustom').on('keyup',function(){
      var stringUrl=$('.eshowcustom').val();
      var bersihkan=stringUrl.replace(/[^a-zA-Z0-9\_\.\-]/g, "-");
      $('.eshowlink').text(bersihkan);
      $('.eshowcustom').val(bersihkan);
      if(stringUrl.length<1){
        $('.etrigereditmanual').hide();
      }else{
        $('.etrigereditmanual').show();
      }
    });

    $('.closeout').on('click',function(){
      $('.popupnotif').fadeOut();
    });

    // $('body').on('click','.clipboard',function(e){
    //   e.preventDefault();
    //   // var linkurl=$(this).attr('href');
    //   // $('.cobain').text().select();
    //   // console.log(linkurl);
    // });


  });
  </script>

</body>

</html>