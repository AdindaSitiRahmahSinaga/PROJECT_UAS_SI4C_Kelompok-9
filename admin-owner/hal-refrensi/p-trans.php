
<?php 
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: ../../Form_Login/FormLogin.php");
    exit;
}
require "../DB.php";

$id = $_GET["id"];

$p = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE Id_Barang = $id");

if (isset($_POST["hitung"])) {
  $ttb = $_POST["totb"];
  $byr = $_POST["b"];
  $kmb = $byr - $ttb;
}

if (isset($_POST["transaksi"])) {
  $kembalian = $_POST["k"];
  if ($kembalian >= 0) {
    echo "
            <script>
                alert('Transaksi berhasil di lakukan!');
                document.location.href = 'transaksi.php';
            </script>
        ";
  }elseif (empty($kembalian)) {
    echo "
            <script>
                alert('Bayar Terlebih Dahulu!');
            </script>
        ";
  }else {
    echo "
            <script>
                alert('Transaksi gagal di lakukan!');
            </script>
        ";
  }
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Penjualan Butik <b>Owner-update-trans Page.com</b></title>  <meta content="" name="description">
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
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +62 852 4567 8910
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container  mt-0 d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="../logobutik.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="../#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="ds-user.php">User</a></li>
                  </ul>
              </li>
          <li><a class="nav-link scrollto" href="transaksi.php">Transaksi</a></li>
          <li><a class="nav-link scrollto" href="pemesanan.php">Pemesanan</a></li>
          <li><a class="nav-link scrollto " href="laporan.php">Laporan</a></li>
          <li><a class="nav-link scrollto" href="../../Form_Login/FormLogin.php" ><button style="border-radius: 100px;">Login</button></a></li>
          <li><a class="nav-link scrollto" href="../../Form_Login/Logout.php" ><button style="border-radius: 100px;">Logout</button></a></li>
          <ul>
           
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<!-- ======= pemesanan Section ======= -->
<section id="pemesanan" class="appointment section-bg" style="margin-top: 100px;" >
      <div class="container">

        <div class="section-title">
          <h2>Transaksi Pemesanan</h2>
          <p></p>
        </div>
        <?php foreach ($p as $data ) : ?> 
          <?php 
                $j = $data["JumlahBarang"];
                $h = $data["HargaBarang"];
                $t = $j * $h;
            ?>
        <form action="" method="post" role="form">
        <div class="row">
          <div class="row">
            <div class="col-md-6 form-group">
              <div class="row">
                <div class="col-md-12 mt-2 mb-2">
                  <label for="NamaBarang">Nama Barang</label>
                <input type="text" disabled name="NamaBarang" class="form-control datepicker" id="NamaBarang" placeholder="Nama Barang" value="<?= $data["NamaBarang"]?>" required>
                </div>
                <div class="col-md-12 mt-2 mb-2">
                <label for="NamaBarang">Kategori</label>
                <input type="text" disabled name="Kategori" class="form-control datepicker" id="Kategori" placeholder="Kategori" value="<?= $data["Kategori"]?>" required>
                </div>
                <div class="col-md-12 mt-2 mb-2">
                <label for="hb">Harga Barang</label>
              <input type="number" class="form-control datepicker" disabled name="hb" value="<?= $data["HargaBarang"]?>" >
                </div>
                <div class="col-md-12 mt-2 mb-2">
                <label for="j">Jumlah</label><br>
              <input type="number" class="form-control datepicker" disabled name="j" value="<?= $data["JumlahBarang"]?>" >
                </div>
              </div>
            </div>

            <div class="col-md-6 form-group">
              <div class="row">
              <div class="col-md-12 mt-2 mb-2" >
                <label for="hb">Total Satuan</label>
                <input type="number" name="hb" class="form-control datepicker" id="hb" disabled value="<?= $data["HargaBarang"]?>">
            </div>
              <div class="col-md-12 mt-2 mb-2" >
                <label for="tb">Total Bayar</label>
                <input type="number" name="tb" class="form-control datepicker" id="tb" disabled  value="<?= $t;?>">
            </div>
              <div class="col-md-12 mt-2 mb-2" >
                <div class="row">
                  <form action="" method="post">
                    <input type="number" hidden name="totb" value="<?= $t;?>" >
                  <div class="col-md-6">
                  <label for="b">Bayar</label>
                <input type="number" name="b" class="form-control datepicker" id="b">
                  </div>
                  <div class="col-md-6">
                  <label for="k">Kembalian</label>
                <input type="number" name="k" class="form-control datepicker" id="k" value="<?= $kmb;?>" >
                  </div>
                  <div class="col-md-12 mt-3" >
                <button type="submit" class="btn btn-warning form-control datepicker text-light" name="hitung">Hitung</button>
                </div>
                  </form>
                </div>
            </div>
            </div>
            </div>
            <div class="col-md-12 mt-2 mb-2 form-group">
              <button type="submit" name="transaksi" class="btn btn-primary form-control datepicker">Transaksi</button>
            </div>
          </div>
        </form>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- End pemesanan Section -->
</body>


</html>

 