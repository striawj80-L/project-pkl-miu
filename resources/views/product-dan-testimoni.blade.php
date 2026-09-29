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
            <nav class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-3 px-5 py-3 sm:px-8" aria-label="Navigasi utama">
                <a class="flex items-center gap-3 text-sm font-bold text-white sm:text-base" href="{{ route('home') }}" aria-label="Mitra Inovasi Unggul - Home">
                    <img src="{{ asset('images/Logo MIU.webp') }}" alt="" width="40" height="40" class="h-10 w-10 rounded-full object-contain">
                    <span>Mitra Inovasi Unggul</span>
                </a>

                <button
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg text-[#103e7d] transition-all duration-300 ease-in-out hover:bg-white/30 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#103e7d] md:hidden"
                    type="button"
                    aria-label="Buka navigasi"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                    data-menu-toggle
                >
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </button>

                <div id="mobile-menu" class="hidden w-full flex-col items-stretch gap-1 md:flex md:w-auto md:flex-row md:items-center md:gap-2">
                    <a class="rounded-full px-4 py-2 text-sm font-semibold text-white/90 transition-all duration-300 ease-in-out hover:bg-white/25 hover:text-[#103e7d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#103e7d] md:px-3" href="#ecosystem">About Us</a>
                    <a class="rounded-full px-4 py-2 text-sm font-semibold text-white/90 transition-all duration-300 ease-in-out hover:bg-white/25 hover:text-[#103e7d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#103e7d] md:px-3" href="#home">Home</a>
                    <a class="rounded-full px-4 py-2 text-sm font-semibold text-white/90 transition-all duration-300 ease-in-out hover:bg-white/25 hover:text-[#103e7d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#103e7d] md:px-3" href="#product">Product</a>
                    <a class="rounded-full px-4 py-2 text-sm font-semibold text-white/90 transition-all duration-300 ease-in-out hover:bg-white/25 hover:text-[#103e7d] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#103e7d] md:px-3" href="{{ route('contact') }}">Contact</a>
                </div>
            </nav>
        </header>

        <main>
            <section id="product" class="bg-gradient-to-b from-[#eaf2ff] via-[#f7faff] to-white px-5 py-14 sm:px-8 sm:py-16 lg:py-20" aria-labelledby="product-title">
                <div class="mx-auto max-w-6xl">
                    <h1 id="product-title" class="mx-auto mb-9 max-w-2xl text-center text-2xl font-bold leading-tight tracking-tight text-[#103e7d] sm:mb-11 sm:text-3xl">
                        Pilihan Solusi Sesuai Kebutuhan Pabrik &amp; Kawasan Berikat.
                    </h1>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-3 lg:gap-8">
                        <article class="flex h-full flex-col rounded-xl border border-[#d2e0eb] bg-[#f5faff] p-5 shadow-sm transition-all duration-300 ease-in-out hover:-translate-y-2 hover:border-[#a9cdec] hover:shadow-2xl sm:p-6">
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
                                        <svg class="h-4 w-4 shrink-0 text-[#3784b9]" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m4 10 4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Penerima fasilitas
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 shrink-0 text-[#3784b9]" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m4 10 4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Mengejar efisiensi
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 shrink-0 text-[#3784b9]" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m4 10 4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Brands
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('contact') }}" class="mt-6 inline-flex min-h-11 w-full items-center justify-center rounded-lg bg-[#dceefa] px-4 py-2 text-sm font-semibold text-[#3d7599] transition-all duration-300 ease-in-out hover:bg-[#b8ddf4] hover:text-[#174d79] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3984bf]">
                                Selengkapnya
                            </a>
                        </article>

                        <article class="flex h-full flex-col rounded-xl border border-[#d2e0eb] bg-[#f5faff] p-5 shadow-sm transition-all duration-300 ease-in-out hover:-translate-y-2 hover:border-[#a9cdec] hover:shadow-2xl sm:p-6">
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
                                        <svg class="h-4 w-4 shrink-0 text-[#3784b9]" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m4 10 4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Penerima fasilitas
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 shrink-0 text-[#3784b9]" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m4 10 4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Mengejar efisiensi
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 shrink-0 text-[#3784b9]" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m4 10 4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Brands
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('contact') }}" class="mt-6 inline-flex min-h-11 w-full items-center justify-center rounded-lg bg-[#dceefa] px-4 py-2 text-sm font-semibold text-[#3d7599] transition-all duration-300 ease-in-out hover:bg-[#b8ddf4] hover:text-[#174d79] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3984bf]">
                                Selengkapnya
                            </a>
                        </article>

                        <article class="flex h-full flex-col rounded-xl border border-[#d2e0eb] bg-[#f5faff] p-5 shadow-sm transition-all duration-300 ease-in-out hover:-translate-y-2 hover:border-[#a9cdec] hover:shadow-2xl sm:p-6">
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
                                        <svg class="h-4 w-4 shrink-0 text-[#3784b9]" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m4 10 4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Penerima fasilitas
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 shrink-0 text-[#3784b9]" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m4 10 4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Mengejar efisiensi
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 shrink-0 text-[#3784b9]" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m4 10 4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Brands
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('contact') }}" class="mt-6 inline-flex min-h-11 w-full items-center justify-center rounded-lg bg-[#dceefa] px-4 py-2 text-sm font-semibold text-[#3d7599] transition-all duration-300 ease-in-out hover:bg-[#b8ddf4] hover:text-[#174d79] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3984bf]">
                                Selengkapnya
                            </a>
                        </article>
                    </div>
                </div>
            </section>

            <section id="ecosystem" class="bg-[#f4f4f5] px-5 py-12 sm:px-8 sm:py-16" aria-labelledby="ecosystem-title">
                <div class="mx-auto max-w-6xl">
                    <div class="grid gap-5 md:grid-cols-[1fr_0.72fr] md:items-end md:justify-between">
                        <div>
                            <p class="mb-2 text-sm font-bold text-[#0871c4]">Ekosistem MIU</p>
                            <h2 id="ecosystem-title" class="text-2xl font-bold tracking-tight text-[#103e7d] sm:text-3xl">
                                Dipercaya oleh Bisnis Terbaik
                            </h2>
                        </div>
                        <p class="max-w-lg text-sm leading-relaxed text-slate-600 md:justify-self-end">
                            Diimplementasikan pada lini manufaktur berikat terdepan, logistik multinasional, dan konglomerasi industri Indonesia.
                        </p>
                    </div>

                    <ul class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-3 lg:grid-cols-4" aria-label="Mitra dan klien">
                        <li><span class="flex min-h-12 items-center justify-center rounded-full border border-[#a9c9df] bg-[#d2edff] px-5 text-center text-sm font-medium text-slate-800 shadow-sm transition-all duration-300 ease-in-out hover:scale-105 hover:bg-[#bee5ff] hover:shadow-md">PT. Medan Tropical Canning</span></li>
                        <li><span class="flex min-h-12 items-center justify-center rounded-full border border-[#a9c9df] bg-[#d2edff] px-5 text-center text-sm font-medium text-slate-800 shadow-sm transition-all duration-300 ease-in-out hover:scale-105 hover:bg-[#bee5ff] hover:shadow-md">PT. Medan Tropical Canning</span></li>
                        <li><span class="flex min-h-12 items-center justify-center rounded-full border border-[#a9c9df] bg-[#d2edff] px-5 text-center text-sm font-medium text-slate-800 shadow-sm transition-all duration-300 ease-in-out hover:scale-105 hover:bg-[#bee5ff] hover:shadow-md">PT. Daisen Wood Frame</span></li>
                        <li class="sm:col-start-2 lg:col-start-auto"><span class="flex min-h-12 items-center justify-center rounded-full border border-[#a9c9df] bg-[#d2edff] px-5 text-center text-sm font-medium text-slate-800 shadow-sm transition-all duration-300 ease-in-out hover:scale-105 hover:bg-[#bee5ff] hover:shadow-md">PT. Xinfung Industry Indonesia</span></li>
                    </ul>
                </div>
            </section>

            <section class="bg-white px-5 py-12 sm:px-8 sm:py-16" aria-labelledby="testimonial-title">
                <div class="mx-auto max-w-6xl">
                    <p class="mb-1 text-sm font-bold text-[#0871c4]">Testimonial Eksekutif</p>
                    <h2 id="testimonial-title" class="max-w-3xl text-2xl font-bold leading-tight tracking-tight text-[#103e7d] sm:text-3xl">
                        Dukungan Nyata dari Para Pemimpin Industri
                    </h2>

                    <div class="mt-7 flex flex-col gap-5 sm:mt-8">
                        <article class="rounded-2xl border border-[#c6d8e4] bg-[#eff9ff] p-5 shadow-sm transition-all duration-300 ease-in-out hover:border-[#8dbbda] hover:shadow-lg sm:p-7">
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

                        <article class="rounded-2xl border border-[#c6d8e4] bg-[#eff9ff] p-5 shadow-sm transition-all duration-300 ease-in-out hover:border-[#8dbbda] hover:shadow-lg sm:p-7">
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

                        <article class="rounded-2xl border border-[#c6d8e4] bg-[#eff9ff] p-5 shadow-sm transition-all duration-300 ease-in-out hover:border-[#8dbbda] hover:shadow-lg sm:p-7">
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
