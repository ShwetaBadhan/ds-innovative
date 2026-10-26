@extends('frontend.layouts.master')
@section('title', 'Our Services | DS Innovative Solutions')
@section('content')

    <!-- start: Breadcrumb Section -->
    <section class="tj-page-header fix">
        <div class="hero-bg" data-bg-image="assets/images/hero/hero-bg.webp"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-page-header-content text-center">
                        <h1 class="tj-page-title tj-split-text-2">Our Services</h1>
                        <div class="tj-page-link tj-fade-anim" data-delay="0.3">
                            <span><i class="tji-home"></i></span>
                            <span>
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span><i class="tji-arrow-right"></i></span>
                            <span>
                                <span>Services</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Service Section -->
    <section class="tj-service-section section-gap">
        <div class="container">
            <div class="row rg-30">
                <div class="col-xl-4 col-md-6">
                    <div class="service-item service-item-2">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-computer"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="{{ route('service-details') }}">Managed IT Services</a></h4>
                                <p class="desc">Comprehensive IT management, including monitoring, maintenance, and
                                    support to
                                    keep your business running smoothly.</p>
                                <a class="tj-text-btn" href="{{ route('service-details') }}">
                                    <span class="btn-inner">
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                        <span class="btn-text"><span>Learn More</span></span>
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <span class="item-count">01.</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-item service-item-2">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-cloud"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="{{ route('service-details') }}">Cloud Computing</a></h4>
                                <p class="desc">Scalable cloud-based services, including migration, storage, and security,
                                    for
                                    enhanced flexibility and efficiency.</p>
                                <a class="tj-text-btn" href="{{ route('service-details') }}">
                                    <span class="btn-inner">
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                        <span class="btn-text"><span>Learn More</span></span>
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <span class="item-count">02.</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-item service-item-2">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-cybersecurity"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="{{ route('service-details') }}">Cybersecurity Solutions</a></h4>
                                <p class="desc">Advanced security measures, including firewall protection, threat
                                    detection, and
                                    compliance solutions, to safeguard your business.</p>
                                <a class="tj-text-btn" href="{{ route('service-details') }}">
                                    <span class="btn-inner">
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                        <span class="btn-text"><span>Learn More</span></span>
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <span class="item-count">03.</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-item service-item-2">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-consulting"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="{{ route('service-details') }}">IT Consulting & Strategy</a></h4>
                                <p class="desc">Expert guidance to optimize your IT infrastructure, streamline operations,
                                    and
                                    drive digital transformation.</p>
                                <a class="tj-text-btn" href="{{ route('service-details') }}">
                                    <span class="btn-inner">
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                        <span class="btn-text"><span>Learn More</span></span>
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <span class="item-count">04.</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-item service-item-2">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-development"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="{{ route('service-details') }}">Software Development</a></h4>
                                <p class="desc">Custom software solutions tailored to your business needs, including web
                                    and
                                    mobile application development.</p>
                                <a class="tj-text-btn" href="{{ route('service-details') }}">
                                    <span class="btn-inner">
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                        <span class="btn-text"><span>Learn More</span></span>
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <span class="item-count">05.</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-item service-item-2">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-network"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="{{ route('service-details') }}">Network Infrastructure</a></h4>
                                <p class="desc">Designing, implementing, and maintaining secure and high-performance
                                    network
                                    systems. to driven solution.</p>
                                <a class="tj-text-btn" href="{{ route('service-details') }}">
                                    <span class="btn-inner">
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                        <span class="btn-text"><span>Learn More</span></span>
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <span class="item-count">06.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Service Section -->



@endsection
