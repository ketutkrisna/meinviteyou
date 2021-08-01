<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ubah paswword</title>
  <meta content="Halaman set password users" name="description">
  <meta content="undangan digital meinviteyou" name="keywords">
  <meta property="og:title" content="Users meinviteyou">
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

  <!-- =======================================================
  * Template Name: BizPage - v3.1.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    html,body{
      height:100%;
      position:relative;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color:black">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <a href="<?=base_url('users'); ?>" class="logo mr-auto"><i style="font-size:25px" class="fa fa-arrow-left text-white"></i><img src="<?=base_url('/'); ?>assets/img/logomiy.png" alt="" class="img-fluid"><span class="text-primary" style="font-size:25px">Dashboard</span></a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main" style="margin-top:100px;min-height:800px">

  <section style="margin:10px">
    <div id="content">
<!-- Begin Page Content -->
        <div class="container-fluid" style="margin-top:70px;padding-bottom:100px;min-height:500px;">

          <!-- Page Heading -->
          <h1 class="h3 mb-1 text-center text-gray-800">Setting Password</h1>

          <!-- Content Row -->
          <div class="row d-flex justify-content-center mt-4">

            <!-- Grow In Utility -->
            <div class="col-lg-6">

              <div class="card position-relative">
                <!-- <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Grow In Animation Utilty</h6>
                </div> -->
                <div class="card-body">
                  <?=$this->session->flashdata('message'); ?>
                  <form action="<?=base_url('users/ubahpassworduser'); ?>" method="post">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Password lama</label>
                        <input style="margin-top:-10px;" type="password" class="form-control" id="inputEmail4" placeholder="" name="passwordlama" required>
                        <?= form_error('passwordlama','<span class="small text-danger">', '</span>'); ?>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4 mb-0">Password baru</label>
                        <input style="margin-top:-10px;" type="password" class="form-control" id="inputPassword4" placeholder="" name="passwordbaru" required>
                        <?= form_error('passwordbaru','<span class="small text-danger">', '</span>'); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Confirmasi password baru</label>
                      <input style="margin-top:-10px;margin-bottom:-5px" type="password" class="form-control" id="inputAddress" placeholder="" name="passwordconfirm" required>
                      <?= form_error('passwordconfirm','<span class="small text-danger">', '</span>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpanpassword">Simpan</button>
                  </form>

                </div>
              </div>

            </div>

           

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
  </section>

  </main><!-- End #main -->

  

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

</body>

</html>