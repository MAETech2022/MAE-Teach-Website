@extends('layouts.front_page')

@section('content')

<!-- Banner Area Start -->
<div class="banner__two swiper banner-two-slider">
    <div class="swiper-wrapper">
        <div class="banner__two-image swiper-slide" data-background="{{asset('assets/frontend/assets/img/banner/slider-1.png')}}">				
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner__two-content">
                            <b class="subtitle">MAE TECH</b>
                            <span data-animation="fadeInUp" data-delay=".3s">Welcome To Our Company</span>
                            <h1 data-animation="fadeInUp" data-delay=".7s">Your Digital Transformation Partner</h1>
                            <div class="banner__two-content-button" data-animation="fadeInUp" data-delay="1s">
                                <a class="btn-five" href="{{route('page',['name'=>'services'])}}">Explore More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                            <img class="banner__two-image-shape-one" src="{{asset('assets/frontend/assets/img/shape/banner-1.png')}}" data-animation="rollIn" data-delay="2s" alt="">
                        </div>
                        <img class="banner__two-image-shape-two" src="{{asset('assets/frontend/assets/img/shape/banner-2.png')}}" data-animation="fadeInRightBig" data-delay="1.1s" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__two-image swiper-slide" data-background="{{asset('assets/frontend/assets/img/banner/slider-2.png')}}">				
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner__two-content">
                            <b class="subtitle">MAE TECH</b>
                            <span data-animation="fadeInUp" data-delay=".3s">Welcome To Our Company</span>
                            <h1 data-animation="fadeInUp" data-delay=".7s">Driving Digital Transformation</h1>
                            <div class="banner__two-content-button" data-animation="fadeInUp" data-delay="1s">
                                <a class="btn-five" href="{{route('page',['name'=>'services'])}}">Explore More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                            <img class="banner__two-image-shape-one" src="{{asset('assets/frontend/assets/img/shape/banner-1.png')}}" data-animation="rollIn" data-delay="2s" alt="">
                        </div>
                        <img class="banner__two-image-shape-two" src="{{asset('assets/frontend/assets/img/shape/banner-2.png')}}" data-animation="fadeInRightBig" data-delay="1.1s" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="banner__two-image swiper-slide" data-background="{{asset('assets/frontend/assets/img/banner/slider-3.png')}}">				
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner__two-content">
                            <b class="subtitle">MAE TECH</b>
                            <span data-animation="fadeInUp" data-delay=".3s">Welcome To Our Company</span>
                            <h1 data-animation="fadeInUp" data-delay=".7s">Tech Solutions for your Challenges</h1>
                            <div class="banner__two-content-button" data-animation="fadeInUp" data-delay="1s">
                                <a class="btn-five" href="{{route('page',['name'=>'services'])}}">Explore More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                            <img class="banner__two-image-shape-one" src="{{asset('assets/frontend/assets/img/shape/banner-1.png')}}" data-animation="rollIn" data-delay="2s" alt="">
                        </div>
                        <img class="banner__two-image-shape-two" src="{{asset('assets/frontend/assets/img/shape/banner-2.png')}}" data-animation="fadeInRightBig" data-delay="1.1s" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="banner__two-arrow">
        <div class="banner__two-arrow-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
        <div class="banner__two-arrow-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
    </div>		
