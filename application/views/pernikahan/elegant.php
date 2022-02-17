<?php 
    $daftar_hari = array(
     'Sunday' => 'Minggu',
     'Monday' => 'Senin',
     'Tuesday' => 'Selasa',
     'Wednesday' => 'Rabu',
     'Thursday' => 'Kamis',
     'Friday' => 'Jumat',
     'Saturday' => 'Sabtu'
    );
    $date=$detailundangan['tanggal_acara'];
    $namahari = date('l', strtotime($date));
?>

<!doctype html>
<html lang="en">
  <head>
    <title><?=$title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="max-snippet:-1,max-image-preview:standard,max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="meINVITEyou.com">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="The Wedding Of <?=$detailundangan['namapanggilan_priawanita']; ?>">
    <meta name="description" content="<?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?>"/>
    <meta content="<?=base_url('assets/img/imgsharing/'.$detailundangan['img_sharing']); ?>" property='og:image'/>
    <!-- Favicons -->
    <link href="<?=base_url('/'); ?>assets/img/imgsharing/<?=$detailundangan['img_sharing']; ?>" rel="icon">
    <link href="<?=base_url('/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/temaundangan/engagement/elegant/'); ?>css/timeline.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/temaundangan/engagement/elegant/'); ?>css/gallery.css">
    
    <style>
      body {
        overflow-x:hidden!important;
      }
    </style>
  </head>
  <body id="home">

    <?=$this->session->flashdata('message'); ?>

    <div class="headerawal" style="background-image:url('<?=base_url('assets/img/backgroundawal/'.$detailundangan['background_welcome']); ?>');background-size:cover;height:550px;background-position:center;">
      <div class="headernama text-center" data-aos="fade-down" data-aos-duration="1000" style="position:relative;background-color:rgba(255,255,255,.2);">
        <div class="dan" style="font-family: 'Tangerine', cursive;font-size:45px;font-weight:bold;color:#00E0D6;text-shadow:1px 1px 3px grey;padding-bottom:5px;"><?=$detailundangan['namapanggilan_priawanita']; ?></div>
      </div>
      <div class="bgkus d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
        <div class="std text-center" style="position:relative;background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/splash-bg.png');width:350px;height:350px;background-size:cover;margin-top:40px">
          <div class="initialnama" style="position:absolute;left:0;right:0;margin:90px auto;">
            <img src="<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/hearts.png" style="width:100px;">
          </div>
          <h4 class="text-center" style="font-family: 'Comfortaa', cursive;margin-top:160px;font-size:30px;font-weight:bold;color:#00E0D6;text-shadow:1px 1px 3px grey;"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></h4>
          <span style="font-family: 'Comfortaa', cursive;font-size:20px;color:#3b3b3b">We Are Wedding</span>
        </div>
      </div>
      <div class="imgbawah" style="background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/wave1.png');width:100%;background-repeat:no-repeat;height:100px;background-position:bottom;"></div>
    </div>

    <div class="countdown count-down-wrapper" style="margin-top:20px;font-family: 'Comfortaa', cursive;color:white;padding-bottom:30px;position:relative;border-bottom:2px dashed;">
      <div style="position:absolute;top:-70px;right:0px;">
        <img src="<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/sectionright.png" width="170">
      </div>
      <div id="clock" class="bngkus text-center d-flex justify-content-around">
        <div class="times" style="background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/countdown.png');height:80px;width:80px;background-size:cover;">
          <div class="days_dash">
            <div class="wrapper-digit" data-vp-add-class="visible bounceIn" data-vp-offset="0">
              <div class="d-flex justify-content-center">
                <div class="digit" style="padding-top:10px;font-size:20px;font-weight:bold;"></div>
                <div class="digit" style="padding-top:10px;font-size:20px;font-weight:bold;"></div>
              </div>
              <div>Hari</div>
            </div>
          </div>
        </div>
        <div class="times" style="background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/countdown.png');height:80px;width:80px;background-size:cover;">
          <div class="hours_dash">
            <div class="wrapper-digit" data-vp-add-class="visible bounceIn" data-vp-offset="0">
              <div class="d-flex justify-content-center">
                <div class="digit" style="padding-top:10px;font-size:20px;font-weight:bold;"></div>
                <div class="digit" style="padding-top:10px;font-size:20px;font-weight:bold;"></div>
              </div>
              <div>Jam</div>
            </div>
          </div>
        </div>
        <div class="times" style="background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/countdown.png');height:80px;width:80px;background-size:cover;">
          <div class="minutes_dash">
            <div class="wrapper-digit" data-vp-add-class="visible bounceIn" data-vp-offset="0">
              <div class="d-flex justify-content-center">
                <div class="digit" style="padding-top:10px;font-size:20px;font-weight:bold;"></div>
                <div class="digit" style="padding-top:10px;font-size:20px;font-weight:bold;"></div>
              </div>
              <div>Menit</div>
            </div>
          </div>
        </div>
        <div class="times" style="background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/countdown.png');height:80px;width:80px;background-size:cover;">
          <div class="seconds_dash">
            <div class="wrapper-digit" data-vp-add-class="visible bounceIn" data-vp-offset="0">
              <div class="d-flex justify-content-center">
                <div class="digit" style="padding-top:10px;font-size:20px;font-weight:bold;"></div>
                <div class="digit" style="padding-top:10px;font-size:20px;font-weight:bold;"></div>
              </div>
              <div>Detik</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <style>
      .anakke {
        color:#bbb;
        font-size:15px;
      }
      .ortu {
        color:#a6a6a6;
      }
    </style>

    <div class="profilemempelai" style="min-height:500px;background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/body-bg.png');padding-bottom:70px;">

      <div class="container">
        <div class="text-center" data-aos="zoom-in" data-aos-duration="1000" style="font-family: 'Comfortaa', cursive;padding:15px;color:#a1a1a1;font-style:italic;">
          <?=$detailundangan['ucapan_awal']; ?>
        </div>
      </div>
      <div class="container">
      <div class="row mt-3">
        <div class="col-12 col-lg-4 mt-5">
          <div class="m1 d-flex justify-content-center">
            <div class="mp" data-aos="fade-down" data-aos-duration="1000" style="height:120px;width:120px;box-shadow:6px 6px 1px #00E0D6;border-radius:20px;">
              <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" style="width:100%;height:100%;border-radius:20px;">
            </div>
          </div>
          <div class="desk text-center" data-aos="fade-up" data-aos-duration="1000" style="font-family: 'Comfortaa', cursive;">
            <div class="mt-1" style="color:#00E0D6;font-size:20px"><?=$detailundangan['namalengkap_pria']; ?></div>
            <!-- <div class="anakke">Putra pertama dari</div>
            <div class="ortu">(Bapak Aguero & Ibu Aguero)</div> -->
            <?=$detailundangan['orangtua_pria']; ?>
          </div>
        </div>
        <div class="col-12 col-lg-4 mt-5">
          <div class="heartslove d-flex justify-content-center">
            <img src="<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/hearts.png" width="70">
          </div>
        </div>
        <div class="col-12 col-lg-4 mt-5">
          <div class="m1 d-flex justify-content-center">
            <div class="mp" data-aos="fade-down" data-aos-duration="1000" style="height:120px;width:120px;box-shadow:6px 6px 1px #00E0D6;border-radius:20px;">
              <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" style="width:100%;height:100%;border-radius:20px;">
            </div>
          </div>
          <div class="desk text-center" data-aos="fade-up" data-aos-duration="1000" style="font-family: 'Comfortaa', cursive;">
            <div class="mt-1" style="color:#00E0D6;font-size:20px"><?=$detailundangan['namalengkap_wanita']; ?></div>
            <?=$detailundangan['orangtua_wanita']; ?>
          </div>
        </div>
      </div>
      </div>
      
    </div>

    <div class="acara" style="min-height:500px;background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/sectionright.png');background-position:right -30px;background-size:300px;background-repeat:no-repeat;padding-bottom:50px;">
      
      <div class="row">
        <div class="col-12 text-center d-flex justify-content-center mt-5">
          <div style="border-bottom:dashed;width:200px;border-bottom-color:#ccc;font-size:25px;font-family: 'Comfortaa', cursive;font-weight:bold;color:#00E0D6;font-weight:bold;">Wedding Event</div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-3">
            <div class="d-flex justify-content-center">
              <div class="hari" data-aos="zoom-in" data-aos-duration="1000" style="background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/countdown.png');height:200px;width:200px;background-size:cover;">
                <div class="mt-4" style="font-size:22px;font-family: 'Comfortaa', cursive;font-size:22px;color:#fff;font-weight:bold;text-shadow:1px 1px 4px black;">AKAD</div>
                <i class="fas fa-calendar-alt" style="font-size:18px;color:white;"></i>
                <div style="font-size:22px;font-family: 'Comfortaa', cursive;color:white;font-style: italic;"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_akad'])); ?></div>
              </div>
            </div>
            <div class="jam mt-1" data-aos="fade-up" data-aos-duration="1000" style="color:#a1a1a1;font-size:18px;"><i class="far fa-clock"></i> Pukul <?=$detailundangan['jam_akad']; ?></div>
            <div class="alamat mt-1" data-aos="fade-up" data-aos-duration="1000" style="color:#a1a1a1;font-size:18px;"><i class="fas fa-map-marker-alt"></i> <?=$detailundangan['alamat_akad']; ?></div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
            <?php if(!empty($detailundangan['map_akad'])): ?>
              <button style="border:3px solid #00E0D6;" class="btn mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAkad" aria-expanded="false" aria-controls="collapseExample">
                Lihat Maps
              </button>
            <?php endif; ?>
            </p>
            <div class="collapse" id="collapseAkad">
              <div class="card card-body">
                <div class="maps" style="border:5px solid #00E0D6;">
                  <div class="ratio ratio-16x9">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.3164625692625!2d104.65540264980164!3d-4.5369272490706365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e38ea8034c00171%3A0x120f1ec62809fbc0!2sLapangan%20Umum%20Sp2%20Mulya%20Sari!5e0!3m2!1sen!2sid!4v1641102345417!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                    <?=$detailundangan["map_akad"]; ?>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-3">
            <div class="d-flex justify-content-center">
              <div class="hari" data-aos="zoom-in" data-aos-duration="1000" style="background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/countdown.png');height:200px;width:200px;background-size:cover;">
                <div class="mt-4" style="font-size:22px;font-family: 'Comfortaa', cursive;font-size:22px;color:#fff;font-weight:bold;text-shadow:1px 1px 4px black;">RESEPSI</div>
                <i class="fas fa-calendar-alt" style="font-size:18px;color:white;"></i>
                <div style="font-size:22px;font-family: 'Comfortaa', cursive;color:white;font-style: italic;"> <?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></div>
              </div>
            </div>
            <div class="jam mt-1" data-aos="fade-up" data-aos-duration="1000" style="color:#a1a1a1;font-size:18px;"><i class="far fa-clock"></i> Pukul <?=$detailundangan['jam_acara']; ?></div>
            <div class="alamat mt-1" data-aos="fade-up" data-aos-duration="1000" style="color:#a1a1a1;font-size:18px;"><i class="fas fa-map-marker-alt"></i> <?=$detailundangan['alamat_acara']; ?></div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
            <?php if(!empty($detailundangan['map_acara'])): ?>
              <button style="border:3px solid #00E0D6;" class="btn mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResepsi" aria-expanded="false" aria-controls="collapseExample">
                Lihat Maps
              </button>
            <?php endif; ?>
            </p>
            <div class="collapse" id="collapseResepsi">
              <div class="card card-body">
                <div class="maps" style="border:5px solid #00E0D6;">
                  <div class="ratio ratio-16x9">
                    <?=$detailundangan["map_acara"]; ?>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <div class="container mt-3">
        <div class="text-center" data-aos="zoom-in" data-aos-duration="1000" style="font-family: 'Comfortaa', cursive;padding:15px;color:#a1a1a1;font-style:italic;">
          <?=$detailundangan['ucapan_ahir']; ?>
        </div>
      </div>

    </div>

    <?php if(!empty($detailundangan['stori_pengundang'])): ?>
    <div class="lovestory" style="background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/body-bg.png');padding-bottom:50px;">

      <div class="row">
        <div class="col-12 text-center d-flex justify-content-center mt-5">
          <div style="border-bottom:dashed;width:200px;border-bottom-color:#ccc;font-size:25px;font-family: 'Comfortaa', cursive;font-weight:bold;color:#00E0D6;">Love Story</div>
        </div>
      </div>

      <?=$detailundangan['stori_pengundang']; ?>

    </div>
    <?php endif; ?>

    <?php if($countgaleri['countgaleri']==0){}else{ ?>
    <div class="gallerya" style="padding-bottom:50px;">

      <div class="row">
        <div class="col-12 text-center d-flex justify-content-center mt-5">
          <div style="border-bottom:dashed;width:200px;border-bottom-color:#ccc;font-size:25px;font-family: 'Comfortaa', cursive;font-weight:bold;color:#00E0D6;">Gallery</div>
        </div>
      </div>
      
      <div class="container">
      <div class="row mt-3">
        <div class="col-12">
          
          <div class="gallery" id="gallery">
            <div class="row">
              <?php $aos=1; foreach($fotogaleris as $fgs): ?>
              <div class="col-6 col-md-6 col-lg-4">
                <div class="gallery-item">
                  <div class="content" data-aos="zoom-in" data-aos-duration="1000"><img class="img-thumbnail imgmy" src="<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>" alt="<?=$detailundangan['namapanggilan_priawanita']; ?>"></div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>

      <?php if(!empty($detailundangan['video_acara'])): ?>
      <div class="row justify-content-center mt-5">
        <div class="col-12 col-sm-10 col-md-8 col-lg-8">
          <div class="ratio ratio-16x9 text-center" style="border:4px solid red;border-radius:5px;">
            <?=$detailundangan['video_acara'] ?>
            <!-- <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe> -->
          </div>
        </div>
      </div>
      <?php endif; ?>
      </div>

    </div>
    <?php } ?>

    <?php if(!empty($detailundangan['rekening_pengundang'])): ?>
    <div class="rekening" style="padding-bottom:50px;">
      <div class="container">
        <div class="inforekening mt-5">
          <div class="d-flex justify-content-center text-center">
            <div class="warnatema2" style="box-shadow:0 0 15px rgba(0,0,0,.2);width:100%;border-radius:5px;background-color:#00E0D6;">
              <div class="p-3 text-light" style="font-size:18px;color:#696969;font-family: cursive, Arial, Helvetica, sans-serif;">Tampa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk pengantin dapat melalui:</div>
            </div>
          </div>
        </div>

        <div class="row d-flex justify-content-center">
          <?=$detailundangan['rekening_pengundang']; ?>
        </div>
      </div>
    </div><!-- tutup rekening --> 
    <?php endif; ?>

    <style>
        .myshadow {
          box-shadow: 0 0 10px rgba(0,0,0,.3);
        }
        .tampilkoment::before {
          content: "";
          top:8px;
          left:-7px;
          z-index: 0;
          position: absolute;
          height: 12px;
          width: 15px;
          box-shadow:-2px -2px 0px rgba(0,0,0,.1);
          transform: rotate(-30deg) skew(.500rad);
          background-color: #fff;
          /*transform: skew(.312rad);*/
        }
      </style>

    <div class="quesbook" style="min-height:500px;background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/body-bg.png');padding-bottom:70px;">
      
      <div class="row">
        <div class="col-12 text-center d-flex justify-content-center mt-5">
          <div style="border-bottom:dashed;width:200px;border-bottom-color:#ccc;font-size:25px;font-family: 'Comfortaa', cursive;font-weight:bold;color:#00E0D6;">Friend Whises</div>
        </div>
      </div>

      <?php 

        $urlpucapan=$detailundangan['id_pengundang'];

        $queryallucapana="SELECT * from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan=$urlpucapan group by id_ucapan order by id_ucapan desc";
        $dataucapana=$this->db->query($queryallucapana)->result_array();

        $queryucapan="SELECT max(id_ucapan) as maxidu FROM ucapan where urlpengundang_ucapan='$urlpucapan'";
        $resultmax=$this->db->query($queryucapan)->row_array();

        $queryallucapan="SELECT * from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan=$urlpucapan group by id_ucapan order by id_ucapan desc";
        $dataucapan=$this->db->query($queryallucapan)->result_array();

        $queryallucapancount="SELECT count(*) as ucount from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan='$urlpucapan'";
        $dataucapancount=$this->db->query($queryallucapancount)->row_array();

      ?>

      <div class="container">
      <?php if($dataucapancount['ucount'] <= 0){ ?>
        <div class="row justify-content-center mt-5" style="display:flex;justify-content:center;">
          <div class="col-12">
            <div class="text-center" style="margin-top:-20px;background-color:rgba(255,255,255,.4);border-radius:5px;">Friend wishes masih kosong, silahkan kirim ucapan sekarang pada form dibawah!</div>
          </div>
        </div>
      <?php }else{ ?>
      <div class="row">
        <div class="col-12 mt-3">
          <div class="boxcoment" style="background-color:#fff;min-height:300px;border-radius:10px;padding:10px;box-shadow:0px 0px 2px rgba(0,0,0,.3);">
            <div class="row">
              <?php foreach($dataucapan as $du): ?>
              <?php 
                $waktu=time() - $du['waktu_ucapan'];
                if($waktu<60){
                  $post = $waktu.' detik yang lalu';
                }else if($waktu>=60&&$waktu<=3600){
                  $waktumenit=$waktu/60;
                  $post = floor($waktumenit).' menit yang lalu';
                }else if($waktu>=3600&&$waktu<=86400){
                  $waktujam=$waktu/3600;
                  $post = floor($waktujam).' jam yang lalu';
                }else if($waktu>=86400&&$waktu<=604800){
                  $waktuhari=$waktu/86400;
                  $post = floor($waktuhari).' hari yang lalu';
                }else if($waktu>=604800&&$waktu<=2592000){
                  $waktuminggu=$waktu/604800;
                  $post = floor($waktuminggu).' minggu yang lalu';
                }else if($waktu>=2592000&&$waktu<=31536000){
                  $waktubulan=$waktu/2592000;
                  $post = floor($waktubulan).' bulan yang lalu';
                }else{
                  $waktutahun=$waktu/31536000;
                  $post = floor($waktubulan).' tahun yang lalu';
                }
              ?>
              <div class="col-12 countkomentar" data-aos="fade-down" data-aos-duration="500">
                <div class="d-flex mb-3" style="min-width: 100px;">
                  <div class="imagekomen text-center" style="border-radius:50%;width:30px;height:30px;box-shadow:0 0 7px rgba(0,0,0,.6);margin-right:20px;line-height:30px;background-color:#fff;">
                    <i class="fas fa-user-check" style="width:30px;height:30px;font-size:20px;"></i>
                  </div>
                  <div class="tampilkoment" style="box-shadow:0 0 5px rgba(0,0,0,.3);border-radius:5px;padding:6px 12px 6px 12px;min-width:200px;position:relative;background-color:#fff;">
                    <div class="nama d-flex justify-content-between align-items-center mb-1"><span style="font-weight:600;line-height:16px;margin-right:10px;color:#616161;"><?=$du['nama_diundang']; ?></span><span style="font-size:11px;color:#757575;line-height:13px;"><?=$post.' '.date('H.i',$du['waktu_ucapan']); ?></span></div>
                    <div class="isikomentar" style="color:#757575;line-height:16px;font-size:15px;"><?=$du['isi_ucapan']; ?></div>
                  </div>
                </div>
              </div>
              <?php if($this->session->userdata('level_user')=='admin'){ ?>
                <a style="margin-top:-20px;padding-bottom:10px;color:red;" onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/hapusucapan/'.$du['id_ucapan'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang']); ?>">[hapus]</a>
              <?php } ?>
              <?php endforeach; ?>
            </div>
            <div class="tampilkansemua d-flex justify-content-between" style="font-size:17px;">
              <span class="jumlahwhises" style="font-weight:bold;color:#8a8a8a;"></span>
              <span class="viewallkomentar"><a href="#!">View all whises</a></span>
              <span class="hideallkomentar" style="cursor:pointer;display:none;"><a href="#!">Short</a></span>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      </div>

    </div>

    <style>
      .rsvp .form-select ,textarea.form-control {
        background-color: rgba(255, 255, 255, 0.8);
        color: #00E0D6;
        border: 3px solid rgba(0, 214, 222, 0.8);
        border-radius:30px;
      }
      .rsvp .form-select ,textarea.form-control:focus {
        background-color: rgba(255, 255, 255, 0.8);
        color: #00E0D6;
        border: 3px solid rgba(0, 214, 222, 0.8);
        height:60px;
      }
      .rsvp select.form-select option {
        background: rgba(0, 0, 0, 0.3);
        color: #fff;
      }
    </style>

    <div class="rsvp" style="min-height:500px;background-image:url('<?=base_url('assets/temaundangan/engagement/elegant/'); ?>img/sectionright.png');padding-bottom:70px;background-size:cover;background-attachment: fixed;">
      
      <div class="row">
        <div class="col-12 text-center d-flex justify-content-center mt-5">
          <div style="border-bottom:dashed;width:200px;border-bottom-color:#ccc;font-size:25px;font-family: 'Comfortaa', cursive;font-weight:bold;color:#00E0D6;">RSVP</div>
        </div>
      </div>

      <div class="container">
      <div class="row mt-3">
        <div class="col-12">
          <form action="<?=base_url('undangan/ucapan'); ?>" method="post" data-aos="fade-down" data-aos-duration="1000">
            <input type="hidden" name="idupengundang" value="<?=$detailundangan['id_pengundang']; ?>">
            <div class="row">
              <div class="col-sm-6 mb-3">
                <select class="form-select" name="namaanda" aria-label=".form-select-sm example" required>
                  <option value="<?=$detailundangan['id_diundang']; ?>"><?=$detailundangan['nama_diundang']; ?></option>
                </select>
              </div>
              <div class="col-sm-6 mb-3">
                <select class="form-select" name="absenkehadiran" aria-label=".form-select-sm example" required>
                  <option value="" selected>Apakah akan menghadiri?</option>
                  <option value="hadir">Menghadiri</option>
                  <option value="tidak">Tidak menghadiri</option>
                  <option value="ragu">Masih ragu-ragu</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mb-3">
                <select class="form-select" name="jumlahkehadiran" aria-label=".form-select-sm example" required>
                  <option selected>Jumlah yang menghadiri?</option>
                  <option value="1">1 orang</option>
                  <option value="2">2 orang</option>
                  <option value="3">3 orang</option>
                  <option value="4">4 orang</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 mb-3">
                <div class="form-floating">
                  <textarea class="form-control" name="isiucapan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                  <label for="floatingTextarea2" style="color:#00E0D6!important">Ketikan ungkapan</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-sm float-end cobain">Kirim</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-3 mb-3 text-center text-light">
          <span style="font-size:25px;font-weight:500;font-family: 'Comfortaa', cursive;color:#a1a1a1"><?=$detailundangan['namapanggilan_priawanita']; ?></span><br>
          <span style="color:#a1a1a1;font-family: 'Comfortaa', cursive;">(Doakan yang terbaik untuk kami)</span>
        </div>
      </div>
      </div>

    </div>

    <style>
      .kotakcovid {
        min-height:50px;
        width:100%;
        border-radius:5px;
        background-color:#00E0D6;
        padding: 5px 5px 5px 5px;
        line-height:17px;
        min-height:155px;
        color:#616161;
        font-family: 'Comfortaa', cursive;
      }
    </style>

    <!-- Modal -->
    <div class="modal fade modalawal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content text-center text-light" style="background-color:rgba(0,0,0,.8);">
          <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title" id="staticBackdropLabel" style="font-family: 'Tangerine', cursive;font-size:45px;"><?=$detailundangan['namapanggilan_priawanita']; ?></h5>
          </div>
          <div class="modal-body">
            <div class="row">
              <h5>Hello,</h5>
              <h3 style="font-family: 'Comfortaa', cursive;font-weight:bold;"><?=$detailundangan['nama_diundang']; ?></h3>
              <span style="line-height:19px;font-family: 'Comfortaa', cursive;">Kami mengundang anda untuk datang pada hari pernikahan kami!</span>

              <?php if(!empty($detailundangan['informasi_modal'])): ?>
                <div class="col-12 mt-2">
                  <?=$detailundangan['informasi_modal']; ?>
                </div>
              <?php endif; ?>

              <div class="col-12 mt-2 mb-1" style="line-height:19px;font-family: 'Comfortaa', cursive;">
                Tanpa mengurangi rasa hormat. <br>
                Acara ini akan dilaksanakan dengan Menerapkan <br>
                <span style="font-weight:bold;">PROTOKOL KESEHATAN</span><br>
                sebagai berikut:
              </div> 
            </div><!-- tutup modal-body -->
            <div class="maxmodal" style="max-width: 450px;margin:auto;">
              <div class="row justify-content-center">
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2">
                    <img src="<?=base_url('assets/img/covid/'); ?>anaksp.png" width="100%">
                    <span style="font-style:italic;">Tidak dianjurkan membawa anak kecil</span>
                  </div>
                </div>
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2 p-1">
                    <img src="<?=base_url('assets/img/covid/'); ?>maskp.png" width="100%">
                    <span style="font-style:italic;">Gunakan Masker</span>
                  </div>
                </div>
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2 p-1">
                    <img src="<?=base_url('assets/img/covid/'); ?>handsp.png" width="100%">
                    <span style="font-style:italic;">Gunakan Handsanitizer</span>
                  </div>
                </div>
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2">
                    <img src="<?=base_url('assets/img/covid/'); ?>suhusp.png" width="100%">
                    <span style="font-style:italic;">Cek Suhu Tubuh</span>
                  </div>
                </div>
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2 p-1">
                    <img src="<?=base_url('assets/img/covid/'); ?>cucisp.png" width="100%">
                    <span style="font-style:italic;">Cuci Tangan</span>
                  </div>
                </div>
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2 p-1">
                    <img src="<?=base_url('assets/img/covid/'); ?>socialp.png" width="100%">
                    <span style="font-style:italic;">Jaga Jarak 1M</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12" style="margin-top:-0px;margin-bottom:-20px;font-family: 'Comfortaa', cursive;">
                  <p>Atas perhatiannya kami ucapkan <br> Terima Kasih</p>
                </div>
              </div>
            </div><!-- tutup maxmodal -->

          </div><!-- tutup modal-body -->
          <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn bukaundangan" data-bs-dismiss="modal" style="border-radius:45px;border:1px solid white;background-color:rgba(0,0,0,.6);width:200px;color:white;height:45px;"><i class="far fa-envelope-open"></i> OPEN</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer d-flex justify-content-center align-items-center" style="width:100%;height: 130px;background-color:#333333;">
      <div class="text-center text-light">
        <p class="mb-0">&copy; meinviteyou. All Rights Reserved.</p>
        <p class="mb-0">Design by - <a class="credit" href="<?=base_url(); ?>"><span style="color:#2298A4;font-weight:bold;">me</span><span style="color:#2298A4;font-weight:bold;"><u>INVITE</u></span><span style="color:#2298A4;font-weight:bold;">you</span></a></p>
      </div>
    </footer><!-- tutup footer --> 

    <div class="text-primary" style="position:fixed;bottom:23px;margin-left:10px;border-radius:50%;z-index:1020;">
      <div style="background-color:rgba(26, 199, 84,);padding:4px;border-radius:50%">
      <span style="z-index:1020" class="wapopup" data-bs-placement="right" data-bs-toggle="popover" title="Kirim ucapan via WA" data-bs-html="true" data-bs-content="
        <?php if($detailundangan['nomer_pengundang']==''&&$detailundangan['nomer_pengundangw']==''){ ?>
          <p class='text-center text-danger'>Nomer tlp tidak ditampilkan</p>
        <?php }else if($detailundangan['nomer_pengundang']!='' && $detailundangan['nomer_pengundangw']==''){ ?>
          <?php if(substr($detailundangan['nomer_pengundang'],-1)=='l'){ ?>
            <img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundang'],0,-1); ?>'> Mempelai Pria</a>
          <?php }else{ ?>
            <img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundang'],0,-1); ?>'> Mempelai Wanita</a>
          <?php } ?>
        <?php }else if($detailundangan['nomer_pengundang']==''&&$detailundangan['nomer_pengundangw']!=''){ ?>
          <?php if(substr($detailundangan['nomer_pengundangw'],-1)=='w'){ ?>
            <img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundangw'],0,-1); ?>'> Mempelai Wanita</a>
          <?php }else{ ?>
            <img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundangw'],0,-1); ?>'> Mempelai Pria</a>
          <?php } ?>
        <?php }else{ ?>
          <?php if(substr($detailundangan['nomer_pengundang'],-1)=='l'&&substr($detailundangan['nomer_pengundangw'],-1)=='w'){ ?>
            <img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundang'],0,-1); ?>'> Mempelai Pria</a><br>
            <img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundangw'],0,-1); ?>'> Mempelai Wanita</a>
          <?php }else if(substr($detailundangan['nomer_pengundang'],-1)=='w'&&substr($detailundangan['nomer_pengundangw'],-1)=='l'){ ?>
            <img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundang'],0,-1); ?>'> Mempelai Wanita</a><br>
            <img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundangw'],0,-1); ?>'> Mempelai Pria</a>
          <?php } ?>
        <?php } ?>
      ">
        <i class="fab fa-whatsapp" style="font-size:55px;color:#00c45c;text-shadow:-1px -1px 0 white;"></i>
      </span>
      </div>
    </div>

    <div class="text-primary" style="position:fixed;bottom:100px;right:25px;border:0px solid gray;border-radius:50%;z-index:6;">
      <div class="btn-group dropup d-flex justify-content-center musikset align-items-center" style="background-color:rgba(115, 187, 255,.7);padding:10px;border-radius:50%;width:50px;height:50px">
          <!-- <img src="<?=base_url('assets/img/musikoff.png'); ?>" width="100%"> -->
          <i class="fas fa-volume-mute" style="font-size:23px;"></i>
      </div>
    </div>
    <audio id="musikvalue" loop style="width:100%">
      <source src="<?=base_url('assets/img/musikwedding/'.$detailundangan['musik_acara']); ?>" type="audio/mpeg">
    </audio>

    <style>
      .backtops {
        position: fixed;
        right: 25px;
        bottom:28px;
        z-index:6;
      }
    </style>

    <div class="backtops" style="">
      <a href="#home" class="page-scroll" style="width:90px;height:90px;">
        <i style="font-size:47px;line-height:55px;opacity:.4;color:#000;" class="fas fa-arrow-circle-up"></i>
      </a>
    </div>

    <?php 
      $tanggal=date('d', strtotime($detailundangan['tanggal_acara']));
      $bulan=date('m', strtotime($detailundangan['tanggal_acara']));
      $tahun=date('Y', strtotime($detailundangan['tanggal_acara']));
    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="<?=base_url('assets/temaundangan/engagement/elegant/'); ?>js/countdown.js"></script>
    <script src="<?=base_url('assets/temaundangan/engagement/elegant/'); ?>js/gallery.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
      
      $(function(){

        $('#clock').countDown({
            targetDate: {
                'day'   : <?=$tanggal; ?>,
                'month' : <?=$bulan; ?>,
                'year'  : <?=$tahun; ?>,
                'hour'  : 0,
                'min'   : 0,
                'sec'   : 0
            },
            omitWeeks: true
        });

        $('#staticBackdrop').modal('show');
        $('.wapopup').popover();

        $('.byebye').removeClass('byebye');
        // $('.imgmy').addClass()
        var dan =$('.dan').text().split(' ');
        var jadi=dan.splice(1,1, ' <img src="<?=base_url('assets/temaundangan/engagement/elegant/img/header-icon.png'); ?>" width="45"> ');
        $('.dan').html(dan);
        // console.log(dan);

        var countkomentar = document.querySelectorAll('.countkomentar');
        $('.jumlahwhises').text(countkomentar.length+' Whises');
        $('.countkomentar').hide();

        if(countkomentar.length<6){
          $('.viewallkomentar').hide();
        }else{
          $('.viewallkomentar').show();
        }

        for(var i=0;i<5;i++){
          if(countkomentar[i]){
            countkomentar[i].style.display='unset';
          }
        }

        $('.viewallkomentar').on('click',function(){
          $('.countkomentar').fadeIn();
          $('.hideallkomentar').fadeIn();
          $('.viewallkomentar').hide();
        })

        $('.hideallkomentar').on('click',function(){
          var countkomentar = document.querySelectorAll('.countkomentar');
          $('.countkomentar').hide();

          if(countkomentar.length<6){
            $('.viewallkomentar').hide();
          }else{
            $('.viewallkomentar').show();
          }

          for(var i=0;i<5;i++){
            if(countkomentar[i]){
              countkomentar[i].style.display='unset';
            }
          }
          $('.hideallkomentar').hide();
          $('.viewallkomentar').fadeIn();
        })

        $('.bukaundangan').on('click',function(){
          var audio = $("#musikvalue")[0];
          audio.play();
          $('.musikset').html(`<i class="fas fa-volume-up" style="font-size:23px;"></i>`);
        });

        $('.musikset').on('click',function(){
          var audio = $("#musikvalue")[0];
          if (audio.paused) {
              audio.play();
              $(this).html(`<i class="fas fa-volume-up" style="font-size:23px;"></i>`);
          }  else {
              audio.pause();
              $(this).html(`<i class="fas fa-volume-mute" style="font-size:23px;"></i>`);
          }
        });

        $('body').on('click','.page-scroll',function(e){
          var tujuan=$(this).attr('href');
          var elementtujuan=$(tujuan);
          $('html,body').animate({
            'scrollTop':(Math.floor(elementtujuan.offset().top)-130)
          }, 500);
          e.preventDefault();
        });

        $('.closeout').on('click',function(){
          $('.popupnotif').fadeOut();
        });


      });

    </script>
  </body>
</html>