
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
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title; ?></title>
    <meta name="robots" content="index,follow">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="meINVITEyou.com">


    <meta name="robots" content="max-snippet:-1,max-image-preview:standard,max-video-preview:-1">
    <meta name="description" content="<?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?>"/>
    <meta content='<?=base_url('assets/img/imgsharing/'.$detailundangan['img_sharing']); ?>' property='og:image'/>
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Pernikahan <?=$detailundangan['namapanggilan_priawanita']; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script> -->
    <script src="https://kit.fontawesome.com/33095fbedf.js" crossorigin="anonymous"></script>
    <link href="<?=base_url('assets/temaundangan/classic/'); ?>css/aos.css" rel="stylesheet">
    <link href="<?=base_url('assets/temaundangan/classic/'); ?>css/ekko-lightbox.css" rel="stylesheet">
    <link href="<?=base_url('assets/temaundangan/classic/'); ?>styles/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/temaundangan/classic/'); ?>styles/timeline.css">
    <style>
      .whitebg{
        background-image:url('<?=base_url('assets/img/flowersbg/whitebg.jpg'); ?>');
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
       -ms-background-attachment:fixed;
      }
      .graybg{
        background-image:url('<?=base_url('assets/img/flowersbg/graybg.jpg'); ?>');
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
        -ms-background-attachment:fixed;
      }
      .times {
          animation: times .6s infinite alternate;
          transition:1s;
      }
      body .popover{
        width:1200px;
        padding:0!important;
        z-index:1;
      }
      .putaran{
        animation-name: putar;
        animation-duration: 4s;
        animation-delay: 1s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        transform-style: preserve-3d;
      }
      .myshadow{
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
      }
      .anakke{
        font-size:14px;
        padding:1px 3px 1px 3px;
        background-color:rgba(240,240,240,.7);
        border-radius:1px;
      }
      .ortu{
        font-size:16px;
        padding:1px 3px 1px 3px;
        background-color:rgba(240,240,240,.7);
        border-radius:1px;
      }
      @keyframes putar {
        from {transform: rotate(0deg);}
        to {transform: rotate(360deg);}
      }
      @keyframes times {
        0%   { 
          font-size: 22px;
          transition:.6s;
         }
        100% { 
          transform: scale(1.1);
          font-size: 23px;
          transition:.6s;
        }
      }
    </style>
  </head>
  <body id="top">

  <!-- background tema -->
  <img style="top:0px;position:fixed;width:200px;z-index:-1" src="<?=base_url('assets/img/flowersbg/gradient1fix.png'); ?>">
  <img style="bottom:0px;right:0;position:fixed;width:180px;z-index:-1" src="<?=base_url('assets/img/flowersbg/gradient2fix.png'); ?>">
  <!-- tutup backgroun tema -->

<div class="page-content">
  <div class="div">

