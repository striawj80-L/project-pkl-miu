<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us - PT Mitra Inovasi Unggul</title>

    @vite(['resources/css/about.css', 'resources/js/about.js'])
</head>

<body>
    
    <!-- ================= NAVBAR ================= -->

<header class="navbar">

    <div class="nav-container">

        <!-- LOGO -->
        <a href="{{ route('about') }}" class="nav-logo">

            <img class="nav-logo-image" src="{{ asset('images/Logo MIU.png') }}" alt="Logo MIU">

            <div class="nav-logo-text">
                <strong>Mitra Inovasi Unggul</strong>
            </div>

        </a>


        <!-- NAVIGATION -->
        <nav class="nav-menu">

            <div class="nav-dropdown">
                <button class="nav-link active about-nav-trigger" type="button" aria-expanded="false" aria-haspopup="true">
                    About Us <span class="nav-chevron" aria-hidden="true"></span>
                </button>
                <div class="nav-dropdown-menu">
                    <a href="#timeline" class="nav-dropdown-link">Our Timeline</a>
                    <a href="#why-us" class="nav-dropdown-link">Why Us</a>
                    <a href="#we-value" class="nav-dropdown-link">We Value</a>
                    <a href="#commitment" class="nav-dropdown-link">MIU Commitment</a>
                </div>
            </div>

            <a href="{{ route('home') }}" class="nav-link">
                Home
            </a>

            <a href="{{ route('home') }}" class="nav-link">
                Product
            </a>

            <a href="{{ route('contact') }}" class="nav-link">
                Contact
            </a>

        </nav>


        <!-- MOBILE MENU -->
        <button class="hamburger" id="hamburger">

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>

</header>
    <!-- ================= HERO SECTION ================= -->

<section class="hero-section" id="home">

    <div class="hero-content">

        <p class="hero-subtitle">
            Memberikan dedikasi kami
        </p>

        <h1>
            PT Mitra Inovasi Unggul
        </h1>

        <p class="hero-description">
           MIU (PT. Mitra Inovasi Unggul ) adalah software house yang didirikan untuk membantu perusahaan mendapatkan Keunggulan dalam Bisnis.
        </p>

    </div>

