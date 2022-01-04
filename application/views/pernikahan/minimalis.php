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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fleur+De+Leah&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/temaundangan/minimalis/'); ?>css/polaroid.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/temaundangan/minimalis/'); ?>css/timeline.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/temaundangan/minimalis/'); ?>css/mystyle.css">

    <style>
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
    </style>
  </head>
  <body>

    <?=$this->session->flashdata('message'); ?>

    <div id="awaltop" class="maxwidth warnabody" style="max-width:700px;position:relative;left:0;right:0;margin:auto;overflow:hidden;box-shadow:0 0 20px rgba(0,0,0,.5);">

    <img src="<?=base_url('assets/temaundangan/minimalis/'); ?>img/depan2.png" style="position:absolute;width:130px;top:0px;left:0px;z-index:1;">
    <img src="<?=base_url('assets/temaundangan/minimalis/'); ?>img/depan2.png" style="position:absolute;width:130px;top:0px;right:0px;z-index:1;transform:rotateY(180deg);">

      <div class="headers">
        <div class="row d-flex justify-content-center text-center" style="height:85vh;background-image:url('<?=base_url('assets/img/backgroundawal/'.$detailundangan['background_welcome']); ?>');background-size:cover;background-position:center;align-items:center;position:relative;">
          <div class="contenttengah">
            <div class="col-12 text-light mb-3"><span style="font-family: cursive, Arial, Helvetica, sans-serif;text-shadow:0 0 4px rgba(0,0,0,.6);font-size:18px;">The Wedding Of</span> <h1 style="font-family: 'Fleur De Leah', cursive;font-size:40px;text-shadow:0 0 6px rgba(0,0,0,.8);font-weight:600;letter-spacing:4px;word-spacing:-5px;"><?=$detailundangan['namapanggilan_priawanita']; ?></h1></div>
            <div class="image" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000">
              <img src="<?=base_url('assets/temaundangan/minimalis/img/std7.png'); ?>" width="170">
            </div>
            <div class="col-sm-12 text-light mt-3"><h2 style="font-family: 'Fleur De Leah', cursive;font-size:28px;font-weight:600;text-shadow:0 0 6px rgba(0,0,0,.8);letter-spacing:3px;"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></h2></div>
          </div>
          <svg style="bottom:-1px;position:absolute;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eee" class="warnabody" fill-opacity="1" d="M0,288L60,266.7C120,245,240,203,360,197.3C480,192,600,224,720,245.3C840,267,960,277,1080,277.3C1200,277,1320,267,1380,261.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </div>


        <div class="countdownw count-down-wrapper">
          <div id="clock" class="d-flex justify-content-around text-center" style="align-items:center;padding:10px;">
            <div class="times warnatema2" style="box-shadow:0 0 10px rgba(0,0,0,.4);width:80px;height:80px;border-radius:5px;background-color:#b5820b;">
              <div class="days_dash">
                <div class="wrapper-digit" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                  <div class="d-flex justify-content-center" style="font-size:30px;font-weight:bold;color:#eee;font-family: 'Fleur De Leah', cursive;">
                    <div style="width:25px;" class="digit"></div>
                    <div style="width:25px;" class="digit"></div>
                  </div>
                  <div style="border-bottom:1px solid #ccc;width:90%;margin:auto;"></div>
                  <div style="font-size:18px;font-weight:500;color:#ccc;font-style:italic;font-family: cursive, Arial, Helvetica, sans-serif;">Hari</div>
                </div>
              </div>
            </div>
            <div class="times warnatema2" style="box-shadow:0 0 10px rgba(0,0,0,.4);width:80px;height:80px;border-radius:5px;background-color:#b5820b;">
              <div class="hours_dash">
                <div class="wrapper-digit" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                  <div class="d-flex justify-content-center" style="font-size:30px;font-weight:bold;color:#eee;font-family: 'Fleur De Leah', cursive;">
                    <div style="width:25px;" class="digit"></div>
                    <div style="width:25px;" class="digit"></div>
                  </div>
                  <div style="border-bottom:1px solid #ccc;width:90%;margin:auto;"></div>
                  <div style="font-size:18px;font-weight:500;color:#ccc;font-style:italic;font-family: cursive, Arial, Helvetica, sans-serif;">Jam</div>
                </div>
              </div>
            </div>
            <div class="times warnatema2" style="box-shadow:0 0 10px rgba(0,0,0,.4);width:80px;height:80px;border-radius:5px;background-color:#b5820b;">
              <div class="minutes_dash">
                <div class="wrapper-digit" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                  <div class="d-flex justify-content-center" style="font-size:30px;font-weight:bold;color:#eee;font-family: 'Fleur De Leah', cursive;">
                    <div style="width:25px;" class="digit"></div>
                    <div style="width:25px;" class="digit"></div>
                  </div>
                  <div style="border-bottom:1px solid #ccc;width:90%;margin:auto;"></div>
                  <div style="font-size:18px;font-weight:500;color:#ccc;font-style:italic;font-family: cursive, Arial, Helvetica, sans-serif;">Menit</div>
                </div>
              </div>
            </div>
            <div class="times warnatema2" style="box-shadow:0 0 10px rgba(0,0,0,.4);width:80px;height:80px;border-radius:5px;background-color:#b5820b;">
              <div class="seconds_dash">
                <div class="wrapper-digit" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                  <div class="d-flex justify-content-center" style="font-size:30px;font-weight:bold;color:#eee;font-family: 'Fleur De Leah', cursive;">
                    <div style="width:25px;" class="digit"></div>
                    <div style="width:25px;" class="digit"></div>
                  </div>
                  <div style="border-bottom:1px solid #ccc;width:90%;margin:auto;"></div>
                  <div style="font-size:18px;font-weight:500;color:#ccc;font-style:italic;font-family: cursive, Arial, Helvetica, sans-serif;">Detik</div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- tutup countdownw -->
      </div><!-- tutup headers -->

      <div class="paddingcontent" style="margin: 0 5% 0 5%;">

      <div class="profile">
        <div class="ucapanawal mt-4" style="">
          <div class="d-flex justify-content-center text-center">
            <div class="warnatema2" data-aos="zoom-in" data-aos-duration="1000" style="box-shadow:0 0 15px rgba(0,0,0,.2);width:100%;border-radius:5px;background-color:#b5820b;">
              <div class="p-4 text-light" style="font-size:18px;color:#696969;font-style:italic;font-family: cursive, Arial, Helvetica, sans-serif;position:relative;">
                <img src="<?=base_url('assets/temaundangan/minimalis/'); ?>img/flowers1.png" style="position:absolute;width:80px;bottom:0px;left:0px;z-index:0;transform:rotateY(180deg) rotateX(180deg);">
                  <?=$detailundangan['ucapan_awal']; ?>
                <img src="<?=base_url('assets/temaundangan/minimalis/'); ?>img/flowers1.png" style="position:absolute;width:80px;top:0px;right:0px;z-index:0;">
              </div>
            </div>
          </div>
        </div>

        <style>
          .anakke {
            font-size:11px;
            margin-top:-2px;
          }
          .ortu {
            font-size:12px;
            margin-top:-2px;
            line-height:13px;
          }
        </style>

        <div id="polaroid" class="mt-4" style="position:relative;">
          <img src="<?=base_url('assets/temaundangan/minimalis/'); ?>img/bungas1.png" style="position:absolute;width:150px;top:-20px;left:-20px;z-index:1;transform:rotateY(180deg);">
          <figure>
            <img class="bounce" src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" alt="Mempelai 1"/>
            <figcaption><?=$detailundangan['namalengkap_pria']; ?></figcaption>
            <!-- <figcaption class="anakke">Putra ke-1 dari:</figcaption>
            <figcaption class="ortu">Bapak Romeo & Ibu Romeo</figcaption> -->
            <?=$detailundangan['orangtua_pria']; ?>
          </figure>
          <figure>
            <img class="bounce" src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" alt="Mempelai 2"/>
            <figcaption><?=$detailundangan['namalengkap_wanita']; ?> </figcaption>
            <?=$detailundangan['orangtua_wanita']; ?>
          </figure>
          <img src="<?=base_url('assets/temaundangan/minimalis/'); ?>img/bungas1.png" style="position:absolute;width:150px;bottom:-20px;right:-20px;z-index:1">
        </div>
      </div><!-- tutup profile -->

      <div class="events">
        <div class="row text-center mt-5">
          <div class="col-12 col-md-6 mb-3">

            <div class="scene" data-aos="fade-down" data-aos-duration="1000">
              <div class="card warnatema2">
                <div class="card__face card__face--front text-light">
                  <div style="color:#eee;font-size:40px;font-family: 'Fleur De Leah', cursive;">Akad</div>
                  <div style="font-family: cursive, Arial, Helvetica, sans-serif;"><i class="fas fa-calendar-alt" style="color:#ccc;text-shadow:0 0 3px rgba(0,0,0,.8);"></i> <?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_akad'])); ?></div>
                  <div style="font-family: cursive, Arial, Helvetica, sans-serif;"><i class="fas fa-clock" style="color:#ccc;text-shadow:0 0 3px rgba(0,0,0,.8);"></i> Pukul <?=$detailundangan['jam_akad']; ?></div>
                  <div style="font-family: cursive, Arial, Helvetica, sans-serif;"><i class="fas fa-map-marked-alt" style="color:#ccc;text-shadow:0 0 3px rgba(0,0,0,.8);"></i> <?=$detailundangan['alamat_akad']; ?></div>
                  <div class="" style="position:absolute;bottom:27px;left:0;right:0;margin: auto;">
                  <?php if(!empty($detailundangan['map_akad'])): ?>
                    <button class="btn btn-sm btn-light fliping" style="box-shadow:0 0 10px rgba(0,0,0,.3);">Lihat Maps <i class="fas fa-arrow-circle-right"></i></button>
                  <?php endif; ?>
                  </div>
                </div>
                <div class="card__face card__face--back">
                  <div style="text-shadow: 0 0 10px rgba(0,0,0,.4);color:#eee;font-size:23px;">Maps Lokasi Akad</div>
                  <div class="ratio ratio-16x9">
                    <div class="p-2" style="">
                      <?=$detailundangan["map_akad"]; ?>
                    </div>
                  </div>
                  <div class="mt-4">
                    <button class="btn btn-sm btn-light fliping" style="box-shadow:0 0 10px rgba(0,0,0,.3);"><i class="fas fa-arrow-circle-left"></i> Back</button>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-12 col-md-6 mb-3">

            <div class="scene" data-aos="fade-up" data-aos-duration="1000">
              <div class="card warnatema2">
                <div class="card__face card__face--front text-light">
                  <div style="color:#eee;font-size:40px;font-family: 'Fleur De Leah', cursive;">Resepsi</div>
                  <div style="font-family: cursive, Arial, Helvetica, sans-serif;"><i class="fas fa-calendar-alt" style="color:#ccc;text-shadow:0 0 3px rgba(0,0,0,.8);"></i> <?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></div>
                  <div style="font-family: cursive, Arial, Helvetica, sans-serif;"><i class="fas fa-clock" style="color:#ccc;text-shadow:0 0 3px rgba(0,0,0,.8);"></i> Pukul <?=$detailundangan['jam_acara']; ?></div>
                  <div style="font-family: cursive, Arial, Helvetica, sans-serif;"><i class="fas fa-map-marked-alt" style="color:#ccc;text-shadow:0 0 3px rgba(0,0,0,.8);"></i> <?=$detailundangan['alamat_acara']; ?></div>
                    <div class="" style="position:absolute;bottom:27px;left:0;right:0;margin: auto;">
                    <?php if(!empty($detailundangan['map_acara'])): ?>
                      <button class="btn btn-sm btn-light fliping1" style="box-shadow:0 0 10px rgba(0,0,0,.3);">Lihat Maps <i class="fas fa-arrow-circle-right"></i></button>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="card__face card__face--back">
                  <div style="text-shadow: 0 0 10px rgba(0,0,0,.4);color:#eee;font-size:23px;">Maps Lokasi Resepsi</div>
                  <div class="ratio ratio-16x9">
                    <div class="p-2" style="">
                      <?=$detailundangan["map_acara"]; ?>
                    </div>
                  </div>
                  <div class="mt-4">
                    <button class="btn btn-sm btn-light fliping1" style="box-shadow:0 0 10px rgba(0,0,0,.3);"><i class="fas fa-arrow-circle-left"></i> Back</button>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>

        <div class="ucapanahir mt-4">
          <div class="d-flex justify-content-center text-center">
            <div class="warnatema2" data-aos="zoom-in" data-aos-duration="1000" style="box-shadow:0 0 15px rgba(0,0,0,.2);width:100%;border-radius:5px;background-color:#b5820b;">
              <div class="p-4 text-light" style="font-size:18px;color:#696969;font-style:italic;font-family: cursive, Arial, Helvetica, sans-serif;position: relative;">
                <img src="<?=base_url('assets/temaundangan/minimalis/'); ?>img/flowers1.png" style="position:absolute;width:80px;bottom:0px;left:0px;z-index:0;transform:rotateY(180deg) rotateX(180deg);">
                  <?=$detailundangan['ucapan_ahir']; ?>
                <img src="<?=base_url('assets/temaundangan/minimalis/'); ?>img/flowers1.png" style="position:absolute;width:80px;top:0px;right:0px;z-index:0;">
              </div>
            </div>
          </div>
        </div>
      </div><!-- tutup events -->

    <?php if(!empty($detailundangan['stori_pengundang'])): ?>
      <div class="lovestory">
        <div class="initimeline mt-5">
          <div style="margin-bottom:15px;">
            <h5 class="warnatema2" style="box-shadow:0 0 7px rgba(0,0,0,.3);display:inline;padding:5px;border-radius:3px;color:#eee;background-color:#b5820b;font-family: cursive, Arial, Helvetica, sans-serif;font-weight:bold;">Love Story</h5>
          </div>
          <?=$detailundangan['stori_pengundang']; ?>
        </div>
      </div><!-- tutup lovestory -->
    <?php endif; ?>

    <?php if($countgaleri['countgaleri']==0){}else{ ?>
      <div class="galeri mt-5" style="background-image:url('<?=base_url('assets/temaundangan/minimalis/img/bgtexture.jpg'); ?>');width:100%;padding:10px;box-shadow:0 0 7px rgba(0,0,0,.2);border-radius:5px;position:relative;">
        <img src="<?=base_url('assets/temaundangan/minimalis/'); ?>img/flowers1.png" style="position:absolute;width:100px;top:0px;right:0px;z-index:0;">
        <img src="<?=base_url('assets/temaundangan/minimalis/'); ?>img/flowers1.png" style="position:absolute;width:100px;bottom:0px;left:0px;z-index:1;transform:rotateY(180deg) rotateX(180deg);">
        <div class="mb-3 mt-2">
          <h5 class="warnatema2" style="box-shadow:0 0 7px rgba(0,0,0,.3);display:inline;padding:5px;border-radius:3px;color:#eee;background-color:#b5820b;font-family: cursive, Arial, Helvetica, sans-serif;font-weight:bold;">Galeri</h5>
        </div>
        <div class="row">
          <?php $aos=1; foreach($fotogaleris as $fgs): ?>
          <div class="col-6 col-md-4 col-xl-4" data-aos="fade-down" data-aos-duration="1000">
            <img src="<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>" class="img-thumbnail mb-1 myImg" alt="<?=$detailundangan['namapanggilan_priawanita']; ?>">
          </div>
          <?php endforeach; ?>
        </div>

        <?php if(!empty($detailundangan['video_acara'])): ?>
        <div class="row justify-content-center mt-3">
          <div class="col-12 col-sm-10 col-md-8 col-lg-8">
            <div class="ratio ratio-16x9 text-center" style="border:2px solid #ccc;">
              <?=$detailundangan['video_acara'] ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div><!-- tutup galeri --> 
    <?php } ?>

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

    <?php if(!empty($detailundangan['rekening_pengundang'])): ?>
      <div class="rekening">
        <div class="inforekening mt-5">
          <div class="d-flex justify-content-center text-center" data-aos="zoom-in" data-aos-duration="1000">
            <div class="warnatema2" style="box-shadow:0 0 15px rgba(0,0,0,.2);width:100%;border-radius:5px;background-color:#b5820b;transform:rotate(-1deg);">
              <div class="p-3 text-light" style="font-size:18px;color:#696969;font-family: cursive, Arial, Helvetica, sans-serif;">Tampa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk pengantin dapat melalui:</div>
            </div>
          </div>
        </div>

        <div class="row d-flex justify-content-center">
          <?=$detailundangan['rekening_pengundang']; ?>
        </div>
      </div><!-- tutup rekening --> 
    <?php endif; ?>

      <div class="whises mt-5" style="background-image:url('<?=base_url('assets/temaundangan/minimalis/img/bgtexture.jpg'); ?>');width:100%;padding:10px;box-shadow:0 0 7px rgba(0,0,0,.2);border-radius:5px;">
        <div class="mb-3 mt-2">
          <h5 class="warnatema2" style="box-shadow:0 0 7px rgba(0,0,0,.3);display:inline;padding:5px;border-radius:3px;color:#eee;background-color:#b5820b;font-family: cursive, Arial, Helvetica, sans-serif;font-weight:bold;">Friend Whises</h5>
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
        <div class="row justify-content-center mt-5" style="display:flex;justify-content:center;">
          <div class="col-12">
            <div class="text-center" style="margin-top:-20px;background-color:rgba(255,255,255,.4);border-radius:5px;">Friend wishes masih kosong, silahkan kirim ucapan sekarang pada form dibawah!</div>
          </div>
        </div>
      <?php }else{ ?>
        <div class="jumlahwhises mb-2 fw-bold text-primary"></div>
        <div class="row justify-content-center">
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
          <div class="col-12 countkomentar">
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

        <div class="viewallkomentar text-center text-primary" style="cursor:pointer;">View All Wishes</div>
        <div class="hidellkomentar text-center text-primary" style="cursor:pointer;display:none;">Short Wishes</div>
      <?php } ?>
      </div><!-- tutup whises --> 

      </div><!-- tutup paddingcontent --> 

      <style>
        .rsvp .form-select ,textarea.form-control {
          background-color: rgba(222, 222, 222, 0.2);
          color: #fff;
          border: 1px solid rgba(255, 255, 255, 0.6);
        }
        .rsvp .form-select ,textarea.form-control:focus {
          background-color: rgba(222, 222, 222, 0.2);
          color: #fff;
          border: 1px solid rgba(255, 255, 255, 0.6);
        }
        .rsvp select.form-select option {
          background: rgba(0, 0, 0, 0.3);
          color: #fff;
        }
      </style>
      <div class="rsvp mt-5" style="background-image:url('<?=base_url('assets/temaundangan/minimalis/img/bgrsvp.jpg'); ?>');width:100%;padding:10px;box-shadow:0 0 7px rgba(0,0,0,.2);border-radius:0;">
        <div class="mb-3 mt-2">
          <h5 class="warnatema2" style="box-shadow:0 0 7px rgba(0,0,0,.3);display:inline;padding:5px;border-radius:3px;color:#eee;background-color:#b5820b;font-family: cursive, Arial, Helvetica, sans-serif;font-weight:bold;">RSVP</h5>
        </div>
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
                <option value="" selected>Jumlah yang menghadiri?</option>
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
                <label for="floatingTextarea2" style="color:white!important">Ketikan ungkapan</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-sm float-end addkomentar" id="addkomentar">Kirim</button>
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col-12 mt-3 mb-3 text-center text-light">
            <span style="font-size:25px;font-weight:500;font-family: cursive, Arial, Helvetica, sans-serif;">Romeo & Juliete</span><br>
            <span>(Doakan yang terbaik untuk kami)</span>
          </div>
        </div>
      </div><!-- tutup kirimucapan --> 

      <footer class="footer d-flex justify-content-center align-items-center" style="width:100%;height: 130px;background-color:#383838;">
        <div class="text-center text-light">
          <p class="mb-0">&copy; meinviteyou. All Rights Reserved.</p>
          <p class="mb-0">Design by - <a class="credit" href="<?=base_url(); ?>"><span style="color:#2298A4;font-weight:bold;">me</span><span style="color:#2298A4;font-weight:bold;"><u>INVITE</u></span><span style="color:#2298A4;font-weight:bold;">you</span></a></p>
        </div>
      </footer><!-- tutup footer --> 


    <style>
      @media only screen and (max-width: 700px){
        .backtops {
          position: fixed;
          right: 15px;
          bottom:28px;
        }
      }
      @media only screen and (min-width: 701px){
        .backtops {
          position: fixed;
          padding-left:645px;
          bottom:28px;
        }
      }
    </style>

    <div class="backtops" style="">
      <a href="#awaltop" class="fixclick page-scrolls" style="width:55px;height:55px;">
        <i style="font-size:40px;line-height:55px;opacity:.4;color:#000;" class="fas fa-arrow-circle-up"></i>
      </a>
    </div>

    <div class="text-primary" style="position:fixed;bottom:30px;margin-left:10px;border-radius:50%;z-index:1020;">
      <div style="background-color:rgba(26, 199, 84,);padding:4px;border-radius:50%">
      <span style="z-index:1020" class="cobain" data-bs-placement="right" data-bs-toggle="popover" title="Kirim ucapan via WA" data-bs-html="true" data-bs-content="
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

  <?php if(!empty($detailundangan['musik_acara'])): ?>
    <div class="piringan" style="position:fixed;top:5px;z-index:30;margin-left:10px!important;">
      <div class="musikplayer musikset z-depth-2" style="width:70px;height:70px;border-radius:50%;background-color:white;border:1px solid yellow;box-shadow:1px 1px 9px #ddd;">
        <img class="putarmulai" style="border-radius:50%" src="<?=base_url('assets/'); ?>img/bgmusik.jpg" width="100%">
        <div class="bulattengah" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:20px;height:20px;border-radius:50%;background-color:#c2c2c2;">
          <div class="bulathitam" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:5px;height:5px;border-radius:50%;background-color:#353b35;"></div>
        </div>
        <div class="darkmusik" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:96%;height:97%;border-radius:50%;background-color:rgba(0,0,0,.4);transition:.7s;"></div>
      </div>
      <div class="stik" style="position:absolute;left:7px;margin-top:-2px;width:20px;height:20px;transform:rotate(0deg);transition:1s;z-index:10;">
        <img class="stikok musikset" style="position:absolute;left:21.3px;right:0;margin:auto;transform:rotate(-90deg);bottom:0;top:0px" src="<?=base_url('assets/'); ?>img/stick3.png" width="20">
      </div>
    </div>

    <audio id="musikvalue" loop style="width:100%">
      <source src="<?=base_url('assets/img/musikwedding/'.$detailundangan['musik_acara']); ?>" type="audio/mpeg">
    </audio>
  <?php endif; ?>

    <div id="navatas" class="navatas" style="position:fixed;top:20px;margin-left:73px!important;border-radius:0 40px 40px 0;z-index:8;transition:1s;height:40px;min-width:0px;background-color:rgba(0,0,0,.5);display:flex;justify-content:center;align-items:center;padding:0 10px 8px 10px;border:1px solid yellow;z-index:26;">
      <h5 class="sizefont" style="font-size:18px;color:white;margin-top:15px;"><?=$detailundangan['namapanggilan_priawanita']; ?></h5>
      <div class="bars" style="position:absolute;top:-40px;left:-10px;transition:.7s">
        <img class="onm" style="margin-top:6px" src="<?=base_url('assets/'); ?>img/bars-musik.gif" height="50" width="100">
        <img class="ofm" style="position:absolute;margin-top:15.2px;left:0" src="<?=base_url('assets/'); ?>img/bars-musikof.gif" width="100" height="30">
      </div>
    </div>

    </div><!-- tutup maxwidth --> 

    <!-- The Modal -->
    <div id="myModal" class="modalgaleri">
      <div style="padding:10px;display:flex;justify-content:center;align-items: center;height:100%">
        <div style="position:relative;">
        <span class="close">&times;</span>
        <img class="modal-contentgaleri img-thumbnail" id="img01">
        <div id="caption"></div>
        </div>
      </div>
    </div>

    <style>
      .kotakcovid {
        min-height:50px;
        width:100%;
        border-radius:5px;
        background-color:#b5820b;
        padding: 5px 5px 5px 5px;
        line-height:17px;
        min-height:155px;
        color:white;
        font-family: cursive, Arial, Helvetica, sans-serif;
      }
    </style>

    <!-- Modal -->
    <div class="modal fade modalawal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content text-center text-light" style="background-color:rgba(0,0,0,.8);">
          <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title" id="staticBackdropLabel" style="font-family: 'Fleur De Leah', cursive;font-size:35px;"><?=$detailundangan['namapanggilan_priawanita']; ?></h5>
          </div>
          <div class="modal-body">
            <div class="row">
              <h5>Hello,</h5>
              <h3 style="font-family: cursive, Arial, Helvetica, sans-serif;font-weight:bold;"><?=$detailundangan['nama_diundang']; ?></h3>
              <span style="line-height:19px;">Kami mengundang anda untuk datang pada hari pernikahan kami!</span>

              <?php if(!empty($detailundangan['informasi_modal'])): ?>
                <div class="col-12 mt-2">
                  <?=$detailundangan['informasi_modal']; ?>
                </div>
              <?php endif; ?>

              <div class="col-12 mt-2 mb-1" style="line-height:19px;">
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
                    <span>Tidak dianjurkan membawa anak kecil</span>
                  </div>
                </div>
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2 p-1">
                    <img src="<?=base_url('assets/img/covid/'); ?>maskp.png" width="100%">
                    <span>Gunakan Masker</span>
                  </div>
                </div>
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2 p-1">
                    <img src="<?=base_url('assets/img/covid/'); ?>handsp.png" width="100%">
                    <span>Gunakan Handsanitizer</span>
                  </div>
                </div>
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2">
                    <img src="<?=base_url('assets/img/covid/'); ?>suhusp.png" width="100%">
                    <span>Cek Suhu Tubuh</span>
                  </div>
                </div>
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2 p-1">
                    <img src="<?=base_url('assets/img/covid/'); ?>cucisp.png" width="100%">
                    <span>Cuci Tangan</span>
                  </div>
                </div>
                <div class="col-4 p-2">
                  <div class="kotakcovid warnatema2 p-1">
                    <img src="<?=base_url('assets/img/covid/'); ?>socialp.png" width="100%">
                    <span>Jaga Jarak 1M</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12" style="margin-top:-0px;margin-bottom:-20px">
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

    <?php 
      $tanggal=date('d', strtotime($detailundangan['tanggal_acara']));
      $bulan=date('m', strtotime($detailundangan['tanggal_acara']));
      $tahun=date('Y', strtotime($detailundangan['tanggal_acara']));
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?=base_url('assets/temaundangan/minimalis/'); ?>js/countdown.js"></script>
    <script>
      AOS.init();
    </script>
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

        $('.fliping').on('click',function(){
            $('.card:first').toggleClass('is-flipped');
        })
        $('.fliping1').on('click',function(){
            $('.card:last').toggleClass('is-flipped');
        })

        $('#staticBackdrop').modal('show');
        $('.cobain').popover();

         // define variables
        var items = document.querySelectorAll(".timeline li");

        // check if an element is in viewport
        // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        function isElementInViewport(el) {
          var rect = el.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <=
              (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          );
        }

        function callbackFunc() {
          for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
              items[i].classList.add("in-view");
            }
          }
        }

        // listen for events
        window.addEventListener("load", callbackFunc);
        window.addEventListener("resize", callbackFunc);
        window.addEventListener("scroll", callbackFunc);


        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        $('body .close').hide();
        $('.myImg').on('click',function(){
          $('#myModal').css('display','block');
          $('#img01').attr('src',$(this).attr('src'));
          $('#caption').text($(this).attr('alt'));
          $('body').css('display','inline');
          setTimeout(function() {
            $('.close').fadeIn();
          }, 700);
        })

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
          $('body .close').hide();
        }

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
          $('.hidellkomentar').fadeIn();
          $('.viewallkomentar').hide();
        })

        $('.hidellkomentar').on('click',function(){
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
          $('.hidellkomentar').hide();
          $('.viewallkomentar').fadeIn();
        })

        $('.page-scrolls').on('click',function(e){
          var tujuan=$(this).attr('href');
          var elementtujuan=$(tujuan);
          $('html,body').animate({
            'scrollTop':(Math.floor(elementtujuan.offset().top))
          },800);
          e.preventDefault();
        });

        $('.musikset').on('click',function(){
          var audio = $("#musikvalue")[0];
          if (audio.paused) {
              audio.play();
              $('.putarmulai').addClass('putaran');
              $('.putarmulai').css('animation-play-state','running');
              $('.stik').css({
                'transform':'rotate(-40deg)'
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


        $('.ofm').hide();
      $('.bukaundangan').on('click',function(){
        var audio = $("#musikvalue")[0];
        audio.play();
        $('.putarmulai').addClass('putaran');
        $('.putarmulai').css('animation-play-state','running');
        $('.stik').css({
          'transform':'rotate(-40deg)'
        });
        $('.darkmusik').css('background-color','rgba(0,0,0,.3)');
        $('.ofm').hide();
        $('.onm').show();
        setTimeout(function() {
          $('.notiftema').fadeIn();
        }, 7000);
      });

          fade=0;
        $('.settema').on('click',function(){
          fade++;
          if(fade==2){
            fade=0;
          }
          if(fade==0){
            $('.inputtema').css('right','-115px');
            $('.settema').css('right','17px');
          }else{
            $('.inputtema').css('right','2px');
            $('.settema').css('right','115px');
          }
          $('.notiftema').fadeOut();
        });


        $('.warnabody').css('background-color','<?=$detailundangan['color_template']; ?>');
        $('.warnabody').attr('fill','<?=$detailundangan['color_template']; ?>');
        $('.warnatema2').css('background-color','<?=$detailundangan['color_template2']; ?>')

        
        $('.copied').hide();
        $('.copytext').on('click',function(){
          $('.copied').fadeIn(100);
          setTimeout(function() {
            $('.copied').fadeOut(100);
          }, 500);
          var warna6=$('.tampung1').select().val();
          document.execCommand("copy");
        });


        $('.orderwa').on('click',function(e){
          e.preventDefault();
          var warnaorder1=$('.warna1').val();
          var warnaorder2=$('.warna2').val();
          document.location.href='https://api.whatsapp.com/send?phone=+6282179471533&text=Saya%20pesan%20template%20undangan%20digital%20MINIMALIS%20dengan%20warna%20ini%20kak%20:%20%0A%0A<?=base_url("contohundangan/classic/"); ?>'+warnaorder1.substring(1,7)+'/'+warnaorder2.substring(1,7)+'/';
        });


        $('.closeout').on('click',function(){
          $('.popupnotif').fadeOut();
        });

      });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>