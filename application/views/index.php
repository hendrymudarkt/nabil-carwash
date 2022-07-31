<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nabil Carwash</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="<?php echo site_url('dist/css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url('dist/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('dist/css/animate/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('dist/css/owl-carousel/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('dist/css/owl-carousel/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('dist/css/style.css'); ?>">
  </head>

  <body id="page-top">

<!--====================================================
                         HEADER
======================================================--> 

    <header>

      <!-- Top Navbar  -->
      <div class="top-menubar">
        <div class="topmenu">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <ul class="list-inline top-contacts">
                  <li>
                    <i class="fa fa-envelope"></i> Email: <a href="#">nabilcarwash@gmail.com</a>
                  </li>
                  <li>
                    <i class="fa fa-phone"></i> Telepon: 0899-7436-8877
                  </li>
                </ul>
              </div> 
              <div class="col-md-5">
                <ul class="list-inline top-data">
                  <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                  <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                  <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                  <li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div> 
      </div> 
      
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
        <div class="container">
          <a class="navbar-brand smooth-scroll" href="#">
            <img src="<?php echo site_url('dist/img/logo.png'); ?>" alt="logo" height="50" width="70">
          </a> 
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
          </button>  
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" ><a class="nav-link smooth-scroll" href="<?php echo site_url('utama/index'); ?>">Home</a></li>
                <li class="nav-item" ><a class="nav-link smooth-scroll" href="<?php echo site_url('utama/service'); ?>">Booking</a></li>
                <li class="nav-item" ><a class="nav-link smooth-scroll" href="<?php echo site_url('utama/about'); ?>">Tentang Kami</a></li>
                <li>
                  <div class="top-menubar-nav">
                    <div class="topmenu ">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-7">
                            <ul class="list-inline top-contacts">
                              <li>
                                <i class="fa fa-envelope"></i> Email: <a href="#">nabilcarwash@gmail.com</a>
                              </li>
                              <li>
                                <i class="fa fa-phone"></i> Telepon: 0899-7436-8877
                              </li>
                            </ul>
                          </div> 
                          <div class="col-md-5">
                            <ul class="list-inline top-data">
                              <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                              <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                              <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                              <li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </li>
            </ul>  
          </div>
        </div>
      </nav>
    </header> 

<!--====================================================
                    LOGIN
======================================================-->
    <section id="login">
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header" align="center">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span class="fa fa-times" aria-hidden="true"></span>
                      </button>
                  </div>
                  <div id="div-forms">
                      <form method="post" id="login-form" action="<?php echo site_url('login/aksi_login') ?>">
                          <h3 class="text-center">Login</h3>
                          <div class="modal-body">
                              <label for="username">Username</label> 
                              <input name="username" class="form-control" type="text" placeholder="Enter username">
                              <label for="username">Password</label>
                              <input name="password" class="form-control" type="password" placeholder="Enter password">
                          </div>
                          <div class="modal-footer text-center">
                              <div>
                                  <button type="submit" class="btn btn-general btn-white">Login</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </section>

<!--====================================================
                         HOME
======================================================-->
    <section id="home">
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"> 
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active slides">
              <div class="overlay"></div>
              <div class="slide-1"></div>
                <div class="hero ">
                  <hgroup class="wow fadeInUp">
                      <h1>Nabil <span ><a href="" class="typewrite" data-period="2000" data-type='[ "Carwash"]'>
                        <span class="wrap"></span></a></span> </h1>        
                      <h3>Carwash Based In Padang</h3>
                  </hgroup>
                  <a href="<?php echo site_url('utama/service'); ?>" class="btn btn-general btn-green wow fadeInUp" role="button">Booking Sekarang</a>
                </div>           
            </div> 
        </div> 
      </div> 
    </section>

<!--====================================================
                  FOOTER
======================================================-->
    <footer> 
        <div id="footer-s1" class="footer-s1">
          <div class="footer">
            <div class="container">
              <div class="row">
                <!-- About Us -->
                <div class="col-md-3 col-sm-6 ">
                  
                </div>
                <!-- End About Us -->

                <!-- Recent News -->
                <div class="col-md-3 col-sm-6 ">
                  
                </div>
                <!-- End Recent list -->

                <!-- Recent Blog Entries -->
                <div class="col-md-3 col-sm-6 ">
                  
                </div>
                <!-- End Recent Blog Entries -->

                <!-- Latest Tweets -->
                <div class="col-md-3 col-sm-6">
                  <div class="heading-footer"><h2>Alamat & Kontak</h2></div>
                  <address class="address-details-f">
                    Jl. Raya Padang - Bukittinggi,<br>
                    Kec. Batang Anai,
                    Kota Padang,<br>
                    Sumatera Barat 25586
                  </address>  
                  <ul class="list-inline social-icon-f top-data">
                    <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                    <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                    <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                  </ul>
                </div>
                <!-- End Latest Tweets -->
              </div>
            </div><!--/container -->
          </div> 
        </div>

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="footer-copyrights">
                            <p>Copyrights &copy; 2020 All Rights. <a href="#">Privacy Policy</a> <a href="#">Terms of Services</a></p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <a href="#home" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
    </footer>

    <!--Global JavaScript -->
    <script src="<?php echo site_url('dist/js/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo site_url('dist/js/popper/popper.min.js'); ?>"></script>
    <script src="<?php echo site_url('dist/js/bootstrap/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('dist/js/wow/wow.min.js'); ?>"></script>
    <script src="<?php echo site_url('dist/js/owl-carousel/owl.carousel.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo site_url('dist/js/jquery-easing/jquery.easing.min.js'); ?>"></script> 
    <script src="<?php echo site_url('dist/js/custom.js'); ?>"></script> 
  </body>

</html>
