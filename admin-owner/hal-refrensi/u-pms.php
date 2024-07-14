
<?php 
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: ../../Form_Login/FormLogin.php");
    exit;
}
require "../DB.php";

$id = $_GET["id"];

$p = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE Id_Barang = $id");

if (isset($_POST["u-order"])) {
    $nb = ucwords($_POST["NamaBarang"]);
    $jb = $_POST["JumlahBarang"];
    $hb = $_POST["HargaBarang"];
    $k = ucwords($_POST["Kategori"]);
    $u = $_POST["Ukuran"];
    $ket = $_POST["Message"];

    $query= "UPDATE penjualan
                    SET
                NamaBarang = '$nb',
                JumlahBarang = $jb,
                HargaBarang = $hb,
                Kategori = '$k',
                Ukuran = '$u',
                Message = '$ket'
                WHERE 	Id_Barang = $id;
                ";
        mysqli_query($koneksi, "$query");

        if (mysqli_affected_rows($koneksi) > 0) {
          echo "
                  <script>
                      alert('Pesanan anda berhasil di ubah!');
                      document.location.href = 'pemesanan.php';
                  </script>
              ";
        }else {
          echo mysqli_error($koneksi);
        }
}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Penjualan Butik <b>Owner-update-pms Page.com</b></title>  <meta content="" name="description">
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
                  <li><a href="#">User</a></li>
                  </ul>
              </li>
              <li><a class="nav-link scrollto" href="transaksi.php">Transaksi</a></li>
          <li><a class="nav-link scrollto" href="pemesanan.php">Pemesanan</a></li>
          <li><a class="nav-link scrollto" href="cs.php">Aduan</a></li>
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
          <h2>ORDER DISINI !!!</h2>
          <p></p>
        </div>
        <?php foreach ($p as $data ) : ?> 
        <form action="" method="post" role="form">
        <div class="row">
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="NamaBarang" class="form-control datepicker" id="NamaBarang" placeholder="Nama Barang" value="<?= $data["NamaBarang"]?>" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="JumlahBarang" class="form-control datepicker" id="JumlahBarang" placeholder="Jumlah Barang" value="<?= $data["JumlahBarang"]?>"  required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="HargaBarang" class="form-control datepicker" id="HargaBarang" placeholder="Harga Barang" value="<?= $data["HargaBarang"]?>" required>
            </div>
            <div class="col-md-6 form-group mt-3">
              <select name="Kategori" id="Kategori" class="form-select">
                <option value="<?= $data["Kategori"]?>"><?= $data["Kategori"]?></option>
                <option value="Pakaian Dewasa ">Pakaian Dewasa</option>
                <option value="Pakaian Anak-Anak">Pakaian Anak-Anak</option>
              </select>
            </div>
            <div class="col-md-6 form-group mt-3">
              <select name="Ukuran"  id="Ukuran" class="form-select">
                <option value="<?= $data["Ukuran"]?>"><?= $data["Ukuran"]?></option>
                <option value="Ukuran S">Ukuran S</option>
                <option value="Ukuran M">Ukuran M</option>
                <option value="Ukuran L">Ukuran L</option>
                <option value="Ukuran XL">Ukuran XL</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="Message" rows="5" placeholder="Message (Optional)"><?= $data["Message"]?></textarea>

          <div class="text-center mt-4"><button class="btn btn-lg btn-primary text-light" type="submit" name="u-order" id="order" >ORDER DISINI</button></div>
        </form>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- End pemesanan Section -->
</body>


</html>

 