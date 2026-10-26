@extends('frontend.layouts.master')
@section('title', 'Service Details | DS Innovative Solutions')
@section('content')

    <!-- start: Breadcrumb Section -->
    <section class="tj-page-header fix">
        <div class="hero-bg" data-bg-image="assets/images/hero/hero-bg.webp"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-page-header-content text-center">
                        <h1 class="tj-page-title tj-split-text-2">Service Details</h1>
                        <div class="tj-page-link tj-fade-anim" data-delay="0.3">
                            <span><i class="tji-home"></i></span>
                            <span>
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span><i class="tji-arrow-right"></i></span>
                            <span>
                                <span>Service Details</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Service Details Section -->
    <section class="tj-blog-section section-gap">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-8">
                    <div class="post-details-wrapper">
                        <div class="blog-images">
                            <img src="assets/images/services/service-details.webp" alt="Images" />
                        </div>
                        <h2 class="title">Cloud Computing: Transforming the Future of IT Solution</h2>
                        <div class="blog-text">
                            <p>
                                Cloud computing is revolutionizing the way businesses and individuals store, access, and
                                manage
                                data. It refers to the delivery of computing services—such as storage, servers,
                                networking, databases, software, and analytics—over the internet rather than relying on
                                local
                                servers or personal devices. This technology enables businesses to scale
                                efficiently, reduce costs, and enhance collaboration by providing on-demand access to
                                powerful
                                computing resources. One of the biggest advantages of cloud computing is
                                flexibility and scalability.
                            </p>
                            <p>
                                Cloud computing is categorized into different models, including Infrastructure as a Service
                                (IaaS), Platform as a Service (PaaS), and Software as a Service (SaaS), each
                                catering to different business needs. Popular cloud providers like Amazon Web Services
                                (AWS),
                                Microsoft Azure, and Google Cloud.
                            </p>
                            <ul class="tj_list">
                                <li><i class="tji-check-4"></i>Scalable IT Infrastructure</li>
                                <li><i class="tji-check-4"></i>High Data Security</li>
                                <li><i class="tji-check-4"></i>Disaster Recovery Solutions</li>
                                <li><i class="tji-check-4"></i>Flexible Storage Options</li>
                                <li><i class="tji-check-4"></i>Compliance and Support</li>
                                <li><i class="tji-check-4"></i>Reduced Hardware</li>
                                <li><i class="tji-check-4"></i>24/7 Cloud Monitoring</li>
                            </ul>
                            <div class="images-wrap">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="image-box">
                                            <img src="assets/images/services/service-details-2.webp" alt="Image" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="image-box">
                                            <img src="assets/images/services/service-details-3.webp" alt="Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-4">Our Range of Customer Services</h3>
                            <p>
                                We are committed to delivering top-notch customer services tailored meet your business
                                needs. Our
                                comprehensive range of IT solutions ensures seamless operations, enhanced
                                security, and optimized performance for businesses of all sizes., leveraging technology, or
                                designing more engaging digital experiences, our team is here to help you exceed
                                your customers' expectations every time. We help you understand your customers.
                            </p>
                            <div class="details-content-box">
                                <div class="service-details-item">
                                    <span class="number">01.</span>
                                    <h6 class="title">Increased Customer <br />Satisfaction</h6>
                                    <div class="desc">
                                        <p>By consistent, personalized experience, customers are more likely to feel valued
                                            a
                                            satisfied, which directly.</p>
                                    </div>
                                </div>
                                <div class="service-details-item">
                                    <div class="service-number">
                                        <span class="number">02.</span>
                                        <h6 class="title">Improved Operational <br />Efficiency</h6>
                                        <div class="desc">
                                            <p>With our tools and strategies, your customer support teams can handle
                                                inquiries faster,
                                                while automated systems.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-details-item">
                                    <div class="service-number">
                                        <span class="number">03.</span>
                                        <h6 class="title">Insights for Continuous Improvement</h6>
                                        <div class="desc">
                                            <p>Our data-driven approach provides team with valuable insights customer
                                                behavior, enabling
                                                to continual.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        @include('frontend.components.services-sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Service Details Section -->


@endsection
