<footer class="site-footer">
    <div class="site-footer__inner">
        <section class="site-footer__about" aria-labelledby="footer-brand">
            <a class="site-footer__brand" href="{{ route('home') }}" id="footer-brand">
                <img src="{{ asset('images/Logo MIU.webp') }}" alt="" width="40" height="40" loading="lazy">
                <span>Mitra Inovasi Unggul</span>
            </a>
            <p>
                MIU dari PT. Mitra Inovasi Unggul adalah Software House yang didirikan untuk
                menyediakan semua jenis Aplikasi Pembantu Perusahaan untuk mendapatkan Keunggulan Bisnis.
            </p>
        </section>

        <nav class="site-footer__information" aria-label="Informasi">
            <h2>Informasi</h2>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('home') }}#faq-title">FAQs</a>
            <a href="{{ route('product') }}">Product</a>
            <a href="{{ route('contact') }}">Contact Us</a>
        </nav>

        <section class="site-footer__contact" aria-labelledby="footer-contact-title">
            <h2 id="footer-contact-title">Contact MIU</h2>
            <address>
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 22s8-7.1 8-14A8 8 0 1 0 4 8c0 6.9 8 14 8 14Z"/>
                    <circle cx="12" cy="8" r="2.5"/>
                </svg>
                <span>Jl. Tanah Abang II No.68A, RT.1/RW.5, Petojo Selatan, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160</span>
            </address>
            <a href="tel:+6285814409262">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="m7.2 3.5 3 4.2-2 2a14.4 14.4 0 0 0 6.1 6.1l2-2 4.2 3-.9 3.2c-.2.7-.9 1.1-1.6 1C9.1 19.7 4.3 14.9 3 8c-.1-.7.3-1.4 1-1.6l3.2-.9Z"/>
                </svg>
                <span>+62 858 1440 9262</span>
            </a>
            <a href="mailto:ptmitrainovasinggul@yahoo.com">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M3 5h18v14H3V5Zm1.5 1.5 7.5 6 7.5-6"/>
                </svg>
                <span>ptmitrainovasinggul@yahoo.com</span>
            </a>
        </section>

        <p class="site-footer__copyright">Copyright &copy; {{ now()->year }} PT. Mitra Inovasi Unggul</p>
    </div>
</footer>
