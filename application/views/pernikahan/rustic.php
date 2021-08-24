
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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meINVITEyou.com">
    <meta name="keyword" content="your keyword goes to here">
    <meta name="author" content="themexriver">
    <title><?=$title; ?></title>
    <link href="images/favicon.png" rel="icon">
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

    <!-- Icon fonts -->
    <!-- <link href="<?=base_url('assets/temaundangan/rustic/'); ?>font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/33095fbedf.js" crossorigin="anonymous"></script>
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script> -->

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/temaundangan/rustic/'); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700,700italic,400" rel="stylesheet" type="text/css">

    <!-- Plugins -->
    <link href="<?=base_url('assets/temaundangan/rustic/'); ?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?=base_url('assets/temaundangan/rustic/'); ?>css/owl.theme.css" rel="stylesheet">
    <link href="<?=base_url('assets/temaundangan/rustic/'); ?>css/nivo-lightbox.css" rel="stylesheet">
    <link href="<?=base_url('assets/temaundangan/rustic/'); ?>css/nivo-default.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/temaundangan/rustic/'); ?>css/style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="<?=base_url('assets/temaundangan/rustic/'); ?>css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google map api -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <style>
      .digit .bottom, .digit .top{
          color:black!important;
      }
      .times {
          animation: times .6s infinite alternate;
          transition:1s;
      }
      .fa-chevron-up{
        display:none;
      }
      .hatiku{
        animation: heart .6s infinite alternate;
          transition:1s;
          position: absolute;
          margin-top:13px
      }
      .owl-controls{
        margin-top:-20px!important;
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
      @keyframes heart {
        0%   { 
          font-size: 25px;
          transition:.6s;
         }
        100% { 
          transform: scale(1.1);
          font-size: 27px;
          transition:.6s;
        }
      }
    </style>
</head>

<body id="tujuantop">

    <div class="site-loder">
        <div class="lode-wrap">
            <span></span>
            <span></span>
        </div>
    </div> <!-- end of site-loder -->

    <header class="main-header" style="top:0;background-color:rgba(0,0,0,.6);">
        <nav class="navbar" style="height:70px">
            <div class="container">
                <div class="navbar-header" style="top:-17px">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt></a> -->
                    <a class="navbar-brand page-scroll" href="#!">
                        <span class="heart"><i class="fa fa-heart hatiku" style="font-size:20px;color:#ff4d64;margin-right:5px;"></i></span> 
                        <span style="font-size:25px;font-weight:bold;color:white;line-height:50px;margin-left:35px"><?=$detailundangan['namapanggilan_priawanita']; ?></span>
                    </a>
                </div>
                <div class="navbar-wrapper">
                    <div id="navbar" class="collapse navbar-collapse pull-right" style="background-color:rgba(0,0,0,.6);">
                        <ul class="nav navbar-nav">
                            <li><a class="page-scroll" href="#tujuantop"><i class="fas fa-home" style="font-size:25px;color:#ff4d64;"></i> Home</a></li>
                            <li><a class="page-scroll" href="#kepada"><i class="fas fa-hand-holding" style="font-size:25px;color:#ff4d64;"></i> Penerima</a></li>
                            <li><a class="page-scroll" href="#mempelai"><i class="fas fa-transgender" style="font-size:25px;color:#ff4d64;"></i> Mempelai</a></li>
                            <li><a class="page-scroll" href="#acara"><i class="fas fa-glass-cheers" style="font-size:25px;color:#ff4d64;"></i> Acara</a></li>
                            <li><a class="page-scroll" href="#gallery"><i class="fas fa-photo-video" style="font-size:25px;color:#ff4d64;"></i> Galeri</a></li>
                            <li><a class="page-scroll" href="#ucapan"><i class="fas fa-comments" style="font-size:25px;color:#ff4d64;"></i> Ucapan</a></li>
                            <li><a class="page-scroll" href="#isiucapan"><i class="fas fa-file-signature" style="font-size:25px;color:#ff4d64;"></i> Pesan</a></li>
                            <!-- <li><a href="#coming">Coming</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#gift-registry">Gift Registry</a></li>
                            <li><a href="#rsvp">RSVP</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog style</a></li>
                                    <li><a href="blog-details.html">Blog details</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                    <button class="tog-nav btn btn-default">
                        <span>
                            <i class="fa fa-bars open" data-count="0"></i>
                            <i class="fa fa-times close"></i>
                        </span>
                    </button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </nav> <!-- end of navigation -->
    </header> <!-- end of header -->

    <div class="hero">
        <div class="hero-slider">
            <div class="slider-1 item" style="background: url('<?=base_url('assets/img/backgroundawal/'.$detailundangan['background_welcome']); ?>') no-repeat 50% 50%;">
                <div class="overlay"></div>
            </div>
            <!-- <div class="slider-2 item">
                <div class="overlay"></div>
            </div> -->
        </div> <!-- end of hero-slider -->

        <div class="title col col-sm-8 col-sm-offset-2" data-aos="zoom-in-down" data-aos-delay="1000" data-aos-duration="1000" data-aos-offset="10" style="top:20px">
            <span data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="2000" data-aos-offset="20">
            <!-- <span>Pernikahan</span> -->
            <h2><div class="dan" style="font-size:20px"><?=$detailundangan['namapanggilan_priawanita']; ?></div></h2>
            <img style="margin-bottom:10px" src="<?=base_url('assets/img/flowersbg/save.png'); ?>" width="150px">
            <p style="opacity:0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet,.</p>
            <p style="font-size:16px;margin-top:-90px"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></p>
            </span>
    <?php if($detailundangan['paket_acara']=='paketeasy'||$detailundangan['paket_acara']=='paketmedium'){}else{ ?>
            <div class="count-down-wrapper row" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="2000" data-aos-offset="20" style="margin-top:-50px;">
                <div id="clock">
                    <div class="col-12 col-xs-6 col-sm-3 times" style="margin-top:85px;">
                        <div class="days_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                            <div class="wrapper-digit" style="background-color:rgba(13,208,226,.9);border-radius:5px;width:75px;height:70px;">
                                <!-- <div class="digit"></div> -->
                                <div class="digit"></div>
                                <div class="digit"></div>
                                <p style="color:#111;" class="note dash_title">Hari</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-3 times" style="margin-top:85px">
                        <div class="hours_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                            <div class="wrapper-digit" style="background-color:rgba(13,208,226,.9);border-radius:5px;width:75px;height:70px">
                                <div class="digit"></div>
                                <div class="digit"></div>
                                <p style="color:#111;" class="note dash_title">Jam</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-3 times" style="margin-top:85px">
                        <div class="minutes_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                            <div class="wrapper-digit" style="background-color:rgba(13,208,226,.9);border-radius:5px;width:75px;height:70px">
                                <div class=" digit"></div>
                                <div class=" digit"></div>
                                <p style="color:#111;" class="note dash_title">Menit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-3 times" style="margin-top:85px">
                        <div class="seconds_dash" data-vp-add-class="visible bounceIn" data-vp-offset="0">
                            <div class="wrapper-digit" style="background-color:rgba(13,208,226,.9);border-radius:5px;width:75px;height:70px">
                                <div class=" digit"></div>
                                <div class=" digit"></div>
                                <p style="color:#111;" class="note dash_title">Detik</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end of clock -->
            </div> <!-- count-down-wrapper -->
    <?php } ?>
            <!-- <a href="#" class="btn btn-default">I am attending</a> -->
        </div>
        <div class="shape"></div>
    </div> <!-- end of hero -->

    <section class="couple" id="couple">
        <div class="container" id="kepada">
            <div class="section-title row">
                <div class="col col-md-4 col-md-offset-5">
                    <!-- <span>Hello,</span> -->
                    <h4 style="margin-top:7px;color:<?=$detailundangan['color_template']; ?>;"><span style="font-size:15px;font-weight:bold;">Hello,</span><br><?=$detailundangan['nama_diundang']; ?></h4>
                    <!-- <p>Thanks For Your Valuable Gift</p> -->
                </div>
            </div> <!-- end of section-title -->
            <div id="mempelai" class="para col col-md-8 col-md-offset-2" data-aos="zoom-in-down" data-aos-duration="1000" style="margin-top:-100px;margin-bottom:50px;">
                <p style="padding-bottom: 50px;" class="para-with-bg"><?=$detailundangan['ucapan_awal']; ?> </p>
            </div> <!-- end of para -->

            <div class="content row" style="margin-left:0px">
                <div class="col col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <div class="groom col col-sm-6" data-aos="flip-left" data-aos-duration="1000">
                        <div class="frame-wrapper" style="margin-bottom:50px;">
                            <div class="frame">
                                <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" alt>
                            </div>
                            <a style="min-height:70px;line-height:20px;width:320px;text-transform:initial;top:250px;padding-top:5px;background:rgba(4,180,196,.9)!important;" href="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" class="btn btn-default" data-lightbox-gallery="gallery1">
                                <span style="font-size:17px;"><?=$detailundangan['namalengkap_pria']; ?></span><br>
                                <!-- <span style="font-size:11px;color:#ddd;">Putra dari:</span><br> -->
                                <span style="font-size:12px;"><?=$detailundangan['orangtua_pria']; ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="bride col col-sm-6" data-aos="flip-right" data-aos-duration="1000">
                        <div class="frame-wrapper" style="margin-bottom:50px;">
                            <div class="frame">
                                <img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" alt>
                            </div>
                            <a style="min-height:70px;line-height:20px;width:320px;text-transform:initial;top:250px;padding-top:5px;background:rgba(4,180,196,.9)!important;" href="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" class="btn btn-default" data-lightbox-gallery="gallery1">
                                <span style="font-size:17px;"><?=$detailundangan['namalengkap_wanita']; ?></span><br>
                                <!-- <span style="font-size:11px;color:#ddd;">Putri dari:</span><br> -->
                                <span style="font-size:12px;"><?=$detailundangan['orangtua_wanita']; ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="heart" style="margin-top:75px;text-align:center;">
                        <i class="fa fa-heart"></i>
                        <i class="fa fa-heart"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                </div>
            </div> <!-- end of content -->
            <div class="clearfix"></div>
            <!-- end of para -->
        </div> <!-- end of container -->
        <div class="shape"></div>
    </section> <!-- end of couple -->


    <section class="wedding-reciption" id="acara" style="margin-top:-40px">
        <div class="container">
            <div class="row" style="margin-top:-50px">
                <div class="wedding col col-sm-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="title">
                        <div>
                            <h3 style="color:<?=$detailundangan['color_template']; ?>;">AKAD</h3>
                            <span>Pernikahan</span>
                        </div>
                    </div>
                    <!-- <p>Thanks a lot for your valuable gift, consectetur adipiscing elit. Duis ut lobortis nulla.Mauris eu dolor mi.</p> -->
                    <ul class="nav" style="margin-top:-50px">
                        <!-- <li><i class="fa fa-mobile"></i>Friday 6th May, 2016</li> -->
                        <li style="margin-bottom:5px"><i class="fa fa-map-marker" style="color:#f23838;font-size:25px"></i><?=$detailundangan['alamat_akad']; ?></li>
                        <li><i class="fa fa-clock-o" style="font-size:25px"></i><?=date('d F Y', strtotime($detailundangan['tanggal_akad'])); ?>, <?=$detailundangan['jam_akad']; ?></li>
                    </ul>
                <?php if($detailundangan['paket_acara']=='paketeasy'){}else{ ?>
                    <!-- <div class="view">
                        <a href="#" id="show-wedding-ceremony">View</a>
                    </div> -->
                <?php } ?>
                </div> <!-- end of wedding -->
                
                <div class="reciption col col-sm-5 col-sm-offset-2" data-aos="fade-up" data-aos-duration="1000">
                    <div class="title">
                        <div>
                            <h3 style="color:<?=$detailundangan['color_template']; ?>;">RESEPSI</h3>
                            <span>Pernikahan</span>
                        </div>
                    </div>
                    <!-- <p>Thanks a lot for your valuable gift, consectetur adipiscing elit. Duis ut lobortis nulla.Mauris eu dolor mi.</p> -->
                    <ul class="nav" style="margin-top:-50px">
                        <!-- <li><i class="fa fa-mobile"></i>Friday 6th May, 2016</li> -->
                        <li style="margin-bottom:5px"><i class="fa fa-map-marker" style="color:#f23838;font-size:25px"></i><?=$detailundangan['alamat_acara']; ?></li>
                        <li><i class="fa fa-clock-o" style="font-size:25px;"></i><?=date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?>, <?=$detailundangan['jam_acara']; ?></li>
                    </ul>
                <?php if($detailundangan['paket_acara']=='paketeasy'){}else{ ?>
                    <div class="view">
                        <a href="#!"  data-toggle="modal" data-target=".bs-example-modal-lg">Maps</a>
                    </div>
                <?php } ?>
                </div> <!-- end of reciption -->

                <div class="col col-md-8 col-md-offset-2" data-aos="fade-up" data-aos-duration="1000" style="margin-top:50px;text-align:center;">
                    <!-- <h3 style="display:none;">We Will Come Togather Very Soon!</h3> -->
                    <p><?=$detailundangan['ucapan_ahir']; ?></p>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- wedding-reciption -->

<?php if($detailundangan['paket_acara']=='paketeasy'){}else{ ?>
    <section class="gallery" id="gallery">
        <div class="shape"></div>
        <div class="container">
            <div class="section-title row">
                <div class="col col-md-4 col-md-offset-5">
                    <!-- <span>We Meet A Beautiful Day!</span> -->
                    <h2 data-aos="zoom-in" style="color:<?=$detailundangan['color_template']; ?>;">Foto Galeri</h2>
                    <!-- <p>Thanks For Your Valuable Gift</p> -->
                </div>
            </div> <!-- end of section-title -->
            
            <div class="gallery-content row">
            <?php foreach($fotogaleris as $fgs): ?>
                <div class="col col-sm-6 col-md-4" data-aos="zoom-in" data-aos-duration="500">
                    <div>
                        <img src="<?=base_url('assets/temaundangan/rustic/'); ?>images/gallery/frame.png" alt class="frame img img-responsive">
                        <img src="<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>" alt class="thumb img img-responsive">
                        <!-- <button class="btn btn-default">Lihat</button> -->

                        <div class="hover-content">
                            <div>
                                <!-- <h4>First Meet</h4> -->
                                <p><?=$detailundangan['namapanggilan_priawanita']; ?></p>
                                <a href="<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>" class="btn btn-default" data-lightbox-gallery="gallery2">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                <div class="clearfix"></div>
                <!-- <div style="margin:auto;"> -->
            <?php if($detailundangan['video_acara']){ ?>
                <a href="#!" class="btn btn-default" style="text-align:center;margin:auto;z-index:3;background-color:#123!important">Video</a>
                <div data-aos="fade-up" data-aos-duration="1000" class="embed-responsive embed-responsive-4by3" style="border:20px solid white;margin-top:-18px">
                    <?=$detailundangan['video_acara']; ?>
                </div>
            <?php } ?>
                <!-- </div> -->
            </div> <!-- end of gallery-content -->
        </div> <!-- end of container -->
    </section> <!-- end of gallery -->
<?php } ?>

<?php if($detailundangan['paket_acara']=='paketeasy'||$detailundangan['paket_acara']=='paketmedium'){}else{ ?>
    <section class="our-story" id="ucapan">
        <div class="container">
            <div class="section-title row">
                <div class="col col-md-4 col-md-offset-5">
                    <!-- <span>We Meet A Beautiful Day!</span> -->
                    <h2 data-aos="zoom-in" style="color:<?=$detailundangan['color_template']; ?>;">Ucapan Teman</h2>
                    <!-- <p>Thanks For Your Valuable Gift</p> -->
                </div>
            </div> <!-- end of section-title -->

            <div class="row">
              <div class="col-xs-12" style="margin-bottom:10px;z-index:9;display:flex;justify-content:flex-end;">
                <button type="button" class="btn btn-sm tampillist" style="background-color:#007BFF;color:white">Tampilkan List</button>
                <button type="button" class="btn btn-sm btn-success text-white tampilslide">Tampilkan Slide</button>
              </div>
            </div>

            <div class="content row">
                <!-- <div class="conversation col">
                    <div class="left-side col col-xs-6">
                        <img src="images/story/jhon.png" alt>
                        <div class="left left-conversation-slider">
                            <span>Hello!</span>
                            <span>I love u</span>
                            <span>Marry?</span>
                        </div>
                    </div>
                    <div class="right-side col col-xs-6">
                        <img src="images/story/alisa.png" alt>
                        <div class="right right-conversation-slider">
                            <span>Hi!</span>
                            <span>Too</span>
                            <span>Yes!</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div> -->

                <?php 
                    $urlpucapan=$detailundangan['id_pengundang'];
                    $queryucapan="SELECT max(id_ucapan) as maxidu FROM ucapan where urlpengundang_ucapan='$urlpucapan'";
                    $resultmax=$this->db->query($queryucapan)->row_array();

                    $queryallucapan="SELECT * from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan=$urlpucapan group by id_ucapan order by id_ucapan desc";
                    $dataucapan=$this->db->query($queryallucapan)->result_array();
                ?>



                <div class="meet col" data-aos="fade-down" data-aos-duration="1000" style="padding:0">
                    <div class="col col-md-8 col-md-offset-2">
                        <div class="meet-slider titemss">
                        <?php foreach($dataucapan as $du): ?>
                            <div style="background-color:rgb(13,208,226,.1);margin-bottom:5px;padding:15px 10px 15px 10px;border-radius:10px">
                                <div class="title">
                                    <span style="font-size:12px"><?=$du['nama_diundang']; ?></span>
                                    <!-- <h2>Beautiful Day!</h2> -->
                                </div>
                                <p style="font-size:17px;font-style:unset;padding-bottom:30px;" class="para-with-bg">
                                    <?=$du['isi_ucapan']; ?>
                                    <?php if($this->session->userdata('level_user')=='admin'){ ?>
                                      <a style="color:red" onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/hapusucapan/'.$du['id_ucapan'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang']); ?>">[hapus]</a>
                                    <?php } ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> <!-- end of content -->
        </div> <!-- end of container --> 
    </section> <!-- end of our-story -->

    <section class="gift-registr" style="background:linear-gradient(#F5F5F5,#0FCBE0);">
        <!-- <div class="shape" style="height:0px;"></div> -->
        <div class="container" style="background:linear-gradient(#F5F5F5,#0FCBE0);">
            <div class="section-title row" id="isiucapan" style="margin-top:0px">
                <div class="col col-md-4 col-md-offset-5">
                    <h2 data-aos="zoom-in" style="line-height:25px;color:<?=$detailundangan['color_template']; ?>;">Kirim Ucapan Anda</h2>
                </div>
            </div> <!-- end of section-title -->

            <div class="para row">
                <div class="col col-md-8 col-md-offset-2">
                    <div class="form row">
                <div class="col col-md-10 col-md-offset-1">
                    <form method="post" action="<?=base_url('undangan/ucapan'); ?>" id="rsvp-form">
                        <input type="hidden" name="idupengundang" value="<?=$detailundangan['id_pengundang']; ?>">

                        <div class="form-group col col-sm-6">
                            <select class="form-control" id="guest-input" name="namaanda" required>
                                <option class="disabled" value="<?=$detailundangan['id_diundang']; ?>"><?=$detailundangan['nama_diundang']; ?></option>
                            </select>
                        </div>
                        <div class="form-group col col-sm-6">
                            <select class="form-control" id="guest-input" name="absenkehadiran" required>
                                <option value="">Apakah kamu menghadiri?</option>
                                <option value="hadir">Menghadiri</option>
                                <option value="tidak">Tidak menghadiri</option>
                            </select>
                        </div>
                        <div class="form-group col col-sm-6">
                            <select class="form-control" id="guest-input" name="jumlahkehadiran" required>
                                <option value="1">1 orang</option>
                                <option value="2">2 orang</option>
                            </select>
                        </div>

                        <div class="form-group col col-sm-12">
                            <label for="description">Pesan anda</label>
                            <textarea class="form-control" id="description" name="isiucapan" required></textarea>
                        </div>
                        <div class="form-group submit col col-sm-12">
                            <button style="background-color:#ff3030;color:white;font-size:20px;float:right;" class="btn btn-default" type="submit" name="kirimin">Kirim</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    <div class="bird"></div>
                </div>
            </div> <!-- end of form -->
                </div>
            </div>

            <!-- <div class="gift-content row">
                <div class="col col-xs-6 col-sm-3">
                    <img src="images/gift-registry/img-1.png" alt class="img img-responsive">
                </div>
                <div class="col col-xs-6 col-sm-3">
                    <img src="images/gift-registry/img-2.png" alt class="img img-responsive">
                </div>
                <div class="col col-xs-6 col-sm-3">
                    <img src="images/gift-registry/img-3.png" alt class="img img-responsive">
                </div>
                <div class="col col-xs-6 col-sm-3">
                    <img src="images/gift-registry/img-4.png" alt class="img img-responsive">
                </div>
                <div class="col col-xs-6 col-sm-3">
                    <img src="images/gift-registry/img-5.png" alt class="img img-responsive">
                </div>
                <div class="col col-xs-6 col-sm-3">
                    <img src="images/gift-registry/img-6.png" alt class="img img-responsive">
                </div>
                <div class="col col-xs-6 col-sm-3">
                    <img src="images/gift-registry/img-7.png" alt class="img img-responsive">
                </div>
                <div class="col col-xs-6 col-sm-3">
                    <img src="images/gift-registry/img-8.png" alt class="img img-responsive">
                </div>
            </div> -->
        </div> <!-- end of container -->    
    </section> <!-- end of gift-registry --> 