</div>
<!-- Banner Area End --> 
<!-- Services Area Start -->
<div class="services__two section-padding pb-0">
    <div class="container">
        <div class="row mb-70 align-items-end">
            <div class="col-xl-8 col-sm-8 lg-mb-30">
                <div class="services__two-title sm-t-center">
                    <span class="subtitle-two">Our Solutions</span>
                    <h2>Popular Services</h2>						
                </div>
            </div>
            <div class="col-xl-4 col-sm-4">
                <div class="services__two-arrow t-right sm-t-center">
                    <div class="services__two-arrow-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                    <div class="services__two-arrow-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="swiper services__two-slider">
                    <div class="swiper-wrapper">
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s1.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/services-5.png')}}" alt="">
                                </div>
                                <h4><a href="{{route('service',['id'=>1])}}">UI/UX</a></h4>
                                <p>User-Focused, Aesthetic, Intuitive Interfaces.</p>
                                <a class="simple-btn-2" href="{{route('service',['id'=>1])}}">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>

                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s2.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/it_solutions.svg')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">IT Solutions</a></h4>
                                <p>Integrated Turnkey Technology Services.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>

                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s3.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/services-5.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Mobile Apps</a></h4>
                                <p>Efficient, User-Centric Applications.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s4.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/qa-1.svg')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Quality Assurance</a></h4>
                                <p>Reliability Through Rigorous Testing.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s5.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/cyber-security.svg')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Cyber Security</a></h4>
                                <p>Cyber Vigilance, Unyielding Defense.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s6.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/erp-crm.svg')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">ERP’s</a></h4>
                                <p>Unified Business Management.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s7.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/erp-crm.svg')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">CRM’s</a></h4>
                                <p>Customer-Centric Relationship Management.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s8.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/decision-making.svg')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">AI Dashboards</a></h4>
                                <p>Strategic Insightful Decision Systems.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s9.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/services-5.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Data Science</a></h4>
                                <p>Analytics Empowering Strategic Decisions.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s10.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/services-5.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Data Engineering</a></h4>
                                <p>Building Robust Data Architectures.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s11.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/services-5.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Data Modeling</a></h4>
                                <p>Designing Insightful Information Structures.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s12.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/it-consultancy.svg')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">IT Consultancy</a></h4>
                                <p>Strategic IT Advisory Services.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s13.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/bpr_1.svg')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">BPR</a></h4>
                                <p>Strategic Business Process Redesign.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s14.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/services-5.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Project MGMT..</a></h4>
                                <p>Efficient Execution, Seamless Collaboration.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s15.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/technical_trainings-1.svg')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">IT Trainings</a></h4>
                                <p>Practical Expertise, Hands-On Learning.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s16.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/services-5.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Digital Media</a></h4>
                                <p>Fostering Connections, Nurturing Engagement.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>

                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s17.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/services-5.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Social Media</a></h4>
                                <p>Strategic, Engaging, Impactful Campaigns.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>

                        <!-- <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s18.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/services-5.png')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">Marketing Strategy and Plans</a></h4>
                                <p>Crafting Impactful Marketing Strategies.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div> -->

                        <div class="services__two-item swiper-slide" data-background="{{asset('assets/frontend/assets/img/pages/s19.png')}}">
                            <div class="services__two-item-content">
                                <div class="services__two-item-content-icon">
                                    <img src="{{asset('assets/frontend/assets/img/icon/seo_1.svg')}}" alt="">
                                </div>
                                <h4><a href="services-right-sidebar.html">SEO</a></h4>
                                <p>Boosting Visibility, Ensuring Relevance.</p>
                                <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>					
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->   
<!-- About Area Start -->   
<div class="about__two dark__image section-padding">
    <img class="about__two-shape dark-n" src="{{asset('assets/frontend/assets/img/shape/about.png')}}" alt="">
    <img class="about__two-shape light-n" src="{{asset('assets/frontend/assets/img/shape/about-dark.png')}}" alt="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 lg-mb-30">
                <div class="row">
                    <div class="col-6">
                        <img src="{{asset('assets/frontend/assets/img/about/rectangle-10.png')}}" alt="">
                    </div>
                    <div class="col-6 mt-95 sm-mt-55">
                        <img src="{{asset('assets/frontend/assets/img/about/rectangle-68.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="about__two-right">
                    <div class="about__two-right-title">
                        <span class="subtitle-two">About Company</span>
                        <h2>Who we are</h2>
                        <p>Founded in 2009, our Pakistan-based IT company has expanded its presence to the Gulf region, notably in the UAE.Our strengths lie in delivering top-notch services in the IT sector; encompassing Digital Solutions, IT Consultancy, Project Management and Data Science. Our capabilities extend to ERP Systems, Purpose-built 
                            Digital Platforms, Business Process Re-engineering (BPR) and AI-driven dashboards leading to Decision Making 
                            Systems. The MAE Tech family is home to the most skilled experts and professionals in the field.</p>
                    </div>
                    <div class="about__two-right-experience">
                        <div class="about__two-right-experience-counter">
                            <h1><span class="counter">14</span>+</h1>
                        </div>
                        <div>
                            <h6>Years of Experience</h6>
                        </div>
                    </div>
                    <div class="about__two-right-btn">
                        <div>
                            <a class="btn-six" href="{{route('page',['name'=>'about-us'])}}">Read More<i class="far fa-chevron-double-right"></i></a>
                        </div>
                        <div class="about__two-right-btn-author">
                            <!-- <div class="about__two-right-btn-author-avatar">
                                <img src="{{asset('assets/frontend/assets/img/avatar/avatar-8.jpg')}}" alt="">
                            </div>
                            <div class="about__two-right-btn-author-name">
                                <span class="text-one">Flores, Juanita</span>
                                <h6>Founder CEO</h6>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->   
