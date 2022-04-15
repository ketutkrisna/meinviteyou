
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
    <title><?=$title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="max-snippet:-1,max-image-preview:standard,max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="meINVITEyou.com">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="The Wedding Of <?=$detailundangan['namapanggilan_priawanita']; ?>">
    <meta name="description" content="<?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?>"/>
    <meta content='<?=base_url('assets/img/imgsharing/'.$detailundangan['img_sharing']); ?>' property='og:image'/>

    <!-- Favicons -->
    <link href="<?=base_url('/'); ?>assets/img/imgsharing/<?=$detailundangan['img_sharing']; ?>" rel="icon">
    <link href="<?=base_url('/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- link rel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="<?=base_url('assets/temaundangan/classic/'); ?>css/aos.css" rel="stylesheet">
    <link href="<?=base_url('assets/temaundangan/classic/'); ?>css/ekko-lightbox.css" rel="stylesheet">
    <link href="<?=base_url('assets/temaundangan/classic/'); ?>styles/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/temaundangan/classic/'); ?>styles/timeline.css">
    <script src="https://kit.fontawesome.com/33095fbedf.js" crossorigin="anonymous"></script>
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

  <div class="ww-wedding-announcement" style="display:flex;justify-content:center;align-items:center;">
    <div class="container ww-announcement-container" style="padding:0;margin:0">
      <span data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000" style="font-size:20px">The Wedding Of <br></span>
      <p class="ww-couple-name ww-title mb-3" style="font-size:40px" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000"><?=$detailundangan['namapanggilan_priawanita']; ?></p>
      <img style="margin-top:-20px;width:250px" class="img-fluid" src="<?=base_url('assets/temaundangan/classic/'); ?>images/laurel-1.png" alt="save the date" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000"/>
      <p class="h2 mt-2 ww-title" style="text-shadow:1px 1px 4px black!important" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="10">
        <!-- 20<sup>th</sup> December, 2018 -->
        <?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?>
      </p>

      <div class="count-down-wrapper" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="10" style="margin-top:0px">
        <div id="clock">
          <div class="d-flex justify-content-center">
            <div class="times ml-3 mr-3" style="">
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

            <div class="times ml-3 mr-3" style="">
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

            <div class="times ml-3 mr-3" style="">
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
            <div class="times mt-3" style="">
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
      <?php if(!empty($detailundangan['musik_acara'])){ ?>
      <div class="piringan" style="position: absolute;top:5px;z-index:30;left:10px;">
        <div class="musikplayer musikset myshadow" style="width:70px;height:70px;border-radius:50%;background-color:white;border:1px solid yellow;box-shadow:1px 1px 9px #ddd;">
          <img class="putarmulai" style="border-radius:50%" src="<?=base_url('assets/img/imgsharing/'.$detailundangan['img_sharing']); ?>" width="100%">
          <div class="bulattengah" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:20px;height:20px;border-radius:50%;background-color:#c2c2c2;">
            <div class="bulathitam" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:5px;height:5px;border-radius:50%;background-color:#353b35;"></div>
          </div>
          <div class="darkmusik" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:96%;height:97%;border-radius:50%;background-color:rgba(0,0,0,.4);transition:.7s;"></div>
        </div>
        <div class="stik" style="position:absolute;left:5px;margin-top:-3px;width:20px;height:20px;transition:1s;z-index:10;">
          <img class="stikok musikset" style="position:absolute;left:21.3px;right:0;margin:auto;transform:rotate(-93deg);bottom:0;top:-2.2px" src="<?=base_url('assets/img/stick3.png'); ?>" width="20">
        </div>
      </div>

      <div id="navatas" class="navatas center-align white-text myshadow" style="position:absolute;top:20px;left:73px;border-radius:0 40px 40px 0;z-index:8;transition:1s;height:40px;min-width:0px;background-color:rgba(0,0,0,.5);display:flex;justify-content:center;align-items:center;padding:0 10px 8px 10px;border:1px solid yellow;z-index:26;">
        <h5 class="sizefont" style="font-size:18px;color:white;margin-top:10px"><?=$detailundangan['namapanggilan_priawanita']; ?></h5>
        <div class="bars" style="position:absolute;top:-35px;left:-10px;transition:.7s">
          <img class="onm" style="margin-top:1px" src="<?=base_url('assets/img/bars-musik.gif'); ?>" width="100px" height="50px">
          <img class="ofm" style="position:absolute;top:10.5px;left:0" src="<?=base_url('assets/img/bars-musikof.gif'); ?>" width="100px" height="30px">
        </div>
      </div>
      <?php } ?>

      <style>
        .lismenu{
          font-size:13px;
          background-color:rgba(255,255,255,.7);
          padding:4px 5px 3px 5px;
          border-radius:2px;
          color:#303030;
          box-shadow:0 0 5px rgba(0,0,0,.4);
        }
        .smooth-scroll{
          display:flex;
          align-items:center;
        }
      </style>

      <button style="margin-top:15px;background-color:rgba(0,0,0,.5);color:white!important;" class="navbar-toggler ml-auto myshadow" type="button" data-toggle="collapse" data-target="#ww-navbarNav" aria-controls="ww-navbarNav" aria-expanded="false" aria-haspopup="true" aria-label="Toggle navigation">
         <i class="fas fa-bars" style="font-size:25px"></i>
      </button>

      <div class="collapse navbar-collapse text-uppercase" id="ww-navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#home"><span class="lismenu">Home <i class="text-info fas fa-home" style="font-size:20px;padding-left:3px;"></i></span></a></li>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#couple"><span class="lismenu">Couple <i class="text-info fas fa-restroom" style="font-size:20px;padding-left:3px;"></i></span></a></li>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#events"><span class="lismenu">Events <i class="text-info fas fa-glass-cheers" style="font-size:20px;padding-left:3px;"></i></span></a></li>
        <?php if(!empty($detailundangan['stori_pengundang'])): ?>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#stori"><span class="lismenu">Love Story <i class="text-info fas fa-heartbeat" style="font-size:20px;padding-left:3px;"></i></span></a></li>
        <?php endif; ?>
        <?php if($countgaleri['countgaleri']==0){}else{ ?>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#gallery"><span class="lismenu">Gallery <i class="text-info fas fa-photo-video" style="font-size:20px;padding-left:3px;"></i></span></a></li>
        <?php } ?>
        <?php if(!empty($detailundangan['rekening_pengundang'])): ?>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#rekening"><span class="lismenu">Transfer <i class="text-info fas fa-donate" style="font-size:20px;padding-left:3px;"></i></span></a></li>
        <?php endif; ?>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#people"><span class="lismenu">Friend Wishes <i class="text-info fas fa-comments" style="font-size:20px;padding-left:3px;"></i></span></a></li>
          <li class="nav-item ml-auto"><a class="nav-link smooth-scroll" href="#rsvp"><span class="lismenu">RSVP <i class="text-info fas fa-file-signature" style="font-size:20px;padding-left:3px;"></i></span></a></li>
        </ul>
      </div>

    </div>
  </nav>
