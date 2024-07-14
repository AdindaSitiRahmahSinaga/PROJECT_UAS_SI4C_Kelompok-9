<?php  
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: Form_Login/FormLogin.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Penjualan Butik <b>Pelanggan Page.com</b></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="logobutik.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li class="dropdown"><a href="#kategori"><span>Kategori</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Pakaian Dewasa</a></li>
                  <hr>
                  <li><a href="#">Pakaian Anak-Anak</a></li>
                </ul>
              </li>
          <li><a class="nav-link scrollto" href="#pemesanan">Pemesanan</a></li>
          <li><a class="nav-link scrollto " href="#contact us">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="Form_Login/FormLogin.php" ><button style="border-radius: 100px;">Login</button></a></li>
          <li><a class="nav-link scrollto" href="Form_Login/Logout.php" ><button style="border-radius: 100px;">Logout</button></a></li>
          <ul>
           
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(card1.png)">
          <div class="container">
            <h2>Welcome To <span>Butik Inaz Fashion</span></h2>
            <p>Butik Inaz Fashion Menyediakan berbagai macam Pakaian dewasa maupun anak-anak. Barang dan kuliatas tidak perlu diragukan lagi. Dengan Harga terjangkau kamu bisa tampil cantik dan elegan dihari spesialmu. Ayo tunggu apalagi buruan Order disini Ya!!!</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(card2.png)">
          <div class="container">
            <h2>Info Lokasi</h2>
            <p>Butik Ini berlokasi di Dusun 7, Desa Pulau Tanjung, Kecamatan Teluk Dalam, Kabupaten Asahan.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(card3.png)">
          <div class="container">
            <h2>Info Pemesanan</h2>
            <p>Butik ini menyediakan 2 metode pembelian yaitu dengan online dan kamu juga bisa datang langsung ke Butik kita Ya!!!.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Galery ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <h4 class="text-center text-black"> MAIN PRODUCT</h4>
        <div class="row pt-5">
          <div class="col-md-3 d-flex align-items-stretch mb-5 mb-lg-0">
             <img src="dewasapria.png" class="img-fluid" alt="">
            </div>

          <div class="col-md-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <img src="dewasawanita.png" class="img-fluid" alt="">
            </div>
         
          <div class="col-md-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <img src="anakpria.png" class="img-fluid" alt="">
            </div>

          <div class="col-md-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <img src="anakwanita.png" class="img-fluid" alt="">
            </div>
        </div>
      </div>
    </section><!-- Galery -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>BINGUNG MAU CARI PAKAIAN YAG BERKUALITAS ?</h3>
          <p>Butik kami menyediakan berbagai macam pilhan pakaian yang pastinya berkualitas, Mulai dari pakaian anak anak maupun dewasa tersedia disni. Jangan bimbang dan ragu butik kami siap mempercantik Outfit anda.</p>
          <h5>KAMI SIAP MELAYANI ANDA</h5>
          <a class="cta-btn scrollto" href="#pemesanan">ORDER DISINI !!!</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Butik Inaz adalah toko kecil bergaya yang secara khusus menyediakan pakaian, baik untuk pakaian wanita maupun pria dari kategori anak-anak maupun dewasa. Berbagai pilihan tersedia dibutik Inaz yang akan mempercantik oufit kamu setiap harinya. Dengan harga terjangkau pastinya dengan kualitas oke.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="card1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Kenapa Harus berbelanja disini ?</h3>
            <p class="fst-italic">
              Ya Jangan ragu untuk berbelanja disini, keuntungan yang bisa didapatkan adalah : 
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Mengutamakan kepuasan pelanggan</li>
              <li><i class="bi bi-check-circle"></i> Kualitas yang tidak diragukan lagi</li>
              <li><i class="bi bi-check-circle"></i> Harga terjangkau</li>
            </ul>
            <p>
             Butik inaz juga membuka secara offline yang berlokasi di dusun 7 desa Mekar Tanjung. Letaknya yang strategis ditepi jalan besar dan pastinya ramai jalanan. Untuk memudahkan kita datang langsung ke butik.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Katgeori======= -->
    <section id="kategori" class="gallery">
    <div class="row">
    <h5 class="text-center text-black pt-5"> PAKAIAN DEWASA</h5>
    <div class="col-md-4 p-5">
    <div class="card" style="width: 18rem;">
  <img src="card7.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kemeja Polos Pria Dewasa</h5>
    <p class="card-text">Bahan : Katun Premium.</p>
    <p class="card-text">Size : S M L XL .</p>
    <a href="" class="btn btn-primary">100.000</a>
  </div>
