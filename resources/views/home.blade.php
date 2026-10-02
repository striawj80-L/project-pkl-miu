<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#d7effa">
        <meta name="description" content="Mitra Inovasi Unggul menghadirkan solusi teknologi informasi, IT Inventory, dan aplikasi digital untuk bisnis yang lebih efisien.">
        <title>Home | Mitra Inovasi Unggul</title>
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="home-page m-0 font-sans text-slate-700 antialiased">
        <header class="home-header">
            <x-navbar active="home" />

            <section class="home-hero" aria-labelledby="home-title">
                <div class="home-hero__inner">
                    <div class="home-hero__brand" data-reveal="left">
                        <img src="{{ asset('images/Logo MIU.webp') }}" alt="Logo Mitra Inovasi Unggul" width="180" height="180">
                    </div>
                    <div class="home-hero__content" data-reveal="right">
                        <p class="home-eyebrow">Mitra Inovasi Unggul</p>
                        <h1 id="home-title">Trusted IT Solutions for Faster Business Operations</h1>
                        <p class="home-hero__summary">
                            Tingkatkan efisiensi operasional dengan solusi teknologi yang dirancang
                            untuk kebutuhan bisnis Anda.
                        </p>
                        <div class="home-hero__actions">
                            <a class="home-button home-button--primary" href="{{ route('contact') }}">Schedule Free Consultation</a>
                            <a class="home-button home-button--light" href="{{ route('about') }}">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
        </header>

        <main>
            <section class="home-section home-solutions" aria-labelledby="solutions-title">
                <div class="home-container">
                    <div class="home-section__heading" data-reveal="up">
                        <h2 id="solutions-title">Solution for your Business</h2>
                        <p>
                            Teknologi yang tepat membantu bisnis bergerak lebih cepat, tertata, dan
                            siap berkembang.
                        </p>
                    </div>

                    <div class="home-solutions__grid">
                        <article class="home-solution-card" data-reveal="up">
                            <img src="{{ asset('images/home-it-inventory.png') }}" alt="Ilustrasi dashboard IT Inventory" width="160" height="130" loading="lazy">
                            <div>
                                <h3>IT Inventory App</h3>
                                <p>
                                    Kelola persediaan, aset, dan aktivitas operasional dalam satu
                                    sistem yang terintegrasi dan mudah dipantau.
                                </p>
                                <a href="{{ route('product') }}">Selengkapnya <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                        <article class="home-solution-card" data-reveal="up">
                            <img src="{{ asset('images/home-cn-app.png') }}" alt="Ilustrasi pengiriman dan dokumen digital" width="160" height="130" loading="lazy">
                            <div>
                                <h3>CN App</h3>
                                <p>
                                    Permudah pembuatan, validasi, dan pelacakan dokumen pengiriman
                                    digital melalui satu alur kerja.
                                </p>
                                <a href="{{ route('product') }}">Selengkapnya <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                        <article class="home-solution-card" data-reveal="up">
                            <img src="{{ asset('images/home-basic-app.png') }}" alt="Ilustrasi aplikasi bisnis dan pelacakan barang" width="160" height="130" loading="lazy">
                            <div>
                                <h3>Basic Internal App</h3>
                                <p>
                                    Aplikasi internal sesuai kebutuhan untuk menyederhanakan
                                    koordinasi dan pekerjaan rutin tim.
                                </p>
                                <a href="{{ route('product') }}">Selengkapnya <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="home-support" aria-labelledby="support-title">
                <div class="home-container home-support__inner">
                    <img src="{{ asset('images/home-indonesia.png') }}" alt="Ilustrasi peta wilayah Indonesia" width="440" height="240" loading="lazy" data-reveal="left">
                    <div data-reveal="right">
                        <p class="home-eyebrow">Siap mendampingi bisnis Anda</p>
                        <h2 id="support-title">24/7 Support</h2>
                        <p>
                            Tim kami siap membantu memastikan sistem Anda berjalan optimal dan
                            kebutuhan bisnis tertangani.
                        </p>
                        <a class="home-text-link" href="{{ route('contact') }}">Hubungi tim kami <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </section>

            <section class="home-section home-work" aria-labelledby="work-title">
                <div class="home-container">
                    <div class="home-section__heading" data-reveal="up">
                        <h2 id="work-title">Our Work</h2>
                    </div>

                    <div class="home-work__list">
                        <article class="home-work-card" data-reveal="up">
                            <img src="{{ asset('images/home-city.png') }}" alt="Panorama kawasan perkotaan" width="300" height="170" loading="lazy">
                            <div>
                                <h3>Digitalisasi Operasional Industri</h3>
                                <p>
                                    Kami membantu perusahaan membangun proses yang lebih terhubung
                                    melalui solusi digital yang disesuaikan dengan kegiatan
                                    operasional mereka.
                                </p>
                            </div>
                        </article>
                        <article class="home-work-card" data-reveal="up">
                            <img src="{{ asset('images/home-ceisa.png') }}" alt="CEISA 4.0, Customs-Excise Information System and Automation" width="300" height="170" loading="lazy">
                            <div>
                                <h3>CEISA Professional</h3>
                                <p>
                                    Solusi kami mendukung kebutuhan kepabeanan dan proses terkait
                                    CEISA 4.0 agar pekerjaan lebih tertib, akurat, dan siap ditelusuri.
                                </p>
                            </div>
                        </article>
                        <article class="home-work-card" data-reveal="up">
                            <img src="{{ asset('images/home-team.png') }}" alt="Tim profesional berdiskusi bersama" width="300" height="170" loading="lazy">
                            <div>
                                <h3>Widely Diverse Partners</h3>
                                <p>
                                    Bersama para mitra, kami merancang teknologi yang relevan dengan
                                    tantangan tiap bisnis dan mendukung pertumbuhan jangka panjang.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="home-section home-faq" aria-labelledby="faq-title">
                <div class="home-container home-faq__container">
                    <div class="home-section__heading" data-reveal="up">
                        <p class="home-eyebrow">FAQ</p>
                        <h2 id="faq-title">Most Asked Question</h2>
                        <p>
                            Temukan jawaban dari pertanyaan yang sering kami terima. Hubungi kami
                            bila Anda ingin tahu lebih lanjut.
                        </p>
                    </div>

                    <div class="home-faq__list" data-reveal="up">
                        <details>
                            <summary>Apa itu IT Inventory dan bagaimana manfaatnya bagi bisnis?</summary>
                            <p>IT Inventory membantu mencatat dan memantau persediaan serta pergerakan barang dalam satu sistem yang rapi dan mudah ditelusuri.</p>
                        </details>
                        <details>
                            <summary>Apakah menggunakan CEISA 4.0?</summary>
                            <p>Solusi MIU mendukung kebutuhan integrasi dan proses terkait CEISA 4.0 sesuai kebutuhan operasional perusahaan.</p>
                        </details>
                        <details>
                            <summary>Apa saja bisnis yang dapat menggunakan layanan MIU?</summary>
                            <p>Kami membantu berbagai perusahaan, termasuk manufaktur, logistik, serta perusahaan dengan kebutuhan kepabeanan dan pengelolaan inventaris.</p>
                        </details>
                        <details>
                            <summary>Apakah solusi dapat disesuaikan dengan kebutuhan perusahaan?</summary>
                            <p>Ya. Kami memulai dengan memahami proses bisnis Anda, lalu merancang solusi yang sesuai dengan alur kerja dan tujuan perusahaan.</p>
                        </details>
                        <details>
                            <summary>Apakah tersedia layanan konsultasi sebelum implementasi?</summary>
                            <p>Tim kami siap berdiskusi dan membantu memetakan kebutuhan sebelum Anda menentukan langkah implementasi.</p>
                        </details>
                        <details>
                            <summary>Apakah MIU dapat membantu bisnis yang sedang berkembang?</summary>
                            <p>Kami menyediakan sistem yang dapat mendukung efisiensi operasional seiring perubahan dan pertumbuhan bisnis Anda.</p>
                        </details>
                    </div>
                </div>
            </section>

            <section class="home-location" aria-labelledby="location-title">
                <div class="home-container home-location__inner">
                    <div class="home-section__heading" data-reveal="up">
                        <p class="home-eyebrow">Mari mulai percakapan</p>
                        <h2 id="location-title">Bingung mulai dari mana?</h2>
                        <p>Jadwalkan konsultasi bersama tim kami dan temukan solusi untuk bisnis Anda.</p>
                        <a class="home-button home-button--primary" href="{{ route('contact') }}">Contact Us</a>
                    </div>

                    <div class="home-location__map" data-reveal="up">
                        <iframe
                            title="Peta lokasi kantor Mitra Inovasi Unggul"
                            src="https://maps.google.com/maps?q=Jl.%20Tanah%20Abang%20II%20No.68A%2C%20Jakarta%20Pusat&t=&z=16&ie=UTF8&iwloc=&output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>

                    <address>
                        <strong>Our Office</strong><br>
                        Jl. Tanah Abang II No. 68A, Jakarta Pusat, DKI Jakarta<br>
                        Indonesia
                    </address>
                </div>
            </section>
        </main>
    </body>
</html>