<div class="ww-home-page myshadow" id="home" style="background: url('<?=base_url('assets/img/backgroundawal/'.$detailundangan['background_welcome']); ?>') no-repeat center center;background-position: 52%;background-size: cover;z-index:1;border-radius:0 0 20px 20px;">

  <div class="ww-wedding-announcement d-flex align-items-center justify-content-start">
    <div class="container ww-announcement-container">
      <p class="ww-couple-name ww-title" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000"><?=$detailundangan['namapanggilan_priawanita']; ?></p>
      <img style="margin-top:-20px;" class="img-fluid" src="<?=base_url('assets/temaundangan/classic/'); ?>images/laurel-1.png" alt="Heart" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000"/>
      <p class="h2 ww-title" style="text-shadow:1px 1px 4px black!important" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="10">
      	<!-- 20<sup>th</sup> December, 2018 -->
      	<?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?>
      </p>

      <div class="count-down-wrapper" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="10" style="margin-top:0px">
        <div id="clock">
          <div class="d-flex justify-content-center">
            <div class="col-3 col-sm-3 times" style="">
                <div class="days_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                    <div class="wrapper-digit" style="background-color:rgba(255,255,255,.7);border-radius:5px;width:75px;height:70px;">
                      <div class="pt-1">
                        <div class="d-flex justify-content-center text-danger shadow" style="font-weight:bold;font-size:23px">
                          <div class="digit"></div>
                          <div class="digit"></div>
                        </div>
                          <p style="font-weight:bold;" class="note dash_title text-dark">Hari</p>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-3 col-sm-3 times" style="">
                <div class="hours_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                    <div class="wrapper-digit" style="background-color:rgba(255,255,255,.7);border-radius:5px;width:75px;height:70px">
                      <div class="pt-1">
                        <div class="d-flex justify-content-center text-danger shadow" style="font-weight:bold;font-size:23px">
                          <div class="digit"></div>
                          <div class="digit"></div>
                        </div>
                          <p style="font-weight:bold;" class="note dash_title text-dark">Jam</p>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-3 col-sm-3 times" style="">
                <div class="minutes_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                    <div class="wrapper-digit" style="background-color:rgba(255,255,255,.7);border-radius:5px;width:75px;height:70px">
                      <div class="pt-1">
                        <div class="d-flex justify-content-center text-danger shadow" style="font-weight:bold;font-size:23px">
                          <div class="digit"></div>
                          <div class="digit"></div>
                        </div>
                          <p style="font-weight:bold;" class="note dash_title text-dark">Menit</p>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="col-3 col-sm-3 times mt-3" style="">
                <div class="seconds_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                    <div class="wrapper-digit" style="background-color:rgba(255,255,255,.7);border-radius:5px;width:75px;height:70px">
                      <div class="pt-1">
                        <div class="d-flex justify-content-center text-danger shadow" style="font-weight:bold;font-size:23px">
                          <div class="digit"></div>
                          <div class="digit"></div>
                        </div>
                          <p style="font-weight:bold;" class="note dash_title text-dark">Detik</p>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div> <!-- end of clock -->
      </div> <!-- count-down-wrapper -->


    </div>
  </div>
</div>



<div class="ww-nav-bar sticky-top" style="background-color:rgba(82, 76, 62,0);border-radius:0 0 10px 10px;max-height:50px;">
  <nav class="navbar navbar-expand-lg navbar-light" style="position: relative;padding-bottom: 20px">
    <div class="container">
      <!-- <a href="#!">
        <svg class="heart" viewBox="0 0 32 29.6"><path d="M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z"/></svg>
      </a> -->
      <div class="piringan" style="position: absolute;top:5px;z-index:30;left:5px;">
        <div class="musikplayer musikset myshadow" style="width:70px;height:70px;border-radius:50%;background-color:white;border:1px solid yellow;box-shadow:1px 1px 9px #ddd;">
          <img class="putarmulai" style="border-radius:50%" src="<?=base_url('assets/img/imgsharing/'.$detailundangan['img_sharing']); ?>" width="100%">
          <div class="bulattengah" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:20px;height:20px;border-radius:50%;background-color:#c2c2c2;">
            <div class="bulathitam" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:5px;height:5px;border-radius:50%;background-color:#353b35;"></div>
          </div>
          <div class="darkmusik" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:96%;height:97%;border-radius:50%;background-color:rgba(0,0,0,.4);transition:.7s;"></div>
        </div>
        <div class="stik" style="position:absolute;left:2px;margin-top:-6px;width:30px;height:30px;transform:rotate(0deg);transition:1s;z-index:10">
          <img class="stikok musikset" style="position:absolute;left:28px;right:0;margin:auto;transform:rotate(-90deg);bottom:0;top:-2px" src="<?=base_url('assets/img/stick3.png'); ?>" width="20">
        </div>
      </div>

      <div id="navatas" class="navatas center-align white-text myshadow" style="position:absolute;top:20px;left:68px;border-radius:0 40px 40px 0;z-index:8;transition:1s;height:40px;min-width:0px;background-color:rgba(0,0,0,.5);display:flex;justify-content:center;align-items:center;padding:0 10px 8px 10px;border:1px solid yellow;z-index:26;">
        <h5 class="sizefont" style="font-size:18px;color:white;margin-top:10px"><?=$detailundangan['namapanggilan_priawanita']; ?></h5>
        <div class="bars" style="position:absolute;top:-35px;left:-10px;transition:.7s">
          <img class="onm" src="<?=base_url('assets/img/bars-musik.gif'); ?>" width="100px" height="50px">
          <img class="ofm" style="position:absolute;top:10px;left:0" src="<?=base_url('assets/img/bars-musikof.gif'); ?>" width="100px" height="30px">
        </div>
      </div>

      <style>
        .lismenu{
          font-size:13px;
          background-color:rgba(0,0,0,.5);
          padding:2px 5px 1px 5px;
          border-radius:2px;
          color: white
        }
      </style>

      <button style="margin-top:15px;background-color:rgba(0,0,0,.5);color:white!important;" class="navbar-toggler ml-auto myshadow" type="button" data-toggle="collapse" data-target="#ww-navbarNav" aria-controls="ww-navbarNav" aria-expanded="false" aria-haspopup="true" aria-label="Toggle navigation">
         <i class="fas fa-bars" style="font-size:25px"></i>
      </button>

      <div class="collapse navbar-collapse text-uppercase" id="ww-navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#home"><span class="lismenu">Home</span> <i class="text-success fas fa-home" style="font-size:20px"></i></a></li>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#couples"><span class="lismenu">Penerima</span> <i class="text-success fas fa-hand-holding" style="font-size:20px"></i></a></li>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#couple"><span class="lismenu">Mempelai</span> <i class="text-success fas fa-transgender" style="font-size:20px"> </i></a></li>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#events"><span class="lismenu">Acara</span> <i class="text-success fas fa-glass-cheers" style="font-size:20px"></i></a></li>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#gallery"><span class="lismenu">Galeri</span> <i class="text-success fas fa-photo-video" style="font-size:20px"></i></a></li>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#people"><span class="lismenu">Ucapan</span> <i class="text-success fas fa-comments" style="font-size:20px"></i></a></li>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#rsvp"><span class="lismenu">Pesan</span> <i class="text-success fas fa-file-signature" style="font-size:20px"></i></a></li>
        </ul>
      </div>

    </div>
  </nav>
