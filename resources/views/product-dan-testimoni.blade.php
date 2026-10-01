<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#a9c1ff">
        <meta name="description" content="Solusi digital dan IT Inventory untuk pabrik serta kawasan berikat dari Mitra Inovasi Unggul.">
        <title>Mitra Inovasi Unggul | Solusi Digital Industri</title>
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="m-0 font-sans text-slate-700 antialiased">
        <header id="home" class="bg-[#a9c1ff]">
            <x-navbar active="product" />
        </header>

        <main>
            <section id="product" class="bg-gradient-to-b from-[#eaf2ff] via-[#f7faff] to-white px-5 py-14 sm:px-8 sm:py-16 lg:py-20" aria-labelledby="product-title">
                <div class="mx-auto max-w-6xl">
                    <h1 id="product-title" class="mx-auto mb-9 max-w-2xl text-center text-2xl font-bold leading-tight tracking-tight text-[#103e7d] sm:mb-11 sm:text-3xl" data-reveal="up">
                        Pilihan Solusi Sesuai Kebutuhan Pabrik &amp; Kawasan Berikat.
                    </h1>

                    <div class="product-card-grid grid grid-cols-1 gap-5 sm:grid-cols-3 lg:gap-8" data-product-card-grid>
                        <article class="product-card flex h-full flex-col rounded-xl border border-[#d2e0eb] bg-[#f5faff] p-5 shadow-sm transition-all duration-300 ease-in-out sm:p-6" data-product-card="inventory" data-reveal="up">
                            <div class="flex min-h-14 items-start justify-between gap-4">
                                <h2 class="text-lg font-bold leading-tight text-[#4f7f9d]">IT Inventory (ERP)</h2>
                                <svg class="h-9 w-9 shrink-0 text-[#4f7f9d]" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                                    <path d="M7 10h26v18H7zM4 31h32M17 15h6m-3-3v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="mt-3 min-h-16 text-sm leading-relaxed text-slate-600">
                                Pengembangan perangkat lunak dan manajemen inventaris IT untuk pertumbuhan bisnis Anda.
                            </p>
                            <div class="mt-5">
                                <h3 class="text-xs font-bold text-slate-800">Suitable for:</h3>
                                <ul class="mt-2 flex flex-col gap-1.5 text-sm text-slate-700">
                                    <li class="flex items-center gap-2">
                                        <img class="h-4 w-4 shrink-0 object-contain" src="{{ asset('images/fa-solid_warehouse.png') }}" alt="" aria-hidden="true" width="16" height="16" loading="lazy">
                                        Penerima fasilitas
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <img class="h-4 w-4 shrink-0 object-contain" src="{{ asset('images/ant-design_truck-outlined.png') }}" alt="" aria-hidden="true" width="16" height="16" loading="lazy">
                                        Mengejar efisiensi
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <img class="h-4 w-4 shrink-0 object-contain" src="{{ asset('images/fluent-emoji-high-contrast_label.png') }}" alt="" aria-hidden="true" width="16" height="16" loading="lazy">
                                        Brands
                                    </li>
                                </ul>
                            </div>
                            <button type="button" class="product-card__button mt-6 inline-flex min-h-11 w-full items-center justify-center rounded-lg bg-[#dceefa] px-4 py-2 text-sm font-semibold text-[#3d7599] transition-all duration-300 ease-in-out hover:bg-[#b8ddf4] hover:text-[#174d79] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3984bf]" aria-controls="product-details-inventory" aria-pressed="false" data-product-select="inventory">
                                Selengkapnya
                            </button>
                        </article>

                        <article class="product-card flex h-full flex-col rounded-xl border border-[#d2e0eb] bg-[#f5faff] p-5 shadow-sm transition-all duration-300 ease-in-out sm:p-6" data-product-card="cn-app" data-reveal="up">
                            <div class="flex min-h-14 items-start justify-between gap-4">
                                <h2 class="text-lg font-bold leading-tight text-[#4f7f9d]">CN APP</h2>
                                <svg class="h-9 w-9 shrink-0 text-[#4f7f9d]" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                                    <path d="M5 10h23v18H5zM10 32h13M16 28v4m15-18h3m-3 5h3m-3 5h3m-3-17h3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="mt-3 min-h-16 text-sm leading-relaxed text-slate-600">
                                Aplikasi digital untuk pembuatan dan pengelolaan e-consignment note (resi digital).
                            </p>
                            <div class="mt-5">
                                <h3 class="text-xs font-bold text-slate-800">Suitable for:</h3>
                                <ul class="mt-2 flex flex-col gap-1.5 text-sm text-slate-700">
                                    <li class="flex items-center gap-2">
                                        <img class="h-4 w-4 shrink-0 object-contain" src="{{ asset('images/fa-solid_warehouse.png') }}" alt="" aria-hidden="true" width="16" height="16" loading="lazy">
                                        Penerima fasilitas
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <img class="h-4 w-4 shrink-0 object-contain" src="{{ asset('images/ant-design_truck-outlined.png') }}" alt="" aria-hidden="true" width="16" height="16" loading="lazy">
                                        Mengejar efisiensi
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <img class="h-4 w-4 shrink-0 object-contain" src="{{ asset('images/fluent-emoji-high-contrast_label.png') }}" alt="" aria-hidden="true" width="16" height="16" loading="lazy">
                                        Brands
                                    </li>
                                </ul>
                            </div>
                            <button type="button" class="product-card__button mt-6 inline-flex min-h-11 w-full items-center justify-center rounded-lg bg-[#dceefa] px-4 py-2 text-sm font-semibold text-[#3d7599] transition-all duration-300 ease-in-out hover:bg-[#b8ddf4] hover:text-[#174d79] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3984bf]" aria-controls="product-details-cn-app" aria-pressed="false" data-product-select="cn-app">
                                Selengkapnya
                            </button>
                        </article>

                        <article class="product-card flex h-full flex-col rounded-xl border border-[#d2e0eb] bg-[#f5faff] p-5 shadow-sm transition-all duration-300 ease-in-out sm:p-6" data-product-card="internal-app" data-reveal="up">
                            <div class="flex min-h-14 items-start justify-between gap-4">
                                <h2 class="text-lg font-bold leading-tight text-[#4f7f9d]">Basic Internal App</h2>
                                <svg class="h-9 w-9 shrink-0 text-[#4f7f9d]" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                                    <path d="M10 5h20v30H10zM15 10h10M16 26l4-5-2-1 5-6-2 5 3 1-6 7 1-3-3 2Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="mt-3 min-h-16 text-sm leading-relaxed text-slate-600">
                                Platform yang dirancang untuk mendigitalisasi proses internal perusahaan dan memberikan efisiensi dalam operasional.
                            </p>
                            <div class="mt-5">
                                <h3 class="text-xs font-bold text-slate-800">Suitable for:</h3>
                                <ul class="mt-2 flex flex-col gap-1.5 text-sm text-slate-700">
                                    <li class="flex items-center gap-2">
                                        <img class="h-4 w-4 shrink-0 object-contain" src="{{ asset('images/fa-solid_warehouse.png') }}" alt="" aria-hidden="true" width="16" height="16" loading="lazy">
                                        Penerima fasilitas
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <img class="h-4 w-4 shrink-0 object-contain" src="{{ asset('images/ant-design_truck-outlined.png') }}" alt="" aria-hidden="true" width="16" height="16" loading="lazy">
                                        Mengejar efisiensi
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <img class="h-4 w-4 shrink-0 object-contain" src="{{ asset('images/fluent-emoji-high-contrast_label.png') }}" alt="" aria-hidden="true" width="16" height="16" loading="lazy">
                                        Brands
                                    </li>
                                </ul>
                            </div>
                            <button type="button" class="product-card__button mt-6 inline-flex min-h-11 w-full items-center justify-center rounded-lg bg-[#dceefa] px-4 py-2 text-sm font-semibold text-[#3d7599] transition-all duration-300 ease-in-out hover:bg-[#b8ddf4] hover:text-[#174d79] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3984bf]" aria-controls="product-details-internal-app" aria-pressed="false" data-product-select="internal-app">
                                Selengkapnya
                            </button>
                        </article>
                    </div>

                    <div class="product-details" aria-live="polite" aria-atomic="true">
                        <section class="product-details__panel" id="product-details-inventory" aria-labelledby="product-details-inventory-title" data-product-details="inventory">
                            <div class="product-details__intro">
                                <h2 id="product-details-inventory-title">IT Inventory (ERP) <span>(KB, GB, KEK, KITE, PLB)</span></h2>
                                <p>
                                    Satu dashboard untuk mengelola data perusahaan pengguna fasilitas. IT Inventory App dari MIU memetakan seluruh siklus aset: dari pengadaan, penempatan, peminjaman, hingga disposisi. Mendukung multi-location, barcode/QR, dan integrasi ke ERP/HR. Real-time, akurat, siap audit.
                                </p>
                            </div>
                            <div class="product-details__features">
                                <article>
                                    <h3>Asset Lifecycle Automation</h3>
                                    <p>Otomatisasi Create–Assign–Return–Dispose dengan jejak lengkap. Setiap penambahan dan pengurangan aset tercatat rapi serta mudah ditelusuri.</p>
                                </article>
                                <article>
                                    <h3>Real-Time Stock &amp; Distribution</h3>
                                    <p>Pantau pergerakan stok secara real-time, termasuk dukungan barcode/QR agar inventaris lebih cepat dan akurat.</p>
                                </article>
                            </div>
                            <a class="product-details__contact" href="{{ route('contact') }}">Konsultasikan kebutuhan Anda <span aria-hidden="true">→</span></a>
                        </section>

                        <section class="product-details__panel" id="product-details-cn-app" aria-labelledby="product-details-cn-app-title" data-product-details="cn-app" hidden>
                            <div class="product-details__intro">
                                <h2 id="product-details-cn-app-title">Digitalisasi Resi &amp; Dokumen Pengiriman dengan CN App <span>(CEISA 4.0 Ready)</span></h2>
                                <p>
                                    Satu platform untuk pencatatan, validasi, dan pelacakan e-Consignment Note lebih cepat, akurat, dan terstandardisasi lintas divisi. CN App membantu tim operasional, warehouse, dan compliance bekerja di jalur yang sama.
                                </p>
                            </div>
                            <div class="product-details__features">
                                <article>
                                    <h3>Dokumen Pengiriman Digital</h3>
                                    <p>Buat dan kelola e-Consignment Note dalam satu alur digital agar pencatatan serta pencarian dokumen lebih praktis.</p>
                                </article>
                                <article>
                                    <h3>Validasi &amp; Integrasi</h3>
                                    <p>Dukung validasi proses dan integrasi CEISA 4.0 serta ERP/WMS agar aliran data operasional tetap konsisten.</p>
                                </article>
                            </div>
                            <a class="product-details__contact" href="{{ route('contact') }}">Konsultasikan kebutuhan Anda <span aria-hidden="true">→</span></a>
                        </section>

                        <section class="product-details__panel" id="product-details-internal-app" aria-labelledby="product-details-internal-app-title" data-product-details="internal-app" hidden>
                            <div class="product-details__intro">
                                <h2 id="product-details-internal-app-title">Optimalkan Operasional Internal dengan Aplikasi yang Terintegrasi dan Efisien</h2>
                                <p>
                                    Aplikasi internal yang dirancang mengikuti kebutuhan perusahaan untuk membantu koordinasi antar divisi, mempercepat persetujuan, dan meningkatkan transparansi kerja.
                                </p>
                            </div>
                            <div class="product-details__features">
                                <article>
                                    <h3>Alur Kerja yang Lebih Efisien</h3>
                                    <p>Digitalisasi proses rutin agar tim dapat mengelola pekerjaan dengan alur yang lebih jelas dan konsisten.</p>
                                </article>
                                <article>
                                    <h3>Kolaborasi Antar Divisi</h3>
                                    <p>Satukan informasi dan koordinasi dalam aplikasi yang menyesuaikan kebutuhan operasional perusahaan.</p>
                                </article>
                            </div>
                            <a class="product-details__contact" href="{{ route('contact') }}">Konsultasikan kebutuhan Anda <span aria-hidden="true">→</span></a>
                        </section>
                    </div>
                </div>
            </section>

            <section id="ecosystem" class="bg-[#f4f4f5] px-5 py-12 sm:px-8 sm:py-16" aria-labelledby="ecosystem-title">
                <div class="mx-auto max-w-6xl">
                    <div class="grid gap-5 md:grid-cols-[1fr_0.72fr] md:items-end md:justify-between">
                        <div data-reveal="left">
                            <p class="mb-2 text-sm font-bold text-[#0871c4]">Ekosistem MIU</p>
                            <h2 id="ecosystem-title" class="text-2xl font-bold tracking-tight text-[#103e7d] sm:text-3xl">
                                Dipercaya oleh Bisnis Terbaik
                            </h2>
                        </div>
                        <p class="max-w-lg text-sm leading-relaxed text-slate-600 md:justify-self-end" data-reveal="right">
                            Diimplementasikan pada lini manufaktur berikat terdepan, logistik multinasional, dan konglomerasi industri Indonesia.
                        </p>
                    </div>

                    <ul class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-3 lg:grid-cols-4" aria-label="Mitra dan klien">
                        <li data-reveal="up"><span class="flex min-h-12 items-center justify-center rounded-full border border-[#a9c9df] bg-[#d2edff] px-5 text-center text-sm font-medium text-slate-800 shadow-sm transition-all duration-300 ease-in-out hover:scale-105 hover:bg-[#bee5ff] hover:shadow-md">PT. Medan Tropical Canning</span></li>
                        <li data-reveal="up"><span class="flex min-h-12 items-center justify-center rounded-full border border-[#a9c9df] bg-[#d2edff] px-5 text-center text-sm font-medium text-slate-800 shadow-sm transition-all duration-300 ease-in-out hover:scale-105 hover:bg-[#bee5ff] hover:shadow-md">PT. Medan Tropical Canning</span></li>
                        <li data-reveal="up"><span class="flex min-h-12 items-center justify-center rounded-full border border-[#a9c9df] bg-[#d2edff] px-5 text-center text-sm font-medium text-slate-800 shadow-sm transition-all duration-300 ease-in-out hover:scale-105 hover:bg-[#bee5ff] hover:shadow-md">PT. Daisen Wood Frame</span></li>
                        <li class="sm:col-start-2 lg:col-start-auto" data-reveal="up"><span class="flex min-h-12 items-center justify-center rounded-full border border-[#a9c9df] bg-[#d2edff] px-5 text-center text-sm font-medium text-slate-800 shadow-sm transition-all duration-300 ease-in-out hover:scale-105 hover:bg-[#bee5ff] hover:shadow-md">PT. Xinfung Industry Indonesia</span></li>
                    </ul>
                </div>
            </section>

            <section class="bg-white px-5 py-12 sm:px-8 sm:py-16" aria-labelledby="testimonial-title">
                <div class="mx-auto max-w-6xl">
                    <p class="mb-1 text-sm font-bold text-[#0871c4]" data-reveal="up">Testimonial Eksekutif</p>
                    <h2 id="testimonial-title" class="max-w-3xl text-2xl font-bold leading-tight tracking-tight text-[#103e7d] sm:text-3xl" data-reveal="up">
                        Dukungan Nyata dari Para Pemimpin Industri
                    </h2>

                    <div class="mt-7 flex flex-col gap-5 sm:mt-8">
                        <article class="rounded-2xl border border-[#c6d8e4] bg-[#eff9ff] p-5 shadow-sm transition-all duration-300 ease-in-out hover:border-[#8dbbda] hover:shadow-lg sm:p-7" data-reveal="left">
                            <div class="flex flex-wrap items-center gap-4">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/foto-mr-ck.png') }}" alt="Foto Mr. CK" width="40" height="40" loading="lazy">
                                <div class="flex gap-1 text-2xl leading-none text-[#e6e900]" role="img" aria-label="5 dari 5 bintang">
                                    <span aria-hidden="true">★</span><span aria-hidden="true">★</span><span aria-hidden="true">★</span><span aria-hidden="true">★</span><span aria-hidden="true">★</span>
                                </div>
                            </div>
                            <blockquote class="mt-4 text-base leading-relaxed text-slate-700">
                                “Sistem IT Inventory MIU adalah penyelamat tim compliance kami. Rekonsiliasi dokumen BC 2.3 dan laporan mutasi barang jadi selalu akurat setiap hari secara real-time.”
                            </blockquote>
                            <p class="mt-3 font-semibold text-slate-900">Mr. CK</p>
                            <p class="text-sm text-[#3984ff]">VP Information Technology - Mitra Logistik Multinasional</p>
                        </article>

                        <article class="rounded-2xl border border-[#c6d8e4] bg-[#eff9ff] p-5 shadow-sm transition-all duration-300 ease-in-out hover:border-[#8dbbda] hover:shadow-lg sm:p-7" data-reveal="right">
                            <div class="flex flex-wrap items-center gap-4">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/foto-snoop-dog.png') }}" alt="Foto Snoop Dog" width="40" height="40" loading="lazy">
                                <div class="flex gap-1 text-2xl leading-none text-[#e6e900]" role="img" aria-label="5 dari 5 bintang">
                                    <span aria-hidden="true">★</span><span aria-hidden="true">★</span><span aria-hidden="true">★</span><span aria-hidden="true">★</span><span aria-hidden="true">★</span>
                                </div>
                            </div>
                            <blockquote class="mt-4 text-base leading-relaxed text-slate-700">
                                “Dukungan tim technical support MIU luar biasa responsif saat integrasi API CEISA 4.0 Bea Cukai versi terbaru. Sangat kami rekomendasikan untuk Kawasan Berikat.”
                            </blockquote>
                            <p class="mt-3 font-semibold text-slate-900">Snoop Dog</p>
                            <p class="text-sm text-[#3984ff]">Head of Logistics &amp; Customs - Manufaktur Surabaya</p>
                        </article>

                        <article class="rounded-2xl border border-[#c6d8e4] bg-[#eff9ff] p-5 shadow-sm transition-all duration-300 ease-in-out hover:border-[#8dbbda] hover:shadow-lg sm:p-7" data-reveal="left">
                            <div class="flex flex-wrap items-center gap-4">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/foto-napoleon.png') }}" alt="Foto Napoleon" width="40" height="40" loading="lazy">
                                <div class="flex gap-1 text-2xl leading-none text-[#e6e900]" role="img" aria-label="5 dari 5 bintang">
                                    <span aria-hidden="true">★</span><span aria-hidden="true">★</span><span aria-hidden="true">★</span><span aria-hidden="true">★</span><span aria-hidden="true">★</span>
                                </div>
                            </div>
                            <blockquote class="mt-4 text-base leading-relaxed text-slate-700">
                                “Sejak migrasi ke MIU, audit tahunan Bea Cukai kami selesai dalam dua jam tanpa ada selisih konversi bahan baku. Integrasi CEISA 4.0 sangat mulus dan stabil.”
                            </blockquote>
                            <p class="mt-3 font-semibold text-slate-900">Napoleon</p>
                            <p class="text-sm text-[#3984ff]">GM Supply Chain - Kawasan Berikat Prancis</p>
                        </article>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
