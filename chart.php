<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SEO HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<script src="https://cdn.jsdelivr.net/npm/xlsx@0.14.3/dist/xlsx.full.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datasource@0.1.0"></script>

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <!--<a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>-->
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                            <nav> 
                                    <ul id="navigation">    
                                        <li><a href="index.php"> Home</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="portofolio.php">Portofolio</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="tubes.php">TUBES</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <!--
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a href="#" class="btn header-btn">Contact Us</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>
        <br><br><br>
        <br>
        <h2><p><center>Visualisasi Data</center></p></h2>
            
        <div class="container">
        <h4><p><center>Jumlah Peserta per Tahun</center></p></h4>
            <canvas id="myChart" width="" height="125"> </canvas><br><br>
        </div>

        <div class="container">
        <h4><p><center>Jumlah Peserta Terbanyak</center></p></h4>
            <canvas id="myChart2" width="" height="125"> </canvas><br><br>
        </div>

        <div class="container">
        <h4><p><center>Perusahaan yang Sering Menang per Tahun</center></p></h4>
            <canvas id="myChart3" width="" height="125"> </canvas><br><br>
        </div>
        
        <div class="container">
        <h4><p><center>Jumlah Tender Selesai</center></p></h4>
            <canvas id="myChart4" width="" height="125"> </canvas><br><br>
        </div>

        <div class="container">
        <h4><p><center>Jumlah Tender Batal</center></p></h4>
            <canvas id="myChart5" width="" height="125"> </canvas><br><br>
        </div>

        <div class="container">
        <h4><p><center>Nilai Pagu Terbesar</center></p></h4>
            <canvas id="myChart6" width="" height="125"> </canvas><br><br>
        </div>

        <div class="container">
        <h4><p><center>Nilai Pagu Terkecil</center></p></h4>
            <canvas id="myChart7" width="" height="125"> </canvas><br><br>
        </div>

        <div class="container">
        <h4><p><center>Nilai HPS Terbesar</center></p></h4>
            <canvas id="myChart8" width="" height="125"> </canvas><br><br>
        </div>

        <div class="container">
        <h4><p><center>Nilai Selisih Pagu dan HPS Terbesar</center></p></h4>
            <canvas id="myChart9" width="" height="125"> </canvas><br><br>
        </div>

        <div class="container">
        <h4><p><center>Perusahaan yang Sering Ikut Tender per Tahun</center></p></h4>
            <canvas id="myChart10" width="" height="125"> </canvas><br><br>
        </div>

        <div class="container">
        <h4><p><center>Harga Penawaran Tertinggi</center></p></h4>
            <canvas id="myChart11" width="" height="125"> </canvas><br><br>
        </div>

    </main>
   <footer>

       <!-- Footer Start-->
      
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center">
                         <div class="col-xl-12 ">
                             <div class="footer-copy-right text-center">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
      </div>
       <!-- Footer End-->

   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

        <script src="assets/js/chart.js"></script>
        
    </body>
</html>