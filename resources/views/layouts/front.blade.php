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

    <!-- Example for Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                        <li class="{{ request()->routeIs("about") ? "current-menu-item" : "" }} {{ request()->is("team*") ? "menu-open" : "" }}">
                            <a href="{{ route('about') }}">About</a>
                        </li>
                        <li class="{{ request()->routeIs("news") ? "current-menu-item" : "" }} {{ request()->is("articles*") ? "menu-open" : "" }}">
                            <a href="{{ route('news') }}">News</a>
                        </li>
                        <li  class="{{ request()->routeIs("pengaduan") ? "current-menu-item" : "" }}">
                            <a href="{{ route('pengaduan') }}">Pengaduan</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Header Button -->
            <div class="bringer-header-rp">
                <a href="{{ route('pengaduan') }}" class="bringer-button">Ajukan Pengaduan</a>
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
                        <div class="stg-col-6 stg-tp-col-12 stg-tp-bottom-gap-l">
                            <div class="bringer-info-widget">
                                <a href="./" class="bringer-logo footer-logo">
                                    <img src="{{ asset('img/lppmp_uns.png') }}" alt="LPPMP UNS" width="210px" height="auto">
                                </a>
                                <div class="bringer-info-description" style="text-align:justify">Lembaga Pengembangan dan Penjaminan Mutu Pendidikan (LPPMP) Universitas Sebelas Maret (UNS) adalah lembaga yang bertugas meningkatkan mutu pendidikan di Universitas Sebelas Maret. Berfokus pada inovasi, pelatihan, dan penjaminan mutu, LPPMP berkomitmen mendukung visi UNS sebagai universitas berkelas dunia yang unggul dan berintegritas.</div>
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
                        <div class="stg-col-6 stg-tp-col-12">
                            <div class="bringer-widget">
                                <div class="bringer-menu-widget">
                                    <div class="stg-row">
                                        <div class="stg-col-4 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right" data-delay="100" data-unload="fade-left">
                                            <!-- Phone -->
                                            <div class="bringer-block stg-aspect-square stg-vertical-space-between">
                                                <a href="https://maps.app.goo.gl/2DSo5P8VJLFafe577" class="bringer-grid-item-link"></a>
                                                <div>
                                                    <h5>Visit Us <span class="bringer-accent">:</span></h5>
                                                    <p>Gedung Haris Mudjiman,<br>Ir. Sutami No.36A, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stg-col-8 stg-tp-col-6" data-appear="fade-left" data-delay="200" data-unload="fade-right">
                                            <iframe class="bringer-google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1172077818173!2d110.85344617455041!3d-7.562197974680359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16fdaaaaaaab%3A0x82f53d0de080406d!2sLPPMP%20UNS!5e0!3m2!1sid!2sid!4v1734888677436!5m2!1sid!2sid" width="auto" height="360px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
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
    <script src="{{ asset('bringer/js/st-core.js') }}"></script>
    <script src="{{ asset('bringer/js/classes.js') }}"></script>
    <script src="{{ asset('bringer/js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>
