@extends('layouts.front')

@section('title', 'Zona Integritas | LPPMP UNS')

@section('content')
<div class="stg-container">
    <!-- Section: Page Title -->
    <section class="backlight-bottom">
        <div class="stg-row stg-bottom-gap-l">
            <div class="stg-col-10 stg-offset-1 align-center">
                <h1 class="bringer-page-title" data-appear="fade-up" data-unload="fade-up">
                    {{ request()->query('form') == 'wbs' ? 'Whistle Blowing System (WBS)' : 'Ajukan Pengaduan' }}
                </h1>
                <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">
                    @if(request()->query('form') == 'wbs')
                        Sampaikan informasi terkait dugaan pelanggaran integritas, korupsi, atau tindakan tidak terpuji lainnya. Kami akan menjaga kerahasiaan identitas Anda.
                    @else
                        Kami menyediakan layanan pengaduan sebagai wujud komitmen Zona Integritas untuk menciptakan lingkungan kerja yang bersih, transparan, dan melayani. Sampaikan keluhan, kritik, atau saran Anda untuk membantu kami meningkatkan kualitas pelayanan dan memastikan akuntabilitas di setiap proses. Suara Anda penting bagi kami untuk mewujudkan tata kelola yang lebih baik dan berintegritas.
                    @endif
                </p>
            </div>
        </div>

        @if(request()->query('form') != 'wbs')
        <!-- Pengaduan Form -->
        <div class="stg-row stg-bottom-gap-l">
            <div class="stg-col-12" data-unload="fade-up">
                <div class="bringer-offset-image" data-bg-src="img/cta/contact-section-bg.jpg" data-appear="fade-up" data-threshold="0.25"></div>
                <form method="POST" action="{{ route("pengaduan-store") }}" enctype="multipart/form-data" class="bringer-contact-form bringer-block" data-fill-error="Please, fill out the contact form." data-appear="fade-right" data-threshold="0.25">
                    @csrf
                    <div class="bringer-form-content">
                        <!-- Error Response -->
                        <div class="bringer-contact-form__response" style="{{ $errors->any() ? 'display: block;' : '' }}">
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <!-- Field: Name -->
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" value="{{ old('name', '') }}" required>
                        <!-- Field: Email -->
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="email@example.com" value="{{ old('email', '') }}" required>
                        <!-- Field: Hal -->
                        <label for="email">Hal</label>
                        <input type="text" id="title" name="title" placeholder="Hal atau Judul Pengaduan" value="{{ old('title', '') }}" required>
                        <!-- Field: Message -->
                        <label for="pengaduan">Pengaduan</label>
                        <textarea id="description" name="description" placeholder="Detail Pengaduan" value="{{ old('description', '') }}" required></textarea>
                        <!-- Field: Captcha -->
                        <label for="captcha">Captcha</label>
                        <div class="captcha-container">
                            <img src="{{ captcha_src() }}" alt="CAPTCHA Image" id="captcha-image">
                            <button type="button" onclick="refreshCaptcha()" class="captcha-reload">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </div>
                        <input type="text" id="captcha" name="captcha" placeholder="Captcha" required>
                        <!-- Form Button -->
                        <button type="submit" value="Send Message">Submit</button>
                    </div>
                    <span class="bringer-form-spinner"></span>
                </form>
            </div>
        </div>
        @else
        <!-- WBS Form -->
        <div class="stg-row stg-bottom-gap-l">
            <div class="stg-col-12" data-unload="fade-up">
                <div class="bringer-offset-image" data-bg-src="img/cta/contact-section-bg.jpg" data-appear="fade-up" data-threshold="0.25"></div>
                <form method="POST" action="{{ route("wbs-store") }}" enctype="multipart/form-data" class="bringer-contact-form bringer-block" data-fill-error="Please, fill out the form." data-appear="fade-right" data-threshold="0.25">
                    @csrf
                    <div class="bringer-form-content">
                        <!-- Error Response -->
                        <div class="bringer-contact-form__response" style="{{ $errors->any() ? 'display: block;' : '' }}">
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <h3 class="form-section-title">Identitas Pelapor</h3>
                        <!-- Field: NIP -->
                        <label for="wbs_nip_pelapor">NIP</label>
                        <input type="text" id="wbs_nip_pelapor" name="wbs_nip_pelapor" placeholder="Nomor Induk Pegawai" value="{{ old('wbs_nip_pelapor', '') }}" required>
                        
                        <!-- Field: Nama Pelapor -->
                        <label for="wbs_nama_pelapor">Nama Lengkap</label>
                        <input type="text" id="wbs_nama_pelapor" name="wbs_nama_pelapor" placeholder="Nama Lengkap Pelapor" value="{{ old('wbs_nama_pelapor', '') }}" required>
                        
                        <!-- Field: No Telp -->
                        <label for="wbs_no_telp">Nomor Telepon</label>
                        <input type="tel" id="wbs_no_telp" name="wbs_no_telp" placeholder="Nomor Telepon yang Dapat Dihubungi" value="{{ old('wbs_no_telp', '') }}" required>

                        <h3 class="form-section-title">Identitas Terlapor</h3>
                        <!-- Field: Nama Terlapor -->
                        <label for="wbs_nama_terlapor">Nama Terlapor</label>
                        <input type="text" id="wbs_nama_terlapor" name="wbs_nama_terlapor" placeholder="Nama Lengkap Terlapor" value="{{ old('wbs_nama_terlapor', '') }}" required>
                        
                        <!-- Field: Jabatan -->
                        <label for="wbs_jabatan">Jabatan</label>
                        <input type="text" id="wbs_jabatan" name="wbs_jabatan" placeholder="Jabatan Terlapor" value="{{ old('wbs_jabatan', '') }}" required>
                        
                        <!-- Field: Satuan Kerja -->
                        <label for="wbs_satuan_kerja">Satuan Kerja</label>
                        <input type="text" id="wbs_satuan_kerja" name="wbs_satuan_kerja" placeholder="Satuan Kerja Terlapor" value="{{ old('wbs_satuan_kerja', '') }}" required>

                        <h3 class="form-section-title">Pengaduan/Whistle Blowing System</h3>
                        <!-- Field: Perbuatan/Tindakan yang Dilaporkan -->
                        <label for="wbs_perbuatan">Perbuatan/Tindakan yang Dilaporkan</label>
                        <textarea id="wbs_perbuatan" name="wbs_perbuatan" placeholder="Jelaskan secara detail perbuatan atau tindakan yang dilaporkan" required>{{ old('wbs_perbuatan', '') }}</textarea>
                        
                        <!-- Field: Perkara yang Berkaitan -->
                        <label for="wbs_perkara">Perkara yang Berkaitan dengan Pengaduan</label>
                        <textarea id="wbs_perkara" name="wbs_perkara" placeholder="Jelaskan perkara atau konteks yang berkaitan dengan pengaduan" required>{{ old('wbs_perkara', '') }}</textarea>

                        <!-- Field: Captcha -->
                        <label for="wbs_captcha">Captcha</label>
                        <div class="captcha-container">
                            <img src="{{ captcha_src() }}" alt="CAPTCHA Image" id="wbs-captcha-image">
                            <button type="button" onclick="refreshWbsCaptcha()" class="captcha-reload">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </div>
                        <input type="text" id="wbs_captcha" name="wbs_captcha" placeholder="Captcha" required>
                        
                        <!-- Form Button -->
                        <button type="submit" value="Submit WBS">Submit WBS</button>
                    </div>
                    <span class="bringer-form-spinner"></span>
                </form>
            </div>
        </div>
        @endif
    </section>

    <!-- Section: Let's Talk -->
    <section class="divider-bottom">
        <!-- Section Title -->
        <div class="stg-row bringer-section-title">
            <div class="stg-col-8 stg-offset-2">
                <div class="align-center">
                    <h2 data-appear="fade-up" data-unload="fade-up">Mari Berkomunikasi! 🗣</h2>
                    <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">Jika Anda memiliki pertanyaan, membutuhkan informasi, atau hanya ingin berkomunikasi dengan LPPMP UNS, kami selalu siap membantu. Hubungi kami melalui kanal resmi berikut untuk menjalin komunikasi yang lebih baik. Suara Anda adalah bagian dari perjalanan kami menuju pelayanan yang unggul!</p>
                </div>
            </div>
        </div>
        <!-- Contacts Grid -->
        <div class="stg-row" data-stagger-appear="fade-up" data-delay="200" data-stagger-unload="fade-up">
            <div class="stg-col-4 stg-tp-col-6 stg-tp-bottom-gap">
                <!-- Phone -->
                <div class="bringer-block stg-aspect-square stg-vertical-space-between">
                    <a href="tel:+12345556789" class="bringer-grid-item-link"></a>
                    <div>
                        <h5>Phone<span class="bringer-accent">.</span></h5>
                        <h6>+1 (234) 555-67-89</h6>
                    </div>
                    <p>Telepon langsung tim kami yang siap membantu. Kami dengan senang hati menjawab setiap pertanyaan Anda seputar Zona Integritas dan layanan yang kami sediakan!</p>
                </div>
            </div>
            <div class="stg-col-4 stg-tp-col-6 stg-tp-bottom-gap">
                <!-- Email -->
                <div class="bringer-block stg-aspect-square stg-vertical-space-between">
                    <a href="mailto:bringer@example.com" class="bringer-grid-item-link"></a>
                    <div>
                        <h5>Email<span class="bringer-accent">.</span></h5>
                        <h6>bringer@example.com</h6>
                    </div>
                    <p>Sampaikan pesan Anda secara detail. Kami akan segera merespons untuk mendiskusikan masukan, pertanyaan, atau saran Anda terkait implementasi Zona Integritas lebih lanjut. Suara Anda sangat berarti bagi kami!</p>
                </div>
            </div>
            <div class="stg-col-4 stg-tp-col-12">
                <!-- Social Media -->
                <div class="bringer-block stg-aspect-square stg-tp-aspect-rectangle stg-vertical-space-between">
                    <div>
                        <h5>Social Media<span class="bringer-accent">.</span></h5>
                        <ul class="bringer-socials-list stg-small-gap" data-stagger-appear="fade-up" data-stagger-delay="75">
                            <li>
                                <a href="#" target="_blank" class="bringer-socials-facebook">
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
                    <p>Tetap terhubung dengan kami melalui media sosial untuk mendapatkan informasi terkini tentang implementasi Zona Integritas, inovasi pelayanan publik, dan komitmen kami dalam mewujudkan lingkungan kerja yang bersih, transparan, dan melayani.</p>
                </div>
            </div>
        </div>
    </section>
</div><!-- .stg-container -->
@endsection

@section('styles')
<style>
    .form-tabs {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
        border-bottom: 1px solid #e9ecef;
    }
    
    .tab-button {
        padding: 12px 24px;
        font-weight: 600;
        margin: 0 10px;
        color: #6c757d;
        position: relative;
        transition: all 0.3s ease;
        text-decoration: none;
    }
    
    .tab-button:hover {
        color: #343a40;
    }
    
    .tab-button.active {
        color: #007bff;
    }
    
    .tab-button.active:after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: #007bff;
    }
    
    .form-section-title {
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #dee2e6;
    }
</style>
@endsection

@section('scripts')
<script type="text/javascript">
    function refreshCaptcha() {
        var captcha = document.getElementById('captcha-image');
        captcha.src = captcha.src + '?' + Math.random();
    }

    function refreshWbsCaptcha() {
        var captcha = document.getElementById('wbs-captcha-image');
        captcha.src = captcha.src + '?' + Math.random();
    }
</script>
@endsection