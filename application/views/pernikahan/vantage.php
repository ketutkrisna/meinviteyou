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
<html>

<head>
  <title><?=$title; ?></title>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('assets/temaundangan/vantage/'); ?>css/materialize.css">
  <link rel="stylesheet" href="<?=base_url('assets/temaundangan/vantage/'); ?>css/timeline.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Satisfy&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    body,html{
      overflow-x:hidden;
    }
    .block{
      height:105vh
    }
    #awal{
      height:105vh
    }
    #mempelai{
      min-height: 400px;
    }
    #acara{
      min-height: 400px;
    }
    #galeri{
      min-height: 400px;
    }
    #stori{
      min-height: 400px;
    }
    #quesbook{
      min-height: 400px;
    }
    #kehadiran{
      min-height: 400px;
    }
    .wrapper-digit{
      background-color:#0097a7;
      border-radius:5px;
      width:75px;
      height:70px;
    }
    .times {
        animation: times .6s infinite alternate;
        transition:1s;
    }
    .note {
      position:absolute;
      left:0;
      right:0;
      margin:auto;
      animation: timesnote .6s infinite alternate;
      transition:1s;
    }
    .bukaund {
      animation: timesnote .6s infinite alternate;
      transition:1s;
    }

    .pin-top {
      position: relative;
    }
    .pin-bottom {
      position: relative;
    }
    .pinned {
      position: fixed !important;
    }

    .putaran{
      animation-name: putar;
      animation-duration: 4s;
      animation-delay: 1s;
      animation-iteration-count: infinite;
      animation-timing-function: linear;
      transform-style: preserve-3d;
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
        font-size: 22.5px;
        transition:.6s;
      }
    }
    @keyframes timesnote {
      0%   { 
        font-size: 15px;
        transition:.6s;
       }
      100% { 
        transform: scale(1.1);
        font-size: 15.4px;
        transition:.6s;
      }
    }

    @media screen and (min-width: 576px) {
      .dekstop{
        width:90%;
        margin:auto;
      }
    }
    @media screen and (min-width: 768px) {
      .dekstop{
        width:80%;
        margin:auto;
      }
    }
  </style>
</head>