<?php } ?> 

    <footer style="margin-top:-1px">
        <div class="" style="background-color:#12CCE1;">
            <div class="container" data-aos="fade-up" data-aos-duration="1000" style="padding:0">
                <div class="title" style="padding:40px 0 0 0">
                    <h3><?=$detailundangan['namapanggilan_priawanita']; ?></h3>
                    <p style="padding:0 0 40px 0;text-indent:initial!important;text-transform:lowercase;">(Doakan yang terbaik untuk kami)</p>
                </div>
            </div>

            <div class="copyright" style="color:white">
                <p>&copy; meinviteyou. All Rights Reserved.</p>
                <p>Design by - <a style="background-color:white;padding:2px" href="<?=base_url(); ?>"><span style="color:#0062CC;">me</span><span class="text-danger"><u>INVITE</u></span><span style="color:#0062CC;">you</span></a></p>
            </div>
        </div> <!-- end of footer-wrapper -->
    </footer> <!-- end of footer -->

    <!-- <div class="dropdown"> -->
    <!-- <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="oke" style="position:fixed;bottom:30px;right:20px;background-color:rgba(0,0,0,.5);z-index:999;width:50px;height:50px;border-radius:50%;">
        OK
    </button>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dLabel">
    oke
  </ul> -->
    <!-- </div> -->

    <!-- <div class="text-primary" style="position:fixed;bottom:100px;left:20px;border:0px solid gray;border-radius:50%;z-index:99">
    <div class="btn-group dropup" style="background-color:rgba(0,0,0,.4);padding:10px;border-radius:50%;width:60px;height:60px;border-radius:50%">
      <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i style="font-size:40px;color:red;" class="fa fa-music"></i>
      </div>
      <div class="dropdown-menu" style="overflow:auto;">
        <?=$detailundangan['musik_acara']; ?>
      </div>
    </div>
  </div> -->

  <?php if($detailundangan['musik_acara']){ ?>
  <div class="text-primary" style="position:fixed;bottom:100px;left:25px;border:0px solid gray;border-radius:50%;z-index:1020;">
    <div class="btn-group dropup d-flex justify-content-center musikset" style="background-color:rgba(115, 187, 255,.7);padding:10px;border-radius:50%;width:50px;height:50px">
        <img src="<?=base_url('assets/img/musikoff.png'); ?>" width="100%">
    </div>
  </div>
  <audio id="musikvalue" autoplay loop style="width:100%">
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
        .popover-title{
          color:#0062CC;
        }
    </style>



    <div class="text-primary" style="position:fixed;bottom:30px;left:21px;border-radius:50%;z-index:1020;">
    <div style="background-color:rgba(26, 199, 84,);padding:4px;border-radius:50%">
    <span class="cobain" data-toggle="popover" title="Kirim ucapan via WA" data-html="true" data-content="
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
      <img class="keluar" width="50" src="<?=base_url('assets/img/wac.png'); ?>">
      <!-- <i class="fab fa-whatsapp" style="font-size:55px;color:#00c45c;"></i> -->
    </span>
    </div>
  </div>


  <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header" style="text-align:center;">
            <h4 class="modal-title" id="exampleModalLongTitle">Pernikahan <?=$detailundangan['namapanggilan_priawanita']; ?></h4>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> -->
          </div>
          <div class="modal-body" style="background-image:url('<?=base_url('assets/img/flowersbg/asu.jpg') ?>');background-size:120%;background-repeat:repeat;text-align:center;background-position:center;">

            <span>Hello,</span><br>
            <span style="font-size:25px;margin-top:-10px"><?=$detailundangan['nama_diundang']; ?></span><br>
            <span>Kami mengundang anda untuk datang pada hari pernikahan kami!</span><br><br>
            <div class="row">
              <div class="col-xs-12 mt-3">
                Tanpa mengurangi rasa hormat. <br>
                Acara ini akan dilaksanakan dengan Menerapkan <br>
                <span style="font-weight:bold;">PROTOKOL KESEHATAN</span><br>
                sebagai berikut:
              </div> 
            </div>

            <div class="card-deck">
              <div class="row" style="padding: 0 2px 0 2px;font-weight:bold;font-size:14px">

                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:168px;padding:4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/anaksp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Dianjurkan Tidak Membawa Anak Kecil</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:168px;padding:4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/maskp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Gunakan Masker</p><br>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:168px;padding:4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/handsp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Gunakan Handsanitizer</p><br>
                    </div>
                  </div>
                </div>

                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:168px;padding:4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/suhusp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Cek Suhu Tubuh</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:168px;padding:4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/cucisp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p class="card-text">Cuci Tangan</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:168px;padding:4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/socialp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 2px;">
                      <p class="card-text">Jaga Jarak 1METER</p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12" style="margin-top:5px;margin-bottom:0px">
                <p>Atas perhatiannya kami ucapkan <br> Terima Kasih</p>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-dismiss="modal" style="border-radius:20px;border:1px solid grey;background-color:white">Buka</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Large modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">Peta Lokasi Pesta Pernikahan</h4>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> -->
          </div>
            <div class="embed-responsive embed-responsive-4by3" style="border:1px solid grey;">
                <?=$detailundangan['map_acara']; ?>
            </div>
    <div class="modal-footer">
            <button type="button" class="btn" data-dismiss="modal" style="border-radius:20px;border:1px solid grey;background-color:white">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
    </div>
  </div>
</div>


    <div class="ceremony" id="popup-wedding-ceremony">
        <div class="container">
            <button class="close"><i class="fa fa-times"></i></button>
            <div class="ceremony-banar row">
                <div class="overlay"></div>
                <div class="title">
                    <h2>AKAD</h2>
                    <span>Pernikahan</span>
                </div>
            </div> <!-- end of banar -->

            <div class="content">
                <div class="row">
                    <div class="left-col col col-md-4">
                        <div>
                            <div class="time">
                                <h3><?=date('d', strtotime($detailundangan['tanggal_akad'])) ?><span> <?=date('F', strtotime($detailundangan['tanggal_akad'])); ?></span></h3>
                                <div>
                                    <p>Mulai : Pukul <?=$detailundangan['jam_akad']; ?></p>
                                    <!-- <p>End - 6:00 pm</p> -->
                                </div>
                            </div>
                            <!-- <div class="contact">
                                <p><i class="fa fa-phone-square"></i> +1212-758-5700</p>
                                <p><i class="fa fa-envelope-square"></i> johnandalisa@mail.com</p>
                            </div> -->
                        </div>
                    </div>

                    <div class="right-col col col-md-8">
                        <h3 style="display:none;"></h3>
                        <span><i class="fa fa-map-marker"></i> <?=$detailundangan['alamat_akad']; ?></span>

                        <!-- <div class="details">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. voluptatem accusantium.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Duis ut lobortis nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed lacinia, est eget scelerisque blandit, nulla eros mollis erat.</p>
                        </div> -->
                    </div>
                </div>
            </div> <!-- end of content -->
            <div class="row" id="googlemap-1"></div>
            <!-- <div class="map row" id="googlemap-1"></div> -->
        </div> <!-- end of container --> 
    </div> <!-- popup-wedding-ceremony -->

    <div class="ceremony" id="popup-reciption-ceremony">
        <div class="container">
            <button class="close"><i class="fa fa-times"></i></button>
            <div class="ceremony-banar row">
                <div class="overlay"></div>
                <div class="title">
                    <h2>PESTA</h2>
                    <span>Pernikahan</span>
                </div>
            </div> <!-- end of banar -->

            <div class="content">
                <div class="row">
                    <div class="left-col col col-md-4">
                        <div>
                            <div class="time">
                                <h3><?=date('d', strtotime($detailundangan['tanggal_acara'])) ?><span> <?=date('F', strtotime($detailundangan['tanggal_acara'])); ?></span></h3>
                                <div>
                                    <p>Mulai : Pukul <?=$detailundangan['jam_acara']; ?></p>
                                    <!-- <p>End - 6:00 pm</p> -->
                                </div>
                            </div>
                            <!-- <div class="contact">
                                <p><i class="fa fa-phone-square"></i> +1212-058-3200</p>
                                <p><i class="fa fa-envelope-square"></i> alisandalisa@mail.com</p>
                            </div> -->
                        </div>
                    </div>

                    <div class="right-col col col-md-8">
                        <h3></h3>
                        <span><i class="fa fa-map-marker"></i> <?=$detailundangan['alamat_acara']; ?></span>

                        <!-- <div class="details">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. voluptatem accusantium.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Duis ut lobortis nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed lacinia, est eget scelerisque blandit, nulla eros mollis erat.</p>
                        </div> -->
                    </div>
                </div>
            </div> <!-- end of content -->

            <div class="row" id="googlemap-2"></div>
            <div class="embed-responsive embed-responsive-4by3" style="border:1px solid grey;">
                <?=$detailundangan['map_acara']; ?>
            </div>
        </div> <!-- end of container --> 
    </div> <!-- popup-wedding-ceremony -->

    <?php 
        $tanggal=date('d', strtotime($detailundangan['tanggal_acara']));
        $bulan=date('m', strtotime($detailundangan['tanggal_acara']));
        $tahun=date('Y', strtotime($detailundangan['tanggal_acara']));
     ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?=base_url('assets/temaundangan/rustic/'); ?>js/jquery-1.11.3.min.js"></script>
    <script src="<?=base_url('assets/temaundangan/rustic/'); ?>js/bootstrap.min.js"></script>

    <!--  Plugins for this template -->
    <script src="<?=base_url('assets/temaundangan/rustic/'); ?>js/owl.carousel.min.js"></script>
    <script src="<?=base_url('assets/temaundangan/rustic/'); ?>js/jquery.lwtCountdown-1.0.js"></script>
    <script src="<?=base_url('assets/temaundangan/rustic/'); ?>js/nivo-lightbox.min.js"></script>
    <script src="<?=base_url('assets/temaundangan/rustic/'); ?>js/jquery.nicescroll.min.js"></script>
    <script src="<?=base_url('assets/temaundangan/rustic/'); ?>js/jquery.appear.js"></script>
	<script src="<?=base_url('assets/temaundangan/rustic/'); ?>js/classie.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="<?=base_url('assets/temaundangan/rustic/'); ?>js/validate.js"></script>

    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script> -->

    <!-- Custom script for this pages -->
    <script src="<?=base_url('assets/temaundangan/rustic/'); ?>js/index-script.js"></script>
    <script src="<?=base_url('assets/temaundangan/rustic/'); ?>js/common-script.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function(){

            $('.cobain').popover();

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
            $('.dropdown-toggle').dropdown();

            $(window).on('load',function(){
                $('#exampleModalCenter').modal('show');
            });


            $('.page-scroll').on('click',function(e){
                var tujuan=$(this).attr('href');
                var elementtujuan=$(tujuan);
                $('html,body').animate({
                  'scrollTop':(Math.floor(elementtujuan.offset().top))
                },1000);
                e.preventDefault();
            });

            // $(window).on('load',function(){
            //     var audio = $("#musikvalue")[0];
            //     audio.play();
            //     $('.musikset').html(`<i style="font-size:30px;color:#ddd" class=" fa fa-volume-off"></i>`);
            // });

            $('.musikset').on('click',function(){
                var audio = $("#musikvalue")[0];
                if (audio.paused) {
                    audio.play();
                    $(this).html(`<img src="<?=base_url('assets/img/musikoff.png'); ?>" width="100%">`);
                }  else {
                    audio.pause();
                    $(this).html(`<img src="<?=base_url('assets/img/musikon.png'); ?>" width="100%">`);
                }
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

            var dan =$('.dan').text().split(' ');
            // console.log(dan);
            // if (in_array("&", dan, true)) {
               // dan[1].css('color','red');
               // dan.join(' ');
               // $('.dan').html(dan);
            // }

            // var index = dan.indexOf('&');
            // var jadi1=dan.splice(1,1, ' <span style="color:white;""> & </span> ');
            var jadi=dan.splice(1,1, ' <span style="color:#0FCBE0;"> & </span> ');
            // jadi.join(' ');
            $('.dan').html(dan);
            // console.log(dan);

            $('.tampilslide').hide();
            $('body').on('click','.tampillist',function(){
              $('.owl-wrapper').css('display','inline');
              $('.owl-controls').hide();
              $('.tampilslide').show();
              $('.tampillist').hide();
            });
            $('body').on('click','.tampilslide',function(){
              $('.owl-wrapper').css('display','block');
              $('.owl-controls').show();
              $('.tampilslide').hide();
              $('.tampillist').show();
            });



        });
    </script>
</body>
</html>
