<!DOCTYPE html>
<html>

<head>
  <title>Undangan Vantage</title>
  <!-- Compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
  <meta name="robots" content="index,follow">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="meINVITEyou.com">


  <meta name="robots" content="max-snippet:-1,max-image-preview:standard,max-video-preview:-1">
  <meta name="description" content="Minggu, 18 agustus 2021"/>
  <meta content='<?=base_url('assets/img/imgsharing/defaultsharing.png'); ?>' property='og:image'/>
  <meta property="og:locale" content="id_ID">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Pernikahan Romeo & juliete; ?>">
  <!-- <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png"> -->
  <link rel="stylesheet" href="<?=base_url('assets/temaundangan/vantage/'); ?>css/materialize.css">
  <link rel="stylesheet" href="<?=base_url('assets/temaundangan/vantage/'); ?>css/timeline.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
      body,html{
        /*height: 115vh;*/
        overflow-x:hidden;
        /*background:#ab47bc;*/
      }
      .block{
        height:115vh
      }
      #awal{
        min-height: 400px;
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
        /*animation-direction: alternate;*/
        transform-style: preserve-3d;
      }

      ::-webkit-scrollbar {
        width: 5px;
      }
      ::-webkit-scrollbar-track {
        /*box-shadow: inset 1px 1px 5px grey;*/
        border-radius: 10px;
        opacity:0;
      }
      ::-webkit-scrollbar-thumb {
        background:linear-gradient(#4e342e,#ffff00,#ffff00,#4e342e);
        border-radius: 10px;
        box-shadow:1px 1px 5px grey;
      }
      /*::-webkit-scrollbar-button {
        background:green;
        border-radius: 10px;
      }*/
      /*::-webkit-scrollbar-corner {
        background:red;
        border-radius: 10px;
      }*/


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
    </style>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Satisfy&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

  <div id="awal" class="block white para" style="background-image:url('<?=base_url('assets/img/contoh/lp.jpg'); ?>');background-size:cover;background-position:50% 0px;">

    <nav class="pushpin-sticky z-depth-0 pin-bottom" data-target="awal" style="opacity:0;display:none;">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#" class="brand-logo">Red</a>
        </div>
      </div>
    </nav>

    <div class="cobain">

    <div class="row">
      <div class="col s12 center-align" style="padding-top:14vh;font-family: 'Satisfy', cursive;">
        <span class="white-text" style="text-shadow:1px 1px 4px #111;font-size:20px;">Wedding Of</span><br>
        <span class="white-text" style="text-shadow:1px 1px 4px #111;font-size:35px;">Romeo & Juliete</span>
      </div>
    </div>
    <div class="row">
      <div class="col s12 center-align">
        <img src="<?=base_url('assets/temaundangan/vantage/'); ?>img/savethedate2.png" width="260">
      </div>
    </div>
    <div class="row">
      <div class="col s12 center-align">
        <span class="white-text" style="text-shadow:1px 1px 2px #111;font-size:24px;font-family: 'Satisfy', cursive;">Selasa, 30 maret 2021</span>
      </div>
    </div>
    <div class="row">
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

    
    

   

     
   
  <div id="mempelai" class="warnatema" style="position:relative;background-color:#dce0e0;">

     <svg style="margin-top: -180px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path class="warnawaves" fill="#dce0e0" fill-opacity="1" d="M0,32L80,74.7C160,117,320,203,480,213.3C640,224,800,160,960,149.3C1120,139,1280,181,1360,202.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
    <!-- <svg style="margin-top: -180px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="rgba(151, 194, 143, 1)" fill-opacity="1" d="M0,32L80,74.7C160,117,320,203,480,213.3C640,224,800,160,960,149.3C1120,139,1280,181,1360,202.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg> -->

    <img data-aos="fade-left" data-aos-duration="1000" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/bunga2.png" width="200" style="position:absolute;top:-120px;right:-30px;z-index:4">

    <!-- <div class="mempelai"></div> -->

    <!-- <nav class="pushpin-sticky z-depth-0 pin-bottom" data-target="mempelai" data-uptop="upmempelai" style="z-index:2">
      <div class="nav-wrapper cyan darken-2" style="opacity:1;font-family: 'Satisfy', cursive;">
        <div class="container">
          <a href="#" class="brand-logo" style="text-shadow:1px 1px 3px #aaa;"><i class="material-icons" style="font-size:30px;">safety_divider</i> Mempelai</a>
        </div>
      </div>
    </nav> -->

    <div class="mempelai">
    <div class="row" style="">
      <div class="container">
      <div class="col s12 center-align">
        <div class="warnakotak z-depth-1" style="border-radius:7px;padding:3px;margin-top:20px;background-color:#eee"> 
        <p class="warnatitle" style="font-family: 'Roboto', cursive;font-size:17px;color:#3b3d3b;">Atas nama Allah SWT yang Maha Penyayang dan Maha Penyayang, dengan senang hati kami berbagi kegembiraan di pesta pernikahan kami:</p>
        </div>
      </div>
      </div>
    </div>

    <!-- <div class="infoprofil white z-depth-1" style="background-color:red;width:90%;margin:auto;padding-top:20px;border-radius:10px;"> -->
    <div class="row" style="padding-bottom:30px;">
      <!-- <div class="container"> -->

      <div class="col s12 l5 center-align" data-aos="flip-left" data-aos-duration="1000" style="text-shadow:0 2px 4px white;">
        <img class="z-depth-1 img-thumbnail" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/mpria.jpg" alt="mempelai" width="150" style="border-radius:50%;"><br>
        <span style="font-size:29px;font-family: 'Satisfy', cursive;">Romeo</span><br>
        <span style="font-size:16px;text-shadow:0 2px 4px white;">
        <span style="font-size:14px">Putra pertama dari:</span><br>
        <span>Bapak Romeo & Ibu Romeo</span>
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
      <div class="col s12 l5 center-align" data-aos="flip-right" data-aos-duration="1000" style="text-shadow:0 2px 4px white;">
        <img class="z-depth-1 img-thumbnail" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/mwanita.jpg" alt="mempelai" width="150" style="border-radius:50%;"><br>
        <span style="font-size:29px;font-family: 'Satisfy', cursive;">Juliete</span><br>
        <span style="font-size:16px;text-shadow:0 2px 4px white;">
        <span style="font-size:14px">Putri kedua dari:</span><br>
        <span>Bapak Juliete & Ibu Juliete</span>
        </span>
      </div>

      <!-- </div> -->
    </div>

    <!-- </div> -->
    </div>


  </div>


  <div id="acara" class="warnatema" style="position:relative;background-color:#5fa17e;">

    <svg style="margin-top:-25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path class="warnawaves" fill="#dce0e0" fill-opacity="1" d="M0,256L80,250.7C160,245,320,235,480,202.7C640,171,800,117,960,112C1120,107,1280,149,1360,170.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
    <!-- <svg style="margin-top:-20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="rgba(95, 161, 126, 1)" fill-opacity="1" d="M0,256L80,250.7C160,245,320,235,480,202.7C640,171,800,117,960,112C1120,107,1280,149,1360,170.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg> -->

    <img data-aos="fade-right" data-aos-duration="1000" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/bunga1.png" width="200" style="position:absolute;top:-90px;left:-40px">

    <!-- <div class="acara"></div> -->

   <!--  <nav class="pushpin-sticky z-depth-0 pin-bottom" data-target="acara" data-uptop="upacara" style="z-index:2;font-family: 'Satisfy', cursive;">
      <div class="nav-wrapper cyan darken-2">
        <div class="container">
          <a href="#" class="brand-logo" style="text-shadow:1px 1px 3px #aaa;"><i class="material-icons" style="font-size:30px;">local_bar</i> Acara</a>
        </div>
      </div>
    </nav> -->

    <div class="acara">
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
                <span style="font-size:18px;color:#19191a;">17 agustus 1945</span>
              </span>
              <span style="display:flex;justify-content:center;margin-top:5px">
                <i class="material-icons blue-text" style="font-size:27px;font-weight:bold;">schedule</i>
                <span style="font-size:18px;color:#19191a;">10.00 - SELESAI</span>
              </span>
            </div>
            <div class="card-action" style="">
              <i class="material-icons red-text" style="font-size:35px;line-height:15px;">place</i><br>
              <span style="font-size:18px;line-height:20px;">Lapanagan umum SP2 mulyasari mulyasari mulyasari</span><br>
            </div>

                <ul class="collapsible popout" style="width:90%;margin:auto;padding-bottom:10px;">
                  <li style="border-radius:10px;">
                    <div class="collapsible-header teal white-text" style="border-radius:8px;display:flex;justify-content:center;padding:6px"><span style="font-size:18px">Lihat Maps</span></div>
                    <div class="collapsible-body" style="">
                      <span>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.3164625691725!2d104.65540801429546!3d-4.536927249086981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e38ea8034c00171%3A0x120f1ec62809fbc0!2sLapangan%20Umum%20Sp2%20Mulya%20Sari!5e0!3m2!1sen!2sid!4v1629280514016!5m2!1sen!2sid" width="100%" height="220" style="border:0;padding:0;margin:0" allowfullscreen="" loading="lazy"></iframe>
                      </span>
                    </div>
                  </li>
                </ul>

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
                <span style="font-size:18px;color:#19191a;">18 agustus 1945</span>
              </span>
              <span style="display:flex;justify-content:center;margin-top:5px">
                <i class="material-icons blue-text" style="font-size:27px;font-weight:bold;">schedule</i>
                <span style="font-size:18px;color:#19191a;">10.00 - SELESAI</span>
              </span>
            </div>
            <div class="card-action" style="">
              <i class="material-icons red-text" style="font-size:35px;line-height:15px;">place</i><br>
              <span style="font-size:18px;line-height:20px;">Lapanagan umum SP2 mulyasari</span>
            </div>

                <ul class="collapsible popout" style="width:90%;margin:auto;padding-bottom:10px;">
                  <li style="border-radius:10px;">
                    <div class="collapsible-header teal white-text" style="border-radius:8px;display:flex;justify-content:center;padding:6px"><span style="font-size:18px">Lihat Maps</span></div>
                    <div class="collapsible-body" style="">
                      <span>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.3164625691725!2d104.65540801429546!3d-4.536927249086981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e38ea8034c00171%3A0x120f1ec62809fbc0!2sLapangan%20Umum%20Sp2%20Mulya%20Sari!5e0!3m2!1sen!2sid!4v1629280514016!5m2!1sen!2sid" width="100%" height="220" style="border:0;padding:0;margin:0" allowfullscreen="" loading="lazy"></iframe>
                      </span>
                    </div>
                  </li>
                </ul>

          </div>
        </div>
      </div>


      <div class="row">
        <div class="col s12 center-align">
          <div class="z-depth-2" style="background-color:#eee;border-radius:9px;padding:3px;margin-top:30px;">
          <p class="" style="font-size:18px;color:#3b3d3b;">Sungguh suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/I berkenan hadir untuk memberikan Do'a restunya kami sekeluarga mengucapkan terima kasih</p>
        </div>
        </div>
      </div>

    </div>
    </div>

  </div>


  <div id="stori" class="warnatema" style="position:relative;background-color:#5fa17e;">
    <svg style="margin-top:-25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#dce0e0" fill-opacity="1" d="M0,256L80,224C160,192,320,128,480,117.3C640,107,800,149,960,176C1120,203,1280,213,1360,218.7L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

    <div class="upstori" style="padding-bottom:60px;">

      <div class="row">
      <div class="col s12 center-align">
        <div class="container">
            <div class="container">
        <div class="warnakotak z-depth-1" style="background-color:#eee;border-radius:9px;padding:0px;">
          <h5 class="header warnatitle" style="color:#3b3d3b;font-size:26px;font-family: 'Roboto', cursive;padding:4px;">Stori</h5>
        </div>
          </div>
        </div>
      </div>
    </div>

      <div class="container">
        <div class="timeline">
          <div class="timeline-event">
            <div class="card timeline-content" data-aos="fade-down" data-aos-duration="1000" style="border-radius:10px;">
              <div class="card-content">
                <span class="card-title red-text text-darken-2" style="font-weight:bold;">2017</span>
                <p style="font-size:16px;">Pertemuan untuk pertama kalinya!!</p>
              </div>
            </div>
            <div class="timeline-badge red white-text"><i class="material-icons">favorite</i></div>
          </div>
          <div class="timeline-event">
            <div class="card timeline-content" data-aos="fade-down" data-aos-duration="1000" style="border-radius:10px;">
              <div class="card-content">
                <span class="card-title green-text text-darken-2" style="font-weight:bold;">2018</span>
                <p style="font-size:16px;">Jalan sudah satu tahun!!</p>
              </div>
            </div>
            <div class="timeline-badge green white-text"><i class="material-icons">favorite</i></div>
          </div>
          <div class="timeline-event">
            <div class="card timeline-content" data-aos="fade-down" data-aos-duration="1000" style="border-radius:10px;">
              <div class="card-content">
                <span class="card-title blue-text text-darken-2" style="font-weight:bold;">2019</span>
                <p style="font-size:16px;">Jalan sudah dua tahun!!</p>
              </div>
            </div>
            <div class="timeline-badge blue white-text"><i class="material-icons">favorite</i></div>
          </div>
          <div class="timeline-event">
            <div class="card timeline-content" data-aos="fade-down" data-aos-duration="1000" style="border-radius:10px;">
              <div class="card-content">
                <span class="card-title orange-text text-darken-2" style="font-weight:bold;">2020</span>
                <p style="font-size:16px;">Memutuskah untuk menikah!!</p>
              </div>
            </div>
            <div class="timeline-badge orange white-text"><i class="material-icons">favorite</i></div>
          </div>
        </div>
      </div>
      
    </div>
  </div>


  <div id="galeri" class="warnatema"  style="position:relative;margin-top:-20px;background-color:#dce0e0;">

    <svg style="margin-top:-15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#5fa17e" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,85.3C640,117,800,203,960,218.7C1120,235,1280,181,1360,154.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

    <div class="galeri" style="padding-bottom:40px">

    <div class="row">
      <div class="col s12 center-align">
        <div class="container">
            <div class="container">
        <div class="warnakotak z-depth-1" style="background-color:#eee;border-radius:9px;padding:0px;">
          <h5 class="header warnatitle" style="color:#3b3d3b;font-size:26px;font-family: 'Roboto', cursive;padding:4px;">Galeri</h5>
        </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col s12 m6 l4 xl3 center-align" style="margin-bottom:8px;">
        <img data-aos="fade-right" data-aos-duration="1000" class="card-image materialboxed z-depth-1 img-thumbnail" style="border-radius:5px;" src="<?=base_url('assets/img/contoh/galeris.jpg'); ?>" width="100%">
      </div>
      <div class="col s12 m6 l4 xl3 center-align" style="margin-bottom:8px;">
        <img data-aos="fade-left" data-aos-duration="1000" class="card-image center-align materialboxed z-depth-1 img-thumbnail" style="border-radius:5px;" src="<?=base_url('assets/img/contoh/galeris.jpg'); ?>" width="100%">
      </div>
      <div class="col s12 m6 l4 xl3 center-align" style="margin-bottom:8px;">
        <img data-aos="fade-right" data-aos-duration="1000" class="card-image center-align materialboxed z-depth-1 img-thumbnail" style="border-radius:5px;" src="<?=base_url('assets/img/contoh/galeris.jpg'); ?>" width="100%">
      </div>
      <div class="col s12 m6 l4 xl3 center-align" style="margin-bottom:8px;">
        <img data-aos="fade-left" data-aos-duration="1000" class="card-image center-align materialboxed z-depth-1 img-thumbnail" style="border-radius:5px;" src="<?=base_url('assets/img/contoh/galeris.jpg'); ?>" width="100%">
      </div>
      <div class="col s12 m6 l4 xl3 center-align" style="margin-bottom:8px;">
        <img data-aos="fade-right" data-aos-duration="1000" class="card-image center-align materialboxed z-depth-1 img-thumbnail" style="border-radius:5px;" src="<?=base_url('assets/img/contoh/galeris.jpg'); ?>" width="100%">
      </div>
    </div>


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
              <!-- <iframe style="border-radius:10px" width="100%" height="260" src="https://www.youtube.com/embed/ONcXsba7B30" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              <h5>Disini tempat video!!</h5>
            </div>
          </div>
        </div>
      </div>
      </div>


    </div>
  </div>


  <div id="rekening" class="warnatema" style="position:relative;background-color:#5fa17e;">
    <svg style="margin-top:-25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#dce0e0" fill-opacity="1" d="M0,256L80,224C160,192,320,128,480,117.3C640,107,800,149,960,176C1120,203,1280,213,1360,218.7L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

    <div class="uprekening" style="padding-bottom:60px;">

      <div class="row">
        <div class="col s12 center-align">
          <div class="warnakotak z-depth-2" style="background-color:#eee;border-radius:9px;padding:3px;">
          <p class="warnatitle" style="font-size:18px;color:#3b3d3b;">Tampa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk pengantin dapat melalui :</p>
        </div>
        </div>
      </div>

      <div class="row">
          <div class="col s12 m6" data-aos="fade-down" data-aos-duration="1000">
            <div class="card horizontal" style="border-radius:6px;background-color:#eee;">
              <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
                <img src="<?=base_url('assets/temaundangan/vantage/'); ?>img/bbri.png" height="80px">
              </div>
              <div class="card-stacked" style="">
                <div class="card-content" style="padding:5px;font-size:17px;margin-top:7px">
                  <p style="color:#19191a">No.Rek: 5749-2434-2465-433</p>
                  <p style="color:#19191a">Atas Nama: Suparman</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12 m6" data-aos="fade-up" data-aos-duration="1000">
            <div class="card horizontal" style="border-radius:6px;background-color:#eee;">
              <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
                <img src="<?=base_url('assets/temaundangan/vantage/'); ?>img/bbnii.png" height="80px">
              </div>
              <div class="card-stacked" style="">
                <div class="card-content" style="padding:5px;font-size:17px;margin-top:7px">
                  <p style="color:#19191a">No.Rek: 5749-2434-2465-433</p>
                  <p style="color:#19191a">Atas Nama: Suparman</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      
    </div>
  </div>

  <div id="quesbook" class="warnatema ww-detail" style="margin-top:-10px;position:relative;background-color:#dce0e0;">
    <!-- <nav class="pushpin-sticky z-depth-0 pin-bottom" data-target="quesbook" data-uptop="upquesbook" style="font-family: 'Satisfy', sans-serif;">
      <div class="nav-wrapper cyan darken-2">
        <div class="container">
          <a href="#" class="brand-logo" style="text-shadow:1px 1px 3px #aaa;"><i class="material-icons" style="font-size:30px;">comment</i> Komentar</a>
        </div>
      </div>
    </nav> -->
    <svg style="margin-top:-20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#5fa17e" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,229.3C480,203,600,117,720,90.7C840,64,960,96,1080,144C1200,192,1320,256,1380,288L1440,320L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

    <img data-aos="fade-left" data-aos-duration="1000" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/bunga2.png" width="200" style="position:absolute;top:-80px;right:-30px;z-index:5">

    <div class="quesbook ww-rsvp-form" style="padding-top:20px">

      <div class="row">
        <div class="col s12 center-align">
          <div class="container">
            <div class="container">
          <div class="warnakotak z-depth-1" style="background-color:#eee;border-radius:9px;padding:0px;">
            <h5 class="warnatitle" style="font-size:26px;font-family: 'Roboto', cursive;color:#3b3d3b;padding:4px;">Daftar Ucapan</h5>
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

      <div class="row">

        <div class="col s12 slidetampil" style="margin-top:-120px;">
          <div class="carousel checkcarousel">
            <a class="carousel-item checkitem center-align z-depth-1" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:8px;width:75%;color:black;" href="#one!"><h5 style="">Mr.Bill Gates</h5><p style="font-size:16px">Good luck!</p></a>
            <a class="carousel-item checkitem center-align z-depth-1" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:8px;width:75%;color:black;" href="#one!"><h5 style="">Steven</h5><p style="font-size:16px">HWD!</p></a>
            <a class="carousel-item checkitem center-align z-depth-1" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:8px;width:75%;color:black;" href="#one!"><h5 style="">Arsi</h5><p style="font-size:16px">Selamat ya!</p></a>
            <a class="carousel-item checkitem center-align z-depth-1" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:8px;width:75%;color:black;" href="#one!"><h5 style="">Roman</h5><p style="font-size:16px">H.W.D!</p></a>
          </div>
        </div>
        <div class="col s12 listtampil" style="margin-top:-30px;display:none;">
          <div class="">
            <a class="carousel-item checkitem center-align z-depth-1" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:10px;width:100%;display:block;margin-bottom:10px;color:black;" href="#one!"><h5 style="">Mr.Bill Gates</h5><p style="font-size:16px">Good luck!</p></a>
            <a class="carousel-item checkitem center-align z-depth-1" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:10px;width:100%;display:block;margin-bottom:10px;color:black;"href="#two!"><h5 style="">Steven</h5><p style="font-size:16px">HWD!</p></a>
            <a class="carousel-item checkitem center-align z-depth-1" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:10px;width:100%;display:block;margin-bottom:10px;color:black;"href="#three!"><h5 style="">Arsi</h5><p style="font-size:16px">Selamat ya!</p></a>
            <a class="carousel-item checkitem center-align z-depth-1" style="background-color:white;overflow-y:scroll;padding:0 10px 0 10px;border-radius:10px;width:100%;display:block;margin-bottom:10px;color:black;"href="#four!"><h5 style="">Roman</h5><p style="font-size:16px">H.W.D!</p></a>
          </div>
        </div>

      </div>
      
    </div>
  </div>


  <div id="kehadiran" class="warnatema ww-detail" style="background:linear-gradient(rgba(95, 161, 126, 1),rgba(151, 194, 143, 1),rgba(151, 194, 143,1));position:relative;background-image:url('<?=base_url('assets/temaundangan/vantage/'); ?>img/rsvp-imgc.jpg');background-size:cover;background-position:center;">
    <!-- <nav class="pushpin-sticky z-depth-0 pin-bottom" data-target="kehadiran" data-uptop="upkehadiran" style="font-family: 'Satisfy', sans-serif;">
      <div class="nav-wrapper cyan darken-2">
        <div class="container">
          <a href="#" class="brand-logo" style="text-shadow:1px 1px 3px #aaa;"><i class="material-icons" style="font-size:35px;">rsvp</i> Kehadiran</a>
        </div>
      </div>
    </nav> -->
    <svg style="margin-top:-25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path class="warnawaves" fill="#dce0e0" fill-opacity="1" d="M0,224L60,192C120,160,240,96,360,101.3C480,107,600,181,720,224C840,267,960,277,1080,288C1200,299,1320,309,1380,314.7L1440,320L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
    <div class="kehadiran">

      <div class="row">
        <div class="col s12 center-align">
          <div class="container">
            <div class="container">
          <div class="warnakotak z-depth-1 test" style="background-color:#eee;border-radius:9px;padding:0px;margin-top:20px">
            <h5 class="" style="font-size:26px;font-family: 'Roboto', cursive;color:#3b3d3b;padding:4px;">Kirim Ucapan</h5>
          </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row ww-rsvp-form">
        <div class="col s12" style="">
        <div class="container">
         <form action="" method="post" data-aos="fade-down" data-aos-duration="1000">
            <input type="hidden" name="idupengundang" value="1">
            <div class="row">
              <div class="col s12">
                <!-- <div class="form-group">
                  <select class="form-control" id="guest-input" name="namaanda">
                    <option class="disabled" value="">nama</option>
                  </select>
                </div> -->
                <div class="input-field col s12" style="border-radius:5px;">
                  <select class="browser-default form-custom" name="namaanda" required>
                    <option value="suparman" selected>Suparman</option>
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
                    <textarea id="textarea1" class="materialize-textarea browser-default form-custom" required></textarea>
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
          <h5 style="text-shadow:0 4px 8px #19191a;color:white;font-size:25px">Romeo & Juliete</h5>
          <p style="text-shadow:0 3px 6px #19191a;color:white;font-size:17px;margin-top:-10px">(Doakan yang terbaik untuk kami)</p>
        </div>
      </div>
      
    </div>
  </div>


  <div class="piringan" style="position: fixed;top:5px;z-index:10;left:5px;">
    <div class="musikplayer" style="width:70px;height:70px;border-radius:50%;background-color:white;border:1px solid yellow;box-shadow:1px 1px 9px #ddd;">
      <img class="putarmulai" style="border-radius:50%" src="<?=base_url('assets/img/team1.jpg'); ?>" width="100%">
      <div class="bulattengah" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:20px;height:20px;border-radius:50%;background-color:#c2c2c2;">
        <div class="bulathitam" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;width:5px;height:5px;border-radius:50%;background-color:#353b35;"></div>
      </div>
    </div>
    <div class="stik" style="position:fixed;left:2px;margin-top:-6px;width:30px;height:30px;transform:rotate(0deg);transition:1s;z-index:10">
      <img class="stikok musikset" style="position:absolute;left:28px;right:0;margin:auto;transform:rotate(-90deg);bottom:0;top:-2px" src="<?=base_url('assets/img/stick3.png'); ?>" width="20">
    </div>
  </div>

    <audio id="musikvalue" autoplay loop style="width:100%">
      <source src="<?=base_url('assets/img/contoh/rembulan.MP3'); ?>" type="audio/mpeg">
    </audio>


  <footer style="background-color:#d4d4d4">
    <svg style="margin-top:-60px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#d4d4d4" fill-opacity="1" d="M0,256L720,128L1440,256L1440,320L720,320L0,320Z"></path></svg>
    <!-- <svg style="margin-top:-30px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(151, 194, 143,1)" fill-opacity="1" d="M0,256L720,128L1440,256L1440,0L720,0L0,0Z"></path></svg> -->

    <div class="foter" style="height:70px">
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
    <!-- <ul>
      <li><span class="fixbtn" style="top:6px">Home</span><a href="#awal" class="btn-floating red page-scroll"><i class="material-icons">home</i></a></li>
      <li><span class="fixbtn" style="top:62px">Mempelai</span><a href="#mempelai" class="btn-floating red page-scroll"><i class="material-icons">safety_divider</i></a></li>
      <li><span class="fixbtn" style="top:118px">Acara</span><a href="#acara" class="btn-floating yellow darken-1 page-scroll"><i class="material-icons">local_bar</i></a></li>
      <li><span class="fixbtn" style="top:174px">Galeri</span><a href="#galeri" class="btn-floating green page-scroll"><i class="material-icons">collections</i></a></li>
      <li><span class="fixbtn" style="top:230px">Stori</span><a href="#stori" class="btn-floating green page-scroll"><i class="material-icons">auto_stories</i></a></li>
      <li><span class="fixbtn" style="top:284px">Komentar</span><a href="#quesbook" class="btn-floating green page-scroll"><i class="material-icons">comment</i></a></li>
      <li><span class="fixbtn" style="top:340px">Kehadiran</span><a href="#kehadiran" class="btn-floating blue page-scroll"><i class="material-icons">rsvp</i></a></li>
    </ul> -->
  </div>

  <div class="text-primary" style="position:fixed;bottom:10px;left:15px;border-radius:50%;z-index:10;">
    <div style="background-color:rgba(26, 199, 84,);padding:4px;border-radius:50%;">
      <i style="font-size:53px;text-shadow:0px 2px 2px black;font-weight:bold;min-width:180px" class="large green-text material-icons dropdown-trigger" href="#" data-target="dropdown1">whatsapp</i>
      <!-- <span style="">kirim ucapan via wa</span> -->
    </div>
  </div>
    <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content" style="border-radius:5px;">
    <li><a href="#!">Kirim ucapan via WA</a></li>
    <li class="divider" tabindex="-1" style="padding:0"></li>
    <li style="padding:0">
      <div class="card horizontal z-depth-0" style="">
        <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
          <img src="<?=base_url('assets/img/contoh/mpria.jpg'); ?>" height="40px" style="border-radius:5px;">
        </div>
        <div class="card-stacked" style="">
          <div class="card-content" style="padding:5px;font-size:17px;margin-top:2px">
            <a href="">
            <p style="color:#19191a">Romeo</p>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="divider" tabindex="-1" style="padding:0"></li>
    <li style="padding:0">
      <div class="card horizontal z-depth-0" style="">
        <div class="card-image" style="border-radius:10px 0 0 10px;border-right:1px solid #ddd;padding:0 5px 0 5px">
          <img src="<?=base_url('assets/img/contoh/mwanita.jpg'); ?>" height="40px" style="border-radius:5px;">
        </div>
        <div class="card-stacked" style="">
          <div class="card-content" style="padding:5px;font-size:17px;margin-top:2px">
            <a href="">
            <p style="color:#19191a">Juliete</p>
            </a>
          </div>
        </div>
      </div>
    </li>
    <!-- <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li> -->
  </ul>

<!-- modal awal -->
  <div id="modal1" class="modal modal-fixed-footer white-text" style="width:100%;height:100%!important;background-image: url('<?=base_url('assets/temaundangan/vantage/'); ?>img/bgmodal.png');background-size:cover;">
    <div style="position:absolute;left:0;right:0;bottom:0;top:0;background-color:black;opacity:.6"></div>

    <div class="modal-content center-align" style="height:100%">
      <h5 style="font-size:30px;font-weight:bold;font-family: 'Satisfy', cursive;">Romeo & Juliete</h5><hr>
      <span>Hello,</span><br>
      <span style="font-family: 'Satisfy', cursive;font-size:28px;font-weight:bold;">Teman</span>
      <p style="font-family: 'Roboto', sans-serif;">Kami mengundang anda untuk datang pada hari pernikahan kami!</p>
      <p style="font-family: 'Roboto', sans-serif;">Tampa mengurangi rasa hormat <br> Acara ini akan dilaksanakan dengan menerapkan <br> <b>PROTOKOL KESEHATAN</b> <br> sebagai berikut:</p>

      <div class="row" style="padding:0;margin:0 auto;max-width:450px;">
        <div class="col s4" style="padding:0;margin:0">
          <div class="card cyan darken-2" data-aos="fade-down" data-aos-duration="500" style="min-height:160px;border-radius:8px;">
            <div class="card-image" data-aos="fade-down" data-aos-delay-="300" data-aos-duration="500" style="padding-top:4px">
              <img class="hoverc" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/anaksp.png">
            </div>
            <div class="card-content" style="padding:4px;margin:0">
              <p style="line-height:15px;font-family: 'Roboto', sans-serif;">Dianjurkan Tidak Membawa Anak Kecil</p>
            </div>
          </div>
        </div>
        <div class="col s4" style="padding:0;margin:0">
          <div class="card cyan darken-2" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500" style="min-height:160px;border-radius:8px;">
            <div class="card-image" data-aos="fade-down" data-aos-delay="600" data-aos-duration="500" style="padding-top:4px">
              <img class="hoverc" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/maskp.png">
            </div>
            <div class="card-content" style="padding:4px;margin:0">
              <p style="line-height:15px;font-family: 'Roboto', sans-serif;">Gunakan Masker</p>
            </div>
          </div>
        </div>
        <div class="col s4" style="padding:0;margin:0">
          <div class="card cyan darken-2" data-aos="fade-down" data-aos-delay="900" data-aos-duration="500" style="min-height:160px;border-radius:8px;">
            <div class="card-image" data-aos="fade-down" data-aos-delay="1200" data-aos-duration="500" style="padding-top:4px">
              <img class="hoverc" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/handsp.png">
            </div>
            <div class="card-content" style="padding:4px;margin:0">
              <p style="line-height:15px;font-family: 'Roboto', sans-serif;">Gunakan Handsanitizer</p>
            </div>
          </div>
        </div>

        <div class="col s4" style="padding:0;margin:0">
          <div class="card cyan darken-2" data-aos="fade-down" data-aos-delay="1800" data-aos-duration="500" style="min-height:160px;margin-top:-13px;border-radius:8px;">
            <div class="card-image" data-aos="fade-down" data-aos-delay="2100" data-aos-duration="500" style="padding-top:4px">
              <img class="hoverc" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/suhusp.png">
            </div>
            <div class="card-content" style="padding:4px;margin:0">
              <p style="line-height:15px;font-family: 'Roboto', sans-serif;">Cek Suhu Tubuh</p>
            </div>
          </div>
        </div>
        <div class="col s4" style="padding:0;margin:0">
          <div class="card cyan darken-2" data-aos="fade-down" data-aos-delay="1500" data-aos-duration="500" style="min-height:160px;margin-top:-13px;border-radius:8px;">
            <div class="card-image" data-aos="fade-down" data-aos-delay="1800" data-aos-duration="500" style="padding-top:4px">
              <img class="hoverc" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/cucisp.png">
            </div>
            <div class="card-content" style="padding:4px;margin:0">
              <p style="line-height:15px;font-family: 'Roboto', sans-serif;">Cuci Tangan</p>
            </div>
          </div>
        </div>
        <div class="col s4" style="padding:0;margin:0">
          <div class="card cyan darken-2" data-aos="fade-down" data-aos-delay="1200" data-aos-duration="500" style="min-height:160px;margin-top:-13px;border-radius:8px;">
            <div class="card-image" data-aos="fade-down" data-aos-delay="1500" data-aos-duration="500" style="padding-top:4px">
              <img class="hoverc" src="<?=base_url('assets/temaundangan/vantage/'); ?>img/socialp.png">
            </div>
            <div class="card-content" style="padding:4px;margin:0">
              <p style="line-height:15px;font-family: 'Roboto', sans-serif;">Jaga Jarak 1METER</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12" style="padding-bottom: 20px">
          <p style="font-family: 'Roboto', sans-serif;">Atas perhatiannya kami ucapkan <br> <b>Terima Kasih</b></p>
        </div>
      </div>

    </div>
    <div class="modal-footer" style="padding:0 50px 0 50px;background-color:rgba(0,0,0,0);border:0;display:flex;justify-content:center;align-items: center;">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat white-text pulse bukaundangan" style="border-radius:20px;background-color:rgba(0,0,0,.5);width:200px;display: flex;align-items: center;justify-content:center;"><i class="large material-icons" style="padding-right:5px">drafts</i> Buka Undangan</a>
    </div>

  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?=base_url('assets/temaundangan/vantage/'); ?>js/materialize.js"></script>
  <script src="<?=base_url('assets/temaundangan/vantage/'); ?>js/jquery.lwtCountdown-1.0.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    $(document).ready(function(){
      $('#clock').countDown({
          targetDate: {
              'day'   : 1,
              'month' : 6,
              'year'  : 2021,
              'hour'  : 0,
              'min'   : 0,
              'sec'   : 0
          },
          omitWeeks: true
      });

      AOS.init();
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
        if(orang>300){
          $('.para').css({
            'background-position':'50% 300px'
          });
        }else{
          $('.para').css({
            'background-position':'50% '+Math.floor(orang)+'px',
            'transition':'2ms'
          });
        }
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
              'transform':'rotate(-35deg)'
            });
        }  else {
            audio.pause();
            // $('.putarmulai').removeClass('putaran');
            $('.putarmulai').css('animation-play-state','paused');
            $('.stik').css({
              'transform':'rotate(0deg)'
            });
        }
      });

      $('.bukaundangan').on('click',function(){
        var audio = $("#musikvalue")[0];
        audio.play();
        $('.putarmulai').addClass('putaran');
        $('.putarmulai').css('animation-play-state','running');
        $('.stik').css({
          'transform':'rotate(-35deg)'
        });
      });

      
      var warnatema =document.querySelectorAll('.warnatema');
      for(i=0;i<warnatema.length;i++){
        if(i%2==0){
          warnatema[i].style.backgroundColor='#dce0e0';
          // warnatema[i].style.backgroundColor='#9aada9';
        }else{
          // warnatema[i].style.backgroundColor='#5fa17e';
          warnatema[i].style.backgroundColor='#319e72';
        }
      }
      var warnawaves =document.querySelectorAll('.warnawaves');
      for(w=0;w<warnawaves.length;w++){
        if(w==0||w==1||w==3||w==5||w==7||w==9||w==11){
          warnawaves[w].setAttribute("fill","#dce0e0");
          // warnawaves[w].setAttribute("fill","#9aada9");
        }else{
          // warnawaves[w].setAttribute("fill","#5fa17e");
          warnawaves[w].setAttribute("fill","#319e72");

        }
      }

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