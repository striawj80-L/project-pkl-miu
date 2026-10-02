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
                                <h3>IT Inventory App (ERP)</h3>
                                <p>
                                    Kami percaya efisiensi bukan hanya soal angka, tapi tentang bagaimana teknologi mempermudah manusia.
                                    Melalui IT Inventory App, perusahaan dapat memantau seluruh perangkat, lisensi, dan aset digital
                                    secara real-time — tanpa lagi laporan manual yang memakan waktu.
                                </p>
                                <a href="{{ route('product') }}">Selengkapnya <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                        <article class="home-solution-card" data-reveal="up">
                            <img src="{{ asset('images/home-cn-app.png') }}" alt="Ilustrasi pengiriman dan dokumen digital" width="160" height="130" loading="lazy">
                            <div>
                                <h3>CN App</h3>
                                <p>
                                    Dalam dunia bisnis yang serba cepat, komunikasi internal yang efisien adalah segalanya.
                                    Dengan CN App berbasis CEISA 4.0, kami membantu perusahaan menyatukan data lintas
                                    departemen melalui sistem yang aman dan mudah diakses.
                                </p>
                                <a href="{{ route('product') }}">Selengkapnya <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                        <article class="home-solution-card" data-reveal="up">
                            <img src="{{ asset('images/home-basic-app.png') }}" alt="Ilustrasi aplikasi bisnis dan pelacakan barang" width="160" height="130" loading="lazy">
                            <div>
                                <h3>Basic Internal App</h3>
                                <p>
                                    Bagi banyak perusahaan kecil dan menengah, digitalisasi sering terdengar mahal dan rumit.
                                    Kami ingin mengubah pandangan itu. Melalui Internal App, kami membantu tim Anda beralih
                                    dari proses manual ke sistem digital yang sederhana namun efektif — mulai dari pengajuan
                                    approval, absensi, hingga manajemen gudang.
                                </p>
                                <a href="{{ route('product') }}">Selengkapnya <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="home-support" aria-labelledby="support-title">
                <div class="home-container home-support__inner">
                    <img src="{{ asset('images/indonesia-removebg-preview 1.png') }}" alt="Ilustrasi peta kepulauan Indonesia" width="440" height="240" loading="lazy" data-reveal="left">
                    <div data-reveal="right">
                        <h2 id="support-title">24/7 Support</h2>
                        <p>Melayani client di seluruh Indonesia</p>
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
                                <h3>Regional</h3>
                                <p>
                                    Dari Pulau Jawa hingga Pulau Sumatera, kami telah berkolaborasi dengan lebih dari 30 perusahaan
                                    dalam mengembangkan aplikasi digital yang meningkatkan efisiensi operasional dan keandalan data.
                                    Setiap proyek kami dirancang dengan pendekatan profesional, hasil nyata, dan teknologi terkini
                                    untuk mendorong pertumbuhan bisnis klien kami.
                                </p>
                            </div>
                        </article>
                        <article class="home-work-card" data-reveal="up">
                            <img src="{{ asset('images/home-ceisa.png') }}" alt="CEISA 4.0, Customs-Excise Information System and Automation" width="300" height="170" loading="lazy">
                            <div>
                                <h3>CEISA Professional</h3>
                                <p>
                                    Kami turut berkontribusi dalam pengembangan sistem CEISA 4.0 dengan mendukung digitalisasi proses
                                    ekspor-impor Indonesia melalui platform yang aman, modern, dan terintegrasi dengan kebutuhan industri.
                                    Solusi IT Inventory kami membantu perusahaan menyiapkan, mengirim, dan memantau dokumen kepabeanan
                                    yang terhubung dengan CEISA 4.0 secara lebih mudah, cepat, dan efisien, sekaligus meningkatkan
                                    transparansi alur kerja dan data antar lembaga.
                                </p>
                            </div>
                        </article>
                        <article class="home-work-card" data-reveal="up">
                            <img src="{{ asset('images/home-team.png') }}" alt="Tim profesional berdiskusi bersama" width="300" height="170" loading="lazy">
                            <div>
                                <h3>Widely Diverse Partners</h3>
                                <p>
                                    Mulai dari sistem inventaris IT, aplikasi internal kantor, hingga platform CN App (CEISA 4.0),
                                    kami membantu perusahaan meningkatkan efisiensi, akurasi, dan pertumbuhan bisnis melalui teknologi
                                    yang andal dan terukur. Fleksibilitas kami dalam menyesuaikan sistem membuat setiap aplikasi
                                    menjadi relevan, scalable, dan mudah diadopsi oleh tim internal klien.
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
                            Didn’t find what you’re looking for? Let us know, We’ve got real humans ready to answer.
                        </p>
                    </div>

                    <div class="home-faq__list" data-reveal="up">
                        <details>
                            <summary>Apa itu IT Inventory App dan bagaimana manfaatnya bagi bisnis?</summary>
                            <p>IT Inventory App cocok untuk perusahaan yang ingin mendapatkan fasilitas seperti KB,GB,KEK,KITE,dll, App ini akan memberikan kemudahan untuk user dalam penginputan dan pelaporan fasilitas tersebut.</p>
                        </details>
                        <details>
                            <summary>Apa keunggulan CN App (CEISA 4.0)?</summary>
                            <p>CN App yang kami sediakan mengikuti standar CEISA 4.0 (Customs-Excise Information System and Automation) dan mendukung pengelolaan e-consignment note (resi digital) secara aman, cepat, dan terintegrasi, sehingga cocok untuk perusahaan logistik, ekspor-impor, atau distribusi.</p>
                        </details>
                        <details>
                            <summary>Apa itu Basic Internal App dan siapa yang cocok menggunakannya?</summary>
                            <p>Basic Internal App merupakan solusi digital untuk otomatisasi pekerjaan internal, seperti manajemen gudang, absensi, approval, dan pelaporan. Ideal bagi UMKM atau perusahaan yang ingin digitalisasi tanpa biaya tinggi.</p>
                        </details>
                        <details>
                            <summary>Apakah solusi yang ditawarkan bisa disesuaikan (custom) dengan kebutuhan perusahaan kami?</summary>
                            <p>Tentu bisa, setiap proyek kami mulai dengan analisis kebutuhan bisnis untuk memastikan desain, fitur, dan workflow benar-benar sesuai tujuan perusahaan Anda.</p>
                        </details>
                        <details>
                            <summary>Apakah tersedia layanan after-sales dan maintenance?</summary>
                            <p>Tersedia, kami menyediakan layanan maintenance berkala, bug fixing, update fitur, dan technical support dari tim MIU agar aplikasi Anda selalu optimal dan aman digunakan.</p>
                        </details>
                        <details>
                            <summary>Apakah data perusahaan kami akan aman?</summary>
                            <p>Keamanan adalah prioritas utama kami. Setiap sistem yang kami bangun dilengkapi dengan enkripsi, role-based access, dan sistem autentikasi.</p>
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