</div>

<?=$this->session->flashdata('message'); ?>

<div class="ww-section" id="couples" style="margin-top:-20px;border-radius:10px 10px 0 0;">

  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <div class="mt-3 myshadow" style="background-color: #f2f2f2;border-radius:10px;">
          <p class="p-3 text-center text-muted">
            <span><?=$detailundangan['ucapan_awal']; ?></span>
          </p>
        </div>
      </div>
    </div>
  </div>

</div>

  <!-- mempleai pria -->
<div class="ww-section" id="couple" style="margin-top:-50px;">
  <div class="container" style="margin-top:-150px">
    <div class="row text-center">
      <div class="col-md-6">
        <div class="mt-5"><img class="img-fluid img-thumbnail clickmempelai myshadow" data-toggle="modal" data-target="#modalmempelai" src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" alt="Mempelai pria" data-aos="fade-left" data-aos-duration="1000" style="border-radius:15px;height:150px;width:150px;"/>
          <h3 class="h2 ww-title mt-2" style="color:black;"><span style="background-color:rgba(240,240,240,.7);border-radius:6px;padding:2px 6px 2px 6px"><?=$detailundangan['namalengkap_pria']; ?></span></h3>
          <p class="text-center">
            <?=$detailundangan['orangtua_pria']; ?>
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mt-5"><img class="img-fluid img-thumbnail clickmempelai myshadow" data-toggle="modal" data-target="#modalmempelai" src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" alt="Mempelai wanita" data-aos="fade-right" data-aos-duration="1000" style="border-radius:15px;height:150px;width:150px;"/>
          <h3 class="h2 ww-title mt-2" style="color:black;"><span style="background-color:rgba(240,240,240,.7);border-radius:6px;padding:2px 6px 2px 6px"><?=$detailundangan['namalengkap_wanita']; ?></span></h3>
          <p class="text-center">
            <?=$detailundangan['orangtua_wanita']; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="ww-section" id="events" style="margin-top:-50px;">
  <div class="container ww-wedding-event">
    <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000" style="color:black;"><span style="background-color:rgba(244,244,244,.7);padding:2px 50px 2px 50px;border-radius:10px">Acara</span></h2>
    <div class="row" style="margin-top:-35px">
      <div class="col-md-12 col-sm-12">
        <div class="my-3">

          <div class="row">
            <div class="col-md-6 mt-4">
              <div class="akd mb-3 text-left myshadow" data-aos="fade-up" data-aos-duration="1000" style="background-color:#f2f2f2;padding:15px;border-radius:6px;">
                <div class="h5">AKAD</div>
                <ul>
                  <li class="pt-2"><i class="text-info far fa-calendar-alt" style="font-size:20px"></i><span class="pl-2 text-muted"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_akad'])); ?></span></li>
                  <li class="pt-2"><i class="text-info far fa-clock" style="font-size:20px"></i><span class="pl-2 text-muted">Pukul <?=$detailundangan['jam_akad']; ?></span></li>
                  <li class="pt-2"><i class="text-danger fas fa-map-marker-alt" style="font-size:20px"></i><span class="pl-2 text-muted"><?=$detailundangan['alamat_akad']; ?></span></li>
                </ul>
                <?php if(!empty($detailundangan['map_akad'])): ?>
                <div class="d-flex justify-content-end">
                  <button id="example1" type="button" class="btn btn-lg btn-info btn-sm" data-toggle="popover" title="Maps Lokasi AKAD Pernikahan" data-html="true" data-content='
                    <?=$detailundangan["map_akad"]; ?>
                  '>Lihat Maps</button>
                </div>
                <?php endif; ?>
              </div>
            </div>

            <div class="col-md-6 mt-4">
              <div class="prnk text-right myshadow" data-aos="fade-up" data-aos-duration="1000" style="background-color:#f2f2f2;padding:15px;border-radius:6px;">
                <div class="h5">RESEPSI</div>
                <ul>
                  <li class="pt-2"><span class="pr-2 text-muted"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></span><i class="text-info far fa-calendar-alt" style="font-size:20px"></i></li>
                  <li class="pt-2"><span class="pr-2 text-muted">Pukul <?=$detailundangan['jam_acara']; ?></span><i class="text-info far fa-clock" style="font-size:20px"></i></li>
                  <li class="pt-2"><span class="pr-2 text-muted"><?=$detailundangan['alamat_acara']; ?></span><i class="text-danger fas fa-map-marker-alt" style="font-size:20px"></i></li>
                </ul>
                <?php if(!empty($detailundangan['map_acara'])): ?>
                <div class="d-flex justify-content-start">
                  <button id="example2" type="button" class="btn btn-lg btn-info btn-sm" data-toggle="popover" title="Maps Lokasi RESEPSI Pernikahan" data-html="true" data-content='
                    <?=$detailundangan["map_acara"]; ?>
                  '>Lihat Maps</button>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="mt-5 myshadow" style="background-color:#f2f2f2;border-radius:10px;">
            <p class="p-3 text-center"><?=$detailundangan['ucapan_ahir']; ?></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<?php if(!empty($detailundangan['stori_pengundang'])): ?>
