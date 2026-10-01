<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#0a1b4d">
        <meta name="description" content="Kenali Mitra Inovasi Unggul, perjalanan, nilai, dan komitmen kami dalam menghadirkan solusi digital industri.">
        <title>About Us | Mitra Inovasi Unggul</title>
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="m-0 font-sans text-slate-700 antialiased">
        <header id="about-home">
            <section class="about-hero" aria-labelledby="about-title">
                <x-navbar active="about" />
                <div class="about-hero__content" data-reveal="up">
                    <p>Memberikan dedikasi kami</p>
                    <h1 id="about-title">PT Mitra Inovasi Unggul</h1>
                    <p class="about-hero__summary">
                        MIU (PT. Mitra Inovasi Unggul) adalah software house yang didirikan untuk
                        membantu perusahaan mendapatkan keunggulan dalam bisnis.
                    </p>
                </div>
            </section>
        </header>

        <main>
            <section class="about-intro" aria-labelledby="about-intro-title">
                <div class="about-intro__brand" data-reveal="left">
                    <img src="{{ asset('images/Logo MIU.png') }}" alt="Logo Mitra Inovasi Unggul" width="180" height="180">
                    <h2 id="about-intro-title">Let's Transform and Scale with MIU</h2>
                </div>
                <div class="about-intro__copy" data-reveal="right">
                    <p>
                        Mitra Inovasi Unggul (MIU) adalah software house yang menyediakan berbagai
                        aplikasi penunjang bisnis. Dengan pengalaman dalam menangani kebutuhan
                        Kawasan Berikat, Gudang Berikat, dan Pusat Logistik Berikat, MIU menghadirkan
                        sistem yang telah terintegrasi host-to-host dengan CEISA 4.0.
                    </p>
                    <p>
                        Dibangun sejak tahun 2016, kami terus mengembangkan dan meningkatkan layanan
                        kami. Kami percaya teknologi memiliki kekuatan untuk mengubah bisnis dan
                        menciptakan peluang baru. Dengan fokus pada inovasi dan efisiensi sistem,
                        kami menyediakan layanan pengembangan perangkat lunak yang dirancang untuk
                        membantu perusahaan meningkatkan produktivitas, efisiensi, dan pertumbuhan.
                    </p>
                </div>
            </section>

            <section class="about-timeline" aria-labelledby="timeline-title">
                <div class="about-section-heading" data-reveal="up">
                    <h2 id="timeline-title">Our Timeline</h2>
                    <p>Perjalanan inovasi kami sejak berdiri 2016</p>
                </div>
                <div class="about-timeline__items">
                    <article class="about-timeline__item" data-reveal="up">
                        <h3>Development of E-Connote CN Marketplace</h3>
                        <span>2016</span>
                    </article>
                    <article class="about-timeline__item" data-reveal="up">
                        <h3>Development of MIU KB IT Inventory</h3>
                        <span>2017</span>
                    </article>
                    <article class="about-timeline__item" data-reveal="up">
                        <h3>Development of E-Connote CN Barang Kiriman</h3>
                        <span>2018</span>
                    </article>
                    <article class="about-timeline__item" data-reveal="up">
                        <h3>Development of CEISA 4.0 IT Inventory</h3>
                        <span>2023</span>
                    </article>
                </div>
                <div class="about-timeline__track" aria-hidden="true">
                    <span></span><span></span><span></span><span></span>
                </div>
            </section>

            <section class="about-why" aria-labelledby="why-title">
                <div class="about-section-heading" data-reveal="up">
                    <h2 id="why-title">Why Us</h2>
                </div>
                <div class="about-why__list">
                    <article class="about-why__item" data-reveal="left">
                        <span class="about-why__number" aria-hidden="true">01</span>
                        <div>
                            <h3>Berpengalaman sejak 2016</h3>
                            <p>Terbukti berpengalaman sejak 2016, MIU telah dipercaya menangani keperluan software untuk perusahaan.</p>
                        </div>
                    </article>
                    <article class="about-why__item" data-reveal="right">
                        <span class="about-why__number" aria-hidden="true">02</span>
                        <div>
                            <h3>Terintegrasi dengan CEISA 4.0</h3>
                            <p>Sistem host-to-host dengan CEISA 4.0 mempermudah pelaporan kepabeanan secara otomatis dan real-time.</p>
                        </div>
                    </article>
                    <article class="about-why__item" data-reveal="left">
                        <span class="about-why__number" aria-hidden="true">03</span>
                        <div>
                            <h3>Akses Global &amp; Multibahasa</h3>
                            <p>Aplikasi berbasis web yang dapat diakses dari seluruh dunia, dilengkapi fitur dan laporan dalam berbagai bahasa.</p>
                        </div>
                    </article>
                    <article class="about-why__item" data-reveal="right">
                        <span class="about-why__number" aria-hidden="true">04</span>
                        <div>
                            <h3>Dukungan Bilingual &amp; Multibahasa</h3>
                            <p>Tim support profesional MIU siap membantu dalam Bahasa Indonesia, Inggris, dan Mandarin sesuai kebutuhan Anda.</p>
                        </div>
                    </article>
                    <article class="about-why__item" data-reveal="left">
                        <span class="about-why__number" aria-hidden="true">05</span>
                        <div>
                            <h3>Fokus pada Efisiensi &amp; Inovasi</h3>
                            <p>MIU percaya teknologi harus mempermudah bisnis. Setiap sistem dirancang untuk meningkatkan produktivitas dan membuka peluang pertumbuhan baru.</p>
                        </div>
                    </article>
                </div>
            </section>

            <section class="about-values" aria-labelledby="values-title">
                <div class="about-section-heading" data-reveal="up">
                    <h2 id="values-title">We Value</h2>
                </div>
                <div class="about-values__grid">
                    <article class="about-value" data-reveal="left">
                        <img src="{{ asset('images/responsibility.jpg') }}" alt="" width="52" height="52" loading="lazy">
                        <h3>Responsible</h3>
                        <p>Kami bertanggung jawab dengan semua tugas yang telah dipercayai.</p>
                    </article>
                    <article class="about-value" data-reveal="up">
                        <img src="{{ asset('images/integrity.jpg') }}" alt="" width="52" height="52" loading="lazy">
                        <h3>Integrity</h3>
                        <p>Kami mengedepankan integritas dengan menjaga kerahasiaan data dan nama baik Anda.</p>
                    </article>
                    <article class="about-value" data-reveal="right">
                        <img src="{{ asset('images/inovation.jpg') }}" alt="" width="52" height="52" loading="lazy">
                        <h3>Innovation</h3>
                        <p>Kami akan setia memberikan inovasi terbaru di perjalanan bisnis Anda.</p>
                    </article>
                </div>
            </section>

            <section class="about-commitment" aria-label="Komitmen layanan MIU">
                <div class="about-commitment__copy">
                    <article data-reveal="left">
                        <h2>Memenuhi Kebutuhan Customer</h2>
                        <p>
                            Kami memulai setiap proyek dengan pendekatan analitis dan empatik —
                            memahami tantangan, alur kerja, dan tujuan bisnis Anda. Dengan demikian,
                            solusi yang kami kembangkan tidak hanya fungsional, tetapi juga selaras
                            dengan kebutuhan nyata perusahaan Anda.
                        </p>
                    </article>
                    <article data-reveal="left">
                        <h2>Menemukan Solusi Terbaik</h2>
                        <p>
                            Kami berkomitmen menghadirkan solusi yang efisien, scalable, dan sesuai
                            konteks bisnis. Tim kami mengedepankan integrasi teknologi canggih agar
                            hasil akhir benar-benar membawa dampak positif, bukan sekadar tampilan
                            modern.
                        </p>
                    </article>
                    <article data-reveal="left">
                        <h2>Meneruskan Service After-Sales</h2>
                        <p>
                            Hubungan kami tidak berakhir setelah aplikasi siap dipakai. Kami terus
                            mendampingi klien melalui update fitur, monitoring, dan technical
                            support jika diperlukan, agar sistem tetap efisien, optimal, aman, dan
                            baik seiring pertumbuhan bisnis Anda.
                        </p>
                    </article>
                </div>
                <div class="about-commitment__mark" data-reveal="right">
                    <strong>MIU</strong>
                    <span>Commitment</span>
                </div>
            </section>
        </main>
    </body>
</html>