<!-- Digital Solution Area Start -->
<div class="solution__area section-padding" data-background="{{asset('assets/frontend/assets/img/pages/section-4.png')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-9">
                <div class="solution__area-title">
                    <span class="subtitle-two">Digital Solution</span>
                    <h1>Crafting Digital Success Stories.</h1>
                    <!-- <a class="btn-five" href="request-quote.html">Request Quote<i class="far fa-chevron-double-right"></i></a> -->
                </div>					
            </div>
            <div class="col-xl-3">
                <div class="solution__area-right">
                    <div class="solution__area-right-video">
                        <!-- <div class="solution__area-right-icon video video-pulse">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA"><i class="fal fa-play"></i></a> 
                        </div>
                        <h6>Watch The Consulting Video</h6> -->
                    </div>
                </div>					
            </div>
        </div>
    </div>
</div>
<!-- Digital Solution Area End -->
<!-- Wark Area Start -->
<div class="work__area section-padding pb-0">
    <div class="container">
        <div class="row mb-70">
            <div class="col-xl-12">
                <div class="work__area-title t-center">
                    <span class="subtitle-two">Work Process</span>
                    <h2>Our Solution Process</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 xl-mb-30">
                <div class="work__area-item">
                    <span>01</span>
                    <h6>Requirements & Design</h6>
                    <p>Gather information from stakeholders. Define the system architecture and design based on the requirements</p>
                    <img class="work__area-item-arrow sm-display-n dark-n" src="{{asset('assets/frontend/assets/img/icon/arrow-1.png')}}" alt="">
                    <img class="work__area-item-arrow sm-display-n light-n" src="{{asset('assets/frontend/assets/img/icon/arrow-1-dark.png')}}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 sm-mb-30">
                <div class="work__area-item">
                    <span>02</span>
                    <h6>Implementation & Testing</h6>
                    <p>Write, test and debug code based on the detailed design. Follow coding standards and best practices.</p>
                    <img class="work__area-item-arrow xl-display-n dark-n" src="{{asset('assets/frontend/assets/img/icon/arrow-2.png')}}" alt="">
                    <img class="work__area-item-arrow xl-display-n light-n" src="{{asset('assets/frontend/assets/img/icon/arrow-2-dark.png')}}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 sm-mb-30">
                <div class="work__area-item">
                    <span>03</span>
                    <h6>Deployment</h6>
                    <p>Package the software for deployment, create installation guides and release the software to end-users.</p>
                    <img class="work__area-item-arrow xl-display-n dark-n" src="{{asset('assets/frontend/assets/img/icon/arrow-1.png')}}" alt="">
                    <img class="work__area-item-arrow xl-display-n light-n" src="{{asset('assets/frontend/assets/img/icon/arrow-1-dark.png')}}" alt="">
                    <img class="work__area-item-arrow display-n xl-display-b sm-display-n dark-n" src="{{asset('assets/frontend/assets/img/icon/arrow-2.png')}}" alt="">
                    <img class="work__area-item-arrow display-n xl-display-b sm-display-n light-n" src="{{asset('assets/frontend/assets/img/icon/arrow-2-dark.png')}}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="work__area-item">
                    <span>04</span>
                    <h6>Maintenance & Support</h6>
                    <p>Provide ongoing support, release updates and manage software maintenance.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wark Area End -->
