@extends('layouts.front')

@section('title', 'Zona Integritas | LPPMP UNS')

@section('content')
<div class="stg-container">
    <!-- Hero Section -->
    <section>
        <div class="bringer-hero-block bringer-hero-type01">
            <!-- Main Line -->
            <div class="stg-row stg-bottom-gap-l stg-m-bottom-gap-l">
                <div class="stg-col-12 stg-tp-col-12 stg-m-col-12">
                    <!-- Title -->
                    <h1 class="bringer-page-title" data-split-appear="fade-up" data-split-unload="fade-up" style="text-align: center;">Selamat Datang di Web Zona Integritas LPPMP UNS Menuju WBK / WBMM</h1>
                </div>
            </div><!-- .stg-row -->

            <!-- Masked Media Container -->
            <div class="bringer-hero-media-wrap bringer-masked-bottom-right bringer-masked-block stg-bottom-gap-l" data-appear="zoom-out" data-unload="zoom-out">
                <!-- Masked Media -->
                <div class="bringer-masked-media bringer-masked-media bringer-parallax-media">
                    <img src="{{ asset('bringer/img/home/home01-hero.jpg') }}" alt="Unleash Your Creativity">
                </div>
                <!-- Content -->
                <div class="bringer-masked-content at-bottom-right">
                    <a href="#news-section" class="bringer-square-button" data-appear="fade-left">
                        <span class="bringer-icon bringer-icon-arrow-down"></span>
                    </a>
                </div>
            </div>

            <!-- Additional Information Line -->
            <div class="stg-row stg-valign-bottom">
                <div class="stg-col-3 stg-tp-col-3 stg-m-col-6" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                    <div class="bringer-counter bringer-small-counter" data-delay="3000">
                        <div class="bringer-counter-number" data-suffix="+">89</div>
                        <div class="bringer-counter-label">Indek Kepuasan Unit</div>
                    </div><!-- .bringer-counter -->
                </div>
                <div class="stg-col-3 stg-tp-col-3 stg-m-col-6" data-appear="fade-up" data-delay="300" data-unload="fade-up">
                    <div class="bringer-counter bringer-small-counter" data-delay="3000">
                        <div class="bringer-counter-number" data-suffix="+">94</div>
                        <div class="bringer-counter-label">Indek Kepuasan Lembaga</div>
                    </div><!-- .bringer-counter -->
                </div>
                <div class="stg-col-8 stg-tp-col-8 stg-m-col-12 stg-m-top-gap" data-appear="fade-up" data-delay="400" data-unload="fade-up">
                    <p class="bringer-large-text">Komitmen Bersama untuk Zona Integritas 🌟 | Pimpinan dan stakeholder LPPMP UNS menandatangani Pakta Integritas sebagai wujud nyata komitmen bersama dalam mewujudkan layanan yang transparan, akuntabel, dan bebas dari korupsi.</p>
                </div>
            </div><!-- .stg-row -->
        </div><!-- .bringer-hero-block -->
    </section>

    <!-- Section: News -->
    <section class="backlight-top" id="news-section">
        <div class="stg-row stg-large-gap">
            <div class="stg-col-6 stg-tp-bottom-gap-l" data-unload="fade-left">
                <div class="bringer-sticky-block">
                    <h2>Berita Terbaru</h2>
                    <p class="bringer-large-text">Tetap terhubung dengan informasi terkini seputar aktivitas dan pencapaian Zona Integritas LPPMP UNS. Kami berkomitmen untuk transparansi dan akuntabilitas dalam setiap langkah menuju pelayanan publik yang lebih baik.</p>
                    <div class="align-right">
                        <a href="portfolio-column.html" class="bringer-arrow-link">Explore all News</a>
                    </div>
                </div>
            </div>
            <div class="stg-col-6">
                <div class="bringer-grid-1col bringer-tp-grid-2cols stg-normal-gap bringer-parallax-media" data-stagger-appear="fade-left" data-stagger-unload="fade-right" data-threshold="0.25" data-stagger-delay="100">
                    <!-- Card Item -->
                    <div class="bringer-block bringer-portfolio-card">
                        <div class="bringer-portfolio-card-image">
                            <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('img/portfolio/portfolio01.jpg') }}" alt="" width="1200" height="1200">
                        </div>
                        <div class="bringer-portfolio-card-footer">
                            <div class="bringer-portfolio-card-title">
                                <span class="bringer-meta">Branding</span>
                                <h6>Curology</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </div>
                        <a href="portfolio-post01.html"></a>
                    </div><!-- .bringer-portfolio-card -->
                </div><!-- .bringer-grid -->
            </div>
        </div>
    </section>

    <!-- Section: Steps -->
    <section class="backlight-bottom divider-top">
        <div class="stg-bottom-gap-l">
            <h2 data-appear="fade-up" data-unload="fade-up">Lima Langkah Pembangunan Zona Integritas</h2>
            <p>Zona Integritas adalah upaya membangun unit kerja yang bebas dari korupsi dan mampu memberikan pelayanan publik secara optimal. Berikut adalah lima langkah strategis dalam pembangunan Zona Integritas: </p>
        </div>
        <!-- Step 01 Row -->
        <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
            <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                <div class="bringer-parallax-media">
                    <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('img/langkah/langkah_01.jpg') }}" alt="Step 01" width="960" height="960">
                </div>
            </div>
            <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                <span class="bringer-label">Langkah 01</span>
                <h4>Komitmen dan Deklarasi Pimpinan</h4>
                <p>Seluruh pimpinan dan pegawai menandatangani pakta integritas sebagai wujud komitmen membangun Zona Integritas. Deklarasi ini disampaikan kepada publik untuk menunjukkan transparansi dan akuntabilitas.</p>
            </div>  
        </div>
        <!-- Step 02 Row -->
        <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
            <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                <div class="bringer-parallax-media">
                    <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('img/langkah/langkah_02.jpg') }}" alt="Step 02" width="960" height="960">
                </div>
            </div>
            <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                <span class="bringer-label">Langkah 02</span>
                <h4>Penguatan Manajemen Perubahan</h4>
                <p>Membentuk tim kerja Zona Integritas yang solid untuk memastikan program berjalan dengan baik.</p>
                <p>Menetapkan agen perubahan yang menjadi teladan dalam mewujudkan budaya integritas dan reformasi birokrasi di lingkungan kerja.</p>
            </div>
            <div class="stg-col-3"><!-- Empty Column --></div>
        </div>
        <!-- Step 03 Row -->
        <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
            <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                <div class="bringer-parallax-media">
                    <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('img/langkah/langkah_03.jpg') }}" alt="Step 03" width="960" height="960">
                </div>
            </div>
            <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                <span class="bringer-label">Langkah 03</span>
                <h4>Peningkatan Kualitas Pelayanan Publik</h4>
                <p>Fokus pada kepuasan masyarakat melalui : <br>Penyederhanaan prosedur layanan, Inovasi layanan berbasis teknologi untuk kemudahan akses, dan Peningkatan aksesibilitas layanan agar masyarakat merasakan manfaat nyata.</p>
            </div>
        </div>
        <!-- Step 04 Row -->
        <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse" data-unload="fade-right">
            <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                <div class="bringer-parallax-media">
                    <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('img/langkah/langkah_04.jpg') }}" alt="Step 04" width="960" height="960">
                </div>
            </div>
            <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                <span class="bringer-label">Langkah 04</span>
                <h4>Monitoring &amp; Evaluasi</h4>
                <p>Dilakukan pemantauan dan evaluasi secara berkala untuk memastikan implementasi program berjalan efektif.</p>
                <p>Laporan hasil evaluasi digunakan sebagai bahan untuk : <br>Perbaikan dan penyempurnaan program, dan Memastikan program tetap berjalan di jalur yang tepat.</p>
            </div>
            <div class="stg-col-3"><!-- Empty Column --></div>
        </div>
        <!-- Step 05 Row -->
        <div class="stg-row stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
            <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                <div class="bringer-parallax-media">
                    <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('img/langkah/langkah_05.jpg') }}" alt="Step 05" width="960" height="960">
                </div>
            </div>
            <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                <span class="bringer-label">Langkah 05</span>
                <h4>Komitmen Berkelanjutan</h4>
                <p>Mengintegrasikan Zona Integritas dalam seluruh proses kerja untuk memastikan keberlanjutan program.</p>
                <p>Menjadikan budaya kerja bebas dari korupsi dan melayani publik sebagai norma yang terus diperkuat di seluruh lini organisasi.</p>
            </div>
        </div>
    </section>

    <!-- Section: Team -->
    <section  class="backlight-top divider-top">
        <!-- Section Title -->
        <div class="stg-row bringer-section-title">
            <div class="stg-col-10 stg-offset-1 stg-tp-col-12">
                <div class="align-center" data-stagger-appear="fade-up" data-stagger-unload="fade-up"
                    data-stagger-delay="100">
                    <h2>Meet the Team</h2>
                    <p class="bringer-large-text">Untuk mewujudkan pembangunan Zona Integritas, LPPMP UNS membentuk tim kerja yang solid dan berdedikasi. Tim ini terdiri dari individu-individu yang berkomitmen mendukung terciptanya lingkungan kerja yang transparan, akuntabel, dan berintegritas tinggi.</p>
                </div>
            </div>
        </div>
        <div class="stg-row stg-bottom-gap-l">
            <div class="stg-col-6 stg-tp-col-8 stg-tp-offset-2 stg-tp-bottom-gap-l" data-appear="fade-right" data-unload="fade-left">
                <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('img/team/sarwanto.jpeg') }}" alt="Prof. Dr. Sarwanto, S.Pd., M.Si." width="800" height="1200">
            </div>
            <div class="stg-col-6 stg-vertical-space-between" data-unload="fade-right">
                <!-- Content -->
                <div>
                    <div class="bringer-title-with-label stg-bottom-gap">
                        <h1 data-appear="fade-up">Prof. Dr. Sarwanto, S.Pd., M.Si.</h1>
                        <span class="bringer-label" data-appear="fade-up" data-delay="100">Ketua Lembaga Pengembangan dan Penjaminan Mutu Pendidikan</span>
                    </div>
                    <p data-appear="fade-up" data-delay="200">Perkembangan Teknologi Automasi dalam semua aspek kehidupan yang didukung oleh Internet of Thing, Artificial intelligent (AI) telah mempengaruhi proses akademik di Perguruan tinggi. Sebagai sebuah universitas berkelas dunia (world class university), Universitas Sebelas Maret (UNS) senantiasa melakukan peningkatan kualitas akademik secara berkelanjutan. Lembaga Pengembangan dan Penjaminan Mutu Pendidikan (LPPMP) diberi amanah oleh UNS untuk melaksanakan koordinasi, pelaksanaan, pemantauan, dan evaluasi kegiatan pembelajaran, pengembangan sistem pembelajaran, dan penjaminan mutu pendidikan.</p>
                </div>
                <!-- Contacts -->
                <div class="bringer-member-contacts">
                    <div class="bringer-member-contacts-list">
                        <a href="mailto:sarwanto@staff.uns.ac.id" data-appear="fade-left">sarwanto@staff.uns.ac.id</a>
                        <a href="tel:+62345556789" data-appear="fade-left" data-delay="100">+62-555-67-89</a>
                    </div>
                    <ul class="bringer-socials-list" data-stagger-appear="fade-up">
                        <li>
                            <a href="#" class="bringer-socials-facebook">
                                <i></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="bringer-socials-instagram">
                                <i></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="bringer-socials-behance">
                                <i></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="bringer-socials-dribbble">
                                <i></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Team Carousel -->
        <div class="swiper bringer-carousel" data-appear="fade-up" data-delay="200" data-tp-centered="0"
            data-unload="fade-up">
            <div class="swiper-wrapper">
                @foreach ($teams as $team)
                    <!-- Carousel Item -->
                    <div class="bringer-block bringer-carousel-card swiper-slide">
                        <div class="bringer-carousel-card-image">
                            <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ $team->image ? $team->image->getUrl() : asset('bringer/img/team/team01-thmb.jpg') }}"
                                alt="{{$team->name}}" width="600" height="900">
                        </div>
                        <div class="bringer-carousel-card-footer">
                            <div class="bringer-carousel-card-title">
                                <span class="bringer-meta">{{$team->position}}</span>
                                <h6>{{$team->name}}</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pharetra, metus eget tincidunt tristique, erat nulla sollicitudin dolor, vel lobortis mi erat quis lorem. Aenean aliquet pulvinar arcu et viverra. Phasellus ac imperdiet arcu. Donec ut ante dui. Sed mattis varius odio vitae gravida. Donec dignissim ante enim, eget tristique enim sodales sed. Donec varius, nulla eget congue sodales, dui nisi cursus urna, eu scelerisque quam erat facilisis diam. Sed sit amet ex nec purus luctus commodo. Praesent suscipit turpis nec dapibus cursus.</p>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </div>
                    </div><!-- .bringer-carousel-card -->
                    <!-- Carousel Item -->
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination bringer-dots"></div>
        </div><!-- .bringer-carousel -->
    </section>

</div><!-- .stg-container -->
@endsection