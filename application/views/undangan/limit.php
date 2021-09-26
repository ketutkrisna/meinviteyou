<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>meINVITEyou</title>
    <meta content="Solusi terbaik untuk undangan digitalmu" name="description">
    <meta content="undangan digital" name="keywords">
    <meta property="og:title" content="Buat undangan digitalmu">
    <meta property="og:site_name" content="meINVITEyou.com">
    <meta content='<?=base_url('assets/img/imgsharing/imgsharing.png'); ?>' property='og:image'/>

    <!-- Favicons -->
    <link href="<?=base_url('/'); ?>assets/img/favicon.png" rel="icon">
    <link href="<?=base_url('/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      html,body {
        height:100%;
        position:relative;
        background-color:#eee;
        overflow:hidden;
      }
    </style>

  </head>
  <body>

    <div class="row d-flex justify-content-center" style="align-items:center;height:100%;">
      <div class="col-10 col-sm-8 col-md-6">
        <div class="card text-center" style="box-shadow:0 0 20px rgba(0,0,0,.5);border-radius:7px;background-color:rgba(255, 174, 61,.4);border:0;">
          <div class="card-body">
            <img class="p-1" style="width:130px;border-radius:50%;box-shadow:0 0 10px rgba(0,0,0,.4);width:130px;height:130px;" src="<?=base_url('assets/img/logook.png') ?>">
            <h5 class="card-title mt-2">Hello, <?=$detailundangan['namapanggilan_priawanita']; ?></h5>
            <h6 class="card-subtitle text-danger mb-2" style="font-size:20px">Masa aktif undangan anda telah <b><u>BERAHIR</u></b>!</h6>
            <p class="card-text">kamu memesan paket <?=$paket; ?></p>
            <a href="<?=base_url(); ?>" class="card-link">Beranda</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>