<div class="ww-section" id="stori" style="margin-top:-50px">
  <div class="container ww-wedding-event">

    <h2 class="h1 text-center pt-5 pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000" style="color:black;"><span style="background-color:rgba(244,244,244,.7);padding:2px 50px 2px 50px;border-radius:10px">Stori</span></h2>

    <?=$detailundangan['stori_pengundang']; ?>

  </div>
</div>
<?php endif; ?>


<?php if($countgaleri['countgaleri']==0){}else{ ?>
<div class="ww-section" id="gallery" style="margin-top:-50px;">
  <div class="ww-photo-gallery" style="margin-top:-50px;">
    <div class="container">

      <h2 class="h1 text-center pt-5 pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000" style="color:black;"><span style="background-color:rgba(244,244,244,.7);padding:2px 50px 2px 50px;border-radius:10px">Galeri</span></h2>
      <div class="ww-gallery" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="0">
        <div class="card-columns">
          <div class="row">
          <?php $aos=1; foreach($fotogaleris as $fgs): ?>
            <?php if($aos++ % 2 == 0){$isiaos='fade-right';}else{$isiaos='fade-left';} ?> 
            <div class="col-6 col-sm-12">
              <div class="card" data-aos="<?=$isiaos; ?>" data-aos-duration="1000"><a href="<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid img-thumbnail myshadow" src="<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>" alt="Gallery Pic 1"/></a></div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>

      <?php if($detailundangan['video_acara']){ ?>
        <div class="row justify-content-center">
          <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000" style="margin-top:30px">
            <div class="text-center mb-1">
              <span class="text-secondary" style="font-weight:bold;background-color:#ddd;padding:2px 10px 2px 10px;border-radius:4px;">Video</span>
            </div>
            <div class="embed-responsive embed-responsive-4by3 myshadow" style="border:4px solid #fff;border-radius:6px;">
              <?=$detailundangan['video_acara']; ?>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>
<?php } ?>



<?php if(!empty($detailundangan['rekening_pengundang'])): ?>
<div class="ww-section" id="rekening" style="margin-top:-50px;">
  <div class="container" style="margin-top:-50px">
    <div class="myshadow" style="border-radius:7px;padding:10px 10px 1px 10px;background-color:#f2f2f2">
      <p class="text-center">Tampa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk pengantin dapat melalui:</p>
    </div>
    <div class="row justify-content-center text-center">

      <?=$detailundangan['rekening_pengundang']; ?>

    </div>
  </div>
</div>
<?php endif; ?>




<?php if($detailundangan['paket_acara']=='paketeasy'||$detailundangan['paket_acara']=='paketmedium'){}else{ ?>
<div class="ww-section" id="people" style="">
  <div class="container ww-couple-friends" style="margin-top:-50px;">
    <h2 class="h1 text-center pt-5 ww-title" data-aos="zoom-in-down" data-aos-duration="1000" style="color:black;"><span style="background-color:rgba(244,244,244,.7);padding:2px 50px 2px 50px;border-radius:10px">Daftar Ucapan</span></h2>

    <div class="row">
      <div class="col-12 d-flex justify-content-end pt-4" style="margin-bottom:-50px;z-index:9;padding:0">
        <div class="col-4">
          <div class="form-group ww-rsvp-form">
            <select style="z-index:0" class="form-control changekoment" id="events-input">
              <option value="slide">Slide</option>
              <option value="list">List</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel" data-aos="zoom-in-up" data-aos-duration="1000">
      <ol class="carousel-indicators">
      	<?php 
      		$urlpucapana=$detailundangan['id_pengundang'];

      		$queryallucapana="SELECT * from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan=$urlpucapana group by id_ucapan order by id_ucapan desc";
      		$dataucapana=$this->db->query($queryallucapana)->result_array();
      	?>
      	<?php $no=0; foreach($dataucapana as $dua): ?>
        <li class="<?php if($no==0){echo 'active';} ?>" data-target="#carouselExampleIndicators" data-slide-to="<?=$no++; ?>"></li>
    	<?php endforeach; ?>
      </ol>
      <div class="carousel-inner">
      	<?php 
      		$urlpucapan=$detailundangan['id_pengundang'];
      		$queryucapan="SELECT max(id_ucapan) as maxidu FROM ucapan where urlpengundang_ucapan='$urlpucapan'";
      		$resultmax=$this->db->query($queryucapan)->row_array();

      		$queryallucapan="SELECT * from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan=$urlpucapana group by id_ucapan order by id_ucapan desc";
          $dataucapan=$this->db->query($queryallucapan)->result_array();

          $queryallucapancount="SELECT count(*) as ucount from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan='$urlpucapana'";
          $dataucapancount=$this->db->query($queryallucapancount)->row_array();
      	?>

        <?php if($dataucapancount['ucount'] <= 0){ ?>
          <a class="nav-link smooth-scroll text-center text-info" href="#rsvp">Ketik ucapan pada input dibawah <br><i class="fas fa-arrow-down"></i></a>
        <?php }else{ ?>
      	<?php foreach($dataucapan as $du): ?>
          <div class="carousel-item titems <?php if($du['id_ucapan']==$resultmax['maxidu']){echo 'active';}else{} ?>">
            <div class="row">
              <div class="col-12">
                <div class="card d-block mb-3 myshadow" style="background-color:#f2f2f2!important;">
                  <div class="card-body text-center">
                    <div class="h5"><?=$du['nama_diundang']; ?></div>
                    <p class="mb-0 text-muted"><?=$du['isi_ucapan']; ?> 
                <?php if($this->session->userdata('level_user')=='admin'){ ?>
                    <a onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/hapusucapan/'.$du['id_ucapan'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang']); ?>">[hapus]</a>
                <?php } ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    	  <?php endforeach; ?>
        <?php } ?>

      </div>
      <a class="carousel-control-prev tlist" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" style="background-color:rgba(0,0,0,.2);" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next tlist" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" style="background-color:rgba(0,0,0,.2)" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>


