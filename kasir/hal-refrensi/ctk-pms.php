<?php 
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: ../../Form_Login/FormLogin.php");
    exit;
}
require "../DB.php";

$id = $_GET["id"];

$p = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE Id_Barang = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Penjualan Butik <b>Kasir-print-trans Page.com</b></title>  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<div class="container mt-5">
      <div class="row">
        <div class="col-md-6 mx-auto" style="border: 1px solid #000;">
          <h4 class="text-center mt-2"><span class="mt-3">Butikinaz Fashion</span></h4>
          <hr>
<?php foreach ($p as $data ) : ?> 
    <?php 
                $j = $data["JumlahBarang"];
                $h = $data["HargaBarang"];
                $t = $j * $h;
            ?>
<div class="row mt-3">
            <div class="col-md-6">
              TANGGAL : <?= $data["Created_at"]?><br>
              PEMESAN : <?= $data['Pengirim'] ?><br>
            </div>
            <div class="col-md-6">
              Member : <?= $data['Pengirim'] ?>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
                Nama Barang  : 
            </div>
            <div class="col-md-8">
             <?= $data['NamaBarang'] ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                Kategori  : 
            </div>
            <div class="col-md-8">
             <?= $data['Kategori'] ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                Ukuran  : 
            </div>
            <div class="col-md-8">
             <?= $data['Ukuran'] ?>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4 text-left">Harga</div>
            <div class="col-md-8 text-left">Rp. <?= $data['HargaBarang'] ?></div>
          </div>
          <div class="row">
            <div class="col-md-4 text-left">Subtotal</div>
            <div class="col-md-8 text-left"><?= $data['JumlahBarang'] ?></div>
          </div>
          <div class="row">
            <div class="col-md-4 text-left">Total</div>
            <div class="col-md-8 text-left">Rp. <?= $t; ?></div>
          </div>
          <div class="row">
            <div class="col-md-4 text-left">Bayar</div>
            <div class="col-md-8 text-left">Rp. <?= $t; ?></div>
          </div>
          <div class="row">
            <div class="col-md-4 text-left">Kembalian</div>
            <div class="col-md-8 text-left">Rp. 0,00</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-center">
              <p>
                Terima Kasih <br> Atas Kunjungan Anda
              </p>
            </div>
    <?php endforeach; ?>
        </div>
    </div>
</div>
</body>
<script>
      window.print();
    </script>
</html>
