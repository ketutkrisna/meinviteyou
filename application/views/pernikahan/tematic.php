
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
<html class="no-js">
	<head>
	<title><?=$title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="max-snippet:-1,max-image-preview:standard,max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="meINVITEyou.com">
    <meta property="og:title" content="The Wedding Of <?=$detailundangan['namapanggilan_priawanita']; ?>">
    <meta name="description" content="<?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?>"/>
    <meta content='<?=base_url('assets/img/imgsharing/'.$detailundangan['img_sharing']); ?>' property='og:image'/>
    
    <!-- Favicons -->
    <link href="<?=base_url('/'); ?>assets/img/imgsharing/<?=$detailundangan['img_sharing']; ?>" rel="icon">
    <link href="<?=base_url('/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/tematic/'); ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/tematic/'); ?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/tematic/'); ?>css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/tematic/'); ?>css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/tematic/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/tematic/'); ?>css/owl.theme.default.min.css">
	<!-- <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script> -->
	<script src="https://kit.fontawesome.com/33095fbedf.js" crossorigin="anonymous"></script>

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/tematic/'); ?>css/style.css">

	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/tematic/'); ?>css/aos.css">

	<style>
      .simply-countdown > .simply-section {
		  display: inline-block;
		  width: 100px;
		  height: 100px;
		  background-color:<?=$detailundangan['color_template']; ?>;
		  margin: 0 4px;
		  -webkit-border-radius: 50%;
		  -moz-border-radius: 50%;
		  -ms-border-radius: 50%;
		  border-radius: 50%;
		  position: relative;
		  animation: pulse 1s ease infinite;
		}
		.owl-controls{
			margin-top:-0px!important
		}
		.owl-nav{
			margin-top:-50px;
			display:flex;
			justify-content:space-between;
			padding-bottom:7px;
		}
		.owl-prev, .owl-next{
			z-index:1;
			font-weight:bold;
			background-color:rgba(1,1,1,.1);
		}
		.hatiku{
	        animation: heart .6s infinite alternate;
	        transition:1s;
	        position: absolute;
	        margin-top:13px
	    }
		@keyframes heart {
	        0%{ 
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

	<!-- Modernizr JS -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav navhide" role="navigation" style="background-color:rgba(1,1,1,.5);">
		<div class="container">
			<div class="row">
				<div class="col-xs-9 col-sm-4 col-md-4 col-lg-3">
					<div id="fh5co-logo">
						<a href="#!" style="font-size:29px">
						<i class="icon-heart2 hatiku" style="color:red;margin-top:8px!important;position:absolute;font-size:25px;"></i>
						<strong style="margin-left:30px;"><?=$detailundangan['namapanggilan_priawanita']; ?></strong>
					</a>
					</div>
				</div>
				<div class="col-xs-3 col-sm-8 col-md-8 col-lg-9 text-right menu-1">
					<ul>
						<li><a class="js-gotop" href="#"><i class="text-danger fas fa-home" style="font-size:25px;margin:10px 0 10px 0;"></i> Home</a></li>
						<li><a href="#kepada" class="page-scroll"><i class="text-danger fas fa-hand-holding" style="font-size:25px;margin:10px 0 10px 0;"></i> Penerima</a></li>
						<li><a href="#mempelai" class="page-scroll"><i class="text-danger fas fa-transgender" style="font-size:25px;margin:10px 0 10px 0;"></i> Mempelai</a></li>
						<li><a href="#acara" class="page-scroll"><i class="text-danger fas fa-glass-cheers" style="font-size:25px;margin:10px 0 10px 0;"></i> Acara</a></li>
						<li><a href="#galerisa" class="page-scroll"><i class="text-danger fas fa-photo-video" style="font-size:25px;margin:10px 0 10px 0;"></i> Galeri</a></li>
						<li><a href="#ucapan" class="page-scroll"><i class="text-danger fas fa-comments" style="font-size:25px;margin:10px 0 10px 0;"></i> Ucapan</a></li>
						<li><a href="#pesan" class="page-scroll"><i class="text-danger fas fa-file-signature" style="font-size:25px;margin:10px 0 10px 0;"></i> Pesan</a></li>
						<!-- <li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="gallery.html">Gallery</a>
							<ul class="dropdown">
								<li><a href="#">HTML5</a></li>
								<li><a href="#">CSS3</a></li>
								<li><a href="#">Sass</a></li>
								<li><a href="#">jQuery</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>


	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url('<?=base_url('assets/img/backgroundawal/'.$detailundangan['background_welcome']); ?>');background-position:400px 0px;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center" style="margin-top:30px">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1 style="font-size:50px;"><?=$detailundangan['namapanggilan_priawanita']; ?></h1>
							<!-- <h2>(Kami Akan Menikah)</h2> -->
							<img style="margin-bottom:10px" src="<?=base_url('assets/img/flowersbg/save.png'); ?>" width="150px">
							<h3 style="color:white"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></h3>
							<div class="simply-countdown" id="simply-countdown-losange"></div>
							<!-- <p><a href="#" class="btn btn-default btn-sm">Save the date</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container" id="kepada">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2 style="color:<?=$detailundangan['color_template']; ?>;">Hello!</h2>
					<h3><?=$detailundangan['nama_diundang']; ?></h3>
					<p data-aos="zoom-in-down" data-aos-duration="1000"><?=$detailundangan['ucapan_awal']; ?></p>
				</div>
			</div>
			<div class="couple-wrap" id="mempelai">
				<!-- <div style="background-color:red!important"> -->
				<div class="couple-half" data-aos="fade-right" data-aos-duration="1000" style="background-color:<?=$detailundangan['color_template']; ?>!important;border-radius:10px;margin-top:10px;padding:10px 0 10px 0;">
					<div class="groom" style="display:flex;justify-content:center;">
						<img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_pria']); ?>" alt="groom" class="img-responsive img-thumbnail">
					</div>
					<div class="desc-groom">
						<h3 style="margin-bottom:5px;color:white;font-size:40px;"><?=$detailundangan['namalengkap_pria']; ?></h3>
						<!-- <span>Putra dari:</span> -->
						<p style="margin-top:-5px;color:#ddd;"><?=$detailundangan['orangtua_pria']; ?></p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half" data-aos="fade-left" data-aos-duration="1000" style="background-color:<?=$detailundangan['color_template']; ?>!important;border-radius:10px;margin-top:10px;padding:10px 0 10px 0;">
					<div class="bride" style="display:flex;justify-content:center;">
						<img src="<?=base_url('assets/img/fotopelanggan/'.$detailundangan['foto_wanita']); ?>" alt="groom" class="img-responsive img-thumbnail">
					</div>
					<div class="desc-bride">
						<h3 style="margin-bottom:5px;color:white;font-size:40px;"><?=$detailundangan['namalengkap_wanita']; ?></h3>
						<!-- <span>Putri dari:</span> -->
						<p style="margin-top:-5px;color:#ddd;"><?=$detailundangan['orangtua_wanita']; ?></p>
					</div>
				</div>
				<!-- </div> -->
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="background-color:<?=$detailundangan['color_template']; ?>;">
		<div class="overlay"></div>
		<div class="container" id="acara">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<!-- <span>Our Special Events</span> -->
					<h2>Acara Pernikahan</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t" style="margin-top:-50px">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap" data-aos="zoom-in-up" data-aos-duration="1000">
									<h3>AKAD Pernikahan</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span><?=$detailundangan['jam_akad']; ?></span>
										<!-- <span>6:00 PM</span> -->
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span><?=date('d F Y', strtotime($detailundangan['tanggal_akad'])); ?></span>
										<!-- <span>November, 2016</span> -->
									</div>
									<p><d style="font-weight:bold;">Alamat</d><br><?=$detailundangan['alamat_akad']; ?></p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap" data-aos="zoom-in-up" data-aos-duration="1000">
									<h3>Pesta Pernikahan</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span><?=$detailundangan['jam_acara']; ?></span>
										<!-- <span>12:00 AM</span> -->
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span><?=date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></span>
										<!-- <span>November, 2016</span> -->
									</div>
									<p><d style="font-weight:bold;">Alamat</d><br><?=$detailundangan['alamat_acara']; ?></p>
								</div>
							</div>

						<?php if($detailundangan['paket_acara']=='paketeasy'){}else{ ?>
        				<?php if($detailundangan['map_acara']==''){}else{ ?>
							<div class="col-md-12 text-center">
								<div class="event-wrap" data-aos="zoom-in" data-aos-duration="1000" style="margin-top:10px;padding:20px 0 0 0;">
									<h4 style="color:white">Peta Lokasi Pesta Pernikahan</h4>

									<div class="embed-responsive embed-responsive-4by3" style="margin:0;">
										<?=$detailundangan['map_acara']; ?>
									</div>

								</div>
							</div>
						<?php } ?>
        				<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<!-- <span>We Love Each Other</span> -->
					<!-- <h2>Our Story</h2> -->
					<p data-aos="fade-up" data-aos-duration="1000"><?=$detailundangan['ucapan_ahir']; ?></p>
				</div>
			</div>
		</div>
	</div>


<?php if($detailundangan['paket_acara']=='paketeasy'){}else{ ?>
<?php if($countgaleri['countgaleri']==0){}else{ ?>
	<div id="fh5co-gallery" class="fh5co-section-gray">
		<div class="container" id="galerisa">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<!-- <span>Our Memories</span> -->
					<h2 style="color:<?=$detailundangan['color_template']; ?>;">Foto Galeri</h2>
					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">

					<ul id="fh5co-gallery-list">
				<?php foreach($fotogaleris as $fgs): ?>
					<li class="one-third" data-aos="zoom-in" data-aos-duration="1000" data-animate-effect="fadeIn" style="background-image: url('<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>'); "> 
						<a href="<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>">
							<div class="case-studies-summary">
								<!-- <span>14 Photos</span> -->
								<!-- <h2>Two Glas of Juice</h2> -->
							</div>
						</a>
					</li>
				<?php endforeach; ?>
					</ul>

				</div>
			</div>

		<?php if($detailundangan['video_acara']){ ?>
			<div style="margin-top:20px;font-weight:bold;text-align: right;">
				<span>Video</span>
			<div class="embed-responsive embed-responsive-16by9" data-aos="fade-up" data-aos-duration="1000">
				<?=$detailundangan['video_acara']; ?>
			</div>
			</div>
		<?php } ?>

		</div>
	</div>
<?php } ?>
<?php } ?>

	<!-- <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/img_bg_5.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-users"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Estimated Guest</span>

							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-user"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">We Catter</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-calendar"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Events Done</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-clock"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Hours Spent</span>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

<?php if($detailundangan['paket_acara']=='paketeasy'||$detailundangan['paket_acara']=='paketmedium'){}else{ ?>
	<div id="fh5co-testimonial">
		<div class="container" id="ucapan">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<!-- <span>Best Wishes</span> -->
						<h2 style="color:<?=$detailundangan['color_template']; ?>;">Ucapatan Teman</h2>
					</div>
				</div>
				<?php 
                    $urlpucapan=$detailundangan['id_pengundang'];
                    $queryucapan="SELECT max(id_ucapan) as maxidu FROM ucapan where urlpengundang_ucapan='$urlpucapan'";
                    $resultmax=$this->db->query($queryucapan)->row_array();

                    $queryallucapan="SELECT * from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan=$urlpucapan group by id_ucapan order by id_ucapan desc";
                    $dataucapan=$this->db->query($queryallucapan)->result_array();
                ?>
                <div class="row">
	              <div class="col-xs-12" style="margin-bottom:10px;z-index:9;display:flex;justify-content:flex-end;">
	                <button type="button" class="btn btn-sm tampillist" style="background-color:#007BFF;color:white;border-radius:3px;padding:4px 7px 4px 7px;font-size:13px;">Tampilkan List</button>
	                <button type="button" style="border-radius:5px;border-radius:3px;padding:4px 7px 4px 7px;font-size:13px;" class="btn btn-sm btn-success text-white tampilslide">Tampilkan Slide</button>
	              </div>
	            </div>

				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">
							<div class="titems owl-carousel-fullwidth" style="display:block;">
							<?php $inc=0; foreach($dataucapan as $du): ?>
								<div class="itemsss" style="background-color:rgba(152, 250, 242,.3);border-radius:10px;margin-bottom:-20px;">
									<div class="testimony-slide active text-center" style="padding-top:10px;">
										<?php $inc++; ?>
										<span style="font-size:13px;"><?=$du['nama_diundang']; ?></span>
										<blockquote style="margin-top:-10px">
											<p style="font-style:initial;font-size:17px">
												"<?=$du['isi_ucapan']; ?>"
												<?php if($this->session->userdata('level_user')=='admin'){ ?>
			                                      <a style="color:red" onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/hapusucapan/'.$du['id_ucapan'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang']); ?>">[hapus]</a>
			                                    <?php } ?>
											</p>
										</blockquote>
									</div>
								</div>
							<?php endforeach; ?>
							<?php if($inc>0){ ?>
								<div class="itemsss">
									<div class="testimony-slide active text-center">
										<blockquote>
											<p style="font-style:initial;font-size:19px;line-height:20px"><?=$detailundangan['namapanggilan_priawanita']; ?> <br> Terima kasih atas ucapan & doa nya</p>
										</blockquote>
									</div>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>We Offer Services</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-calendar"></i>
						</span>
						<div class="feature-copy">
							<h3>We Organized Events</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-image"></i>
						</span>
						<div class="feature-copy">
							<h3>Photoshoot</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-video"></i>
						</span>
						<div class="feature-copy">
							<h3>Video Editing</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

				</div>

				<div class="col-md-6 animate-box">
					<div class="fh5co-video fh5co-bg" style="background-image: url(images/img_bg_3.jpg); ">
						<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
						<div class="overlay"></div>
					</div>
				</div>
			</div>

			
		</div>
	</div> -->


	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(<?=base_url('assets/temaundangan/tematic/images/doa3.jpg'); ?>);">
		<div class="overlay"></div>
		<div class="container" id="pesan" data-aos="fade-up" data-aos-duration="1000">
			<div class="row" style="margin-top:50px">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Ucapkan Doa atau Keinginan</h2>
					<!-- <p>Please Fill-up the form to notify you that you're attending. Thanks.</p> -->
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<form class="form-inline" method="post" action="<?=base_url('undangan/ucapan'); ?>">
						<input type="hidden" name="idupengundang" value="<?=$detailundangan['id_pengundang']; ?>">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" style="color:white">Nama</label>
								<select class="form-control" id="name" name="namaanda" required>
									<option class="text-info" value="<?=$detailundangan['id_diundang']; ?>"><?=$detailundangan['nama_diundang']; ?></option>
								</select>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<!-- <label for="name" style="color:white">Nama</label> -->
								<select class="form-control" id="name" name="absenkehadiran" required>
									<option class="text-info" value="">Apakah kamu menghadiri?</option>
	                                <option class="text-info" value="hadir">Menghadiri</option>
	                                <option class="text-info" value="tidak">Tidak menghadiri</option>
								</select>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<!-- <label for="name" style="color:white">Nama</label> -->
								<select class="form-control" id="name" name="jumlahkehadiran" required>
									<option class="text-info" value="1">1 orang</option>
                                	<option class="text-info" value="2">2 orang</option>
								</select>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" style="color:white">Pesan anda</label>
								<textarea type="text" class="form-control" id="email" name="isiucapan" required></textarea>
								<!-- <input type="email" class="form-control" id="email" placeholder="Email"> -->
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button style="background-color:<?=$detailundangan['color_template']; ?>;margin-top:30px" type="submit" class="btn btn-default btn-block" name="kirimin">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


	<footer id="fh5co-footer" role="contentinfo" style="padding-bottom:20px">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<span data-aos="fade-up" data-aos-duration="1000">
					<span style="font-size:22px;font-weight:bold;"><?=$detailundangan['namapanggilan_priawanita']; ?></span>
					<p style="padding-bottom:30px">(Doakan yang terbaik untuk kami)</p>
					</span>
					<p>
						<small class="block">&copy; meinviteyou. All Rights Reserved.</small> 
						<small class="block">Design by - <a href="<?=base_url(); ?>" style="color:#2484a6"><span style="color:#0062CC;">me</span><span class="text-danger"><u>INVITE</u></span><span style="color:#0062CC;">you</span></a></small>
					</p>
					<!-- <p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p> -->
				</div>
			</div>

		</div>
	</footer>
	</div>



	<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title" id="exampleModalLongTitle">Pernikahan <?=$detailundangan['namapanggilan_priawanita']; ?></h4>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> -->
          </div>
          <div class="modal-body text-center" style="background-image:url('<?=base_url('assets/img/flowersbg/back3rustic.jpg') ?>');background-size:110%;background-repeat:repeat;text-align:center;">

            <span>Hello,</span><br>
            <span style="font-size:20px;margin-top:-10px;font-weight:bold;"><?=$detailundangan['nama_diundang']; ?></span><br>
            <span style="font-size:15px">Kami mengundang anda untuk datang pada hari pernikahan kami!</span><br><br>
            <div class="row">
              <div class="col-xs-12 mt-3">
                Tanpa mengurangi rasa hormat. <br>
                Acara ini akan dilaksanakan dengan Menerapkan <br>
                <span style="font-weight:bold;">PROTOKOL KESEHATAN</span><br>
                sebagai berikut:
              </div> 
            </div>

            <div class="card-deck">
              <div class="row" style="padding: 0 2px 0 2px;font-size:14px">

                <div class="col-xs-4" style="padding:4px;">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:150px;padding:4px 4px 0px 4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" height="60%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/anaksp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p style="line-height:15px" class="card-text">Dianjurkan Tidak Membawa Anak Kecil</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:150px;padding:4px 4px 0px 4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/maskp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p style="line-height:15px" class="card-text">Gunakan Masker<br><br></p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:150px;padding:4px 4px 0px 4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/handsp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p style="line-height:15px" class="card-text">Gunakan Handsanitizer<br><br></p>
                    </div>
                  </div>
                </div>

                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:150px;padding:4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/suhusp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p style="line-height:15px" class="card-text">Cek Suhu Tubuh</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:150px;padding:4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/cucisp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 0;">
                      <p style="line-height:15px" class="card-text">Cuci Tangan</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4" style="padding:4px">
                  <div class="card" style="box-shadow:1px 1px 3px gray;border-radius:10px;min-height:150px;padding:4px;background-color:rgba(255,255,255,.8);">
                    <img width="100%" class="card-img-top mt-1 hoverc" src="<?=base_url('assets/img/covid/socialp.png'); ?>" alt="Card image cap">
                    <div class="card-body" style="padding: 2px;">
                      <p style="line-height:15px" class="card-text">Jaga Jarak 1METER</p>
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


<!-- <?php if($detailundangan['musik_acara']){ ?>
	<div class="text-primary" style="position:fixed;bottom:70px;left:20px;border:0px solid gray;border-radius:50%;z-index:9">
    <div class="btn-group dropup" style="border-radius:50%;">
      <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i style="font-size:60px;color:rgba(0,0,0,.4);border-radius:10px" class="icon-music"></i>
      </div>
      <div class="dropdown-menu" style="padding:0">
        <?=$detailundangan['musik_acara']; ?>
      </div>
    </div>
  </div>
<?php } ?> -->

<?php if($detailundangan['musik_acara']){ ?>
  <div class="text-primary" style="position:fixed;bottom:100px;left:25px;border:0px solid gray;border-radius:50%;z-index:3;">
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

	<div class="text-primary" style="position:fixed;bottom:30px;left:20px;border-radius:50%;z-index:3;">
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

	<div class="gototop js-top" style="">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<?php 
	  $tanggal=date('d', strtotime($detailundangan['tanggal_acara']));
	  $bulan=date('m', strtotime($detailundangan['tanggal_acara']));
	  $tahun=date('Y', strtotime($detailundangan['tanggal_acara']));
	?>
	
	<!-- jQuery -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/main.js"></script>

	<script src="<?=base_url('assets/temaundangan/tematic/'); ?>js/aos.js"></script>

	<script>
        AOS.init();
    </script>

	<script>
    // var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    // simplyCountdown('.simply-countdown-one', {
    //     year: d.getFullYear(),
    //     month: d.getMonth() + 1,
    //     day: d.getDate()
    // });
    // console.log(d);

    //jQuery example
    $('.cobain').popover();
    $('#simply-countdown-losange').simplyCountdown({
        year: <?=$tahun; ?>,
        month: <?=$bulan; ?>,
        day: <?=$tanggal; ?>,
        enableUtc: false
    });
    $(window).on('load',function(){
        $('#exampleModalCenter').modal('show');
    });

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

 
    $('.tampilslide').hide();
    $('body').on('click','.tampillist',function(){
      $('.titems').removeClass('owl-carousel owl-theme');
      $('body .titems').removeClass('owl-carousel-fullwidth');
      $('.owl-height').css('min-height','100px');
      $('.owl-height').css('height',''); 
      // $('.owl-height').css('overflowY','scroll'); 
      $('.owl-stage').css({'transform':'translate3d(0px, 0px, 0px)','display':'inline'});
      $('.cloned').hide();
      $('.owl-next').hide();
      $('.owl-prev').hide();
      $('.tampilslide').show();
      $('.tampillist').hide();
    });
    $('body').on('click','.tampilslide',function(){
      $('.titems').addClass('owl-carousel owl-theme');
      $('.owl-height').css('min-height','');
      $('.owl-height').css('height','80px');
      // $('.owl-height').css('overflow','hidden');
      $('.owl-stage').css({'transform':'','display':'block'});
      $('.cloned').show();
      $('body .owl-controls').css('padding-top','0px');
      $('.owl-next').show();
      $('.owl-prev').show();
      $('.tampilslide').hide();
      $('.tampillist').show();
    });


    $('.navhide').hide();
    $('.js-fh5co-nav-toggle').hide();
    $(window).on('scroll',function(){
        var top=$(this).scrollTop();
        if(top>514){
          $('.navhide').show();
          $('.js-fh5co-nav-toggle').show();
        }else{
          $('.navhide').hide();
          $('.js-fh5co-nav-toggle').hide();
        }

    });

    $('body').on('click','.page-scroll',function(e){
        var tujuan=$(this).attr('href');
        var elementtujuan=$(tujuan);
        $('html,body').animate({
          'scrollTop':(Math.floor(elementtujuan.offset().top)-130)
        }, 500, 'easeInOutExpo');
        e.preventDefault();
    });

</script>

	</body>
</html>