<div class="ww-section ww-rsvp-detail text-white myshadow" id="rsvp" style="margin-top:-50px;border-radius:20px 20px 0 0!important;background-color:white!important;">
  <div class="container" data-aos="zoom-in-up" data-aos-duration="1000" style="margin-top:-50px;">
    <div class="col text-center">
      <h2 class="h1 ww-title pb-3" data-aos="zoom-in-down" data-aos-duration="1000" style="color:black;margin-top:-30px"><span style="background-color:rgba(244,244,244,.7);padding:2px 50px 2px 50px;border-radius:10px">Kirim Ucapan</span></h2>
    </div>
    <div class="row ww-rsvp-form">
      <div class="col-md-10">
        <div class="card-body">
          <form action="<?=base_url('undangan/ucapan'); ?>" method="post">
            <input type="hidden" name="idupengundang" value="<?=$detailundangan['id_pengundang']; ?>">
            <div class="row">
              <div class="col md-6 pb-3">
                <div class="form-group">
                  <select class="form-control" id="guest-input" name="namaanda">
                    <option class="disabled" value="<?=$detailundangan['id_diundang']; ?>"><?=$detailundangan['nama_diundang']; ?></option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 pb-3">
                <div class="form-group">
                  <select class="form-control" id="events-input" name="absenkehadiran" required>
                    <option value="">Apakah kamu menghadiri?</option>
                    <option value="hadir">Menghadiri</option>
                    <option value="tidak">Tidak menghadiri</option>
                    <option value="ragu">Masih ragu-ragu</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6 pb-3">
                <div class="form-group">
                  <select class="form-control" id="events-input" name="jumlahkehadiran" required>
                    <option value="1">1 orang</option>
                    <option value="2">2 orang</option>
                    <option value="3">3 orang</option>
                    <option value="4">4 orang</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="message-input">Pesan Anda</label>
                  <textarea class="form-control" id="message-input" name="isiucapan" rows="4" required></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col text-center">
                <button class="btn btn-primary btn-submit" type="submit" name="kirimin">kirim</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" data-backdrop="static" data-keyboard="false" tabindex="-1" style="background-color:#333333;">
      <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content text-center text-light" style="background-color:#333333;border:0;">
          <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title" id="exampleModalLongTitle" style="font-size:26px"><?=$detailundangan['namapanggilan_priawanita']; ?></h5>
          </div>
          <div class="modal-body" style="margin-top:-10px">
            <span>Hello,</span><br>
            <span style="font-size:25px;margin-top:-10px"><?=$detailundangan['nama_diundang']; ?></span><br>
            <span>Kami mengundang anda untuk datang pada hari pernikahan kami!</span>
            <div class="row">
            <?php if($detailundangan['id_pengundang']==14){ ?>
              <div class="col-12 mt-2">
                Mengingat bahwa masih ada nya covid 19 di sekitar untuk meminimalisir keadaan,, <br>Adapun sesi yang di terapkan sebagai berikut:<br>
                <span style="font-weight:bold;">
                Sesi 1. Pukul 08.00 - 10.00 Akad Nikah <br>
                Sesi 2. Pukul 10.00 - 11.00<br>
                Sesi 3. Pukul 11.00 - 12.00<br>
                </span>
              </div>
            <?php } ?>
              <div class="col-12 mt-2">
                Tanpa mengurangi rasa hormat. <br>
                Acara ini akan dilaksanakan dengan Menerapkan <br>
                <span style="font-weight:bold;">PROTOKOL KESEHATAN</span><br>
                sebagai berikut:
              </div> 
            </div>

            <div class="card-deck">
              <div class="row" style="padding: 0 2px 0 2px;font-weight:bold;">

                <div class="col-4" style="padding:4px">
                  <div class="card bg-info myshadow" style="border-radius:10px;min-height:160px;">
                    <img class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/anaksp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Dianjurkan Tidak Membawa Anak Kecil</p>
                    </div>
                  </div>
                </div>
                <div class="col-4" style="padding:4px">
                  <div class="card bg-info myshadow" style="border-radius:10px;min-height:160px;">
                    <img class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/maskp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Gunakan Masker</p>
                    </div>
                  </div>
                </div>
                <div class="col-4" style="padding:4px">
                  <div class="card bg-info myshadow" style="border-radius:10px;min-height:160px;">
                    <img class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/handsp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Gunakan Handsanitizer</p>
                    </div>
                  </div>
                </div>

                <div class="col-4" style="padding:4px">
                  <div class="card bg-info myshadow" style="border-radius:10px;min-height:160px;">
                    <img class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/suhusp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Cek Suhu Tubuh</p>
                    </div>
                  </div>
                </div>
                <div class="col-4" style="padding:4px">
                  <div class="card bg-info myshadow" style="border-radius:10px;min-height:160px;">
                    <img class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/cucisp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Cuci Tangan</p>
                    </div>
                  </div>
                </div>
                <div class="col-4" style="padding:4px">
                  <div class="card bg-info myshadow" style="border-radius:10px;min-height:160px;">
                    <img class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/socialp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Jaga Jarak 1METER</p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>

            <div class="row">
              <div class="col-12" style="margin-top:-0px;margin-bottom:-20px">
                <p>Atas perhatiannya kami ucapkan <br> Terima Kasih</p>
              </div>
            </div>


          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn bukaundangan" data-dismiss="modal" style="border-radius:20px;border:1px solid white;background-color:rgba(0,0,0,.6);width:200px;color:white"><i class="far fa-envelope-open"></i> OPEN</button>
          </div>
        </div>
      </div>
    </div>


  

