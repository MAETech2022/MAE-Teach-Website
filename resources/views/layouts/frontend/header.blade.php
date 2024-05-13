<!-- Preloader Start -->
<div class="theme-loader">
    <div class="spinner">
        <div class="spinner-bounce one"></div>
        <div class="spinner-bounce two"></div>
        <div class="spinner-bounce three"></div>
    </div>
</div>
<!-- Preloader End -->
<!-- Dark Light Start -->
<div class="switch__tab">
    <span class="switch__tab-btn active light-mode-title">Light</span>
    <span class="mode__switch two" onclick="darkLight()"><span></span></span>
    <span class="switch__tab-btn dark-mode-title">Dark</span>
</div>
<!-- Dark Light End -->	
<!-- Header Two Start -->	
<div class="header__two">
    <div class="header__two-topbar">
        <div class="container">
            <div class="row align-items-center borders">
                <div class="col-xl-6 col-sm-8">
                    <div class="header__two-topbar-left sm-t-center">
                        <a href="#"><i class="far fa-clock"></i>Working Hours : Monday - Friday 9AM - 6PM (PST)</a>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-4">
                    <div class="header__two-topbar-social t-right sm-t-center">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/mae-tech-smc-pvt-ltd"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="auto__container pl-95 pr-95">
        <div class="header__area-menubar two">
            <div class="header__area-menubar-left">
                <div class="header__area-menubar-left-logo">
                    <a href="{{route('welcome')}}"><img class="one" src="{{asset('assets/frontend/assets/img/logo2.png')}}" alt="">
                    <img class="two" src="{{asset('assets/frontend/assets/img/group-2.png')}}" alt="">
                    <img class="light" src="{{asset('assets/frontend/assets/img/logo2.png')}}" alt=""></a>
                </div>
            </div>
            <div class="header__area-menubar-center two">
                <div class="header__area-menubar-center-menu two menu-responsive">						
                    <ul id="mobilemenu">
                        <li class=""><a href="{{route('welcome')}}">Home</a></li>
                        <li class=""><a href="{{route('page',['name'=>'about-us'])}}">About Us</a></li>
                        <li class=""><a href="{{route('page',['name'=>'services'])}}">Services</a></li>
                        <li class=""><a href="{{route('page',['name'=>'projects'])}}">Projects</a></li>
                        <li class=""><a href="{{route('page',['name'=>'contact-us'])}}">Contact Us</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-box">
                    <div class="header__area-menubar-right-box-search">
                        <div class="search">	
                            <span class="header__area-menubar-right-box-search-icon open"><i class="fal fa-search"></i></span>
                        </div>
                        <div class="header__area-menubar-right-box-search-box">
                            <form>
                                <input type="search" placeholder="Search Here.....">
                                <button type="submit"><i class="fal fa-search"></i>
                                </button>
                            </form> <span class="header__area-menubar-right-box-search-box-icon"><i class="fal fa-times"></i></span>
                        </div>
                    </div>
                    <div class="header__area-menubar-right-box-contact">
                        <div class="header__area-menubar-right-box-contact-icon">
                            <i class="fal fa-envelope-open-text"></i>
                        </div>
                        <div class="header__area-menubar-right-box-contact-info">
                            <span class="text-four">need Help</span>
                            <h6><a href="mailto:info@maetech.co">info@maetech.co</a></h6>
                        </div>
                    </div>
                </div>
                <div class="responsive-menu"></div>
            </div>
            <div class="header__area-menubar-right-btn">
                <a class="btn-six" href="{{asset('images/mae_tech_profile.pdf')}}" target="_blank">Our Profile<i class="far fa-chevron-double-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Header Two End -->	