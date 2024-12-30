<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>Zona Integritas | Berita Terupdate</title>

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
<body class="bringer-fullscreen-page no-header-border no-footer-border disable-smooth-scroll">
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
                        {{-- <li class="{{ request()->routeIs("about") ? "current-menu-item" : "" }} {{ request()->is("team*") ? "current-menu-item" : "" }}">
                            <a href="{{ route('about') }}">About</a>
                        </li> --}}
                        <li class="{{ request()->routeIs("news") ? "current-menu-item" : "" }} {{ request()->is("articles/*") ? "current-menu-item" : "" }}">
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
        <!-- Slider Container -->
        <div class="bringer-slider-wrapper">
            <!-- Slider -->
            <div class="swiper bringer-slider" data-duration="800" data-effect="slide">
                <div class="swiper-wrapper">
                    @foreach ($news as $item)
                        <!-- Slider Item 01 -->
                        <div class="swiper-slide">
                            <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/portfolio/portfolio01-land.jpg') }}" alt="" width="1920" height="1280">
                            <div class="bringer-slide-content">
                                <div class="bringer-slide-content-inner bringer-slide-post-title">
                                    <span class="bringer-meta">{{ $item->categories->first()->name }} ({{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }})</span>
                                    <h4>{{ $item->title }}</h4>
                                </div>
                                <a href="{{route('blog-detail', $item->slug)}}"></a>
                            </div>
                        </div> 
                    @endforeach
                </div>
            </div><!-- .bringer-slider -->
            <!-- Slider Navigation -->
            <div class="bringer-slider-nav on-sides">
                <a href="#" class="bringer-slider-prev">
                    <span class="bringer-icon bringer-icon-arrow-left"></span>
                </a>
                <a href="#" class="bringer-slider-next">
                    <span class="bringer-icon bringer-icon-arrow-right"></span>
                </a>
            </div>
        </div>
	</main>

    <!-- Footer -->
    <footer id="bringer-footer" data-appear="fade-up" data-threshold="0.25" data-unload="fade-down">
        <div class="bringer-footer-line stg-container">
            <div class="align-center">
                Copyright &copy; 2024. All Rights Reserved.
            </div>
        </div><!-- bringer-footer-line -->
    </footer>

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
</body>
</html>