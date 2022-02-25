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
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="max-snippet:-1,max-image-preview:standard,max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="meINVITEyou.com">
	<title><?= $title; ?></title>		
	
	<meta property="og:title" content="The Wedding Of <?=$detailundangan['namapanggilan_priawanita']; ?>">
    <meta name="description" content="<?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?>"/>
    <meta content="<?=base_url('assets/img/imgsharing/'.$detailundangan['img_sharing']); ?>" property="og:image"/>
    <!-- Favicons -->
    <link href="<?=base_url('/'); ?>assets/img/imgsharing/<?=$detailundangan['img_sharing']; ?>" rel="icon">
    <link href="<?=base_url('/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <meta property="og:url" content="https://meinviteyou.com/">

	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/ethnic/'); ?>css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/ethnic/'); ?>css/slick.css">
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/ethnic/'); ?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url('assets/temaundangan/ethnic/'); ?>css/style.css">
	
    
  

</head>
<body>

	<?=$this->session->flashdata('message'); ?>
	<!-- MUSIC -->
	<div id="buttonmusic" class="shadow"><ion-icon name='volume-high-outline'></ion-icon></div>
	<audio id="player">
		<source src="<?=base_url('assets/img/musikwedding/'.$detailundangan['musik_acara']); ?>" type="audio/mpeg">
	</audio>
	<!-- MUSIC END -->
    
	<!-- HEADER -->
	<header>
		<div class="js-hero-slider">
			<div class="hero hero--slide1 js-hero-slide d-flex align-items-center justify-content-center" style="background-image: url('<?=base_url('assets/temaundangan/ethnic/'); ?>img/hero1.jpg');">
			    <div class="shape">
                	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                		<path class="shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
                		<path class="shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
                		<path class="shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
                	</svg>		
                </div>
			</div>
		</div>
		<div class="hero-body">
			<h1 class="hero_title"><?=$detailundangan['namapanggilan_priawanita']; ?></h1>
			<p class="hero_date"><?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></p>
			<p class="paragraph-modal">Kepada</p>
            <p class="paragraph-modal">Bapak/Ibu/Saudara/i</p>
            <h2 class="modal-penerima"><?=$detailundangan['nama_diundang']; ?></h2>
			<a href="#intro"class="btn btn-md btn-default btn-modal smoothScroll" id="btn-open">Buka Undangan</a>
		</div>
	</header>
	<!-- HEADER END -->

	<!-- MEMPELAI -->
	<section class="intro" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?=$detailundangan['ucapan_awal']; ?>
				</div>
			</div>
			
			<div class="row">

				<div class="col-sm-6 mempelai">
					<div class="mempelai-foto" data-aos="fade-up">
						<img class="frame" src="<?=base_url('assets/temaundangan/ethnic/'); ?>img/groom.jpg">
					</div>
				  
					<br>
					<div class="mempelai-nama" data-aos="fade-up"><?=$detailundangan['namalengkap_pria']; ?></div>
					<?=$detailundangan['orangtua_pria']; ?>
					<!-- <div class="mempelai-alamat" data-aos="fade-up"> Br.Buahan, Ds. Buahan, Kec. Kintamani, Kab. Bangli, Bali<br/><br/></div> -->
				</div>

				<div class="col-sm-6 mempelai">
					<div class="mempelai-foto" data-aos="fade-up">
						<img class="frame" src="<?=base_url('assets/temaundangan/ethnic/'); ?>img/bride.jpg">
					</div>
					<br>
					<div class="mempelai-nama" data-aos="fade-up"><?=$detailundangan['namalengkap_wanita']; ?></div>
					<?=$detailundangan['orangtua_wanita']; ?>
					<!-- <div class="mempelai-alamat" data-aos="fade-up"> Br. Surakarma, Ds. Kintamani, Kec. Kintamani Kab. Bangli, Bali<br /><br /></div> -->
				</div>

			</div>
			
			<!-- COUNTDOWN -->
			<div class="row countdown">
				<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
					<h2 class="cmb-2 text-center heading-title" data-aos="fade-up">Hari Bahagia</h2>
					<ul class="countdown-list js-countdown clearfix" data-aos="fade-up" data-aos-delay="300" data-date="<?=$detailundangan['tanggal_acara']; ?>">
						<li class="countdown-list__item">
							<span class="js-countdown-days">000</span>
							<p>hari</p>
						</li>
						<li class="countdown-list__item">
							<span class="js-countdown-hours">00</span>
							<p>jam</p>
						</li>
						<li class="countdown-list__item">
							<span class="js-countdown-minutes">00</span>
							<p>menit</p>
						</li>
						<li class="countdown-list__item">
							<span class="js-countdown-seconds">00</span>
							<p>detik</p>
						</li>
					</ul>
					<!-- COUNTDOWN END -->
				</div>
			</div>
		</div>
	</section>
	<!-- INTRO END -->

	<!-- QUOTE-->
	<section class="cbg-grey" id="quote">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<h3 class="quote__text font-italic" data-aos="fade-up">Ihaiva stam ma vi yaustam, visvam ayur vyasnutam, kridantau putrair naptrbhih, modamanau sve grhe.<br>
					(Rg Veda X.85.42)<br><br>
					Wahai pasangan suami-isteri, semoga kalian tetap bersatu dan tidak pernah terpisahkan. Semoga kalian mencapai hidup penuh kebahagiaan, tinggal di rumah yang penuh kegembiraan bersama seluruh keturunanmu.</h3>
				</div>
			</div>
		</div>
	</section>
	<!-- QUOTE END -->

	<!-- LOKASI -->
	<section class="location js-section" id="location">
		<h2 class="heading-title text-center" data-aos="fade-up">Waktu & Tempat</h2>
		<div class="container">
			<div class="row">

				<div class="col-md-12 text-center">

					<div class="row acara">
        				<div class="col-md-10 offset-md-1">
        					<!-- <h2 class="acara-head cmt-3" data-aos="fade-up">Kamis</h2> -->
        					<p class="acara-detail mt-3" data-aos="fade-up" style="font-size:23px;"><i class="fas fa-calendar" style="color:#6b7d69;"></i> <?=$daftar_hari[$namahari].', '.date('d F Y', strtotime($detailundangan['tanggal_acara'])); ?></p>
        					<!-- <h2 class="acara-head" data-aos="fade-up">Pukul</h2> -->
        					<p class="acara-detail" data-aos="fade-up" style="font-size:23px;"><i class="fas fa-clock" style="color:#6b7d69;"></i> Pukul, <?=$detailundangan['jam_acara']; ?></p>
        					<p class="acara-detail" data-aos="fade-up" style="font-size:25px;"><i class="fas fa-map-marker-alt" style="color:#6b7d69;"></i></p>
        					<p class="acara-alamat" data-aos="fade-up"> <?=$detailundangan['alamat_acara']; ?> </p>
        					<div class="col-md-12 text-center" data-aos="fade-up">
    							<a href="<?=$detailundangan['map_acara']; ?>" target="_blank">
    								<br />
    								<button class="btn btn-md btn-default btn-map"> Map Lokasi Acara </button>
    							</a>
        					</div>
        					<?=$detailundangan['ucapan_ahir']; ?>
        					<!-- <p class="font-italic text-center cmt-3 cmb-2" data-aos="fade-up"> Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/ Ibu/ Saudara/i, berkenan hadir untuk memberikan doa restu kepada putra- putri kami.</p>
        					<p class="font-italic text-center" data-aos="fade-up"> Atas kehadiran dan doa restunya kami ucapkan terimakasih </p>
        					<h2 class="section-title text-center penutup" data-aos="fade-up">Om Shanti Shanti Shanti Om</h2>
        					<p class="keluarga cmb-1" data-aos="fade-up">Kami yang berbahagia</p>
        					<p class="keluarga" data-aos="fade-up">Kel. Romeo &amp; Juliete </p> -->
        				</div>

				    </div>
				
			    </div>
		    </div>
		</div>
	</section>
	<!-- LOKASI END -->

	<!-- STORIES -->
	<section class="stories cbg-grey text-center js-section" id="stories">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="heading-title text-center cmb-5" data-aos="fade-up">Momen Bahagia</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class=" grid">
						<div class="grid-sizer"></div>
						<div class="gutter-sizer"></div>

					<?php $aos=1; foreach($fotogaleris as $fgs): ?>
						<div class="grid-item">
						    <a class="story-popup" href="<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>"><img src="<?=base_url('assets/img/fotogaleripelanggan/'.$fgs['foto_galeri']); ?>" class="stories__img" alt="<?=$detailundangan['namapanggilan_priawanita']; ?>"/></a>
						</div>
					<?php endforeach; ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- STORIES END -->
	
	<!-- VIDEO -->
	<?php if(!empty($detailundangan['video_acara'])): ?>
	<section class="video text-center cbg-grey js-section" id="video">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
				    <h2 class="heading-title text-center cmb-5" data-aos="fade-up">Cerita Kami</h2>
                    <div class="col-md-12">
                        <video width="100%" controls="" id="videonya">
            		        <source src="<?=$detailundangan['video_acara'] ?>"  type="video/mp4">
            		        Your browser does not support HTML5 video.
            		    </video>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
    <!-- VIDEO END -->

   	<style>
	    .rsvp .form-select ,textarea.form-control {
          background-color: rgba(222, 222, 222, 0.2);
          color: #616161;
          border: 3px solid rgba(107, 125, 105, 0.6);
          border-radius:15px;
        }
        .rsvp .form-select ,textarea.form-control:focus {
          background-color: rgba(222, 222, 222, 0.2);
          color: #616161;
          border: 3px solid rgba(107, 125, 105, 0.6);
          border-radius:15px;
        }
        .rsvp select.form-select option {
          background: rgba(0, 0, 0, 0.3);
          color: #616161;
          border-radius:15px;
        }
   	</style>
    
	<!-- UCAPAN -->
	<section class="text-center js-section" id="rsvp">
		<div class="container">
			<div class="row rsvp">
				<div class="container col-md-6 col-sm-12">
					<h2 class="heading-title text-center cmb-5" data-aos="fade-up">Mohon Doa Restu</h2>
			        <form action="<?=base_url('undangan/ucapan'); ?>" class="rsvp-form js-form" id="rsvp-form" method="post">
			            <div class="d-md-flex justify-content-between">
			            	<input type="hidden" name="idupengundang" value="<?=$detailundangan['id_pengundang']; ?>">
							<div class="col-sm-12">
								<div class="rsvp-form-field">
								    <!-- <label for="nama">Masukan namamu</label> -->
									<select class="form-select" name="namaanda" aria-label=".form-select-sm example" required>
						              <option value="<?=$detailundangan['id_diundang']; ?>"><?=$detailundangan['nama_diundang']; ?></option>
						            </select>
								</div>
								<div class="rsvp-form-field">
								  <select class="form-select" name="absenkehadiran" aria-label=".form-select-sm example" required>
					                <option value="" selected>Apakah akan menghadiri?</option>
					                <option value="hadir">Menghadiri</option>
					                <option value="tidak">Tidak menghadiri</option>
					                <option value="ragu">Masih ragu-ragu</option>
					              </select>
								</div>
								<div class="rsvp-form-field">
								  <select class="form-select" name="jumlahkehadiran" aria-label=".form-select-sm example" required>
					                <option value="" selected>Jumlah yang menghadiri?</option>
					                <option value="1">1 orang</option>
					                <option value="2">2 orang</option>
					                <option value="3">3 orang</option>
					                <option value="4">4 orang</option>
					              </select>
								</div>
								<div class="rsvp-form-field textarea">
								    <label style="color:#616161;" for="ucapan">Berikan ucapanmu</label>
									<textarea class="form-control" rows="3" name="isiucapan" id="ucapan" placeholder="Ketik disini.." required></textarea>
								</div>
							</div>
						</div>

                	<br>
                	<!-- <div class="col-md-12">
                        <div style="display:none" id="showLoading" class="text-danger"><img width="40px" src="assets/img/loading.gif">Mengirim!</div>
                        <div style="display:none" id="showNotif" class="alert alert-success"></div>
                        <div style="display:none" id="showError" class="alert alert-danger"></div>
                    </div> -->
                    <button type="submit" class="rsvp-form-submit js-submit">Kirim Ucapan</button>
                	</form>
				</div>
			</div>

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
			<div class="row" id='kolom-ucapan'>
			    <div class='col-sm-12' style='margin-top: 50px;'>
			    <h2 class='heading-title text-center cmb-3' data-aos='zoom-out-up'>Ucapan Doa</h2>

			    	<?php 

			          $urlpucapan=$detailundangan['id_pengundang'];

			          if($detailundangan['tipe_undangan']=='mudah'){

			            $queryallucapana="SELECT * from pengundang join komen on pengundang.id_pengundang=komen.urlpengundang_komen order by id_komen desc";
			            $dataucapana=$this->db->query($queryallucapana)->result_array();

			            $queryucapan="SELECT max(id_komen) as maxidu FROM komen where urlpengundang_komen='$urlpucapan'";
			            $resultmax=$this->db->query($queryucapan)->row_array();

			            $queryallucapan="SELECT * from pengundang join komen on pengundang.id_pengundang=komen.urlpengundang_komen order by id_komen desc";
			            $dataucapan=$this->db->query($queryallucapan)->result_array();

			            $queryallucapancount="SELECT count(*) as ucount from pengundang join komen on pengundang.id_pengundang=komen.urlpengundang_komen where urlpengundang_komen='$urlpucapan'";
			            $dataucapancount=$this->db->query($queryallucapancount)->row_array();

			          }else{

			            $queryallucapana="SELECT * from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan=$urlpucapan group by id_ucapan order by id_ucapan desc";
			            $dataucapana=$this->db->query($queryallucapana)->result_array();

			            $queryucapan="SELECT max(id_ucapan) as maxidu FROM ucapan where urlpengundang_ucapan='$urlpucapan'";
			            $resultmax=$this->db->query($queryucapan)->row_array();

			            $queryallucapan="SELECT * from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan=$urlpucapan group by id_ucapan order by id_ucapan desc";
			            $dataucapan=$this->db->query($queryallucapan)->result_array();

			            $queryallucapancount="SELECT count(*) as ucount from pengundang join diundang on pengundang.id_pengundang=diundang.matchid_pengundang join ucapan on diundang.id_diundang=ucapan.urldiundang_ucapan and pengundang.id_pengundang=ucapan.urlpengundang_ucapan where urlpengundang_ucapan='$urlpucapan'";
			            $dataucapancount=$this->db->query($queryallucapancount)->row_array();

			          }

			        ?>

					   	<div class="whises mt-5" style="width:100%;padding:10px;box-shadow:0 0 7px rgba(0,0,0,.2);border-radius:5px;">
					<?php if($dataucapancount['ucount'] <= 0){ ?>
				        <div class="row justify-content-center mt-5" style="display:flex;justify-content:center;">
				          <div class="col-12">
				            <div class="text-center" style="margin-top:-20px;background-color:rgba(255,255,255,.4);border-radius:5px;">Friend wishes masih kosong, silahkan kirim ucapan sekarang pada form dibawah!</div>
				          </div>
				        </div>
				    <?php }else{ ?>
				        <div class="jumlahwhises mb-2 fw-bold text-primary text-left"></div>
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
			                $post = floor($waktutahun).' tahun yang lalu';
			              }
			            ?>	
				          <div class="col-12 countkomentar">
				            <div class="d-flex mb-3" style="min-width: 100px;">
				              <div class="imagekomen text-center" style="border-radius:50%;width:30px;height:30px;box-shadow:0 0 7px rgba(0,0,0,.6);margin-right:20px;line-height:30px;background-color:#fff;">
				                <i class="fas fa-user-check" style="width:30px;height:30px;font-size:20px;"></i>
				              </div>
				              <div class="tampilkoment" style="box-shadow:0 0 5px rgba(0,0,0,.3);border-radius:5px;padding:6px 12px 6px 12px;min-width:200px;position:relative;background-color:#fff;">
				                <div class="nama d-flex justify-content-between align-items-center mb-1"><span style="font-weight:600;line-height:16px;margin-right:10px;color:#616161;font-family: arial;font-size:17px;"><?=$du['nama_diundang']; ?></span><span style="font-size:11px;color:#757575;line-height:13px;font-family: arial;"><?=$post.' '.date('H.i',$du['waktu_ucapan']); ?></span></div>
				                <div class="isikomentar text-left" style="color:#757575;line-height:16px;font-size:15px;font-family: arial;"><?=$du['isi_ucapan']; ?></div>
				              </div>
				            </div>
				          </div>

				          <?php if($this->session->userdata('level_user')=='admin'){ ?>
				              <a style="margin-top:-20px;padding-bottom:10px;color:red;text-align:left;" onclick="return confirm('Pilih Oke untuk hapus!');" href="<?=base_url('admin/hapusucapan/'.$du['id_ucapan'].'/'.$detailundangan['url_pengundang'].'/'.$detailundangan['url_diundang']); ?>">[hapus]</a>
				          <?php } ?>

				        <?php endforeach; ?>

				        </div>

				        <div class="viewallkomentar text-primary text-right" style="cursor:pointer;color:blue;"><u>Tampilkan semua ucapan</u></div>
				        <div class="hidellkomentar text-primary text-right" style="cursor:pointer;display:none;"><u>Tampilkan sebagian</u></div>
				    <?php } ?>
				      	</div><!-- tutup whises --> 
			    	</div>
			    </div>			
			</div>
		</div>
	</section>
	<!-- UCAPAN END -->

	<!-- FOOTER -->
	<footer class="footer">
		<div class="container">
			<div class="row">
		        <div class="container col-md-8 col-sm-10 protokol">
        			<div class="col-md-12 col-sm-12 text-center">
        				<h1 class="heading">Protokol Kesehatan</h1>
        				<p class="cmb-3">Harap tetap mematuhi protokol kesehatan dengan:</p>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-4 protokol-item" data-aos="fade-up">
        				<img src="<?=base_url('assets/temaundangan/ethnic/'); ?>img/01.png"/>
        				<p>Cuci Tangan</p>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-4 protokol-item" data-aos="fade-up">
        				<img src="<?=base_url('assets/temaundangan/ethnic/'); ?>img/02.png"/>
        				<p>Pakai Masker</p>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-4 protokol-item" data-aos="fade-up">
        				<img src="<?=base_url('assets/temaundangan/ethnic/'); ?>img/03.png"/>
        				<p>Jaga Jarak</p>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-4 protokol-item" data-aos="fade-up">
        				<img src="<?=base_url('assets/temaundangan/ethnic/'); ?>img/04.png"/>
        				<p>Hindari Kontak Fisik</p>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-4 protokol-item" data-aos="fade-up">
        				<img src="<?=base_url('assets/temaundangan/ethnic/'); ?>img/05.png"/>
        				<p>Hindari Kerumunan</p>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-4 protokol-item" data-aos="fade-up">
        				<img src="<?=base_url('assets/temaundangan/ethnic/'); ?>img/06.png"/>
        				<p>Gunakan Handsanitizer</p>
        			</div>
        		</div>
    		</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="text-center">
						<h2 class="heading-title">Matur Suksma</h2>
						<!-- <ul class="footer__social">
							<li><a href="https://www.instagram.com/undangandigitalbali_/"><ion-icon name="logo-instagram" class="icon icon--sm icon--black"></ion-icon></a></li>
							<li><a href="https://www.facebook.com/undangandigitalbali"><ion-icon name="logo-facebook" class="icon icon--sm icon--black"></ion-icon></a></li>
							<li><a href="https://www.youtube.com/channel/UCiR4mcTwXC9AO3PN-JRuTlQ"><ion-icon name="logo-youtube" class="icon icon--sm icon--black"></ion-icon></a></li>
							<li><a href="https://wa.me/+6281337052451"><ion-icon name="logo-whatsapp" class="icon icon--sm icon--black"></ion-icon></a></li>
						</ul> -->
						<div class="text-center mt-5" style="color:#616161;">
				          <p class="mb-0">&copy; meinviteyou. All Rights Reserved.</p>
				          <p class="mb-0">Design by - <a class="credit" href="<?=base_url(); ?>"><span style="color:#2298A4;font-weight:bold;">me</span><span style="color:#2298A4;font-weight:bold;"><u>INVITE</u></span><span style="color:#2298A4;font-weight:bold;">you</span></a></p>
				        </div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END -->
	
<!-- Google Analytics -->
<!-- <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-193325660-1', 'auto');
ga('send', 'pageview');

</script> -->
<!-- End Google Analytics -->

<script src="<?=base_url('assets/temaundangan/ethnic/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?=base_url('assets/temaundangan/ethnic/'); ?>js/smoothscroll.js"></script>
<script src="<?=base_url('assets/temaundangan/ethnic/'); ?>js/bootstrap.min.js"></script>
<script src="<?=base_url('assets/temaundangan/ethnic/'); ?>js/jquery.countdown.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="<?=base_url('assets/temaundangan/ethnic/'); ?>js/slick.min.js"></script>
<script src="<?=base_url('assets/temaundangan/ethnic/'); ?>js/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?=base_url('assets/temaundangan/ethnic/'); ?>js/script.js"></script>
<script>
	$(function(){

		var countkomentar = document.querySelectorAll('.countkomentar');
        $('.jumlahwhises').text(countkomentar.length+' Ucapan');
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

        $('.closeout').on('click',function(){
          $('.popupnotif').fadeOut();
        });

	});
</script>



</body>
</html>
