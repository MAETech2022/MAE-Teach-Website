@extends('layouts.front_page')

@section('content')

<!-- Page Banner Area Start -->
<div class="page__banner" data-background="{{asset('assets/frontend/assets/img/pages/services-banner.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>Services</span>
                    <ul>
                        <li><a href="{{route('welcome')}}">Home</a><span>|</span></li>
                        <li>Services</li>
                    </ul>
                    <h1>Services we excel in</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->
<!-- Services Area Start -->
<div class="services__page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                <div class="services__one-item">
                    <div class="services__one-item-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/it_solutions.svg')}}" alt="">
                        <div class="services__one-item-icon-one">
                            <img src="{{asset('assets/frontend/assets/img/icon/it-solutions-1.svg')}}" alt="">
                        </div>
                    </div>
                    <h4><a href="services-right-sidebar.html">IT Solutions</a></h4>
                    <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                    <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                <div class="services__one-item">
                    <div class="services__one-item-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/qa-1.svg')}}" alt="">
                        <div class="services__one-item-icon-one">
                            <img src="{{asset('assets/frontend/assets/img/icon/qa-11.svg')}}" alt="">
                        </div>
                    </div>
                    <h4><a href="services-right-sidebar.html">Quality Assurance</a></h4>
                    <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                    <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                <div class="services__one-item">
                    <div class="services__one-item-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/cyber-security.svg')}}" alt="">
                        <div class="services__one-item-icon-one">
                            <img src="{{asset('assets/frontend/assets/img/icon/cyber-security-1.svg')}}" alt="">
                        </div>
                    </div>
                    <h4><a href="services-right-sidebar.html">Cyber security</a></h4>
                    <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                    <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
                <div class="services__one-item">
                    <div class="services__one-item-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/erp-crm.svg')}}" alt="">
                        <div class="services__one-item-icon-one">
                            <img src="{{asset('assets/frontend/assets/img/icon/erp-crm-1.svg')}}" alt="">
                        </div>
                    </div>
                    <h4><a href="services-right-sidebar.html">ERP’s / CRM’s</a></h4>
                    <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                    <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 lg-mb-30">
                <div class="services__one-item">
                    <div class="services__one-item-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/decision-making.svg')}}" alt="">
                        <div class="services__one-item-icon-one">
                            <img src="{{asset('assets/frontend/assets/img/icon/decision-making-1.svg')}}" alt="">
                        </div>
                    </div>
                    <h4><a href="services-right-sidebar.html">Decision Making Systems</a></h4>
                    <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                    <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                <div class="services__one-item">
                    <div class="services__one-item-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/it-consultancy.svg')}}" alt="">
                        <div class="services__one-item-icon-one">
                            <img src="{{asset('assets/frontend/assets/img/icon/it-consultancy-1.svg')}}" alt="">
                        </div>
                    </div>
                    <h4><a href="services-right-sidebar.html">IT Consultancy</a></h4>
                    <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                    <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                <div class="services__one-item">
                    <div class="services__one-item-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/bpr_1.svg')}}" alt="">
                        <div class="services__one-item-icon-one">
                            <img src="{{asset('assets/frontend/assets/img/icon/bpr_11.svg')}}" alt="">
                        </div>
                    </div>
                    <h4><a href="services-right-sidebar.html">BPR</a></h4>
                    <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                    <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="services__one-item">
                    <div class="services__one-item-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/technical_trainings.svg')}}" alt="">
                        <div class="services__one-item-icon-one">
                            <img src="{{asset('assets/frontend/assets/img/icon/technical_trainings-1.svg')}}" alt="">
                        </div>
                    </div>
                    <h4><a href="services-right-sidebar.html">Technical Trainings</a></h4>
                    <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                    <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="services__one-item">
                    <div class="services__one-item-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/seo_1.svg')}}" alt="">
                        <div class="services__one-item-icon-one">
                            <img src="{{asset('assets/frontend/assets/img/icon/seo_11.svg')}}" alt="">
                        </div>
                    </div>
                    <h4><a href="services-right-sidebar.html">Search Engine Optimization </a></h4>
                    <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                    <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="services__one-item">
                    <div class="services__one-item-icon">
                        <img src="{{asset('assets/frontend/assets/img/icon/marketing-strategy-and-plans.svg')}}" alt="">
                        <div class="services__one-item-icon-one">
                            <img src="{{asset('assets/frontend/assets/img/icon/marketing-strategy-and-plans-1.svg')}}" alt="">
                        </div>
                    </div>
                    <h4><a href="services-right-sidebar.html">Marketing Strategy and Plans</a></h4>
                    <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                    <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->
<!-- Cta Area Start -->
<div class="cta__two" data-background="{{asset('assets/frontend/assets/img/pages/group-9.png')}}">
    <img class="cta__two-shape left-right-animate2" src="{{asset('assets/frontend/assets/img/shape/getInTouch.png')}}" alt="">		
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-5 lg-mb-30">
                <div class="cta__two-title">
                    <span class="subtitle-one">Need any Help?</span>
                    <h2>Have Questions? Let's Connect</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="cta__two-info">
                    <!-- <div class="cta__two-info-item">
                        <div class="cta__two-info-item-icon">
                            <i class="fal fa-phone-alt icon-animation"></i>
                        </div>
                        <div>
                            <span>Call us 24/7</span>
                            <h6><a href="tel:+125(895)658568">+125 (895) 658 568</a></h6>
                        </div>
                    </div> -->
                    <div class="cta__two-info-item">
                        <div class="cta__two-info-item-icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div>
                            <span>Mail us anytime</span>
                            <h6><a href="mailto:info@maetech.co">info@maetech.co</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cta Area End -->

<div class="section-padding pb-0"></div>

@endsection