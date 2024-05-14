@extends('layouts.front_page')

@section('content')

<!-- Page Banner Area Start -->
<div class="page__banner" data-background="{{asset('assets/frontend/assets/img/pages/project_banner.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>Projects</span>
                    <ul>
                        <li><a href="{{route('welcome')}}">Home</a><span>|</span></li>
                        <li>Projects</li>
                    </ul>
                    <h1>Our Flagship Projects</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->
<!-- Portfolio Area Start -->
<div class="project__one section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mb-30">
                <div class="conbix__filter-button">
                    <button class="btn-five active" data-filter="*">All</button>
                    <button class="btn-five" data-filter=".corporate">Websites</button>
                    <button class="btn-five" data-filter=".finance">Web Portals</button>
                    <button class="btn-five" data-filter=".marketing">Mobile Apps</button>
                    <button class="btn-five" data-filter=".startup">AI Dashboards</button>
                </div>					  
            </div>
        </div>
        <div class="row conbix__filter-active">
            <div class="col-xl-4 col-md-6 mt-30">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/lms.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Learning Management System (LMS)</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-30 finance">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/e-campus.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>e-Campus</span> -->
                        <h4><a href="project-single.html">e-Campus</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-30 corporate">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/job-portal.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Job Portal</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-30 marketing">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/task-tracking-system.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Task Tracking System</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-30 startup corporate">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/project-2.jpg')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Automation of Board Meetings</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-30 finance">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/co-working-space.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Platform for Co-working Space</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-30 startup marketing">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/e-commerce.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">e-Commerce</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mt-30 corporate startup finance">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/my-loader-app.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">My Loader App</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mt-30 corporate startup finance">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/hr.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Resource Management System</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mt-30 corporate startup finance">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/ai-dashboards.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Digital and AI based disaster management solutions</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mt-30 corporate startup finance">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/imaam_managment.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Imaam Managment System</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mt-30 corporate startup finance">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/locum_tenens.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Locum Tenens</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-30 corporate startup finance">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/my_tutor.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">My Tutor</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-30 corporate startup finance">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/portfolio_management.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Portfolio Management</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mt-30 corporate startup finance">
                <div class="project__one-item">
                    <img class="img__full" src="{{asset('assets/frontend/assets/img/portfolio/sales_crm.png')}}" alt="">
                    <div class="project__one-item-content">
                        <!-- <span>Business Growth</span> -->
                        <h4><a href="project-single.html">Sales CRM</a></h4>
                    </div>
                    <div class="project__one-item-icon">
                        <a href="project-single.html"><i class="fal fa-long-arrow-up"></i></a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
<!-- Portfolio Area End -->

@endsection