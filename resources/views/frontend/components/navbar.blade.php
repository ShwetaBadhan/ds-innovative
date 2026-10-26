 <!-- start: Header Area -->
 <header class="header-area header-1 header-7 header-absolute">
     <div class="header-bottom">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <div class="header-wrapper">
                         <!-- site logo -->
                         <div class="site_logo">
                             <a class="logo" href="{{ route('home') }}"><img
                                     src="assets/images/logos/primary-logo-light.webp" alt="Logo"></a>
                         </div>

                         <!-- navigation -->
                         <div class="menu-area d-none d-lg-inline-flex align-items-center">
                             <nav id="mobile-menu" class="mainmenu">
                                 <ul>
                                     <li><a href="{{ route('home') }}">Home</a>

                                     </li>
                                     <li><a href="{{ route('about-us') }}">About Us</a>

                                     </li>
                                     <li class="has-dropdown">
                                         <a href="{{ route('our-services') }}">Our Services</a>
                                         <ul class="sub-menu">
                                             <li><a href="{{ route('service-details') }}">It Solutions</a></li>
                                             <li><a href="{{ route('service-details') }}">Website Development</a></li>
                                             <li><a href="{{ route('service-details') }}">CRM Development</a></li>
                                             <li><a href="{{ route('service-details') }}">ERP Development</a></li>
                                             <li><a href="{{ route('service-details') }}">Ecommerce</a></li>
                                             <li><a href="{{ route('service-details') }}">Professional Shoots</a></li>
                                             <li><a href="{{ route('service-details') }}">Graphic Designing</a></li>
                                             <li><a href="{{ route('service-details') }}">Video Editing</a></li>
                                         </ul>
                                     </li>

                                     <li><a href="{{ route('our-projects') }}">Our Projects</a>
                                     <li><a href="{{ route('our-blogs') }}">Our Blogs</a>

                                     </li>
                                     <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                 </ul>
                             </nav>
                         </div>

                         <!-- header right info -->
                         <div class="header-right-item d-none d-lg-inline-flex">
                             <div class="number-wrapper"> <a class="number" href="tel:919592806528"><i
                                         class="tji-phone-2"></i><span>+91 - 9592806528</span></a></div>

                             <div class="header-button d-xl-block d-none">
                                 <a class="tj-primary-btn" href="{{ route('contact-us') }}">
                                     <span class="btn-text"><span>Get Started</span></span>
                                     <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                 </a>
                             </div>

                         </div>

                         <!-- menu bar -->
                         <button class="menu_btn mobile_menu_bar d-lg-none">
                             <span class="cubes">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </span>
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- end: Header Area -->