</div>
</div>

<div class="col-md-4 p-5">
    <div class="card" style="width: 18rem;">
  <img src="card5.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">One Set Wanita Dewasa</h5>
    <p class="card-text">Bahan : Crinkle.</p>
    <p class="card-text">Size : S M L XL .</p>
    <a href="" class="btn btn-primary">120.000</a>
  </div>
</div>
</div>
<div class="col-md-4 p-5">
    <div class="card" style="width: 18rem;">
  <img src="card6.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Piyama Pria Dewasa</h5>
    <p class="card-text">Bahan : Katun.</p>
    <p class="card-text">Size : S M L XL .</p>
    <a href="" class="btn btn-primary">90.000</a>
  </div>
</div>
</div>

<h5 class="text-center text-black pt-5"> PAKAIAN ANAK-ANAK</h5>
<div class="col-md-4 p-5">
    <div class="card" style="width: 18rem;">
  <img src="card9.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Atasan Anak Wanita</h5>
    <p class="card-text">Bahan : Moscrape.</p>
    <p class="card-text">Size : S M L XL .</p>
    <a href="" class="btn btn-primary">150.000</a>
  </div>
</div>
</div>

<div class="col-md-4 p-5">
    <div class="card" style="width: 18rem;">
  <img src="card10.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Satu Set Pakaian Anak Cowok</h5>
    <p class="card-text">Bahan : Katun premium.</p>
    <p class="card-text">Size : S M L XL .</p>
    <a href="" class="btn btn-primary">90.000</a>
  </div>
</div>
</div>

<div class="col-md-4 p-5">
    <div class="card" style="width: 18rem;">
  <img src="card11.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pakaian Harian Anak Cowok Karakter</h5>
    <p class="card-text">Bahan : Katun Rayon.</p>
    <p class="card-text">Size : S M L XL .</p>
    <a href="" class="btn btn-primary">50.000</a>
  </div>
</div>
</div>
</div>
</section>
  <!-- ======= End Detail Baju ======= -->


    <!-- ======= pemesanan Section ======= -->
    <section id="pemesanan" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ORDER DISINI !!!</h2>
          <p></p>
        </div>

        <form action="DB.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="Id_Barang" class="form-control" id="Id_Barang" placeholder="Id_Barang" required>
            </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="NamaBarang" class="form-control datepicker" id="NamaBarang" placeholder="Nama Barang" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="JumlahBarang" class="form-control datepicker" id="JumlahBarang" placeholder="Jumlah Barang" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="HargaBarang" class="form-control datepicker" id="HargaBarang" placeholder="Harga Barang" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="Kategori" id="Kategori" class="form-select">
                <option value="">Kategori</option>
                <option value="Department 1">Pakaian Dewasa</option>
                <option value="Department 3">Pakaian Anak-Anak</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="" id="Ukuran" id="Ukuran" class="form-select">
                <option value="">Ukuran</option>
                <option value="Ukuran S">Ukuran S</option>
                <option value="Ukuran M">Ukuran M</option>
                <option value="Ukuran L">Ukuran L</option>
                <option value="Ukuran XL">Ukuran XL</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="Message" rows="5" placeholder="Message (Optional)"></textarea>

          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">ORDER DISINI</button></div>
        </form>

      </div>
    </section>
    <!-- End pemesanan Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Berikut Berbagai Macam Contoh Model Pakaian yang tersedia di Butik Inaz Fashion.</p>
          <p>Mulai dari Model Pakaian Dewasa Sampai Model Pakaian Anak-Anak.</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="card4.png"><img src="card4.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="card5.png"><img src="card5.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="card6.png"><img src="card6.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="card7.png"><img src="card7.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="card8.png"><img src="card8.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="card9.png"><img src="card9.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="card10.png"><img src="card10.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="card11.png"><img src="card11.png" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Gallery Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact us" class="contact us">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Berikut Informasi Seputar Butik Inaz Agar Memudahkan Anda Untuk Berbelanja Disini.</p>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="card2.png" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Dusun 7, Desa Pulau Tanjung, Kec.Teluk Dalam.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@Inaz.com<br>contact@Inaz Fashion.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+62 852 4567 8910<br>+62 852 1122 1314</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Inaz Fashion</h3>
              <p>
                Dusun VII Desa Pulau Tanjung <br>
                Kecamatan Teluk Dalam<br><br>
                <strong>Phone:</strong> +62 852 4567 8910<br>
                <strong>Email:</strong> info@Inaz.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kategori</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pemesanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>