<body>

  <div id="awal" class="white para" style="background-image:url('<?=base_url('assets/img/backgroundawal/'.$detailundangan['background_welcome']); ?>');background-size:cover;background-position:50% 0px;position:relative;display:flex;justify-content:center;align-items:center;">


  <?=$this->session->flashdata('message'); ?>


    <div class="cobain" style="margin-top:-20px">

    <div class="row">
      <div class="col s12 center-align" style="font-family: 'Satisfy', cursive;">
        <span class="white-text" style="text-shadow:1px 1px 4px #111;font-size:20px;">The Wedding Of</span><br>
        <span class="white-text" style="text-shadow:1px 1px 4px #111;font-size:35px;"><?=$detailundangan['namapanggilan_priawanita']; ?></span>
      </div>
    </div>
    <div class="row" style="margin-top:-10px;">
      <div class="col s12 center-align">
        <img src="<?=base_url('assets/temaundangan/vantage/'); ?>img/savethedate2.png" width="260">
      </div>
    </div>
    <div class="row" style="margin-top:-10px;">
      <div class="col s12 center-align">
        <span class="white-text" style="text-shadow:1px 1px 2px #111;font-size:24px;font-family: 'Satisfy', cursive;"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></span>
      </div>
    </div>
    <div class="row" style="margin-top:-10px;">
      <div class="col s12">
        <div class="count-down-wrapper" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="2000" data-aos-offset="20" style="margin-top:0px;">
                <div id="clock" class="center-align" style="display:flex;justify-content:center;">
                    <div class="times center-align" style="margin-right:6px;">
                        <div class="days_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                            <div class="wrapper-digit">
                                <div class="white-text" style="display:flex;justify-content:center;font-size:23px;font-weight:bold;">
                                <div class="digit"></div>
                                <div class="digit"></div>
                                </div>
                                <span style="color:#ddd;" class="note dash_title">Hari</span>
                            </div>
                        </div>
                    </div>

                    <div class="times" style="margin:0 6px 0 6px;">
                        <div class="hours_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                            <div class="wrapper-digit">
                                <div class="white-text" style="display:flex;justify-content:center;font-size:23px;font-weight:bold;">
                                <div class="digit"></div>
                                <div class="digit"></div>
                                </div>
                                <span style="color:#ddd;" class="note dash_title">Jam</span>
                            </div>
                        </div>
                    </div>

                    <div class="times" style="margin:0 6px 0 6px;">
                        <div class="minutes_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                            <div class="wrapper-digit">
                                <div class="white-text" style="display:flex;justify-content:center;font-size:23px;font-weight:bold;">
                                <div class="digit"></div>
                                <div class="digit"></div>
                                </div>
                                <span style="color:#ddd;" class="note dash_title">Menit</span>
                            </div>
                        </div>
                    </div>

                    <div class="times" style="margin-left:6px;">
                        <div class="seconds_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                            <div class="wrapper-digit">
                                <div class="white-text" style="display:flex;justify-content:center;font-size:23px;font-weight:bold;">
                                <div class="digit"></div>
                                <div class="digit"></div>
                                </div>
                                <span style="color:#ddd;" class="note dash_title">Detik</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of clock -->
            </div> <!-- count-down-wrapper -->
      </div>
    </div>

    </div>

  </div>

     
   
  <div id="mempelai" class="warnatema" style="background-color:#dce0e0;margin-top:0px;position:relative;">

     <svg style="margin-top: -210px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path class="warnawaves" fill="#dce0e0" fill-opacity="1" d="M0,32L80,74.7C160,117,320,203,480,213.3C640,224,800,160,960,149.3C1120,139,1280,181,1360,202.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
   <!--  <svg style="margin-top: -200px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#ffffff" fill-opacity="1" d="M0,160L120,181.3C240,203,480,245,720,240C960,235,1200,181,1320,154.7L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg> -->
    <!-- <svg style="margin-top: -180px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="rgba(151, 194, 143, 1)" fill-opacity="1" d="M0,32L80,74.7C160,117,320,203,480,213.3C640,224,800,160,960,149.3C1120,139,1280,181,1360,202.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg> -->
    <div class="dekstop">
      <img data-aos="fade-left" data-aos-duration="1000" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/bunga2.png" width="200" style="position:absolute;top:-120px;right:-30px;z-index:4">
    </div>
    <!-- <div class="mempelai"></div> -->

    <!-- <nav class="pushpin-sticky z-depth-0 pin-bottom" data-target="mempelai" data-uptop="upmempelai" style="z-index:2">
      <div class="nav-wrapper cyan darken-2" style="opacity:1;font-family: 'Satisfy', cursive;">
        <div class="container">
          <a href="#" class="brand-logo" style="text-shadow:1px 1px 3px #aaa;"><i class="material-icons" style="font-size:30px;">safety_divider</i> Mempelai</a>
        </div>
      </div>
    </nav> -->

    <div class="mempelai dekstop">
    <div class="row" style="">
      <div class="container">
      <div class="col s12 center-align">
        <div class="warnakotak z-depth-1" style="border-radius:7px;padding:3px;margin-top:20px;background-color:#eee"> 
        <p class="warnatitle" style="font-family: 'Roboto', cursive;font-size:17px;color:#3b3d3b;padding:0 5px 0 5px;"><?=$detailundangan['ucapan_awal']; ?></p>
        </div>
      </div>
      </div>
    </div>

    <!-- <div class="infoprofil white z-depth-1" style="background-color:red;width:90%;margin:auto;padding-top:20px;border-radius:10px;"> -->
    <div class="row" style="padding-bottom:50px;">
      <!-- <div class="container"> -->

      <style>
        .anakke{
          font-size:14px;
          padding:0 7px 0 7px;
        }
        .ortu{
          font-size:16px;
          padding:0 7px 0 7px;
        }
      </style>

      <div class="col s12 l5 center-align" data-aos="flip-left" data-aos-duration="1000" style="">
        <img class="z-depth-1 img-thumbnail" src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" alt="mempelai" width="150" style="border-radius:50%;"><br>
        <span style="font-size:29px;font-family: 'Satisfy', cursive;background-color:rgba(255,255,255,.7);padding:0 10px 0 10px;border-radius:5px;"><?=$detailundangan['namalengkap_pria']; ?></span><br>
        <span style="background-color:rgba(255,255,255,.7);">
          <?=$detailundangan['orangtua_pria']; ?>
        </span>
      </div>
      <div class="col s12 l2 center-align">
        <div class="" style="display:flex;justify-content: center;align-items:center;">
            <!-- <hr data-aos="fade-right" data-aos-duration="1000" style="width:80%;margin:30px 0 30px 0;border:0;height:1px;background-color:#aaa;"> -->
            <img data-aos="fade-right" data-aos-duration="1000" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/panah01.png" style="width:150px;margin:30px 0 30px 0;border:0;height:50px;">
              <span data-aos="zoom-in" data-aos-duration="1500" class="material-icons red-text" style="font-size:50px;margin:10px 10px 10px 10px;">favorite</span> 
            <img data-aos="fade-left" data-aos-duration="1000" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/panah02.png" style="width:150px;margin:30px 0 30px 0;border:0;height:50px;">
            <!-- <hr data-aos="fade-left" data-aos-duration="1000" style="width:80%;margin:30px 0 30px 0;border:0;height:1px;background-color:#aaa;"> -->
        </div>
      </div>
      <div class="col s12 l5 center-align" data-aos="flip-right" data-aos-duration="1000" style="">
        <img class="z-depth-1 img-thumbnail" src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" alt="mempelai" width="150" style="border-radius:50%;"><br>
        <span style="font-size:29px;font-family: 'Satisfy', cursive;background-color:rgba(255,255,255,.7);padding:0 10px 0 10px;border-radius:5px;"><?=$detailundangan['namalengkap_wanita']; ?></span><br>
        <span style="background-color:rgba(255,255,255,.7);">
          <?=$detailundangan['orangtua_wanita']; ?>
        </span>
      </div>

      <!-- </div> -->
    </div>

    <!-- </div> -->
    </div>


  </div>


  <div id="acara" class="warnatema" style="background-color:#5fa17e;position:relative;">

    <svg style="margin-top:-25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path class="warnawaves" fill="#dce0e0" fill-opacity="1" d="M0,256L80,250.7C160,245,320,235,480,202.7C640,171,800,117,960,112C1120,107,1280,149,1360,170.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
    <!-- <svg style="margin-top:-20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="rgba(95, 161, 126, 1)" fill-opacity="1" d="M0,256L80,250.7C160,245,320,235,480,202.7C640,171,800,117,960,112C1120,107,1280,149,1360,170.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg> -->
    <div class="dekstop">
      <img data-aos="fade-right" data-aos-duration="1000" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/bunga1.png" width="200" style="position:absolute;top:-90px;left:-40px">
    </div>
    <!-- <div class="acara"></div> -->

   <!--  <nav class="pushpin-sticky z-depth-0 pin-bottom" data-target="acara" data-uptop="upacara" style="z-index:2;font-family: 'Satisfy', cursive;">
      <div class="nav-wrapper cyan darken-2">
        <div class="container">
          <a href="#" class="brand-logo" style="text-shadow:1px 1px 3px #aaa;"><i class="material-icons" style="font-size:30px;">local_bar</i> Acara</a>
        </div>
      </div>
    </nav> -->

    <div class="acara dekstop">
    <div class="row" style="padding-bottom:60px;padding-top:50px"> 

      <div class="col s12 l6 center-align" data-aos="zoom-in" data-aos-duration="1000" style="margin-top:20px;">
        <div class="warnakotak" style="background-color:#eee;border-radius:9px;padding:3px;">
          <h5 class="warnatitle" style="font-size:26px;font-family: 'Roboto', cursive;color:#3b3d3b;">Akad</h5>
        </div>
        <div class="card horizontal" style="border-radius:10px;background-color:#eee;margin-top:1px">
          <div class="card-image" style="text-align:center;">
            
          </div>
          <div class="card-stacked">
            <div class="card-content center-align">
              <span style="display:flex;justify-content:center;">
                <i class="material-icons blue-text" style="font-size:27px;font-weight:bold;">event</i>
                <span style="font-size:18px;color:#19191a;"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_akad'])); ?></span>
              </span>
              <span style="display:flex;justify-content:center;margin-top:5px">
                <i class="material-icons blue-text" style="font-size:27px;font-weight:bold;">schedule</i>
                <span style="font-size:18px;color:#19191a;"><?=$detailundangan['jam_akad']; ?></span>
              </span>
            </div>
            <div class="card-action" style="">
              <i class="material-icons red-text" style="font-size:35px;line-height:15px;">place</i><br>
              <span style="font-size:18px;line-height:20px;"><?=$detailundangan['alamat_akad']; ?></span><br>
            </div>

            <?php if(!empty($detailundangan['map_akad'])): ?>
                <ul class="collapsible popout" style="width:90%;margin:auto;padding-bottom:10px;">
                  <li style="border-radius:10px;">
                    <div class="collapsible-header teal white-text" style="border-radius:8px;display:flex;justify-content:center;padding:6px"><span style="font-size:18px">Lihat Maps</span></div>
                    <div class="collapsible-body" style="">
                      <span>
                      <div class="video-container">
                        <?=$detailundangan['map_akad']; ?>
                      </div>
                      </span>
                    </div>
                  </li>
                </ul>
            <?php endif; ?>

          </div>
        </div>
      </div>


      <div class="col s12 l6 center-align" data-aos="zoom-in" data-aos-duration="1000" style="margin-top:20px;">
        <div class="warnakotak" style="background-color:#eee;border-radius:9px;padding:3px;">
          <h5 class="warnatitle" style="font-size:26px;font-family: 'Roboto', cursive;color:#3b3d3b;">Resepsi</h5>
        </div>
        <div class="card horizontal" style="border-radius:10px;background-color:#eee;margin-top:1px;">
          <div class="card-image" style="text-align:center;">
            
          </div>
          <div class="card-stacked">
            <div class="card-content center-align">
              <span style="display:flex;justify-content:center;">
                <i class="material-icons blue-text" style="font-size:27px;font-weight:bold;">event</i>
                <span style="font-size:18px;color:#19191a;"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></span>
              </span>
              <span style="display:flex;justify-content:center;margin-top:5px">
                <i class="material-icons blue-text" style="font-size:27px;font-weight:bold;">schedule</i>
                <span style="font-size:18px;color:#19191a;"><?=$detailundangan['jam_acara']; ?></span>
              </span>
            </div>
            <div class="card-action" style="">
              <i class="material-icons red-text" style="font-size:35px;line-height:15px;">place</i><br>
              <span style="font-size:18px;line-height:20px;"><?=$detailundangan['alamat_acara']; ?></span>
            </div>

            <?php if(!empty($detailundangan['map_acara'])): ?>
                <ul class="collapsible popout" style="width:90%;margin:auto;padding-bottom:10px;">
                  <li style="border-radius:10px;">
                    <div class="collapsible-header teal white-text" style="border-radius:8px;display:flex;justify-content:center;padding:6px"><span style="font-size:18px">Lihat Maps</span></div>
                    <div class="collapsible-body" style="">
                      <span>
                        <div class="video-container">
                        <?=$detailundangan['map_acara']; ?>
                        </div>
                      </span>
                    </div>
                  </li>
                </ul>
            <?php endif; ?>

          </div>
        </div>
      </div>


      <div class="row">
        <div class="col s12 center-align">
          <div class="z-depth-2" style="background-color:#eee;border-radius:9px;padding:3px;margin-top:30px;">
          <p class="" style="font-size:18px;color:#3b3d3b;padding:0 5px 0 5px;"><?=$detailundangan['ucapan_ahir']; ?></p>
        </div>
        </div>
      </div>

    </div>
    </div>

  </div>


  <?php if(!empty($detailundangan['stori_pengundang'])): ?>
  <div id="stori" class="warnatema" style="background-color:#5fa17e;position:relative;">
    <svg style="margin-top:-25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#dce0e0" fill-opacity="1" d="M0,256L80,224C160,192,320,128,480,117.3C640,107,800,149,960,176C1120,203,1280,213,1360,218.7L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

    <div class="upstori dekstop" style="padding-bottom:60px;">

      <div class="row">
      <div class="col s12 center-align">
        <div class="container">
            <div class="container">
        <div class="warnakotak z-depth-1" style="background-color:#eee;border-radius:9px;padding:0px;">
          <h5 class="header warnatitle" style="color:#3b3d3b;font-size:26px;font-family: 'Satisfy', cursive;padding:4px;">Love Story</h5>
        </div>
          </div>
        </div>
      </div>
    </div>

      <div class="container">
        <div class="timeline">
          
          <?=$detailundangan['stori_pengundang']; ?>

        </div>
      </div>
      
    </div>
  </div>
  <?php endif; ?>


  <?php if($countgaleri['countgaleri']==0){}else{ ?>
  <div id="galeri" class="warnatema"  style="margin-top:-20px;background-color:#dce0e0;position:relative;">

    <svg style="margin-top:-15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#5fa17e" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,85.3C640,117,800,203,960,218.7C1120,235,1280,181,1360,154.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

    <div class="galeri dekstop" style="padding-bottom:40px">

    <div class="row">
      <div class="col s12 center-align">
        <div class="container">
            <div class="container">
        <div class="warnakotak z-depth-1" style="background-color:#eee;border-radius:9px;padding:0px;">
          <h5 class="header warnatitle" style="color:#3b3d3b;font-size:26px;font-family: 'Satisfy', cursive;padding:4px;">Gallery</h5>
        </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">

      <?php $aos=1; foreach($fotogaleris as $fgs): ?>
        <?php if($aos++ % 2 == 0){$isiaos='fade-left';}else{$isiaos='fade-right';} ?> 
          <div class="col s6 m4 l4 xl3 center-align" style="margin-bottom:8px;">
            <img data-aos="<?=$isiaos; ?>" data-aos-duration="1000" class="card-image materialboxed z-depth-1 img-thumbnail" style="border-radius:5px;" src="<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>" width="100%">
          </div>
      <?php endforeach; ?>

    </div>


    <?php if(!empty($detailundangan['video_acara'])): ?>
    <div class="row">
    <div class="col s12 m8 offset-m2 l6 offset-l3 center-align" data-aos="zoom-in" data-aos-duration="1000" style="margin-top:20px;">
      <div class="" style="background-color:#eee;border-radius:9px;padding:0px;">
        <h5 class="" style="font-size:20px;font-family: 'Roboto', cursive;color:#3b3d3b;padding:2px">Video</h5>
      </div>
      <div class="card horizontal" style="border-radius:10px;background-color:#eee;margin-top:-8px;">
        <div class="card-image" style="text-align:center;">
          
        </div>
        <div class="card-stacked center-align">
          <div class="card-content center-align" style="padding:5px;">

            <div class="video-container">
              <?=$detailundangan['video_acara']; ?>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
    <?php endif; ?>


    </div>
  </div>
  <?php } ?>


  <?php if(!empty($detailundangan['rekening_pengundang'])): ?>
  <div id="rekening" class="warnatema" style="background-color:#5fa17e;position:relative;">
    <svg style="margin-top:-25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#dce0e0" fill-opacity="1" d="M0,256L80,224C160,192,320,128,480,117.3C640,107,800,149,960,176C1120,203,1280,213,1360,218.7L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

    <div class="uprekening dekstop" style="padding-bottom:60px;">

      <div class="row">
        <div class="col s12 center-align">
          <div class="warnakotak z-depth-2" style="background-color:#eee;border-radius:9px;padding:3px;">
          <p class="warnatitle" style="font-size:18px;color:#3b3d3b;padding:0 5px 0 5px;">Tampa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk pengantin dapat melalui :</p>
        </div>
        </div>
      </div>

      <div class="row">
        <?=$detailundangan['rekening_pengundang']; ?>
      </div>
      
    </div>
  </div>
  <?php endif; ?>


  <div id="quesbook" class="warnatema ww-detail" style="margin-top:-10px;background-color:#dce0e0;position:relative;">
    <!-- <nav class="pushpin-sticky z-depth-0 pin-bottom" data-target="quesbook" data-uptop="upquesbook" style="font-family: 'Satisfy', sans-serif;">
      <div class="nav-wrapper cyan darken-2">
        <div class="container">
          <a href="#" class="brand-logo" style="text-shadow:1px 1px 3px #aaa;"><i class="material-icons" style="font-size:30px;">comment</i> Komentar</a>
        </div>
      </div>
    </nav> -->
    <svg style="margin-top:-20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#5fa17e" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,229.3C480,203,600,117,720,90.7C840,64,960,96,1080,144C1200,192,1320,256,1380,288L1440,320L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

    <div class="dekstop">
      <img data-aos="fade-left" data-aos-duration="1000" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/bunga2.png" width="200" style="position:absolute;top:-80px;right:-30px;z-index:5">
    </div>

    <div class="quesbook ww-rsvp-form dekstop" style="padding-top:20px">

      <div class="row">
        <div class="col s12 center-align">
          <div class="container">
            <div class="container">
          <div class="warnakotak z-depth-1" style="background-color:#eee;border-radius:9px;padding:0px;">
            <h5 class="warnatitle" style="font-size:26px;font-family: 'Satisfy', cursive;color:#3b3d3b;padding:4px;">Friend Wishes</h5>
          </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s4 right" style="margin-top:-10px">
          <div class="input-field" style="z-index:2;">
            <select style="border-radius:5px;" class="changekomentar browser-default form-custom" name="changekomentar">
              <option value="slide">Slide</option>
              <option value="list">List</option>
            </select>
            <!-- <label>Materialize Select</label> -->
          </div>
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

      <?php if($dataucapancount['ucount'] <= 0){ ?>
        <div class="row" style="display:flex;justify-content:center;">
          <div class="col">
            <div class="center-align" style="margin-top:-20px;background-color:rgba(255,255,255,.4);border-radius:5px;">Friend wishes masih kosong, silahkan kirim ucapan sekarang pada form dibawah!</div>
          </div>
        </div>
      <?php }else{ ?>
      <div class="row">

        <div class="col s12 slidetampil" style="margin-top:-120px;">

          <div class="carousel checkcarousel">

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
            <a class="carousel-item center-align checkitem z-depth-1" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:8px;width:75%;color:black;" href="#one!">
              <h5 style="font-size:18px;line-height:12px;">
                <span style="color:#282928;"><?=$du['nama_diundang']; ?></span><br>
                <span style="color:#aaa;font-size:11px;margin-top:-20px;"><?=$post.' '.date('H.i',$du['waktu_ucapan']); ?></span>
              </h5>
              <div class="divider" style="margin-top:-7px;"></div>
              <p style="font-size:14px;line-height:16px;margin-top:3px;color:#4f4f4f;">
                <?=$du['isi_ucapan']; ?>
              </p>
            </a>

            <?php endforeach; ?>

          </div>
        </div>

        <div class="col s12 listtampil" style="margin-top:-20px;display:none;">
          <div class="">

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

            <?php if($this->session->userdata('level_user')=='admin'){ ?>
              <a style="color:red" onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/hapusucapan/'.$du['id_ucapan'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang']); ?>">[hapus]</a>
            <?php } ?>
            <a class="carousel-item checkitem center-align z-depth-1" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:10px;width:100%;display:block;margin-bottom:10px;color:black;" href="#one!">
              <h5 style="font-size:18px;line-height:12px;">
                <span style="color:#282928;"><?=$du['nama_diundang']; ?></span> <br>
                <span style="color:#aaa;font-size:11px;margin-top:-20px;"><?=$post.' '.date('H.i',$du['waktu_ucapan']); ?></span>
              </h5>
              <div class="divider" style="margin-top:-7px;"></div>
              <p style="font-size:14px;line-height:16px;margin-top:4px;color:#4f4f4f;">
                <?=$du['isi_ucapan']; ?>
              </p>
            </a>

            <?php endforeach; ?>

          </div>

        </div>

      </div>
    <?php } ?>
      
    </div>
  </div>


  <div id="kehadiran" class="warnatema ww-detail" style="background:linear-gradient(rgba(95, 161, 126, 1),rgba(151, 194, 143, 1),rgba(151, 194, 143,1));background-image:url('<?=base_url('assets/temaundangan/vantage/'); ?>img/rsvp-imgc.jpg');background-size:cover;background-position:center;position:relative;">
    <!-- <nav class="pushpin-sticky z-depth-0 pin-bottom" data-target="kehadiran" data-uptop="upkehadiran" style="font-family: 'Satisfy', sans-serif;">
      <div class="nav-wrapper cyan darken-2">
        <div class="container">
          <a href="#" class="brand-logo" style="text-shadow:1px 1px 3px #aaa;"><i class="material-icons" style="font-size:35px;">rsvp</i> Kehadiran</a>
        </div>
      </div>
    </nav> -->
    <svg style="margin-top:-25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#dce0e0" fill-opacity="1" d="M0,224L60,192C120,160,240,96,360,101.3C480,107,600,181,720,224C840,267,960,277,1080,288C1200,299,1320,309,1380,314.7L1440,320L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>



    <div class="kehadiran dekstop">

      <div class="row">
        <div class="col s12 center-align">
          <div class="container">
            <div class="container">
          <div class="warnakotak z-depth-1 test" style="background-color:#eee;border-radius:9px;padding:0px;margin-top:20px">
            <h5 class="" style="font-size:26px;font-family: 'Satisfy', cursive;color:#3b3d3b;padding:4px;">RSVP</h5>
          </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row ww-rsvp-form">
        <div class="col s12" style="">
        <div class="container">
         <form method="post" action="<?=base_url('undangan/ucapan'); ?>" data-aos="fade-down" data-aos-duration="1000">
            <input type="hidden" name="idupengundang" value="<?=$detailundangan['id_pengundang']; ?>">

            <div class="row">
              <div class="col s12">
                <div class="input-field col s12" style="border-radius:5px;">
                  <select class="browser-default form-custom" name="namaanda" required>
                    <option value="<?=$detailundangan['id_diundang']; ?>" selected><?=$detailundangan['nama_diundang']; ?></option>
                  </select>
                  <!-- <label>Materialize Select</label> -->
                </div>
              </div>
            </div>
            <div class="row" style="margin-top:-20px">
              <div class="col s12 m6 center-align">
                <!-- <div class="form-group">
                  <select class="form-control" id="events-input" name="absenkehadiran" required>
                    <option value="">Apakah kamu menghadiri?</option>
                    <option value="hadir">Menghadiri</option>
                    <option value="tidak">Tidak menghadiri</option>
                  </select>
                </div> -->
                <div class="input-field col s12 m6" style="width:100%;border-radius:5px;">
                  <select class="browser-default form-custom" name="absenkehadiran" required>
                    <option value="">Apakah kamu menghadiri?</option>
                    <option value="hadir">Menghadiri</option>
                    <option value="tidak">Tidak menghadiri</option>
                    <option value="ragu">Masih ragu-ragu</option>
                  </select>
                  <!-- <label>Materialize Select</label> -->
                </div>
              </div>

              <div class="col s12 m6 center-align">
                <!-- <div class="form-group">
                  <select class="form-control" id="events-input" name="jumlahkehadiran" required>
                    <option value="1">1 orang</option>
                    <option value="2">2 orang</option>
                  </select>
                </div> -->
                <div class="input-field col s12 m6" style="width:100%;border-radius:5px;">
                  <select class="browser-default form-custom" name="jumlahkehadiran" required>
                    <option value="1">1 orang</option>
                    <option value="2">2 orang</option>
                    <option value="3">3 orang</option>
                    <option value="4">4 orang</option>
                  </select>
                  <!-- <label>Materialize Select</label> -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <!-- <div class="form-group">
                  <label for="message-input">Pesan Anda</label>
                  <textarea class="form-control" id="message-input" name="isiucapan" rows="4" required></textarea>
                </div>
              </div> -->
              <div class="row">
                <div class="col s12" style="margin-top:-20px">
                  <div class="input-field col s12" style="border-radius:5px;">
                    <textarea id="textarea1" name="isiucapan" class="materialize-textarea browser-default form-custom" required></textarea>
                    <label for="textarea1" style="color:white;font-size:15px">Ketit disini!</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col right" style="margin-top:-20px;margin-right:21px">
                <!-- <div class="container"> -->
                <button class="btn blue btn-small waves-effect waves-light addkomentar" id="addkomentar" type="submit" name="kirimin">kirim</button>
                <!-- </div> -->
              </div>
            </div>
          </form>
        </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 center-align">
          <h5 style="text-shadow:0 4px 8px #19191a;color:white;font-size:25px"><?= $detailundangan['namapanggilan_priawanita']; ?></h5>
          <p style="text-shadow:0 3px 6px #19191a;color:white;font-size:17px;margin-top:-10px">(Doakan yang terbaik untuk kami)</p>
        </div>
      </div>
      
    </div>
  </div>



  <footer style="background-color:#d4d4d4;position:relative;">
    <svg style="margin-top:-60px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#d4d4d4" fill-opacity="1" d="M0,256L720,128L1440,256L1440,320L720,320L0,320Z"></path></svg>

    <div class="foter dekstop" style="height:70px">
      <div class="row">
        <div class="col s12 center-align" style="margin-top:-16px">
          <p class="mb-0">&copy; meinviteyou. All Rights Reserved.</p>
          <p class="mb-0" style="margin-top:-15px">Design by - <a class="credit" href="https://meinviteyou.com"><span style="color:#0062CC;">me</span><span class="red-text"><u>INVITE</u></span><span style="color:#0062CC;">you</span></a></p>
        </div>
      </div>
    </div>
  </footer>

  <style>
    .fixbtn {
      position:absolute;
      right:53px;
      text-shadow:1px 1px 1px white;
      color:black;
    }
  </style>

  <!-- floating button -->
  <div class="fixed-action-btn backtop" style="padding:0;">
    <a href="#awal" class="btn-floating btn-large fixclick page-scroll" style="background-color:rgba(0,0,0,.4);width:45px;height:45px">
      <i style="font-size:27px;line-height:45px" class="large material-icons">arrow_upward</i>
    </a>
  </div>

  <?php if(!empty($detailundangan['musik_acara'])){ ?>
  <div class="piringan" style="position: fixed;top:5px;z-index:10;left:5px;">
    <div class="musikplayer musikset z-depth-2" style="width:70px;height:70px;border-radius:50%;background-color:white;border:1px solid yellow;box-shadow:1px 1px 9px #ddd;">
      <img class="putarmulai" style="border-radius:50%" src="<?=base_url('assets/img/imgsharing/'.$detailundangan['img_sharing']); ?>" width="100%">
      <div class="bulattengah" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:20px;height:20px;border-radius:50%;background-color:#c2c2c2;">
        <div class="bulathitam" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:5px;height:5px;border-radius:50%;background-color:#353b35;"></div>
      </div>
      <div class="darkmusik" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:96%;height:97%;border-radius:50%;background-color:rgba(0,0,0,.4);transition:.7s;"></div>
    </div>
    <div class="stik" style="position:fixed;left:10px;margin-top:-3px;width:20px;height:20px;transform:rotate(0deg);transition:1s;z-index:10;">
      <img class="stikok musikset" style="position:absolute;left:21.3px;right:0;margin:auto;transform:rotate(-90deg);bottom:0;top:0px" src="<?=base_url('assets/img/stick3.png'); ?>" width="20">
    </div>
  </div>

  <div id="navatas" class="navatas center-align white-text z-depth-2" style="position:fixed;top:20px;left:68px;border-radius:0 40px 40px 0;z-index:8;transition:1s;height:40px;min-width:0px;background-color:rgba(0,0,0,.5);display:flex;justify-content:center;align-items:center;padding:0 10px 8px 10px;border:1px solid yellow;">
    <h5 class="sizefont" style="font-size:18px;"><?=$detailundangan['namapanggilan_priawanita']; ?></h5>
    <div class="bars" style="position:absolute;top:-35px;left:-10px;transition:.7s">
      <img class="onm" style="margin-top:1.1px" src="<?=base_url('assets/img/bars-musik.gif'); ?>" width="100px" height="50px">
      <img class="ofm" style="position:absolute;top:10px;left:0" src="<?=base_url('assets/img/bars-musikof.gif'); ?>" width="100px" height="30px">
    </div>
  </div>
  <?php } ?>

  <?php if(!empty($detailundangan['musik_acara'])){ ?>
    <audio id="musikvalue" loop style="width:100%">
      <source src="<?=base_url('assets/img/musikwedding/'.$detailundangan['musik_acara']); ?>" type="audio/mpeg">
    </audio>
  <?php } ?>


  <!-- <div class="text-primary settema" style="position:fixed;bottom:50%;right:15px;border-radius:50%;z-index:10;transition:.6s">
      <i style="font-size:53px;text-shadow:0px 2px 2px black;" class="large orange-text text-lighten-1 material-icons">palette</i>
  </div>

  <div class="inputtema center-align" style="position:fixed;bottom:50%;right:-110px;border-radius:5px;z-index:10;width:110px;height:60px;transition:.6s;">
    <span style="font-size:15px;padding:0 3px 0 3px;border-radius:2px;background-color:rgba(255,255,255,.7);">custom warna</span>
    <input type="color" class="warna1 z-depth-1" style="width:100%;height:40px;margin-bottom:8px;border-radius:4px;background-color:rgba(255,255,255,.7);">
    <input type="color" class="warna2" style="width:100%;height:40px;border-radius:4px;background-color:rgba(255,255,255,.7);">
    <input type="text" class="tampung1 z-depth-1" style="opacity:0;height:0">
    <button class="copytext waves-effect waves-dark z-depth-1" style="font-size:14px;margin-top:-15px;border:0;border-radius:3px;background-color:#ddd;padding:3px;margin-bottom:5px;">Copy tema</button>
    <span class="copied white-text" style="background-color:rgba(0,0,0,.5);padding:4px;border-radius:5px;font-size:13px;">Copied!</span>
  </div> -->


  <div class="text-primary" style="position:fixed;bottom:10px;left:15px;border-radius:50%;z-index:10;">
    <div style="background-color:rgba(26, 199, 84,);padding:4px;border-radius:50%;">
      <i style="font-size:53px;text-shadow:0px 2px 2px black;font-weight:bold;min-width:200px" class="large green-text material-icons dropdown-trigger" href="#" data-target="dropdown1">whatsapp</i>
      <!-- <span style="">kirim ucapan via wa</span> -->
    </div>
  </div>




    <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content" style="border-radius:5px;">
    <li><a href="#!">Kirim ucapan via WA</a></li>
    <li class="divider" tabindex="-1" style="padding:0"></li>

  <?php if($detailundangan['nomer_pengundang']==''&&$detailundangan['nomer_pengundangw']==''){ ?>
    <p class='center-align red-text'>Nomer tlp tidak ditampilkan</p>
  <?php }else if($detailundangan['nomer_pengundang']!='' && $detailundangan['nomer_pengundangw']==''){ ?>
    <?php if(substr($detailundangan['nomer_pengundang'],-1)=='l'){ ?>

      <li style="padding:0">
        <div class="card horizontal z-depth-0" style="">
          <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
            <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" height="40px" style="border-radius:5px;">
          </div>
          <div class="card-stacked" style="">
            <div class="card-content" style="padding:5px;font-size:17px;margin-top:2px">
              <a href="https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundang'],0,-1); ?>">
              <p style="color:#19191a">Mempelai pria</p>
              </a>
            </div>
          </div>
        </div>
      </li>

    <?php }else{ ?>

      <li style="padding:0">
        <div class="card horizontal z-depth-0" style="">
          <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
            <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" height="40px" style="border-radius:5px;">
          </div>
          <div class="card-stacked" style="">
            <div class="card-content" style="padding:5px;font-size:17px;margin-top:2px">
              <a href="https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundang'],0,-1); ?>">
              <p style="color:#19191a">Mempelai wanita</p>
              </a>
            </div>
          </div>
        </div>
      </li>

    <?php } ?>
  <?php }else if($detailundangan['nomer_pengundang']==''&&$detailundangan['nomer_pengundangw']!=''){ ?>
    <?php if(substr($detailundangan['nomer_pengundangw'],-1)=='w'){ ?>

      <li style="padding:0">
        <div class="card horizontal z-depth-0" style="">
          <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
            <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" height="40px" style="border-radius:5px;">
          </div>
          <div class="card-stacked" style="">
            <div class="card-content" style="padding:5px;font-size:17px;margin-top:2px">
              <a href="https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundangw'],0,-1); ?>">
              <p style="color:#19191a">Mempelai wanita</p>
              </a>
            </div>
          </div>
        </div>
      </li>

    <?php }else{ ?>

      <li style="padding:0">
        <div class="card horizontal z-depth-0" style="">
          <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
            <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" height="40px" style="border-radius:5px;">
          </div>
          <div class="card-stacked" style="">
            <div class="card-content" style="padding:5px;font-size:17px;margin-top:2px">
              <a href="https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundangw'],0,-1); ?>">
              <p style="color:#19191a">Mempelai pria</p>
              </a>
            </div>
          </div>
        </div>
      </li>

    <?php } ?>

  <?php }else{ ?>
    <?php if(substr($detailundangan['nomer_pengundang'],-1)=='l'&&substr($detailundangan['nomer_pengundangw'],-1)=='w'){ ?>

      <li style="padding:0">
        <div class="card horizontal z-depth-0" style="">
          <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
            <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" height="40px" style="border-radius:5px;">
          </div>
          <div class="card-stacked" style="">
            <div class="card-content" style="padding:5px;font-size:17px;margin-top:2px">
              <a href="https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundang'],0,-1); ?>">
              <p style="color:#19191a">Mempelai pria</p>
              </a>
            </div>
          </div>
        </div>
      </li>
      <li class="divider" tabindex="-1" style="padding:0"></li>
      <li style="padding:0">
        <div class="card horizontal z-depth-0" style="">
          <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
            <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" height="40px" style="border-radius:5px;">
          </div>
          <div class="card-stacked" style="">
            <div class="card-content" style="padding:5px;font-size:17px;margin-top:2px">
              <a href="https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundangw'],0,-1); ?>">
              <p style="color:#19191a">Mempelai wanita</p>
              </a>
            </div>
          </div>
        </div>
      </li>

    <?php }else if(substr($detailundangan['nomer_pengundang'],-1)=='w'&&substr($detailundangan['nomer_pengundangw'],-1)=='l'){ ?>

      <li style="padding:0">
        <div class="card horizontal z-depth-0" style="">
          <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
            <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" height="40px" style="border-radius:5px;">
          </div>
          <div class="card-stacked" style="">
            <div class="card-content" style="padding:5px;font-size:17px;margin-top:2px">
              <a href="https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundang'],0,-1); ?>">
              <p style="color:#19191a">Mempelai wanita</p>
              </a>
            </div>
          </div>
        </div>
      </li>
      <li class="divider" tabindex="-1" style="padding:0"></li>
      <li style="padding:0">
        <div class="card horizontal z-depth-0" style="">
          <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
            <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" height="40px" style="border-radius:5px;">
          </div>
          <div class="card-stacked" style="">
            <div class="card-content" style="padding:5px;font-size:17px;margin-top:2px">
              <a href="https://api.whatsapp.com/send?phone=<?=substr($detailundangan['nomer_pengundangw'],0,-1); ?>">
              <p style="color:#19191a">Mempelai pria</p>
              </a>
            </div>
          </div>
        </div>
      </li>

    <?php } ?>
  <?php } ?>




    <!-- <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li> -->
  </ul>

