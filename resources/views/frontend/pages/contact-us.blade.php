@extends('frontend.layouts.master')
@section('title', 'Contact Us | DS Innovative Solutions')
@section('content')

    <!-- start: Breadcrumb Section -->
    <section class="tj-page-header fix">
        <div class="hero-bg" data-bg-image="assets/images/hero/hero-bg.webp"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-page-header-content text-center">
                        <h1 class="tj-page-title tj-split-text-2">Contact us</h1>
                        <div class="tj-page-link tj-fade-anim" data-delay="0.3">
                            <span><i class="tji-home"></i></span>
                            <span>
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span><i class="tji-arrow-right"></i></span>
                            <span>
                                <span>Contact</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Contact Top Section -->
    <div class="tj-contact-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <span class="sub-title tj-fade-anim">[ Contact info ]</span>
                        <h2 class="sec-title tj-split-text-1">Reach Out Us Now!</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.1">
                        <div class="contact-icon">
                            <i class="tji-location"></i>
                        </div>
                        <h3 class="contact-title">Our Location</h3>
                        <p>993 Renner Burg, West Rond, MT 94251-030</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.3">
                        <div class="contact-icon">
                            <i class="tji-envelop"></i>
                        </div>
                        <h3 class="contact-title">Email us</h3>
                        <ul class="contact-list">
                            <li><a href="mailto:support@tekmino.com">support@tekmino.com</a></li>
                            <li><a href="mailto:info@tekmino.com">info@tekmino.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.5">
                        <div class="contact-icon">
                            <i class="tji-phone"></i>
                        </div>
                        <h3 class="contact-title">Call us</h3>
                        <ul class="contact-list">
                            <li><a href="tel:10095447818">+1 (009) 544-7818</a></li>
                            <li><a href="tel:10098801810">+1 (009) 880-1810</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.7">
                        <div class="contact-icon">
                            <i class="tji-chat"></i>
                        </div>
                        <h3 class="contact-title">Live chat</h3>
                        <ul class="contact-list">
                            <li><a href="mailto:livechat@tekmino.com">livechat@tekmino.com</a></li>
                            <li class="active"><a href="{{ route('contact-us') }}">Need help?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Contact Top Section -->

    <!-- start: Contact Section -->
    <section class="tj-contact-section-2 section-gap-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form contact-form-3 tj-fade-anim">
                        <h3 class="title">Feel Free Contact with Us!</h3>
                        <form id="contact-form" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="text" name="cfName" placeholder="Name*" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="email" name="cfEmail" placeholder="Email*" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="text" name="cfPhone" placeholder="Phone*" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <!-- <input type="text" name="cfSubject" placeholder="Subject*"> -->
                                        <div class="tj-nice-select-box">
                                            <div class="tj-select">
                                                <select name="cfSubject">
                                                    <option value="0">Subject*</option>
                                                    <option value="1">Managed IT Services</option>
                                                    <option value="2">Cloud Computing</option>
                                                    <option value="3">Cybersecurity Solutions</option>
                                                    <option value="4">IT Consulting & Strategy</option>
                                                    <option value="5">Software Development</option>
                                                    <option value="6">Network Infrastructure</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-input message-input">
                                        <textarea name="cfMessage" placeholder="Message*"></textarea>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button class="tj-primary-btn" type="submit">
                                        <span class="btn-text"><span>Submit Now</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-area tj-fade-anim" data-delay="0.5">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Contact Section -->


@endsection
