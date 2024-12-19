<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>@yield('title', 'Zona Integritas | LPPMP UNS')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- Config -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bringer/css/config.css') }}">
    <!-- Libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bringer/css/libs.css') }}">
    <!-- Template Styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bringer/css/style.css') }}">
    <!-- Responsive -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bringer/css/config.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('bringer/img/favicon.ico') }}">
</head>
<body>
    @include('sweetalert::alert')
    <!-- Header -->
    <header id="bringer-header" class="is-frosted is-sticky" data-appear="fade-down" data-unload="fade-up">
        <!-- Desktop Header -->
        <div class="bringer-header-inner">
            <!-- Header Logo -->
            <div class="bringer-header-lp">
                <a href="#" class="bringer-logo">
                    <img src="{{ asset('bringer/img/logo.png') }}" alt="Zona Integritas | LPPMP UNS" width="124px" height="auto">
                </a>
            </div>
            <!-- Main Menu -->
            <div class="bringer-header-mp">
                <nav class="bringer-nav">
                    <ul class="main-menu" data-stagger-appear="fade-down" data-stagger-delay="75">
                        <li class="{{ request()->routeIs("home") ? "current-menu-item" : "" }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="about-me.html">About Me</a>
                                </li>
                                <li>
                                    <a href="team-member.html">Team Member</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="services.html">Our Services</a>
                                </li>
                                <li>
                                    <a href="service-details.html">Service Details</a>
                                </li>
                                <li>
                                    <a href="pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="faq.html">F.A.Q.</a>
                                </li>
                                <li>
                                    <a href="testimonials.html">Testimonials</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="portfolio-infinite-list.html">Infinite List</a>
                                </li>
                                <li>
                                    <a href="portfolio-slider.html">Slider</a>
                                </li>
                                <li>
                                    <a href="portfolio-column.html">Column Cards</a>
                                </li>
                                <li>
                                    <a href="portfolio-grid.html">Classic Grid</a>
                                </li>
                                <li class="bringer-menu-divider"></li>
                                <li>
                                    <a href="portfolio-post01.html">Portfolio Details 01</a>
                                </li>
                                <li>
                                    <a href="portfolio-post02.html">Portfolio Details 02</a>
                                </li>
                                <li>
                                    <a href="portfolio-post03.html">Portfolio Details 03</a>
                                </li>
                            </ul>
                        </li>
                        <li  class="{{ request()->routeIs("pengaduan") ? "current-menu-item" : "" }}">
                            <a href="{{ route('pengaduan') }}">Pengaduan</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Header Button -->
            <div class="bringer-header-rp">
                <a href="contacts.html" class="bringer-button">Ajukan Pengaduan</a>
            </div>
        </div>
        <!-- Mobile Header -->
        <div class="bringer-mobile-header-inner">
            <a href="./" class="bringer-logo">
                <img src="{{ asset('bringer/img/logo.png') }}" alt="Zona Integritas | LPPMP UNS" width="124px" height="auto">
            </a>
            <a href="#" class="bringer-mobile-menu-toggler">
                <i class="bringer-menu-toggler-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </i>
            </a>
        </div>
    </header>

    <!-- Page Main -->
    <main id="bringer-main">
        @yield('content')

        <!-- Footer -->
        <footer id="bringer-footer" data-appear="fade-up" data-unload="fade-down">
            <!-- Footer Widgets Area -->
            <div class="bringer-footer-widgets">
                <div class="stg-container">
                    <div class="stg-row" data-stagger-appear="fade-left" data-stagger-delay="100">
                        <div class="stg-col-5 stg-tp-col-12 stg-tp-bottom-gap-l">
                            <div class="bringer-info-widget">
                                <a href="./" class="bringer-logo footer-logo">
                                    <img src="{{ asset('bringer/img/logo.png') }}" alt="Zona Integritas | LPPMP UNS" width="124px" height="auto">
                                </a>
                                <div class="bringer-info-description">We are a passionate team of developers and designers who believe in the power of creativity. We help creative people create a strong online presence that shows their work and tells a story.</div>
                                <span class="bringer-label">Follow us:</span>
                                <ul class="bringer-socials-list" data-stagger-appear="fade-up" data-stagger-delay="75">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="bringer-socials-facebook">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="bringer-socials-instagram">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="bringer-socials-x">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="bringer-socials-tiktok">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="bringer-socials-patreon">
                                            <i></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="stg-col-2 stg-offset-1 stg-tp-col-4 stg-m-col-4">
                            <div class="bringer-widget">
                                <h6>Services</h6>
                                <div class="bringer-menu-widget">
                                    <ul>
                                        <li><a href="service-details.html">Branding</a></li>
                                        <li><a href="service-details.html">Marketing</a></li>
                                        <li><a href="service-details.html">Graphic Design</a></li>
                                        <li><a href="service-details.html">Web Design</a></li>
                                        <li><a href="service-details.html">Content Creation</a></li>
                                    </ul>
                                </div>
                            </div><!-- .bringer-widget -->
                        </div>
                        <div class="stg-col-2 stg-tp-col-4 stg-m-col-4">
                            <div class="bringer-widget">
                                <h6>About Us</h6>
                                <div class="bringer-menu-widget">
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="about-me.html">About Me</a></li>
                                        <li><a href="team-member.html">Our Team</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="contacts.html">Get in Touch</a></li>
                                    </ul>
                                </div>
                            </div><!-- .bringer-widget -->
                        </div>
                        <div class="stg-col-2 stg-tp-col-4 stg-m-col-4">
                            <div class="bringer-widget">
                                <h6>Resources</h6>
                                <div class="bringer-menu-widget">
                                    <ul>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="faq.html">Help Center</a></li>
                                        <li><a href="services.html">Our Services</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div><!-- .bringer-widget -->
                        </div>
                    </div><!-- .stg-row -->
                </div><!-- .stg-container -->
            </div><!-- .bringer-footer-widgets -->

            <!-- Footer Copyright Line -->
            <div class="bringer-footer-line stg-container">
                <div class="align-center">
                    Copyright &copy; 2024. All Rights Reserved.
                </div>
            </div><!-- bringer-footer-line -->
        </footer>
	</main>

    <!-- Right Click Protection Block -->
    {{-- <div class="bringer-rcp-wrap">
        <div class="bringer-rcp-overlay"></div>
        <div class="bringer-rcp-container">
            <h2>The context menu is not allowed on this page.</h2>
        </div>
    </div> --}}

    <!-- Dynamic Backlight -->
    <div class="bringer-backlight"></div>

    <!-- JS Scripts -->
    <script src="{{ asset('bringer/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('bringer/js/lib/libs.js') }}"></script>
    <script src="{{ asset('bringer/js/contact_form.js') }}"></script>
    <script src="{{ asset('bringer/js/st-core.js') }}"></script>
    <script src="{{ asset('bringer/js/classes.js') }}"></script>
    <script src="{{ asset('bringer/js/main.js') }}"></script>
</body>
</html>
