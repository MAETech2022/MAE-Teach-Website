@extends('layouts.front_page')

@section('content')

<!-- Page Banner Area Start -->
<div class="page__banner" data-background="{{asset('assets/frontend/assets/img/pages/about-company.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>About</span>
                    <ul>
                        <li><a href="{{route('welcome')}}">Home</a><span>|</span></li>
                        <li>About Us</li>
                    </ul>
                    <h1>Who We Are</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->
<!-- About Company Area Start -->
<div class="about__company section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-7 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/frontend/assets/img/about/mask-group-1.png')}}" alt="">
                        <img src="{{asset('assets/frontend/assets/img/about/mask-group-2.png')}}" alt="">
                    </div>
                    <div class="about__company-left-experience">
                        <h2><span class="counter">113</span>+</h2>
                        <h6>Deliverd Projects</h6>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">							
                        <span class="subtitle-one">About Our Company</span>
                        <h2>Where Ideas Meet Execution</h2>
                        <p>Founded In 2009, Our Pakistan-Based IT Company Has Expanded Its Presence To The Gulf Region, Notably In The UAE.Our Strengths Lie In Delivering Top-Notch Services In The IT Sector; Encompassing Digital Solutions, IT Consultancy, Project Management And Data Science. Our Capabilities Extend To ERP Systems, Purpose-Built Digital Platforms, Business Process Re-Engineering (BPR) And AI-Driven Dashboards Leading To Decision Making Systems. The MAE Tech Family Is Home To The Most Skilled Experts And Professionals In The Field.</p>
                        <!-- <a class="btn-one" href="about.html">Read More<i class="far fa-chevron-double-right"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="about__one-shape-1" src="{{asset('assets/frontend/assets/img/shape/about-1.png')}}" alt="">
    <img class="about__one-shape-2" src="{{asset('assets/frontend/assets/img/shape/about-2.png')}}" alt="">
</div>
<!-- About Company Area End -->
<!-- About Company Two Area Start -->
<div class="company__two section-padding pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 lg-mb-30">
                <div class="company__two-left">
                    <div class="company__two-left-title">
                        <span class="subtitle-one">Who we are</span>
                        <h2>Our Mission and Vision</h2>
                        <p>MAE Tech is a driving force behind our Customers' Achievements by delivering Holistic, Purpose-built and complete IT solutions. These solutions not only boost agility but also empower Customers to excel in the competitive realm by adopting the best global practices to tackle challenges and complexities of the business landscape.</p>
                    </div>
                    <div class="company__two-left-skill">
                        <div class="company__two-left-skill-item">
                            <h2><span class="counter">65</span>+</h2>
                            <h6>Customers</h6>
                        </div>
                        <div class="company__two-left-skill-item">
                            <h2><span class="counter">50</span>+</h2>
                            <h6>Resources</h6>
                        </div>

                        <div class="company__two-left-skill-item">
                            <h2><span class="counter">15</span>+</h2>
                            <h6>Years</h6>
                        </div>
                    </div>
                    <!-- <a class="btn-two" href="about.html">Discover more<i class="far fa-chevron-double-right"></i></a> -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="company__two-right dark__image t-right">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/about/mask-group-3.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Company Two Area End -->
<!-- About Solution Area Start -->
<div class="about__solution" data-background="{{asset('assets/frontend/assets/img/about/group-7.png')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8">
                <div class="about__solution-left xl-t-center">
                    <h2>Innovate, Integrate, Inspire</h2>
                </div>
            </div>
            <div class="col-xl-4">
                            
                <div class="banner__two-content-button about__solution-right t-right xl-t-center">						
                    <a class="btn-five" href="{{route('page',['name'=>'contact-us'])}}">Contact Us<i class="far fa-chevron-double-right"></i></a>
                    <img class="about__solution-right-shape left-right-animate" src="{{asset('assets/frontend/assets/img/shape/group-7.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Solution Area End -->
<!-- Company History Area Start-->
<div class="company__history section-padding">
    <div class="container">
        <div class="row mb-70">
            <div class="col-xl-12">
                <div class="company__history-title t-center">
                    <span class="subtitle-one">Our History</span>
                    <h2>Our Company History</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="company__history-area dark__image">
                    <div class="company__history-area-item">
                        <div class="company__history-area-item-left">
                            <img src="{{asset('assets/frontend/assets/img/about/history-1.jpg')}}" alt="">
                        </div>
                        <div class="company__history-area-item-right">
                            <div class="company__history-area-item-right-content mb-50 xl-mb-30">
                                <div class="company__history-area-item-right-content-date">
                                    <span>2009</span>
                                    <h5>Start Company</h5>
                                </div>
                                <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique</p>
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-items">
                        <div class="company__history-area-items-left order-last order-lg-first">
                            <div class="company__history-area-items-left-content mb-50 xl-mb-30">
                                <div class="company__history-area-items-left-content-date">
                                    <span>2010</span>
                                    <h5>Opening Office</h5>
                                </div>
                                <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique</p>
                            </div>
                        </div>
                        <div class="company__history-area-items-right">
                            <div class="company__history-area-items-right-image">
                                <img src="{{asset('assets/frontend/assets/img/about/history-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-item">
                        <div class="company__history-area-item-left">
                            <div class="company__history-area-item-left-image">
                                <img src="{{asset('assets/frontend/assets/img/about/history-3.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="company__history-area-item-right">
                            <div class="company__history-area-item-right-content mb-50 xl-mb-30">
                                <div class="company__history-area-item-right-content-date">
                                    <span>2013</span>
                                    <h5>Improve Management</h5>
                                </div>
                                <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique</p>
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-items">
                        <div class="company__history-area-items-left order-last order-lg-first">
                            <div class="company__history-area-items-left-content mb-50 xl-mb-30">
                                <div class="company__history-area-items-left-content-date">
                                    <span>2018</span>
                                    <h5>Open Research Team</h5>
                                </div>
                                <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique</p>
                            </div>
                        </div>
                        <div class="company__history-area-items-right">
                            <div class="company__history-area-items-right-image">
                                <img src="{{asset('assets/frontend/assets/img/about/history-4.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-item">
                        <div class="company__history-area-item-left">
                            <div class="company__history-area-item-left-image">
                                <img src="{{asset('assets/frontend/assets/img/about/history-5.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="company__history-area-item-right">
                            <div class="company__history-area-item-right-content">
                                <div class="company__history-area-item-right-content-date">
                                    <span>2023</span>
                                    <h5>Winning Award</h5>
                                </div>
                                <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Company History Area End-->

@endsection