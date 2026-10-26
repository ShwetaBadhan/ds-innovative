@extends('frontend.layouts.master')
@section('title', 'Our Projects | DS Innovative Solutions')
@section('content')

    <!-- start: Breadcrumb Section -->
    <section class="tj-page-header fix">
        <div class="hero-bg" data-bg-image="assets/images/hero/hero-bg.webp"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-page-header-content text-center">
                        <h1 class="tj-page-title tj-split-text-2">Our Projects</h1>
                        <div class="tj-page-link tj-fade-anim" data-delay="0.3">
                            <span><i class="tji-home"></i></span>
                            <span>
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span><i class="tji-arrow-right"></i></span>
                            <span>
                                <span>Project</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Project Section -->
    <section class="tj-project-section-2 section-gap">
        <div class="project-wrapper">
            <div class="container">
                <div class="row rg-30">
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/project-2.webp" alt="" />
                            </div>
                            <div class="project-content">
                                <div class="content-inner">
                                    <span class="categories"><a href="javascript:void(0)">Solution</a></span>
                                    <h4 class="title"><a href="javascript:void(0)">Cloud Migration Success</a></h4>
                                </div>
                                <a class="tj-icon-btn" href="javascript:void(0)">
                                    <i class="tji-arrow-right-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/project-3.webp" alt="" />
                            </div>
                            <div class="project-content">
                                <div class="content-inner">
                                    <span class="categories"><a href="javascript:void(0)">Solution</a></span>
                                    <h4 class="title"><a href="javascript:void(0)">Digital Growth Strategy</a></h4>
                                </div>
                                <a class="tj-icon-btn" href="javascript:void(0)">
                                    <i class="tji-arrow-right-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/project-4.webp" alt="" />
                            </div>
                            <div class="project-content">
                                <div class="content-inner">
                                    <span class="categories"><a href="javascript:void(0)">Solution</a></span>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile App Development</a></h4>
                                </div>
                                <a class="tj-icon-btn" href="javascript:void(0)">
                                    <i class="tji-arrow-right-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/project-1.webp" alt="" />
                            </div>
                            <div class="project-content">
                                <div class="content-inner">
                                    <span class="categories"><a href="javascript:void(0)">Solution</a></span>
                                    <h4 class="title"><a href="javascript:void(0)">Business Transformation</a></h4>
                                </div>
                                <a class="tj-icon-btn" href="javascript:void(0)">
                                    <i class="tji-arrow-right-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/project-5.webp" alt="" />
                            </div>
                            <div class="project-content">
                                <div class="content-inner">
                                    <span class="categories"><a href="javascript:void(0)">Solution</a></span>
                                    <h4 class="title"><a href="javascript:void(0)">Customer Experience</a></h4>
                                </div>
                                <a class="tj-icon-btn" href="javascript:void(0)">
                                    <i class="tji-arrow-right-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/project-6.webp" alt="" />
                            </div>
                            <div class="project-content">
                                <div class="content-inner">
                                    <span class="categories"><a href="javascript:void(0)">Solution</a></span>
                                    <h4 class="title"><a href="javascript:void(0)">Process Optimization</a></h4>
                                </div>
                                <a class="tj-icon-btn" href="javascript:void(0)">
                                    <i class="tji-arrow-right-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end: Project Section -->


@endsection