<!-- Modal -->
<div class="modal fade" id="modalmempelai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body" style="padding: 5px">
        <div class="mempelai">
          
        </div>
      </div>

    </div>
  </div>
</div>

<?php if($detailundangan['musik_acara']){ ?>
  <!-- <div class="text-primary" style="position:fixed;bottom:100px;right:25px;border:0px solid gray;border-radius:50%;z-index:1020;">
    <div class="btn-group dropup d-flex justify-content-center musikset" style="background-color:rgba(115, 187, 255,.7);padding:10px;border-radius:50%;width:50px;height:50px">
        <img src="<?=base_url('assets/img/musikoff.png'); ?>" width="100%">
    </div>
  </div> -->
  <audio id="musikvalue" loop style="width:100%">
    <source src="<?=base_url('assets/img/musikwedding/'.$detailundangan['musik_acara']); ?>" type="audio/mpeg">
  </audio>
<?php } ?>

    <style>
        .popover{
            width:180px;
        }
        .imgradius{
            border-radius:50%;
            margin-bottom:5px;
        }
        .popover-header{
          color:#0062CC;
        }
    </style>


  <div class="text-primary" style="position:fixed;bottom:30px;right:11px;border-radius:50%;z-index:1020;">
    <div style="background-color:rgba(26, 199, 84,);padding:4px;border-radius:50%">
    <span style="z-index:1020" class="cobain" data-placement="left" data-toggle="popover" title="Kirim ucapan via WA" data-html="true" data-content="
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
        <img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundang'],0,-1); ?>'> Mempelai Pria</a><br><img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundangw'],0,-1); ?>'> Mempelai Wanita</a>
      <?php }else if(substr($detailundangan['nomer_pengundang'],-1)=='w'&&substr($detailundangan['nomer_pengundangw'],-1)=='l'){ ?>
        <img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundang'],0,-1); ?>'> Mempelai Wanita</a><br><img class='imgradius' src='<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>' width='25'><a class='text-success' href='https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundangw'],0,-1); ?>'> Mempelai Pria</a>
      <?php } ?>
    <?php } ?>
    ">
      <i class="fab fa-whatsapp" style="font-size:55px;color:#00c45c;"></i>
    </span>
    </div>
  </div>

