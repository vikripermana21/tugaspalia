<?php include('header.php'); ?>

    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                        <span>Contact</span>
                        <h2>Contact Us​</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.166826440257!2d107.56771293488765!3d-6.870604399999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e420f79fc621%3A0x742a0cf97c929be6!2sGedung%20JTK%20Polban!5e0!3m2!1sid!2sid!4v1646632113795!5m2!1sid!2sid" width="800" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>  
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#ccdee9'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                    </script>
    
                </div>
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Politeknik Negeri Bandung</h3>
                                <p>Gegerkalong Hilir, Ds. Ciwaruga</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>(022) 2013789</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>jtk@polban.ac.id</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
         <!-- have-project Start-->
         <!-- <div class="have-project pt-50">
            <div class="container">
                <div class="haveAproject"  data-background="assets/img/team/have.jpg">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-7 col-lg-9 col-md-12">
                            <div class="wantToWork-caption">
                                <h2>Have project in mind?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut.</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-12">
                           <div class="wantToWork-btn f-right">
                                <a href="#" class="btn btn-ans">Contact Us</a>
                           </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div> -->
        <!-- have-project End -->
    
    <footer>

        <!-- Footer Start-->
       <!-- <div class="footer-main" data-background="assets/img/shape/footer_bg.png">
         <div class="footer-area footer-padding">
             <div class="container">
                 <div class="row d-flex justify-content-between">
                     <div class="col-lg-3 col-md-4 col-sm-8">
                        <div class="single-footer-caption mb-50">
                          <div class="single-footer-caption mb-30">
                              
                              <div class="footer-logo">
                                  <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                              </div>
                              <div class="footer-tittle">
                                  <div class="footer-pera">
                                      <p class="info1">221B Baker Street, P.O Box 353 Park <br> Road, USA - 215431</p>
                                      <p class="info2">info@yourdomain.com</p>
                                 </div>
                              </div>
                              
                              <div class="footer-social">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                                 
                             </div>
                          </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-5">
                         <div class="single-footer-caption mb-50">
                             <div class="footer-tittle">
                                 <h4>Quick Links</h4>
                                 <ul>
                                     <li><a href="about.html">About</a></li>
                                     <li><a href="about.html">Features</a></li>
                                     <li><a href="single-blog.html">Pricing</a></li>
                                     <li><a href="blog.html">Blog</a></li>
                                     <li><a href="contact.html">Contact</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-7">
                         <div class="single-footer-caption mb-50">
                             <div class="footer-tittle">
                                 <h4>Support</h4>
                                 <ul>
                                     <li><a href="#">Privacy Policy</a></li>
                                     <li><a href="#">Terms & Conditions</a></li>
                                     <li><a href="#"> Sitemap</a></li>
                                     <li><a href="#">FAQs</a></li>
                                     <li><a href="#">Report a bugb</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-5">
                         <div class="single-footer-caption mb-50">
                             <div class="footer-tittle">
                                 <h4>Core Features</h4>
                                 <ul>
                                  <li><a href="#">Email Marketing</a></li>
                                  <li><a href="#"> Offline SEO</a></li>
                                  <li><a href="#">Social Media Marketing</a></li>
                                  <li><a href="#">Lead Generation</a></li>
                                  <li><a href="#"> 24/7 Support</a></li>
                              </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div> -->
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
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
    
    </html>