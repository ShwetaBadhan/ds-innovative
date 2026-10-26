@extends('frontend.layouts.master')
@section('title', 'Our Blogs | DS Innovative Solutions')
@section('content')

    <!-- start: Breadcrumb Section -->
    <section class="tj-page-header fix">
        <div class="hero-bg" data-bg-image="assets/images/hero/hero-bg.webp"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-page-header-content text-center">
                        <h1 class="tj-page-title tj-split-text-2">Blogs</h1>
                        <div class="tj-page-link tj-fade-anim" data-delay="0.3">
                            <span><i class="tji-home"></i></span>
                            <span>
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span><i class="tji-arrow-right"></i></span>
                            <span>
                                <span>Blogs</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Blog Section -->
    <section class="tj-blog-section section-gap">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-8">
                    <div class="blog-post-wrapper">
                        <article class="blog-item tj-fade-anim">
                            <div class="blog-thumb">
                                <a href="{{ route('blog-details') }}"><img src="assets/images/blog/blog-details.webp"
                                        alt="" /></a>
                                <div class="blog-date">
                                    <span class="date">28</span>
                                    <span class="month">OCT</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="categories"><a href="{{ route('blog-details') }}">Solution</a></span>
                                    <span>By <a href="{{ route('blog-details') }}">Ellinien Loma</a></span>
                                </div>
                                <h3 class="title"><a href="{{ route('blog-details') }}">How to Successfully Migrate Your
                                        Business to
                                        the
                                        Cloud</a></h3>
                                <p class="desc">
                                    In today’s fast-paced business environment, the key to staying ahead of the competition
                                    lies in
                                    embracing innovation. At [Company Name], we specialize in unlocking your
                                    business’s full potential by providing tailored, forward-thinking solutions that drive
                                    growth,
                                    efficiency, and lasting success.
                                </p>
                                <a class="tj-primary-btn" href="{{ route('blog-details') }}">
                                    <span class="btn-text"><span>Read More</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                </a>
                            </div>
                        </article>
                        <article class="blog-item tj-fade-anim">
                            <div class="blog-thumb">
                                <a href="{{ route('blog-details') }}"><img src="assets/images/blog/blog-post-2.webp"
                                        alt="" /></a>
                                <div class="blog-date">
                                    <span class="date">28</span>
                                    <span class="month">OCT</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="categories"><a href="{{ route('blog-details') }}">Solution</a></span>
                                    <span>By <a href="{{ route('blog-details') }}">Ellinien Loma</a></span>
                                </div>
                                <h3 class="title"><a href="{{ route('blog-details') }}">Building a Stronger Workforce with IT
                                        Training</a>
                                </h3>
                                <p class="desc">
                                    In today’s fast-paced business environment, the key to staying ahead of the competition
                                    lies in
                                    embracing innovation. At [Company Name], we specialize in unlocking your
                                    business’s full potential by providing tailored, forward-thinking solutions that drive
                                    growth,
                                    efficiency, and lasting success.
                                </p>
                                <a class="tj-primary-btn" href="{{ route('blog-details') }}">
                                    <span class="btn-text"><span>Read More</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                </a>
                            </div>
                        </article>
                        <article class="blog-item tj-fade-anim">
                            <div class="blog-thumb">
                                <a href="{{ route('blog-details') }}"><img src="assets/images/blog/blog-post-3.webp"
                                        alt="" /></a>
                                <div class="blog-date">
                                    <span class="date">28</span>
                                    <span class="month">OCT</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="categories"><a href="{{ route('blog-details') }}">Solution</a></span>
                                    <span>By <a href="{{ route('blog-details') }}">Ellinien Loma</a></span>
                                </div>
                                <h3 class="title"><a href="{{ route('blog-details') }}">How IT Solutions are Transforming
                                        Businesses</a>
                                </h3>
                                <p class="desc">
                                    In today’s fast-paced business environment, the key to staying ahead of the competition
                                    lies in
                                    embracing innovation. At [Company Name], we specialize in unlocking your
                                    business’s full potential by providing tailored, forward-thinking solutions that drive
                                    growth,
                                    efficiency, and lasting success.
                                </p>
                                <a class="tj-primary-btn" href="{{ route('blog-details') }}">
                                    <span class="btn-text"><span>Read More</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                </a>
                            </div>
                        </article>
                        <div class="tj-pagination d-flex">
                            <ul>
                                <li>
                                    <span aria-current="page" class="page-numbers current">1</span>
                                </li>
                                <li>
                                    <a class="page-numbers" href="#">2</a>
                                </li>
                                <li>
                                    <a class="page-numbers" href="#">3</a>
                                </li>
                                <li>
                                    <a class="next page-numbers" href="#"><i class="tji-arrow-right-2"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-sidebar-widget widget-search tj-fade-anim">
                            <h4 class="widget-title">Search here</h4>
                            <div class="search-box">
                                <form action="#">
                                    <input type="search" name="search" id="searchTwo" placeholder="Search here" />
                                    <button type="submit" value="search">
                                        <i class="tji-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="tj-sidebar-widget tj-recent-posts tj-fade-anim">
                            <h4 class="widget-title">Related post</h4>
                            <ul>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ route('blog-details') }}"> <img src="assets/images/blog/post-1.webp"
                                                alt="Blog" /></a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">
                                            <a href="{{ route('blog-details') }}">The Top 5 IT Challenges Faced by
                                                Enterprises</a>
                                        </h6>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>04 OCT 2025</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ route('blog-details') }}"> <img src="assets/images/blog/post-2.webp"
                                                alt="Blog" /></a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">
                                            <a href="{{ route('blog-details') }}">Optimizing Your IT Budget: Tips and
                                                Strategies</a>
                                        </h6>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>02 JAN 2025</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ route('blog-details') }}"> <img src="assets/images/blog/post-3.webp"
                                                alt="Blog" /></a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">
                                            <a href="{{ route('blog-details') }}">Driving Innovation and Efficient in Tech</a>
                                        </h6>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>24 FEB 2025</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tj-sidebar-widget widget-categories tj-fade-anim">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                <li>
                                    <a href="{{ route('blog-details') }}">Development<span class="number">(03)</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}">Cybersecurity<span class="number">(02)</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}">Technology<span class="number">(03)</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}">Innovation<span class="number">(06)</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}">Automation<span class="number">(04)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="tj-sidebar-widget widget-tag-cloud tj-fade-anim">
                            <h4 class="widget-title">Tags</h4>
                            <nav>
                                <div class="tagcloud">
                                    <a href="{{ route('blog-details') }}">Solution</a>
                                    <a href="{{ route('blog-details') }}">Data</a>
                                    <a href="{{ route('blog-details') }}">Software</a>
                                    <a href="{{ route('blog-details') }}">Tech</a>
                                    <a href="{{ route('blog-details') }}">Security</a>
                                    <a href="{{ route('blog-details') }}">Focus</a>
                                    <a href="{{ route('blog-details') }}">Tech</a>
                                    <a href="{{ route('blog-details') }}">Optimize</a>
                                    <a href="{{ route('blog-details') }}">Cloud</a>
                                    <a href="{{ route('blog-details') }}">Drive</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Blog Section -->



@endsection