<?php 
  $tanggal=date('d', strtotime($detailundangan['tanggal_acara']));
  $bulan=date('m', strtotime($detailundangan['tanggal_acara']));
  $tahun=date('Y', strtotime($detailundangan['tanggal_acara']));
?>

<div class="ww-footer bg-light">
  <div class="container text-center py-4">
    <p class="my-0 mb-5" style="line-height:18px"> <span style="font-weight:bold;font-size:22px"><?=$detailundangan['namapanggilan_priawanita']; ?></span><br>(Doakan yang terbaik untuk kami)</p>
    <hr>
    <p class="mb-0">&copy; meinviteyou. All Rights Reserved.</p>
    <p class="mb-0">Design by - <a class="credit" href="<?=base_url(); ?>"><span style="color:#0062CC;">me</span><span class="text-danger"><u>INVITE</u></span><span style="color:#0062CC;">you</span></a></p>
  </div>
</div></div>
    </div>
    <footer></footer>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/temaundangan/classic/'); ?>js/aos.js"></script>
    <script src="<?=base_url('assets/temaundangan/classic/'); ?>js/ekko-lightbox.min.js"></script>
    <script src="<?=base_url('assets/temaundangan/classic/'); ?>scripts/main.js"></script>
    <script src="<?=base_url('assets/temaundangan/classic/'); ?>js/countdown.js"></script>
    <script>
      $(function () {


        $('.cobain').popover();
        $('.cookiePolicy').hide();
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

        $('#exampleModalCenter').modal('show');

        // $('.musikset').on('click',function(){
        //   var audio = $("#musikvalue")[0];
        // if (audio.paused) {
        //     audio.play();
        //     $(this).html(`<img src="<?=base_url('assets/img/musikoff.png'); ?>" width="100%">`);
        // }  else {
        //     audio.pause();
        //     $(this).html(`<img src="<?=base_url('assets/img/musikon.png'); ?>" width="100%">`);
        // }
        // });

        $('.carousel').carousel({
          interval: 6000,
          // wrap: false
        });
        $('#example1').popover({
          'placement':'right'
        });
        $('#example2').popover({
          'placement':'left'
        });

        $('.clickmempelai').on('click',function(){
          var img=$(this).attr('src');
          $('.mempelai').html('<img src="'+img+'" width="100%">');
        });
        

        $('.hoverc').on('mouseover',function(){
          $(this).css({
            'transform': 'rotate(-20deg)',
            'transition': '.5s'
          })
        });
        $('.hoverc').on('mouseout',function(){
          $(this).css({
            'transform': 'rotate(0deg)',
            'transition': '.5s'
          })
        });

        $('.musikset').on('click',function(){
          var audio = $("#musikvalue")[0];
          if (audio.paused) {
              audio.play();
              $('.putarmulai').addClass('putaran');
              $('.putarmulai').css('animation-play-state','running');
              $('.stik').css({
                'transform':'rotate(-35deg)'
              });
              $('.darkmusik').css('background-color','rgba(0,0,0,.3)');
              $('.ofm').hide();
              $('.onm').show();
          }  else {
              audio.pause();
              $('.putarmulai').css('animation-play-state','paused');
              $('.stik').css({
                'transform':'rotate(0deg)'
              });
              $('.darkmusik').css('background-color','rgba(0,0,0,.6)');
              $('.ofm').show();
              $('.onm').hide();
          }
        });

        $('.changekoment').on('change',function(){
            var changekoment = $('.changekoment').val();
          if(changekoment=='slide'){
            $('.titems').addClass('carousel-item');
            $('.carousel-indicators').show();
            $('.tlist').show();
            $('.tampilslide').hide();
            $('.tampillist').show();
          }else{
            $('.titems').removeClass('carousel-item');
            $('.carousel-indicators').hide();
            $('.tlist').hide();
            $('.tampilslide').show();
            $('.tampillist').hide();
          }
        });

        $('.onm').hide();
        $('.bukaundangan').on('click',function(){
          var audio = $("#musikvalue")[0];
          audio.play();
          $('.putarmulai').addClass('putaran');
          $('.putarmulai').css('animation-play-state','running');
          $('.stik').css({
            'transform':'rotate(-35deg)'
          });
          $('.darkmusik').css('background-color','rgba(0,0,0,.3)');
          $('.ofm').hide();
          $('.onm').show();
        });

        $('body').css('background-color','<?=$detailundangan['color_template']; ?>');
        $('.warnatema2').css('background-color','<?=$detailundangan['color_template2']; ?>');

        // $('.tampilslide').hide();
        // $('body').on('click','.tampillist',function(){
        //   $('.titems').removeClass('carousel-item');
        //   $('.carousel-indicators').hide();
        //   $('.tlist').hide();
        //   $('.tampilslide').show();
        //   $('.tampillist').hide();
        // });
        // $('body').on('click','.tampilslide',function(){
        //   $('.titems').addClass('carousel-item');
        //   $('.carousel-indicators').show();
        //   $('.tlist').show();
        //   $('.tampilslide').hide();
        //   $('.tampillist').show();
        // });


      })
    </script>
  </body>
</html>