</div>


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

<div class="ww-section" id="events" style="margin-top:-40px;">
  <div class="container ww-wedding-event" style="margin-top:-50px;">
    <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000" style="color:black;"><span style="background-color:rgba(244,244,244,.7);padding:2px 50px 2px 50px;border-radius:10px">Events</span></h2>
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
  <div class="container ww-wedding-event" style="margin-top:-50px">

    <h2 class="h1 text-center pt-5 pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000" style="color:black;"><span style="background-color:rgba(244,244,244,.7);padding:2px 50px 2px 50px;border-radius:10px">Love Story</span></h2>

    <?=$detailundangan['stori_pengundang']; ?>

  </div>
</div>
<?php endif; ?>


<?php if($countgaleri['countgaleri']==0){}else{ ?>
<div class="ww-section" id="gallery" style="margin-top:-50px;">
  <div class="ww-photo-gallery" style="margin-top:-50px;">
    <div class="container">

      <h2 class="h1 text-center pt-5 pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000" style="color:black;"><span style="background-color:rgba(244,244,244,.7);padding:2px 50px 2px 50px;border-radius:10px">Gallery</span></h2>
      <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="0">
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

      <?php if(!empty($detailundangan['video_acara'])): ?>
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
      <?php endif; ?>

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


<div class="ww-section" id="people" style="margin-top:-50px;">
  <div class="container ww-couple-friends" style="margin-top:-50px;">
    <h2 class="h1 text-center pt-5 ww-title" data-aos="zoom-in-down" data-aos-duration="1000" style="color:black;"><span style="background-color:rgba(244,244,244,.7);padding:2px 50px 2px 50px;border-radius:10px">Friend Wishes</span></h2>

    <div class="row">
      <div class="col-12" style="margin-top:20px;display:flex;justify-content:space-between;z-index:5">
        <div class="jumlahwhises" style="font-size:20px;font-weight:bold;color:#616161;background-color:rgba(255,255,255,.8);padding:2px 10px 2px 10px;border-radius:2px;border:1px solid #ddd;height:37px;">12 whises</div>
        <div class="form-group ww-rsvp-form">
          <select class="form-control changekoment" id="events-input">
            <option value="slide">Slide</option>
            <option value="list">List</option>
          </select>
        </div>
      </div>
    </div>

    <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel" style="margin-top:-40px;">
      <ol class="carousel-indicators">
        <?php 
          $urlpucapana=$detailundangan['id_pengundang'];

          if($detailundangan['tipe_undangan']=='mudah'){
            $queryallucapana="SELECT pengundang.*, komen.*, count(id_komenreply) as counterply from pengundang join komen on pengundang.id_pengundang=komen.urlpengundang_komen left join reply on komen.id_komen=reply.id_komenreply where urlpengundang_komen=$urlpucapana group by id_komen order by id_komen desc";
            $dataucapana=$this->db->query($queryallucapana)->result_array();
          }else{
            $queryallucapana="SELECT * from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan=$urlpucapana group by id_ucapan order by id_ucapan desc";
            $dataucapana=$this->db->query($queryallucapana)->result_array();
          }
        ?>
        <?php $no=0; foreach($dataucapana as $dua): ?>
          <li class="<?php if($no==0){echo 'active';} ?>" data-target="#carouselExampleIndicators" data-slide-to="<?=$no++; ?>"></li>
        <?php endforeach; ?>
      </ol>
      <div class="carousel-inner">
        <?php 
          $urlpucapan=$detailundangan['id_pengundang'];
          if($detailundangan['tipe_undangan']=='mudah'){

            $queryucapan="SELECT max(id_komen) as maxidu FROM komen where urlpengundang_komen='$urlpucapan'";
            $resultmax=$this->db->query($queryucapan)->row_array();

            $queryallucapan="SELECT pengundang.*, komen.*, count(id_komenreply) as counterply from pengundang join komen on pengundang.id_pengundang=komen.urlpengundang_komen left join reply on komen.id_komen=reply.id_komenreply where urlpengundang_komen=$urlpucapan group by id_komen order by id_komen desc";
            $dataucapan=$this->db->query($queryallucapan)->result_array();

            $queryallucapancount="SELECT count(*) as ucount from pengundang join komen on pengundang.id_pengundang=komen.urlpengundang_komen where urlpengundang_komen='$urlpucapan'";
            $dataucapancount=$this->db->query($queryallucapancount)->row_array();

          }else{

            $queryucapan="SELECT max(id_ucapan) as maxidu FROM ucapan where urlpengundang_ucapan='$urlpucapan'";
            $resultmax=$this->db->query($queryucapan)->row_array();

            $queryallucapan="SELECT * from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan=$urlpucapana group by id_ucapan order by id_ucapan desc";
            $dataucapan=$this->db->query($queryallucapan)->result_array();

            $queryallucapancount="SELECT count(*) as ucount from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan='$urlpucapana'";
            $dataucapancount=$this->db->query($queryallucapancount)->row_array();

          }
        ?>

        <?php if($dataucapancount['ucount'] <= 0){ ?>
          <div class="row justify-content-center">
            <a class="nav-link smooth-scroll text-center text-info" href="#rsvp" style="display:block;">Ketik ucapan pada input dibawah <div><i class="fas fa-arrow-down"></i></div></a>
          </div>
        <?php }else{ ?>
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

          <?php if($detailundangan['tipe_undangan']=='mudah'){ ?>

            <div class="carousel-item titems <?php if($du['id_komen']==$resultmax['maxidu']){echo 'active';}else{} ?> countkomentar">
              <div class="row">
                <div class="col-12">
                  <div class="card d-block mb-3 myshadow" style="background-color:#f2f2f2!important;">
                    <div class="card-body text-center" style="margin-left:30px;margin-right:30px;">
                      <div class="bungkusnamakomen" style="display:flex;justify-content:center;align-items:center;">
                        <div class="imagekomen" style="border-radius:50%;width:30px;height:30px;box-shadow:0 0 7px rgba(0,0,0,.6);margin-right:8px;line-height:30px;background-color:#fff;">
                          <i class="fas fa-user-check" style="width:30px;height:30px;font-size:20px;margin-left:2px;color:#515151;"></i>
                        </div>
                        <div class="h5 text-left" style="line-height:15px;margin-top:5px;">
                          <span><?=$du['urldiundang_komen']; ?></span><br>
                          <span style="color:#aaa;font-size:12px;margin-top:-50px;"><?=$post.' '.date('H.i',$du['waktu_ucapan']); ?></span>
                        </div>
                      </div>
                      <div style="display:flex;justify-content:center;">
                        <div style="border-bottom:1px solid #ddd;width:50%;"></div>
                      </div>
                      <p class="mb-0 text-muted"><?=$du['isi_komen']; ?> 
                  <?php if($this->session->userdata('level_user')=='admin'){ ?>
                      <a onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/hapusucapantampanama/'.$du['id_komen'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang']); ?>">[hapus]</a>
                  <?php }else if($this->session->userdata('level_user')=='user' && $this->session->userdata('id_p')==$detailundangan['id_pengundang']){ ?>
                      <a onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('users/hapusucapanusertampanama/'.$du['id_komen'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang']); ?>">[hapus]</a>
                  <?php } ?>
                      </p>

                      <div style="display:flex;justify-content:center;">
                      <div class="reply" style="color:#757575;font-size:15px;align-items:center;justify-content:space-between;display:flex;margin-top:-0px;width:90%;">
                        <?php if($du['counterply']==0){ ?>
                          <span></span>
                        <?php }else{ ?>
                          <span class="" style="font-size:13px;color:#3cd0de;"><?=$du['counterply']; ?> balasan</span>
                        <?php } ?>
                        <span class="reply-to" data-reply="<?= $du['id_komen']; ?>" style="cursor:pointer;font-style:italic;color:#3cd0de;"><i class="fas fa-reply"></i> balas</span>
                      </div>
                      </div>

                      <div class="form-reply toggle-form-reply-<?= $du['id_komen']; ?>" style="padding:0 10px 0 10px;margin-top:5px;">
                        <form class="" action="<?=base_url('undangan/replytampanama'); ?>" method="post">
                            <input type="hidden" name="idupengundang" value="<?= $du['urlpengundang_komen']; ?>">
                            <input type="hidden" name="idkomen" value="<?= $du['id_komen']; ?>">
                            <div class="">
                              <div class="">
                                <input style="height: 25px;border: 1px solid #ddd;color:#616161;width:80%;border-radius:5px;margin-bottom:5px;" class="" type="text" name="namareply" placeholder="ketik nama.." required>
                              </div>
                            </div>
                            <div class="">
                                <textarea class="" placeholder="ketikan balasan.." id="floatingTextarea2" style="height: 40px;color:#616161;background-color:white;border: 1px solid #ddd;width:80%;border-radius:5px;" name="isireply" autocomplete="off" required></textarea>
                            </div>
                          <div style="justify-content:right;display:flex;width:90%;">
                            <button style="padding:0px 2px 0px 2px;margin-top:2px;" type="submit" name="ok-reply" class="btn btn-small btn-primary btn-reply">kirim</button>
                          </div>
                        </form>
                      </div>

                      <?php 
                        $idkomen=$du['id_komen']; 
                        $queryreply="SELECT * from reply where id_komenreply=$idkomen order by id_reply desc";
                        $datareply=$this->db->query($queryreply)->result_array();
                      ?>

                      <?php if($du['counterply']==0){}else{ ?>
                      <div style="display:flex;justify-content:flex-start;width:90%;margin-left:15px;">
                        <i style="transform:rotate(180deg);font-size:20px;color:#3cd0de;margin-top:5px;" class="fas fa-reply-all"></i>
                      </div>
                      <?php } ?>

                      <?php foreach($datareply as $reply){ ?>
                      <?php 
                        $waktu=time() - $reply['waktu_reply'];
                        if($waktu<60){
                          $postreply = $waktu.' detik yang lalu';
                        }else if($waktu>=60&&$waktu<=3600){
                          $waktumenit=$waktu/60;
                          $postreply = floor($waktumenit).' menit yang lalu';
                        }else if($waktu>=3600&&$waktu<=86400){
                          $waktujam=$waktu/3600;
                          $postreply = floor($waktujam).' jam yang lalu';
                        }else if($waktu>=86400&&$waktu<=604800){
                          $waktuhari=$waktu/86400;
                          $postreply = floor($waktuhari).' hari yang lalu';
                        }else if($waktu>=604800&&$waktu<=2592000){
                          $waktuminggu=$waktu/604800;
                          $postreply = floor($waktuminggu).' minggu yang lalu';
                        }else if($waktu>=2592000&&$waktu<=31536000){
                          $waktubulan=$waktu/2592000;
                          $postreply = floor($waktubulan).' bulan yang lalu';
                        }else{
                          $waktutahun=$waktu/31536000;
                          $postreply = floor($waktutahun).' tahun yang lalu';
                        }
                      ?>
                      <div class="" style="min-width:10px;margin-left:45px;margin-top:-15px;display:flex;margin-bottom:25px;">
                        <div class="imagekomen text-center" style="border-radius:50%;width:20px;height:20px;box-shadow:0 0 7px rgba(0,0,0,.6);margin-right:5px;line-height:20px;background-color:#fff;align-items:center;">
                          <i class="fas fa-user-check" style="width:30px;height:30px;font-size:13px;color:#7a7a7a;margin-left:-3px;"></i>
                        </div>
                        <div class="tampilkomentreply" style="box-shadow:0 0 5px rgba(0,0,0,.3);border-radius:5px;padding:3px 9px 3px 9px;min-width:170px;position:relative;background-color:#fff;">
                          <div class="nama" style="display:flex;justify-content:space-between;align-items:center;"><span style="font-weight:600;line-height:16px;margin-right:10px;color:#616161;font-size:15px;"><?=$reply['nama_reply']; ?></span><span style="font-size:9px;color:#757575;line-height:13px;"><?=$postreply.' '.date('H.i',$reply['waktu_reply']); ?></span></div>
                          <div class="isikomentar" style="color:#757575;line-height:16px;font-size:13px;text-align:left;">
                            <?=$reply['isi_reply']; ?>
                            <?php if($this->session->userdata('level_user')=='admin'){ ?>
                              <a style="color:red;" onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/hapusreply/'.$du['id_komen'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang'].'/'.$reply['id_reply']); ?>">[hapus]</a>
                            <?php }else if($this->session->userdata('level_user')=='user' && $this->session->userdata('id_p')==$detailundangan['id_pengundang']){ ?>
                              <a onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('users/hapusreplyuser/'.$du['id_komen'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang'].'/'.$reply['id_reply']); ?>">[hapus]</a>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                      <?php } ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php }else{ ?>

            <div class="carousel-item titems <?php if($du['id_ucapan']==$resultmax['maxidu']){echo 'active';}else{} ?> countkomentar">
              <div class="row">
                <div class="col-12">
                  <div class="card d-block mb-3 myshadow" style="background-color:#f2f2f2!important;">
                    <div class="card-body text-center">
                      <div class="h5" style="line-height:15px">
                        <?=$du['nama_diundang']; ?><br>
                        <span style="color:#aaa;font-size:12px;margin-top:-50px;"><?=$post.' '.date('H.i',$du['waktu_ucapan']); ?></span>
                      </div>
                      <p class="mb-0 text-muted"><?=$du['isi_ucapan']; ?> 
                  <?php if($this->session->userdata('level_user')=='admin'){ ?>
                      <a onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/hapusucapan/'.$du['id_ucapan'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang']); ?>">[hapus]</a>
                  <?php }else if($this->session->userdata('level_user')=='user' && $this->session->userdata('id_p')==$detailundangan['id_pengundang']){ ?>
                      <a onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('users/hapusucapanusertampanama/'.$du['id_ucapan'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang']); ?>">[hapus]</a>
                  <?php } ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>
        <?php endforeach; ?>
        <?php } ?>

      </div>
      <a class="carousel-control-prev tlist" href="#carouselExampleIndicators" role="button" data-slide="prev" style="width:40px;">
        <span class="carousel-control-prev-icon" style="background-color:rgba(0,0,0,.2);" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next tlist" href="#carouselExampleIndicators" role="button" data-slide="next" style="width:40px;">
        <span class="carousel-control-next-icon" style="background-color:rgba(0,0,0,.2)" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<style>
  .ww-rsvp-form .form-select ,textarea.form-control {
    background-color: rgba(0, 0, 0, 0.3)!important;
    color: #616161;
    border: 3px solid rgba(11,94,215, 0.6);
  }
  .ww-rsvp-form .form-select ,textarea.form-control:focus {
    background-color: rgba(0, 0, 0, 0.3)!important;
    color: #616161;
    border: 3px solid rgba(11,94,215, 0.6);
  }
  .ww-rsvp-form select.form-select option {
    background: rgba(0, 0, 0, 0.3)!important;
    color: #616161;
  }
  .ww-rsvp-form input.input-custom {
    background-color: rgba(0, 0, 0, 0.3)!important;
    color: #616161;
    width:100%;
    height:40px;
  }
</style>

<div class="ww-section ww-rsvp-detail text-white myshadow" id="rsvp" style="margin-top:-50px;border-radius:20px 20px 0 0!important;background-color:white!important;">
  <div class="container" data-aos="zoom-in-up" data-aos-duration="1000" style="margin-top:-50px;">
    <div class="col text-center">
      <h2 class="h1 ww-title pb-3" data-aos="zoom-in-down" data-aos-duration="1000" style="color:black;margin-top:-30px"><span style="background-color:rgba(244,244,244,.7);padding:2px 50px 2px 50px;border-radius:10px">RSVP</span></h2>
    </div>
    <div class="row ww-rsvp-form">
      <div class="col-md-10">
        <div class="card-body">
        <?php if($detailundangan['tipe_undangan']=='mudah'){ ?>

          <form action="<?=base_url('undangan/ucapantampanama'); ?>" method="post">
            <input type="hidden" name="idupengundang" value="<?=$detailundangan['id_pengundang']; ?>">
            <div class="row">
              <div class="col md-6 pb-3">
                <div class="form-group">
                  <input class="form-control input-custom" type="text" name="namaanda" placeholder="Ketikan nama anda disini.." autocomplete="off" required>
                </div>
              </div>
              <div class="col-md-6 pb-3">
                <div class="form-group">
                  <select class="form-control form-select" id="events-input" name="absenkehadiran" required>
                    <option value="">Apakah kamu menghadiri?</option>
                    <option value="hadir">Menghadiri</option>
                    <option value="tidak">Tidak menghadiri</option>
                    <option value="ragu">Masih ragu-ragu</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6 pb-3">
                <div class="form-group">
                  <select class="form-control form-select" id="events-input" name="jumlahkehadiran" required>
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
                  <label for="message-input">Ucapan Anda</label>
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

        <?php }else{ ?>

          <form action="<?=base_url('undangan/ucapan'); ?>" method="post">
            <input type="hidden" name="idupengundang" value="<?=$detailundangan['id_pengundang']; ?>">
            <div class="row">
              <div class="col md-6 pb-3">
                <div class="form-group">
                  <select class="form-control form-select" id="guest-input" name="namaanda">
                    <option class="disabled" value="<?=$detailundangan['id_diundang']; ?>"><?=$detailundangan['nama_diundang']; ?></option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 pb-3">
                <div class="form-group">
                  <select class="form-control form-select" id="events-input" name="absenkehadiran" required>
                    <option value="">Apakah kamu menghadiri?</option>
                    <option value="hadir">Menghadiri</option>
                    <option value="tidak">Tidak menghadiri</option>
                    <option value="ragu">Masih ragu-ragu</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6 pb-3">
                <div class="form-group">
                  <select class="form-control form-select" id="events-input" name="jumlahkehadiran" required>
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

        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" data-backdrop="static" data-keyboard="false" tabindex="-1" style="background-color:#333333;">
      <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content text-center text-light" style="background-color:#333333;border:0;">
          <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title" id="exampleModalLongTitle" style="font-size:27px;font-family:'Great Vibes','cursive';"><?=$detailundangan['namapanggilan_priawanita']; ?></h5>
          </div>
          <div class="modal-body" style="margin-top:-10px">
            <span>Hello,</span><br>
            <span style="font-size:25px;margin-top:-10px;font-family:'Great Vibes','cursive';"><u><?=$detailundangan['nama_diundang']; ?></u></span><br>
            <span>Kami mengundang anda untuk datang pada hari pernikahan kami!</span>
            <div class="row">
            
            <?php if(!empty($detailundangan['informasi_modal'])): ?>
              <div class="col-12 mt-2">
                <?=$detailundangan['informasi_modal']; ?>
              </div>
            <?php endif; ?>
            
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

<?php if(!empty($detailundangan['musik_acara'])){ ?>
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

<?=$this->session->flashdata('message'); ?>

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

        var countkomentar = document.querySelectorAll('.countkomentar');
        $('.jumlahwhises').text(countkomentar.length+' Whises');

        $('.form-reply').hide();
        $('.reply-to').on('click',function(){
          var datareply=$(this).data('reply');
          // $('.form-reply').hide();
          $('.toggle-form-reply-'+datareply).slideToggle();
        })

        $('.closeout').on('click',function(){
          $('.popupnotif').fadeOut();
        });

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