<!-- modal awal -->
  <div id="modal1" class="modal modal-fixed-footer white-text" style="width:100%;height:100%!important;background-image: url('<?=base_url('assets/temaundangan/vantage/'); ?>img/bgmodal.png');background-size:cover;">
    <div style="position:absolute;left:0;right:0;bottom:0;top:0;background-color:black;opacity:.6"></div>

    <div class="modal-content center-align" style="height:100%">
      <h5 style="font-size:30px;font-weight:bold;font-family: 'Satisfy', cursive;"><?=$detailundangan['namapanggilan_priawanita']; ?></h5><hr>
      <span>Hello,</span><br>
      <span style="font-family: 'Satisfy', cursive;font-size:28px;font-weight:bold;"><u><?=$detailundangan['nama_diundang']; ?></u></span>
      <p style="font-family: 'Roboto', sans-serif;">Kami mengundang anda untuk datang pada hari pernikahan kami!</p>

      <?php if(!empty($detailundangan['informasi_modal'])): ?>
        <div class="col" style="margin-top:10px;">
          <?=$detailundangan['informasi_modal']; ?>
        </div>
      <?php endif; ?>

      <p style="font-family: 'Roboto', sans-serif;">Tampa mengurangi rasa hormat <br> Acara ini akan dilaksanakan dengan menerapkan <br> <b>PROTOKOL KESEHATAN</b> <br> sebagai berikut:</p>

      <div class="row" style="padding:0;margin:0 auto;max-width:450px;">

        <div class="barisatas" style="display:flex;justify-content:space-between;">
          <div class="kotak1 z-depth-2 cyan darken-2" data-aos="fade-down" data-aos-duration="500" style="border-radius:5px;margin:1px;padding:1px;">
            <img class="hoverc" data-aos="fade-down" data-aos-delay-="300" data-aos-duration="500" style="width:100%;margin:auto;" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/anaksp.png"><br>
            <span style="line-height:15px;font-family: 'Roboto', sans-serif;">Dianjurkan Tidak <br> Membawa Anak Kecil</span>
          </div>
          <div class="kotak1 z-depth-2 cyan darken-2" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500" style="border-radius:5px;margin:1px;padding:1px;">
            <img class="hoverc" data-aos="fade-down" data-aos-delay="600" data-aos-duration="500" style="width:100%;margin:auto;" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/maskp.png"><br>
            <span style="line-height:15px;font-family: 'Roboto', sans-serif;">Gunakan Masker <br></span>
            <span style="opacity:0">membawa oke <br> sipp</span>
          </div>
          <div class="kotak1 z-depth-2 cyan darken-2" data-aos="fade-down" data-aos-delay="900" data-aos-duration="500" style="border-radius:5px;margin:1px;padding:1px;">
            <img class="hoverc" data-aos="fade-down" data-aos-delay="1200" data-aos-duration="500" style="width:100%;margin:auto;" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/handsp.png"><br>
            <span style="line-height:15px;font-family: 'Roboto', sans-serif;">Gunakan Handsanitizer <br></span>
            <span style="opacity:0">membawa oke</span>
          </div>
        </div>

        <div class="barisatas" style="display:flex;justify-content:space-between;">
          <div class="kotak1 z-depth-2 cyan darken-2" data-aos="fade-down" data-aos-delay="1800" data-aos-duration="500" style="border-radius:5px;margin:1px;padding:1px;">
            <img class="hoverc" data-aos="fade-down" data-aos-delay="2100" data-aos-duration="500" style="width:100%;margin:auto;" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/suhusp.png"><br>
            <span style="line-height:15px;font-family: 'Roboto', sans-serif;">Cek Suhu Tubuh <br></span>
            <span style="opacity:0">membawa oke </span>
          </div>
          <div class="kotak1 z-depth-2 cyan darken-2" data-aos="fade-down" data-aos-delay="1500" data-aos-duration="500" style="border-radius:5px;margin:1px;padding:1px;">
            <img class="hoverc" data-aos="fade-down" data-aos-delay="1800" data-aos-duration="500" style="width:100%;margin:auto;" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/cucisp.png"><br>
            <span style="line-height:15px;font-family: 'Roboto', sans-serif;">Cuci Tangan <br></span>
            <span style="opacity:0">membawa oke </span>
          </div>
          <div class="kotak1 z-depth-2 cyan darken-2" data-aos="fade-down" data-aos-delay="1200" data-aos-duration="500" style="border-radius:5px;margin:1px;padding:1px;">
            <img class="hoverc" data-aos="fade-down" data-aos-delay="1500" data-aos-duration="500" style="width:100%;margin:auto;" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/socialp.png"><br>
            <span style="line-height:15px;font-family: 'Roboto', sans-serif;">Jaga Jarak 1METER <br></span>
            <span style="opacity:0">membawa oke </span>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col s12" style="padding-bottom: 20px">
          <p style="font-family: 'Roboto', sans-serif;">Atas perhatiannya kami ucapkan <br> <b>Terima Kasih</b></p>
        </div>
      </div>

    </div>
    <div class="modal-footer" style="padding:0 50px 0 50px;background-color:rgba(0,0,0,0);border:0;display:flex;justify-content:center;align-items: center;margin-bottom:20px;">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat white-text pulse bukaundangan" style="border-radius:20px;background-color:rgba(0,0,0,.5);width:200px;display: flex;align-items: center;justify-content:center;"><i class="large material-icons" style="padding-right:5px">drafts</i> Open</a>
    </div>

  </div>

  <?php 
    $tanggal=date('d', strtotime($detailundangan['tanggal_acara']));
    $bulan=date('m', strtotime($detailundangan['tanggal_acara']));
    $tahun=date('Y', strtotime($detailundangan['tanggal_acara']));
  ?>


  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?=base_url('assets/temaundangan/vantage/'); ?>js/materialize.js"></script>
  <script src="<?=base_url('assets/temaundangan/vantage/'); ?>js/jquery.lwtCountdown-1.0.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

  <script>
    $(document).ready(function(){
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

      $('.materialboxed').materialbox();

      $('.carousel').carousel({
        'dist':-110,
        'fullWidth':false,
        'indicators':true,
        'noWrap':true
      });
      $('select').formSelect();
      $('.dropdown-trigger').dropdown({
        'constrainWidth':true
      });
      $('.collapsible').collapsible();

      // Pushpin Demo Init
        // $('.pushpin-sticky').each(function() {
        //   var $this = $(this);
        //   var $target = $('#' + $(this).attr('data-target'));
        //   // console.log($uptop);
        //   $this.pushpin({
        //     top: $target.offset().top,
        //     bottom: $target.offset().top + $target.outerHeight() - $this.height(),
        //     offset: 0,
        //     onPositionChange: function(e){
        //       // $target.show();
        //     }
        //   });
        // });
      $('.parallax').parallax();
      $('.fixed-action-btn').floatingActionButton({
        hoverEnabled: false
      });
      // $('.modal').modal();
      $('.modal').modal({
        'startingTop':'0%',
        'endingTop':'0%'
      });
      $('.modal').modal('open');
      $('.scrollspy').scrollSpy();

      $('.page-scroll').on('click',function(e){
          var tujuan=$(this).attr('href');
          var elementtujuan=$(tujuan);
          $('html,body').animate({
            'scrollTop':(Math.floor(elementtujuan.offset().top))
          },700);
          e.preventDefault();
      });

      $('.fixclick').on('click',function(){
        $('.fixbtn').hide();
        setTimeout(function() {
          $('.fixbtn').fadeIn();
        }, 500);
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

      var elems = document.querySelectorAll('.parallax');
      M.Parallax.init(elems);

      $('.backtop').hide();
      $(window).on('scroll',function(){
        var nilai=$(this).scrollTop()/1.2;
        var welcome=$(this).scrollTop()/17.5;
        var welcomes=$(this).scrollTop()/0.7;
        var top=$(this).scrollTop();
        // console.log(top);

        var matahari=$(this).scrollTop()/1.2;
        var orang=$(this).scrollTop()/2.5-1;
        var pura=$(this).scrollTop()/6;
        var awan=$(this).scrollTop()/2;
        var awanx=$(this).scrollTop()/8;
        var gradasi=$(this).scrollTop()/1000;
        // console.log(Math.floor(orang));
        // if(orang>300){
        //   $('.para').css({
        //     'background-position':'50% 300px'
        //   });
        // }else{
        //   $('.para').css({
        //     'background-position':'50% '+Math.floor(orang)+'px',
        //     'transition':'2ms'
        //   });
        // }
        if(top>=800){
          $('.backtop').show();
        }else{
          $('.backtop').hide();
        }
      });

      

      $('.changekomentar').on('change',function(){
        var changeval=$('.changekomentar').val();
        if(changeval=='slide'){
          $('.slidetampil').show();
          $('.listtampil').hide();
        }else{
          $('.slidetampil').hide();
          $('.listtampil').show();
        }
      });

      $('.musikset').on('click',function(){
        var audio = $("#musikvalue")[0];
        if (audio.paused) {
            audio.play();
            $('.putarmulai').addClass('putaran');
            $('.putarmulai').css('animation-play-state','running');
            $('.stik').css({
              'transform':'rotate(-37deg)'
            });
            $('.darkmusik').css('background-color','rgba(0,0,0,.3)');
            $('.ofm').hide();
            $('.onm').show();
        }  else {
            audio.pause();
            // $('.putarmulai').removeClass('putaran');
            $('.putarmulai').css('animation-play-state','paused');
            $('.stik').css({
              'transform':'rotate(0deg)'
            });
            $('.darkmusik').css('background-color','rgba(0,0,0,.6)');
            $('.ofm').show();
            $('.onm').hide();
        }
      });

      $('.ofm').hide();
      $('.bukaundangan').on('click',function(){
        var audio = $("#musikvalue")[0];
        audio.play();
        $('.putarmulai').addClass('putaran');
        $('.putarmulai').css('animation-play-state','running');
        $('.stik').css({
          'transform':'rotate(-37deg)'
        });
        $('.darkmusik').css('background-color','rgba(0,0,0,.3)');
        $('.ofm').hide();
        $('.onm').show();
      });

      
      var warnatema =document.querySelectorAll('.warnatema');
      for(i=0;i<warnatema.length;i++){
        if(i%2==0){
          warnatema[i].style.backgroundColor='<?=$detailundangan['color_template']; ?>';
        }else{
          warnatema[i].style.backgroundColor='<?=$detailundangan['color_template2']; ?>';
        }
      }
      var warnawaves =document.querySelectorAll('.warnawaves');
      for(w=0;w<warnawaves.length;w++){
        if(w==0||w==1||w==3||w==5||w==7||w==9||w==11){
          warnawaves[w].setAttribute("fill","<?=$detailundangan['color_template']; ?>");
        }else{
          warnawaves[w].setAttribute("fill","<?=$detailundangan['color_template2']; ?>");

        }
      }


      $('.closeout').on('click',function(){
        $('.popupnotif').fadeOut();
      });


      // fade=0;
      // $('.settema').on('click',function(){
      //   fade++;
      //   if(fade==2){
      //     fade=0;
      //   }
      //   if(fade==0){
      //     $('.inputtema').css('right','-110px');
      //     $('.settema').css('right','15px');
      //   }else{
      //     $('.inputtema').css('right','2px');
      //     $('.settema').css('right','110px');
      //   }
      // });

      // var warna1=$('.warna1').val('#dce0e0');
      // var warna2=$('.warna2').val('#319e72');
      // var tampungwarnas=$('.tampung1').val('[ Warna 1 = #dce0e0 ][ Warna 2 = #319e72 ]');

      // $('.warna1').on('change',function(){
      //   var warna1=$('.warna1').val();
      //   var warna2=$('.warna2').val();
      //   var warnatema =document.querySelectorAll('.warnatema');

      //   $('.tampung1').val('[ Warna 1 = '+warna1+' ][ Warna 2 = '+warna2+' ]');

      //   for(i=0;i<warnatema.length;i++){
      //     if(i%2==0){
      //       warnatema[i].style.backgroundColor=warna1;
      //     }else{
      //       warnatema[i].style.backgroundColor=warna2;
      //     }
      //   }
      //   var warnawaves =document.querySelectorAll('.warnawaves');
      //   for(w=0;w<warnawaves.length;w++){
      //     if(w==0||w==1||w==3||w==5||w==7||w==9||w==11){
      //       warnawaves[w].setAttribute("fill",warna1);
      //     }else{
      //       warnawaves[w].setAttribute("fill",warna2);

      //     }
      //   }
      // });
      // $('.warna2').on('change',function(){
      //   var warna1=$('.warna1').val();
      //   var warna2=$('.warna2').val();
      //   var warnatema =document.querySelectorAll('.warnatema');

      //   $('.tampung1').val('[ Warna 1 = '+warna1+' ][ Warna 2 = '+warna2+' ]');

      //   for(i=0;i<warnatema.length;i++){
      //     if(i%2==0){
      //       warnatema[i].style.backgroundColor=warna1;
      //     }else{
      //       warnatema[i].style.backgroundColor=warna2;
      //     }
      //   }
      //   var warnawaves =document.querySelectorAll('.warnawaves');
      //   for(w=0;w<warnawaves.length;w++){
      //     if(w==0||w==1||w==3||w==5||w==7||w==9||w==11){
      //       warnawaves[w].setAttribute("fill",warna1);
      //     }else{
      //       warnawaves[w].setAttribute("fill",warna2);

      //     }
      //   }
      // });

      // $('.copied').hide();
      // $('.copytext').on('click',function(){
      //   $('.copied').fadeIn(100);
      //   setTimeout(function() {
      //     $('.copied').fadeOut(100);
      //   }, 500);
      //   var warna6=$('.tampung1').select().val();
      //   document.execCommand("copy");
      // });




      // $('body').on('click','#addkomentar',function(e){
      //   e.preventDefault();
      //   $('.komentarbaru').append(`<a class="carousel-item checkitem center-align z-depth-1 active" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:8px;width:75%;color:black;" href="#one!"><h5 style="">Mr.Bill Gates</h5><p style="font-size:16px">Good luck!</p></a>`);
      // });
      // var warnatitle =document.querySelectorAll('.warnatitle');
      // for(j=0;j<warnatitle.length;j++){
      //   console.log(warnatitle[j]);
      //   if(j==0||j==3||j==5||j==7){
      //     warnatitle[j].style.color='#19191a !important';
      //     warnatitle[j].style.textShadow='0px 4px 6px grey !important';
      //   }else{
      //     // warnatitle[i].style.backgroundColor='#5fa17e';
      //     warnatitle[j].style.color='white !important';
      //     warnatitle[j].style.textShadow='0 4px 6px black !important';
      //   }
      // }

      
      // console.log(warnawaves);

      // $('.anjing').attr('fill','#5fa17e')

      // $('.changekomentar').on('change',function(){
      //   var changeval=$('.changekomentar').val();
      //   if(changeval=='slide'){
      //     $('.heightcol').css('margin-top','-110px');
      //     $('.checkcarousel').addClass('carousel');
      //     $('.carousel-item').css({
      //       'display':'inline-block',
      //       'width':'70%'
      //     });
      //   }else{
      //     $('.heightcol').css('margin-top','-30px');
      //     $('.checkcarousel').removeClass('carousel');
      //     $('.checkcarousel').removeClass('scrolling');
      //     $('.checkitem').removeClass('carousel-item');
      //     $('.checkitem').css({
      //       'display':'block',
      //       'width':'100%'
      //     });
      //   }
      // });

    });
  </script>
</body>

</html>