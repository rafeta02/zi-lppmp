@extends('layouts.front')

@section('title', 'Zona Integritas | LPPMP UNS')

@section('content')
<div class="stg-container">
    <!-- Hero Section -->
    <section>
        <div class="bringer-hero-block bringer-hero-type01">
            <!-- Main Line -->
            <div class="stg-row stg-bottom-gap-l stg-m-bottom-gap-l">
                <div class="stg-col-9 stg-tp-col-8 stg-m-col-12">
                    <!-- Title -->
                    <h1 class="bringer-page-title" data-split-appear="fade-up" data-split-unload="fade-up">Unleash Your Creativity And Bring IT to Reality</h1>
                </div>
                <div class="stg-col-3 stg-tp-col-4 stg-m-col-12">
                    <!-- Social Proof -->
                    <div class="bringer-hero-social-proof">
                        <div data-stagger-appear="fade-up" data-stagger-delay="100" data-stagger-unload="fade-up">
                            <img src="{{ asset('bringer/img/home/social-proof01.jpg') }}" alt="Client 01">
                            <img src="{{ asset('bringer/img/home/social-proof02.jpg') }}" alt="Client 02">
                            <img src="{{ asset('bringer/img/home/social-proof03.jpg') }}" alt="Client 03">
                            <a href="testimonials.html">24K+</a>
                        </div>
                        <p data-appear="fade-up" data-unload="fade-up" data-delay="200">Trusted by 24K+ clients</p>
                    </div>
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
                    <a href="#page01" class="bringer-square-button" data-appear="fade-left">
                        <span class="bringer-icon bringer-icon-arrow-down"></span>
                    </a>
                </div>
            </div>

            <!-- Additional Information Line -->
            <div class="stg-row stg-valign-bottom">
                <div class="stg-col-3 stg-tp-col-3 stg-m-col-6" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                    <div class="bringer-counter bringer-small-counter" data-delay="3000">
                        <div class="bringer-counter-number">420</div>
                        <div class="bringer-counter-label">Complated Projects</div>
                    </div><!-- .bringer-counter -->
                </div>
                <div class="stg-col-3 stg-tp-col-3 stg-m-col-6" data-appear="fade-up" data-delay="300" data-unload="fade-up">
                    <div class="bringer-counter bringer-small-counter" data-delay="3000">
                        <div class="bringer-counter-number" data-suffix="+">12</div>
                        <div class="bringer-counter-label">Years of Experience</div>
                    </div><!-- .bringer-counter -->
                </div>
                <div class="stg-col-6 stg-tp-col-6 stg-m-col-12 stg-m-top-gap" data-appear="fade-up" data-delay="400" data-unload="fade-up">
                    <p class="bringer-large-text">We help creative agencies, designers, and other creative people showcase their work and connect with clients.</p>
                </div>
            </div><!-- .stg-row -->
        </div><!-- .bringer-hero-block -->
    </section>

    <!-- Section: Steps -->
    <section class="backlight-top" id="page01">
        <div class="stg-bottom-gap-l">
            <h2 data-appear="fade-up" data-unload="fade-up">4 Steps to Brand Brilliance</h2>
        </div>
        <!-- Step 01 Row -->
        <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
            <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                <div class="bringer-parallax-media">
                    <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/home/step01.jpg') }}" alt="Step 01" width="960" height="960">
                </div>
            </div>
            <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                <span class="bringer-label">Step 01</span>
                <h4>Unleash Your Vision</h4>
                <p><span class="bringer-highlight">Deep Dive Discovery:</span> We'll immerse ourselves in your world, exploring your unique story, target audience, and aspirations. This is where we uncover the heart of your brand and unearth the spark that sets you apart.</p>
                <p><span class="bringer-highlight">Strategic Exploration:</span> We'll conduct thorough research, analyze your competitors, and identify opportunities to position your brand for success. This is where we map out the terrain and chart a course toward your goals.</p>
            </div>
        </div>
        <!-- Step 02 Row -->
        <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
            <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                <div class="bringer-parallax-media">
                    <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/home/step02.jpg') }}" alt="Step 02" width="960" height="960">
                </div>
            </div>
            <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                <span class="bringer-label">Step 02</span>
                <h4>Tailor-Made Masterpiece</h4>
                <p><span class="bringer-highlight">Brand Identity Creation:</span> We'll craft a visual identity that embodies your essence, from logo design to color palettes to typography. This is where we create a cohesive look and feel that resonates with your audience.</p>
                <p><span class="bringer-highlight">Compelling Content Development:</span> We'll weave captivating stories and craft messaging that speaks to the hearts and minds of your customers. This is where we create content that connects, engages, and inspires action.</p>
            </div>
            <div class="stg-col-3"><!-- Empty Column --></div>
        </div>
        <!-- Step 03 Row -->
        <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
            <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                <div class="bringer-parallax-media">
                    <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/home/step03.jpg') }}" alt="Step 03" width="960" height="960">
                </div>
            </div>
            <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                <span class="bringer-label">Step 03</span>
                <h4>Flawless Execution</h4>
                <p><span class="bringer-highlight">Expert Collaboration:</span> We'll work hand-in-hand with you, ensuring every detail aligns with your vision and exceeds expectations. This is where we bring together our diverse expertise to create something truly remarkable.</p>
                <p><span class="bringer-highlight">Meticulous Production:</span> We'll handle the technical aspects with precision, from seamless web development to high-quality graphic production. This is where we turn concepts into tangible realities, pixel-perfect and ready to shine.</p>
            </div>
        </div>
        <!-- Step 04 Row -->
        <div class="stg-row stg-valign-middle stg-tp-row-reverse" data-unload="fade-right">
            <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                <div class="bringer-parallax-media">
                    <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/home/step04.jpg') }}" alt="Step 04" width="960" height="960">
                </div>
            </div>
            <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                <span class="bringer-label">Step 04</span>
                <h4>Launch &amp; Beyond</h4>
                <p><span class="bringer-highlight">Strategic Launch:</span> We'll unveil your brand to the world with a tailored launch strategy that generates excitement and drives engagement. This is where we create a buzz and make your presence known.</p>
                <p><span class="bringer-highlight">Ongoing Optimization:</span> We'll monitor your progress, analyze data, and make continuous adjustments to ensure your brand stays ahead of the curve. This is where we embrace growth and adaptation.</p>
            </div>
            <div class="stg-col-3"><!-- Empty Column --></div>
        </div>
    </section>

    <!-- Section: About Us -->
    <section class="backlight-bottom divider-top">
        <div class="stg-row stg-large-gap stg-valign-middle stg-tp-column-reverse">
            <div class="stg-col-6" data-appear="fade-right" data-unload="fade-left">
                <h3>We are a passionate team of designers and developers.</h3>
                <p class="bringer-large-text">We are a passionate team of designers and developers who believe in the power of creativity. </p>
                <p>We are a team of passionate and experienced designers, developers, and marketers who specialize in helping businesses of all sizes achieve their goals. We believe that creativity is the key to success, and we are committed to helping our clients unleash their full potential.</p>
                <div class="align-right">
                    <a href="about-us.html" class="bringer-arrow-link">Learn More About Us</a>
                </div>
            </div>
            <div class="stg-col-6 stg-tp-bottom-gap-l stg-m-bottom-gap" data-unload="fade-right" data-appear="fade-left">
                <div class="bringer-parallax-media">
                    <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/home/about03.jpg') }}" alt="About Us" width="960" height="960">
                </div>
            </div>
        </div><!-- .stg-row -->
    </section>

    <!-- Section: Portfolio Carousel -->
    <section class="is-fullwidth is-stretched">
        <!-- Section Title -->
        <div class="stg-row bringer-section-title is-boxed">
            <div class="stg-col-8 stg-offset-2">
                <div class="align-center">
                    <h2 data-appear="fade-up" data-unload="fade-up">Our Work</h2>
                    <p class="bringer-large-text" data-appear="fade-up" data-unload="fade-up" data-delay="100">We are proud of our work, and we are always looking for new challenges. Take a look at some of our recent portfolio:</p>
                </div>
            </div>
        </div>
        <!-- Portfolio Carousel -->
        <div class="swiper bringer-carousel stg-bottom-gap-l" data-appear="fade-up" data-unload="fade-up" data-delay="200" data-count="4" data-m-count="1.5">
            <div class="swiper-wrapper">
                <!-- Card Item 01 -->
                <div class="bringer-block bringer-portfolio-card swiper-slide">
                    <div class="bringer-portfolio-card-image">
                        <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/portfolio/portfolio01.jpg') }}" alt="" width="1200" height="1200">
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
                                        
                <!-- Card Item 02 -->
                <div class="bringer-block bringer-portfolio-card swiper-slide">
                    <div class="bringer-portfolio-card-image">
                        <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/portfolio/portfolio02.jpg') }}" alt="" width="1200" height="1200">
                    </div>
                    <div class="bringer-portfolio-card-footer">
                        <div class="bringer-portfolio-card-title">
                            <span class="bringer-meta">Advertising</span>
                            <h6>Cookie Dough</h6>
                        </div>
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="portfolio-post02.html"></a>
                </div><!-- .bringer-portfolio-card -->
                                        
                <!-- Card Item 03 -->
                <div class="bringer-block bringer-portfolio-card swiper-slide">
                    <div class="bringer-portfolio-card-image">
                        <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/portfolio/portfolio03.jpg') }}" alt="" width="1200" height="1200">
                    </div>
                    <div class="bringer-portfolio-card-footer">
                        <div class="bringer-portfolio-card-title">
                            <span class="bringer-meta">Marketing</span>
                            <h6>Gaming Power</h6>
                        </div>
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="portfolio-post03.html"></a>
                </div><!-- .bringer-portfolio-card -->
                                        
                <!-- Card Item 04 -->
                <div class="bringer-block bringer-portfolio-card swiper-slide">
                    <div class="bringer-portfolio-card-image">
                        <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/portfolio/portfolio04.jpg') }}" alt="" width="1200" height="1200">
                    </div>
                    <div class="bringer-portfolio-card-footer">
                        <div class="bringer-portfolio-card-title">
                            <span class="bringer-meta">Advertising</span>
                            <h6>Riot Energy</h6>
                        </div>
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="portfolio-post04.html"></a>
                </div><!-- .bringer-portfolio-card -->
                                        
                <!-- Card Item 05 -->
                <div class="bringer-block bringer-portfolio-card swiper-slide">
                    <div class="bringer-portfolio-card-image">
                        <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/portfolio/portfolio05.jpg') }}" alt="" width="1200" height="1200">
                    </div>
                    <div class="bringer-portfolio-card-footer">
                        <div class="bringer-portfolio-card-title">
                            <span class="bringer-meta">Marketing</span>
                            <h6>Smoothie</h6>
                        </div>
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="portfolio-post05.html"></a>
                </div><!-- .bringer-portfolio-card -->
                                        
                <!-- Card Item 06 -->
                <div class="bringer-block bringer-portfolio-card swiper-slide">
                    <div class="bringer-portfolio-card-image">
                        <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/portfolio/portfolio06.jpg') }}" alt="" width="1200" height="1200">
                    </div>
                    <div class="bringer-portfolio-card-footer">
                        <div class="bringer-portfolio-card-title">
                            <span class="bringer-meta">Branding</span>
                            <h6>Positive Beverage</h6>
                        </div>
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="portfolio-post06.html"></a>
                </div><!-- .bringer-portfolio-card -->
                                        
                <!-- Card Item 07 -->
                <div class="bringer-block bringer-portfolio-card swiper-slide">
                    <div class="bringer-portfolio-card-image">
                        <img class="bringer-lazy" src="{{ asset('bringer/img/null.png') }}" data-src="{{ asset('bringer/img/portfolio/portfolio07.jpg') }}" alt="" width="1200" height="1200">
                    </div>
                    <div class="bringer-portfolio-card-footer">
                        <div class="bringer-portfolio-card-title">
                            <span class="bringer-meta">Branding</span>
                            <h6>Fashion Makeup</h6>
                        </div>
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="portfolio-post07.html"></a>
                </div><!-- .bringer-portfolio-card -->
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination bringer-dots"></div>
        </div><!-- .bringer-portfolio-carousel -->
        <div class="align-center" data-appear="fade-up" data-unload="fade-up" data-delay="100">
            <a href="portfolio-slider.html" class="bringer-button">Discover Full Portfolio</a>
        </div>
    </section>

    <!-- Section: Our Services -->
    <section class="backlight-top">
        <!-- Section Title -->
        <div class="stg-row bringer-section-title">
            <div class="stg-col-8 stg-offset-2">
                <div class="align-center">
                    <h2 data-appear="fade-up" data-unload="fade-up">Our Services</h2>
                    <p class="bringer-large-text" data-appear="fade-up" data-unload="fade-up" data-delay="100">We offer a wide range of creative services to help businesses of all sizes achieve their goals. Our services include:</p>
                </div>
            </div>
        </div>
        <!-- Services List -->
        <div class="bringer-detailed-list-wrap" data-appear="fade-up" data-unload="fade-up" data-delay="200">
            <ul class="bringer-detailed-list">
                <li>
                    <div class="bringer-detailed-list-title">
                        <h4>Branding<span class="bringer-accent">.</span></h4>
                    </div>
                    <div class="bringer-detailed-list-description">
                        <p>We weave visual stories and craft strategic messaging that resonate at heartstrings, build unwavering trust, and turn customers into fervent brand champions. Imagine seeing your logo come alive, not just a symbol but a rallying cry, an unwavering beacon in a sea of sameness. That's the power of branding we unleash.</p>
                    </div>
                    <div class="bringer-detailed-list-button">
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="service-details.html"></a>
                </li>
                <li>
                    <div class="bringer-detailed-list-title">
                        <h4>Marketing<span class="bringer-accent">.</span></h4>
                    </div>
                    <div class="bringer-detailed-list-description">
                        <p>We design data-driven campaigns that crackle with energy, ignite engagement like wildfire, and turn clicks into conversions. Picture social media abuzz with your brand, blog posts sparking curiosity, and targeted ads finding their perfect match. We're the storm that propels your brand to ever-higher heights.</p>
                    </div>
                    <div class="bringer-detailed-list-button">
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="service-details.html"></a>
                </li>
                <li>
                    <div class="bringer-detailed-list-title">
                        <h4>Graphic Design<span class="bringer-accent">.</span></h4>
                    </div>
                    <div class="bringer-detailed-list-description">
                        <p>We craft visual masterpieces that sing your brand's story in vibrant colors and captivating shapes. From logos that lodge in minds to infographics that make complex ideas sing, we inject emotional punch and crystal-clear clarity into every pixel. Let your visuals become the unforgettable face of your brand.</p>
                    </div>
                    <div class="bringer-detailed-list-button">
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="service-details.html"></a>
                </li>
                <li>
                    <div class="bringer-detailed-list-title">
                        <h4>Web Design<span class="bringer-accent">.</span></h4>
                    </div>
                    <div class="bringer-detailed-list-description">
                        <p>We sculpt user-friendly websites that convert visitors into loyal devotees, seamlessly blending stunning aesthetics with intuitive navigation and flawless experiences for every screen. Imagine your website as a warm, inviting space where potential customers linger, explore, and ultimately succumb to its charms. We craft that digital haven.</p>
                    </div>
                    <div class="bringer-detailed-list-button">
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="service-details.html"></a>
                </li>
                <li>
                    <div class="bringer-detailed-list-title">
                        <h4>Content Creation<span class="bringer-accent">.</span></h4>
                    </div>
                    <div class="bringer-detailed-list-description">
                        <p>We weave compelling narratives into blog posts, website copy, and social media content that resonate with your audience like a well-loved symphony. Picture search engines whispering your brand's name, and customers sharing your story with eager ears. We craft the voice that makes your brand sing.</p>
                    </div>
                    <div class="bringer-detailed-list-button">
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="service-details.html"></a>
                </li>
            </ul>
        </div>
        <div class="align-center stg-top-gap" data-appear="fade-up" data-unload="zoom-out" data-delay="100">
            <a href="services.html" class="bringer-button">Explore All Services</a>
        </div>
    </section>

    <!-- Section: CTA -->
    <section data-padding="bottom">
        <div class="bringer-masked-cta bringer-masked-block" data-unload="fade-down">
            <form action="mail-short.php" method="post" data-fill-error="Please, fill out the form." class="bringer-contact-form is-short bringer-masked-media" data-appear="fade-up">
                <div class="bringer-form-content bringer-cta-form">
                    <div class="bringer-cta-form-content" data-appear="fade-up" data-delay="100">
                        <div class="bringer-cta-title">Ready to set your Brand ablaze?</div>
                        <input type="email" id="subscribe_email" name="subscribe_email" placeholder="email@example.com" required>
                    </div>
                    <div class="bringer-cta-form-button" data-appear="fade-up" data-delay="200">
                        <button type="submit">
                            <span class="bringer-icon bringer-icon-arrow-submit"></span>
                        </button>
                    </div>
                    <div class="bringer-contact-form__response"></div>
                </div>
                <span class="bringer-form-spinner"></span>
            </form>
            <div class="bringer-masked-cta-content bringer-masked-content at-top-right">
                <p class="bringer-large-text" data-appear="fade-down">Let's craft a visual identity that ignites passion and loyalty. ✨</p>
            </div>
        </div>
    </section>
</div><!-- .stg-container -->
@endsection