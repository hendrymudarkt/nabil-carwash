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
    <link rel="stylesheet" href="<?php echo site_url('dist/css/contact.css'); ?>">
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
                          <div class="col-md-9">
                            <ul class="list-inline top-contacts">
                              <li>
                                <i class="fa fa-envelope"></i> Email: <a href="#">nabilcarwash@gmail.com</a>
                              </li>
                              <li>
                                <i class="fa fa-phone"></i> Telepon: 0899-7436-8877
                              </li>
                            </ul>
                          </div> 
                          <div class="col-md-3">
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
                       HOME-P
======================================================-->
    <div id="home-p" class="home-p pages-head4 text-center">
      <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Tentang Kami</h1>
      </div><!--/end container-->
    </div> 

<!--====================================================
                        CONTACT-P1  
======================================================--> 
    <section id="contact-p1" class="contact-p1">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="contact-p1-cont">
              <h3>Profil Nabil Carwash</h3>
              <div class="heading-border-light"></div> 
              <p align="justify">Keterangan.</p>
            </div>
          </div>
          <div class="col-md-4"> 
            <div class="contact-p1-cont2"> 
              <address class="address-details-f">
									Jl. Raya Padang - Bukittinggi,<br>
                  Kec. Batang Anai,
                  Kota Padang,<br>
                  Sumatera Barat 25586
              </address> 
              <ul class="list-inline social-icon-f top-data">
                <li><a href="#" target="_empty"><i class="fa top-social fa-facebook" style="height: 35px; width:35px; line-height: 35px;"></i></a></li>
                <li><a href="#" target="_empty"><i class="fa top-social fa-twitter" style="height: 35px; width:35px; line-height: 35px;"></i></a></li>
                <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus" style="height: 35px; width:35px; line-height: 35px;"></i></a></li> 
              </ul>
            </div>
          </div>  
        </div>
      </div>
    </section>

<!--====================================================
                       MAP
======================================================--> 
    <!-- <section id="contact-add">
      <div id="map">
        <div class="map-responsive">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2860323957275!2d100.35990481475365!3d-0.9359210493172614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b925cf440507%3A0xd01fdae70219ab5e!2sETHIC+BARBERSHOP!5e0!3m2!1sid!2sid!4v1561901584991!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div> 
    </section> -->

<!--====================================================
                  FOOTER
======================================================-->

    <footer>
        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="footer-copyrights">
                            <p>Copyrights &copy; 2019 All Rights. <a href="#">Privacy Policy</a> <a href="#">Terms of Services</a></p>
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