</section>


    <!-- ================= ABOUT US ================= -->
    <section class="about-section" id="about">

        <div class="about-container">

            <!-- BAGIAN LOGO + TAGLINE -->
            <div class="about-brand">

                <img class="miu-logo" src="{{ asset('images/Logo MIU.png') }}" alt="Logo Mitra Inovasi Unggul">

                <h2>
                    Let's Transform<br>
                    and Scale with<br>
                    MIU
                </h2>

            </div>


            <!-- BAGIAN DESKRIPSI -->
            <div class="about-text">

                <p>
                    <strong>Mitra Inovasi Unggul (MIU)</strong> adalah software
                    house yang menyediakan berbagai solusi perangkat lunak.
                    Dengan pengalaman dalam menangani kebutuhan korporasi,
                    bank, gudang logistik, dan pusat logistik, MIU menghadirkan
                    sistem yang telah terintegrasi host-to-host dengan CESA 4.0.
                </p>

                <p>
                    Dibangun sejak tahun 2016 kami terus mengembangkan dan
                    meningkatkan layanan kami. Kami percaya bahwa teknologi
                    memiliki kekuatan untuk mengubah bisnis dan menciptakan
                    peluang baru.
                </p>

                <p>
                    Dengan fokus pada inovasi dan efisiensi sistem, kami
                    menyediakan layanan pengembangan perangkat lunak yang
                    dirancang untuk membantu perusahaan meningkatkan
                    produktivitas, efisiensi, dan pertumbuhan.
                </p>

            </div>

        </div>

    </section>


    <!-- ================= TIMELINE ================= -->
    <section class="timeline-section" id="timeline">

        <div class="timeline-header">

            <h2>Our Timeline</h2>

            <p>
                Perjalanan inovasi kami sejak berdiri 2016
            </p>

        </div>


        <!-- DETAIL TIMELINE -->
        <div class="timeline-detail">

            <div class="detail-content">
                <span>MILESTONE</span>
                <h3 id="detail-title">2016 · Awal Perjalanan</h3>
                <p id="detail-description">MIU memulai perjalanan pengembangan teknologi dan membangun fondasi perusahaan untuk menghadirkan solusi digital bagi kebutuhan bisnis.</p>
            </div>
            <div class="detail-year" id="detail-year">2016</div>

        </div>

        <!-- YEAR SELECTOR -->
        <div class="timeline" aria-label="Pilih tahun milestone" role="group">

            <div class="timeline-line"></div>


            <!-- 2016 -->
            <div class="timeline-item active" data-year="2016">

                <div class="timeline-card">

                    <span class="year">
                        2016
                    </span>

                    <h3>
                        Development of PT Cendana Eka Manunggal
                    </h3>

                </div>

                <button class="timeline-dot">
                    2016
                </button>

            </div>


            <!-- 2017 -->
            <div class="timeline-item" data-year="2017">

                <div class="timeline-card">

                    <span class="year">
                        2017
                    </span>

                    <h3>
                        Development of MIU K3 IT Inventory
                    </h3>

                </div>

                <button class="timeline-dot">
                    2017
                </button>

            </div>


            <!-- 2018 -->
            <div class="timeline-item" data-year="2018">

                <div class="timeline-card">

                    <span class="year">
                        2018
                    </span>

                    <h3>
                        Development of IT Cendana CN Barang Airlines
                    </h3>

                </div>

                <button class="timeline-dot">
                    2018
                </button>

            </div>


            <!-- 2023 -->
            <div class="timeline-item" data-year="2023">

                <div class="timeline-card">

                    <span class="year">
                        2023
                    </span>

                    <h3>
                        Development of CESA 4.0 Industry
                    </h3>

                </div>

                <button class="timeline-dot">
                    2023
                </button>

            </div>

        </div>


    </section>

    <!-- ================= WHY US ================= -->
    <section class="why-values-section" id="why-us" aria-labelledby="why-title">
        <div class="why-values-container">
            <div class="why-block">
                <h2 id="why-title">Why Us</h2>
                <p class="section-intro">Alasan perusahaan mempercayakan solusi digitalnya kepada MIU.</p>
                <div class="why-list">
                    <article class="why-item is-open">
                        <button class="why-trigger" type="button" aria-expanded="true">
                            <span class="why-number">01</span><span class="why-copy"><strong>Berpengalaman sejak 2018</strong><small>Terbukti berpengalaman sejak 2018, MIU telah dipercaya menangani kebutuhan software untuk perusahaan.</small></span><span class="why-chevron" aria-hidden="true">+</span>
                        </button>
                    </article>
                    <article class="why-item">
                        <button class="why-trigger" type="button" aria-expanded="false">
                            <span class="why-number">02</span><span class="why-copy"><strong>Terintegrasi dengan CEISA 4.0</strong><small>Sistem host-to-host dengan CEISA 4.0 mempermudah pelaporan kepabeanan secara otomatis dan real-time.</small></span><span class="why-chevron" aria-hidden="true">+</span>
                        </button>
                    </article>
                    <article class="why-item">
                        <button class="why-trigger" type="button" aria-expanded="false">
                            <span class="why-number">03</span><span class="why-copy"><strong>Akses Global &amp; Multibahasa</strong><small>Aplikasi berbasis web dapat diakses dari seluruh dunia, dilengkapi dengan fitur dan laporan dalam berbagai bahasa.</small></span><span class="why-chevron" aria-hidden="true">+</span>
                        </button>
                    </article>
                    <article class="why-item">
                        <button class="why-trigger" type="button" aria-expanded="false">
                            <span class="why-number">04</span><span class="why-copy"><strong>Dukungan Bilingual &amp; Multibahasa</strong><small>Tim support berpengalaman melayani kebutuhan berbahasa Indonesia, Inggris, dan Mandarin untuk kebutuhan Anda.</small></span><span class="why-chevron" aria-hidden="true">+</span>
                        </button>
                    </article>
                    <article class="why-item">
                        <button class="why-trigger" type="button" aria-expanded="false">
                            <span class="why-number">05</span><span class="why-copy"><strong>Fokus pada Efisiensi &amp; Inovasi</strong><small>MIU terus berinovasi untuk meningkatkan produktivitas dan membantu pertumbuhan bisnis.</small></span><span class="why-chevron" aria-hidden="true">+</span>
                        </button>
                    </article>
                </div>
            </div>

            <div class="values-block" id="we-value">
                <h2>We Value</h2>
                <p class="section-intro">Nilai yang menjadi pedoman kami dalam setiap kolaborasi.</p>
                <div class="values-grid">
                    <button class="value-card is-selected" type="button" aria-pressed="true">
                        <img class="value-icon" src="{{ asset('images/responsibility.jpg') }}" alt="" aria-hidden="true"><strong>Responsible</strong><span>Kami bertanggung jawab dengan semua tugas yang telah dipercayakan.</span>
                    </button>
                    <button class="value-card" type="button" aria-pressed="false">
                        <img class="value-icon" src="{{ asset('images/integrity.jpg') }}" alt="" aria-hidden="true"><strong>Integrity</strong><span>Kami mengedepankan integritas dengan menjaga kepercayaan dalam setiap keputusan.</span>
                    </button>
                    <button class="value-card" type="button" aria-pressed="false">
                        <img class="value-icon" src="{{ asset('images/inovation.jpg') }}" alt="" aria-hidden="true"><strong>Innovation</strong><span>Kami selalu berinovasi memberikan solusi terbaik di setiap peluang bisnis Anda.</span>
                    </button>
                </div>
                <p class="value-note" aria-live="polite">Bertanggung jawab atas setiap komitmen dan hasil kerja kami.</p>
            </div>
        </div>
    </section>

    <!-- ================= MIU COMMITMENT ================= -->
    <section class="commitment-section" id="commitment" aria-labelledby="commitment-title">
        <div class="commitment-container">
            <div class="commitment-points">
                <article class="commitment-point">
                    <h2>Memenuhi Kebutuhan Customer</h2>
                    <p>Kami memulai setiap proyek dengan pendekatan analitis dan empatik â€” memahami tantangan, alur kerja, dan tujuan bisnis Anda. Dengan demikian, solusi yang kami kembangkan tidak hanya fungsional, tetapi juga selaras dengan kebutuhan nyata perusahaan Anda.</p>
                </article>
                <article class="commitment-point">
                    <h2>Menemukan Solusi Terbaik</h2>
                    <p>Kami berkomitmen menghadirkan solusi yang efisien, scalable, dan sesuai konteks bisnis. Tim kami mengedepankan integrasi teknologi canggih agar hasil akhir benar-benar membawa dampak positif, bukan sekadar tampilan modern.</p>
                </article>
                <article class="commitment-point">
                    <h2>Meneruskan Service After-Sales</h2>
                    <p>Hubungan kami tidak berakhir setelah aplikasi siap dipakai. Kami terus mendampingi klien melalui update fitur, monitoring, dan technical support jika diperlukan. Tujuannya agar sistem tetap efisien, optimal, aman, dan berkembang seiring pertumbuhan bisnis Anda.</p>
                </article>
            </div>
            <div class="commitment-brand">
                <h2 id="commitment-title">MIU<br><span>Commitment</span></h2>
            </div>
        </div>
    </section>


    <!-- ================= FOOTER ================= -->
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-brand">
                <a class="footer-brand-heading" href="#home">
                    <img src="{{ asset('images/Logo MIU.png') }}" alt="">
                    <strong>Mita Inovasi Unggul</strong>
                </a>
                <p>MIU dan PT. Mitra Inovasi Unggul adalah Software House yang didirikan untuk menyediakan semua jenis Aplikasi Pembantu Perusahaan untuk mendapatkan Keunggulan Bisnis.</p>
                <small class="footer-copyright">Copyright &copy; 2026 PT Mitra Inovasi Unggul</small>
            </div>

            <nav class="footer-links" aria-label="Informasi">
                <h2>Informasi</h2>
                <a href="#home">About Us</a>
                <a href="#why-us">FAQs</a>
                <a href="{{ route('home') }}">Product</a>
                <a href="{{ route('contact') }}">Contact Us</a>
            </nav>

            <div class="footer-contact">
                <h2>Contact MIU</h2>
                <address>
                    <div class="footer-contact-row">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a8 8 0 0 0-8 8c0 5.7 8 12 8 12s8-6.3 8-12a8 8 0 0 0-8-8Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/></svg>
                        <span>Jl. Tanah Abang I No.68A RT.1/RW.5, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160</span>
                    </div>
                    <a class="footer-contact-row" href="tel:+6285814409262">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.6 10.8a15.5 15.5 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.2 11 11 0 0 0 3.4.5 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17.8 17.8 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11 11 0 0 0 .5 3.4 1 1 0 0 1-.2 1Z"/></svg>
                        <span>+62 858 1440 9262</span>
                    </a>
                    <a class="footer-contact-row" href="mailto:ptmitrainovasiunggul@yahoo.com">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4a2 2 0 0 0-2 2v1l10 6 10-6V6a2 2 0 0 0-2-2Zm2 5.3-9.5 5.7a1 1 0 0 1-1 0L2 9.3V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2Z"/></svg>
                        <span>ptmitrainovasiunggul@yahoo.com</span>
                    </a>
                </address>
            </div>
        </div>
    </footer>


    

</body>
</html>
