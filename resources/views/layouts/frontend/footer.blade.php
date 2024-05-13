<!-- Footer Area Start -->
<div class="footer__two " data-background="{{asset('assets/frontend/assets/img/shape/footer-bg-1.png')}}">
    <!-- Subscribe Area Start -->
    <div class="subscribe__area">
        <div class="container">
            <div class="row align-items-center subscribe__area-bg" data-background="{{asset('assets/frontend/assets/img/pages/mask-group.png')}}">
                <div class="col-xl-5 col-lg-5 lg-mb-40">
                    <div class="subscribe__area-left">
                        <h2>Stay Connected</h2>
                        <div class="subscribe__area-left-notification">
                            <!-- <h6>get all notifications</h6>
                            <div class="subscribe__area-left-notification-icon icon-animation video-pulse">
                                <i class="far fa-bell"></i>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="subscribe__area-form">

                    <style>
                        #loader {
                            display: none;
                            /* Add your loader styles here */
                        }

                        /* Optional: Style the button when the loader is visible */
                        #subscribeBtn[disabled] {
                            opacity: 0.5;
                            cursor: not-allowed;
                        }
                    </style>


                        <form>
                            <input type="email" id="subscribe_email" name="email" placeholder="Email address">
                            <button type="submit" id="subscribeBtn">Subscribe Now</button>
                            <button type="submit" style="display: none;" id="loader" disabled>Loading...</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Area End -->
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30">
                <div class="footer__two-widget">
                    <div class="footer__two-widget-about">
                        <a href="{{route('welcome')}}"><img src="{{asset('assets/frontend/assets/img/logo2.png')}}" alt=""></a>
                        <p>Experience the future with MAE Tech – where innovation meets precision to redefine industry standards, crafting tailored solutions empowering businesses to thrive in the digital age.</p>
                        <div class="footer__two-widget-about-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/mae-tech-smc-pvt-ltd/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>							
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
                <div class="footer__two-widget footer-border">
                    <h4>Head Office</h4>
                    <div class="footer__two-widget-location">
                        <div class="footer__two-widget-location-item">
                            <div class="footer__two-widget-location-item-icon">
                                <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="footer__two-widget-location-item-info">
                                <a href="#">Plot # D-643/7, PAEC-ECHS, Islamabad, Pakistan</a>
                            </div>
                        </div>
                        <h6>Regional Office</h6>
                        <div class="footer__two-widget-location-item">
                            <div class="footer__two-widget-location-item-icon">
                                <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="footer__two-widget-location-item-info">
                                <a href="#">Office # 701, Axis 6, Dubai Silicon Oasis, Dubai</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="footer__two-widget footer-border">
                    <h4>Quick Links</h4>
						<div class="footer__one-widget-solution">
							<ul>
								<li><a href="{{route('page',['name'=>'about-us'])}}"><i class="far fa-chevron-double-right"></i>Who we are</a></li>
								<li><a href="{{route('page',['name'=>'services'])}}"><i class="far fa-chevron-double-right"></i>Services we excel in</a></li>
								<li><a href="{{route('page',['name'=>'projects'])}}"><i class="far fa-chevron-double-right"></i>Our Flagship Projects</a></li>
								<li><a href="{{route('page',['name'=>'contact-us'])}}"><i class="far fa-chevron-double-right"></i>Reach Out to us</a></li>
								<li><a href="{{asset('images/mae_tech_profile.pdf')}}" target="_blank"><i class="far fa-chevron-double-right"></i>Our Digital Profile</a></li>
							</ul>
						</div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__two">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p>Copyright &copy; {{ date('Y') }} - All Rights Reserved By <a href="{{route('welcome')}}" target="_blank">MAE TECH</a></p>
                </div>
            </div>
        </div>
    </div>		
</div>
<!-- Footer Area End -->
<!-- Scroll Btn Start -->
<div class="scroll-up scroll-two">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
</div>
<!-- Scroll Btn End -->