<!-- Consulting Area Start -->
<div class="consulting__area section-padding">
    <img class="consulting__area-shape dark-n" src="{{asset('assets/frontend/assets/img/shape/consulting.png')}}" alt="">
    <img class="consulting__area-shape light-n" src="{{asset('assets/frontend/assets/img/shape/consulting-dark.png')}}" alt="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 lg-mb-30">
                <div class="consulting__area-image dark__image">
                    <img src="{{asset('assets/frontend/assets/img/pages/rectangle-69.png')}}" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="consulting__area-right">
                    <div class="consulting__area-right-title">
                        <span class="subtitle-two">Premium Services</span>
                        <h2>Byte by Byte, Building the Future</h2>
                        <p>Join us on this exciting journey as we pave the way for a future that is secure, interconnected, 
                            and technologically advanced.</p>
                    </div>
                    <div class="consulting__area-right-list">
                        <span><i class="far fa-check"></i>Digital Solutions</span>
                        <span><i class="far fa-check"></i>IT Consultancy.</span>
                        <span><i class="far fa-check"></i>Server and Cloud based Infrastructure.</span>
                        <span><i class="far fa-check"></i>Digital Marketing.</span>
                    </div>
                    <a class="btn-six" href="{{route('page',['name'=>'contact-us'])}}">Contact Us<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Consulting Area End -->
<!-- Portfolio Area Start -->
<div class="portfolio dark__image">
    <div class="portfolio-item">
        <img src="{{asset('assets/frontend/assets/img/portfolio/mask-group-1.png')}}" alt="">
        <div class="portfolio-item-inner">
            <div class="portfolio-item-inner-title">
                <h4>IT Solutions</h4>
                <!-- <span>MAE Consulting</span> -->
            </div>
            <div class="portfolio-item-inner-icon">
                <a href="{{route('project',['id'=>1])}}"><i class="fal fa-long-arrow-up"></i></a>
            </div>
        </div>
    </div>
    <div class="portfolio-item active">
        <img src="{{asset('assets/frontend/assets/img/portfolio/mask-group-2.png')}}" alt="">
        <div class="portfolio-item-inner">
            <div class="portfolio-item-inner-title">
                <h4>Artificial Intelligence</h4>
            </div>
            <div class="portfolio-item-inner-icon">
                <a href="{{route('project',['id'=>1])}}"><i class="fal fa-long-arrow-up"></i></a>
            </div>
        </div>
    </div>
    <div class="portfolio-item">
        <img src="{{asset('assets/frontend/assets/img/portfolio/mask-group-3.png')}}" alt="">
        <div class="portfolio-item-inner">
            <div class="portfolio-item-inner-title">
                <h4>IT Consultancy & Project Management</h4>
            </div>
            <div class="portfolio-item-inner-icon">
                <a href="{{route('project',['id'=>1])}}"><i class="fal fa-long-arrow-up"></i></a>
            </div>
        </div>
    </div>
    <div class="portfolio-item">
        <img src="{{asset('assets/frontend/assets/img/portfolio/mask-group-4.png')}}" alt="">
        <div class="portfolio-item-inner">
            <div class="portfolio-item-inner-title">
                <h4>Marketing</h4>
            </div>
            <div class="portfolio-item-inner-icon">
                <a href="{{route('project',['id'=>1])}}"><i class="fal fa-long-arrow-up"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Area End -->

<div class="section-padding pb-0"></div>

@endsection

@section('jsfile')

<script>

    $(document).ready(function() {
        
        $('#subscribeBtn').click(function(event) {

            event.preventDefault();

            var subscribe_email = $("#subscribe_email").val();
            if(!subscribe_email){
                alert("Enter Eamil to subscribe.");
                return false;
            }

            // Disable the button
            $('#subscribeBtn').hide();
            $('#loader').show();

            // $(this).prop('disabled', true);

            $.ajax({
                url: '{{ route('subscribe') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    email: subscribe_email
                },
                success: function(response) {
                    console.log(response.message);
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                },
                complete: function() {
                    // $('#subscribeBtn').prop('disabled', false);

                    $('#loader').hide();
                    $('#subscribeBtn').show();
                }
            });
        });
    });

</script>

@endsection