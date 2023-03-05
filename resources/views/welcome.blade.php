<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Udacoding</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets')}}//img/icon.png" rel="icon">
  <link href="{{asset('assets')}}//img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets')}}//vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('assets')}}//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}//vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('assets')}}//vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}//vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}//vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('assets')}}//vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}//css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('template/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="{{asset('template/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="">Udacoding.</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">About</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{url('login')}}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Halo...! <br> Selamat datang <br> di perusahaan kami </h1>
          <h2>Kami siap melayani dan membantu dengan hati untuk mengembangkan bisnis yang anda inginkan</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-get-started btn-success scrollto">Berkunjung Sekarang!</a>

          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon" ><i style="color: #20BF06" class="bx bx-badge"></i></div>
              <h4><a href="">Quality Drive</a></h4>
              <p>Udacoding memberikan kualitas terbaik untuk setiap customer kami</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i style="color: #20BF06" class='bx bxs-user-check'></i></div>
              <h4><a href="">Customer Focused</a></h4>
              <p>Kami berfokus Pada Customers kami untuk memberikan pelayanan terbaik dan kualitas terbaik</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i style="color: #20BF06" class="bx bx-world"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="mr-5 col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets')}}//img/about.jpg" style="border-radius: 20px;" class="img-fluid" alt="">
          </div>
          <div class="ml-5 col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h5 style="color: #20BF06;">About us</h5>
            <h3>IT Training Center & <br> Software Development</h3>
            <p class="deskripsi ml-5">
              Udacoding saat ini memiliki beberapa jasa di bidang <br>
              Teknologi diantaranya IT Training Center & Software <br>
               Development (Saat ini di bidang web development, <br>
                mobile development, UI Design dan Data Science)
            </p>
            <a href="#" class="mt-3 btn btn-block text-white" style="width: 180px; border-radius: 30px; background-color: #20BF06 ">GET STARTED</a>
            <div class="skills-content">
            </div>

          </div>
        </div>

      </div>
    </section>


    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h5 style="color: #20BF06;">Contact us</h5>
                <h3>We are always ready & <br>
                  there to grow your business</h3>
                  <center>
                    <div class="card mt-5">
                      <div class="card-body" style="background-color: #20BF06;">
                        <div class="row">
                          <div class="col-md-6 mt-4 mb-4">
                            <h3 style="color: #fff;">+0822 1376 1973</h3>
                            <p class="mt-3" style="color: #fff;">PHONE NUMBER</p>
                          </div>
                          <div class="col-md-6 mt-4 mb-4">
                            <h3 style="color: #fff;">info@udacoding.com</h3>
                            <p class="mt-3" style="color: #fff;">EMAIL ACCOUNT</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </center>
                </div>

              </div>
            </div>
          </div>
      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.950296351502!2d106.6988925!3d-6.2981749!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb0daa93951d%3A0x27e2fbaefa914be1!2sUdacoding!5e0!3m2!1sen!2sid!4v1677569090642!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Udacoding </h3>
            <p>
              South Tangsel, Dhayapesona <br>
              Indonesia.<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>About Us </h4>
            <ul>
              <li><a href="#">News</a></li>
              <li><a href="#">Carrers</a></li>
              <li><a href="#">Investor</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Get Help</h4>
            <ul>
              <li><a href="#">Order Status</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Delivery</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Contact Us</h4>
            <ul>
              <li><a href="#">admin@mail.com</a> </li>
              <li><a href="#">+624239849248</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <hr>
    <div class="container footer-bottom clearfix mt-0">
      <center>
      <div class="copyright">
        &copy; Copyright 2022 <span>Udacoding</span> All Rights Reserved
      </div>
        </center>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets')}}//vendor/aos/aos.js"></script>
  <script src="{{asset('assets')}}//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets')}}//vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('assets')}}//vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('assets')}}//vendor/php-email-form/validate.js"></script>
  <script src="{{asset('assets')}}//vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('assets')}}//vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets')}}//js/main.js"></script>

</body>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buku Tamu</h5>
      </div>
      <div class="modal-body ">
        <form class="" action="#" method="post">
          @csrf
          <div class="form-group ">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control" rows="4" cols="60"></textarea>
          </div>
            <div class="form-group">
          <label>NO HP</label>
          <input type="text" class="form-control" name="telp">
            </div>
              <div class="form-group">
          <label>Keperluan</label>
          <select class="form-control" name="event">
            <option value="">Training</option>
            <option value="">Web</option>
            <option value="">UI/UX</option>
            <option value="">Flutter</option>
          </select>
            </div>
          <div class="row">
            <div class="col-md-6">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tanggal" >
            </div>
            <div class="col-md-6">
              <label>Jam</label>
              <input type="time" class="form-control" name="jam" >
              </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
</html>
