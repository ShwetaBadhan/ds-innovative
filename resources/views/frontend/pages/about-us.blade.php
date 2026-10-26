@extends('frontend.layouts.master')
@section('title','About Us | DS Innovative Solutions')
@section('content')

 <!-- start: Breadcrumb Section -->
        <section class="tj-page-header fix">
          <div class="hero-bg" data-bg-image="assets/images/hero/hero-bg.webp"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                  <h1 class="tj-page-title tj-split-text-2">About Us</h1>
                  <div class="tj-page-link tj-fade-anim" data-delay="0.3">
                    <span><i class="tji-home"></i></span>
                    <span>
                      <a href="{{ route('home') }}">Home</a>
                    </span>
                    <span><i class="tji-arrow-right"></i></span>
                    <span>
                      <span>About Us</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: Choose Section -->
        <section class="tj-choose-section fix section-gap">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="sec-heading">
                  <span class="sub-title tj-fade-anim">[ Why Chose Us ]</span>
                  <div class="sec-heading-inner">
                    <h2 class="sec-title tj-split-text-1">Reliable IT Solution, for Best Results.</h2>
                    <div class="tj-fade-anim">
                      <p class="desc">Our services are customized to meet your unique.</p>
                    </div>
                    <div class="tj-fade-anim" data-delay="0.5">
                      <a class="tj-primary-btn d-none d-lg-inline-flex" href="{{ route('about-us') }}">
                        <span class="btn-text"><span>Learn More</span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row rg-30">
              <div class="col-xl-3 col-md-6">
                <div class="choose-box tj-fade-anim" data-delay=".3" data-duration="1" data-direction="top">
                  <div class="choose-inner">
                    <div class="choose-icon">
                      <i class="tji-thumbs-up"></i>
                    </div>
                    <div class="choose-content">
                      <h4 class="title">Proven Track Record</h4>
                      <p class="desc">With a portfolio of successful projects and satisfied clients, we have a
                        reputation.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="choose-box tj-fade-anim" data-delay=".3" data-duration="1" data-direction="bottom">
                  <div class="choose-inner">
                    <div class="choose-icon">
                      <i class="tji-idea"></i>
                    </div>
                    <div class="choose-content">
                      <h4 class="title">Tailored Solutions</h4>
                      <p class="desc">Our services are customized to meet your unique business needs, ensuring.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="choose-box tj-fade-anim" data-delay=".3" data-duration="1" data-direction="top">
                  <div class="choose-inner">
                    <div class="choose-icon">
                      <i class="tji-rocket"></i>
                    </div>
                    <div class="choose-content">
                      <h4 class="title">Future Technologies</h4>
                      <p class="desc">Stay ahead of the competition with AI, cloud computing, and automation solutions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="choose-box tj-fade-anim" data-delay=".3" data-duration="1" data-direction="bottom">
                  <div class="choose-inner">
                    <div class="choose-icon">
                      <i class="tji-hand-2"></i>
                    </div>
                    <div class="choose-content">
                      <h4 class="title">24/7 Support</h4>
                      <p class="desc">Stay ahead of the competition with AI, cloud computing, and automation solutions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-lg-none text-center mt-40">
              <a class="tj-primary-btn" href="{{ route('about-us') }}">
                <span class="btn-text"><span>Learn More</span></span>
                <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
              </a>
            </div>
          </div>
        </section>
        <!-- end: Choose Section -->

        <!-- start: About Section -->
        <section class="tj-about-section tj-about-section-2 section-gap-x">
          <div class="container tj-about-container">
            <div class="row">
              <div class="col-lg-6 col-xxl-7 order-lg-1 order-2">
                <div class="about-left">
                  <div class="about-img">
                    <div class="img-reveal-1">
                      <img src="assets/images/about/h2-about-banner.webp" alt="Image" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xxl-5 order-lg-2 order-1">
                <div class="about-content-area fix">
                  <div class="sec-heading">
                    <span class="sub-title tj-fade-anim">[ About Tekmino ]</span>
                    <h2 class="sec-title tj-split-text-1">Driving Innovation Through AI and New Technology, Delivering
                      Tailored.</h2>
                  </div>
                  <div class="about-bottom">
                    <div class="about-logo tj-fade-anim" data-delay="0.3">
                      <div class="about-logo-icon">
                        <img src="assets/images/logos/logo-icon.webp" alt="" />
                      </div>
                      <div class="about-logo-text">
                        <img src="assets/images/logos/logo-text.webp" alt="" />
                      </div>
                    </div>
                    <div class="about-features-wrap tj-fade-anim" data-delay="0.5">
                      <div class="about-features">
                        <div class="about-features-item">
                          <h4 class="title">Our Mission</h4>
                          <p class="desc">Revolutionize the way you work the our solutions designed to meet the
                            challenges of today business lands revolutionize.</p>
                        </div>
                        <div class="about-features-item">
                          <h4 class="title">Our Vision</h4>
                          <p class="desc">Revolutionize the way you work the solutions designed to meet unique
                            challenges of today’s business landscape revolutionize.</p>
                        </div>
                      </div>
                      <div class="tj-fade-anim" data-delay="0.3">
                        <a class="tj-primary-btn style-2 style-3 mt-15" href="{{ route('about-us') }}">
                          <span class="btn-text"><span>Learn More</span></span>
                          <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-countup-section-2 section-gap-bottom pt-90">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="about-funfact funfact-3 tj-fade-anim">
                    <div class="countup-item">
                      <div class="countup-icon">
                        <i class="tji-hand"></i>
                      </div>
                      <div class="inline-content">
                        <span class="counter">10</span>
                        <span class="count-plus">K+</span>
                      </div>
                      <span class="count-text">Engaged Customers</span>
                    </div>
                    <div class="countup-item">
                      <div class="countup-icon">
                        <i class="tji-trophy"></i>
                      </div>
                      <div class="inline-content">
                        <span class="counter">99</span>
                        <span class="count-plus">%</span>
                      </div>
                      <span class="count-text">Customer Success Stories</span>
                    </div>
                    <div class="countup-item">
                      <div class="countup-icon">
                        <i class="tji-team"></i>
                      </div>
                      <div class="inline-content">
                        <span class="counter">80</span>
                        <span class="count-plus">+</span>
                      </div>
                      <span class="count-text">Team of Professionals</span>
                    </div>
                    <div class="countup-item">
                      <div class="countup-icon">
                        <i class="tji-growth"></i>
                      </div>
                      <div class="inline-content">
                        <span class="counter">10</span>
                        <span class="count-plus">x</span>
                      </div>
                      <span class="count-text">More Faster Growth</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: About Section -->

@endsection