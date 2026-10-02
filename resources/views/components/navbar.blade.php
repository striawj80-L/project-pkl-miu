@props(['active' => ''])

<nav class="site-nav" aria-label="Navigasi utama">
    <a class="site-nav__brand" href="{{ route('home') }}" aria-label="Mitra Inovasi Unggul - Home">
        <img src="{{ asset('images/Logo MIU.webp') }}" alt="" width="42" height="42">
        <span>Mitra Inovasi Unggul</span>
    </a>

    <button
        class="site-nav__toggle"
        type="button"
        aria-label="Buka navigasi"
        aria-controls="primary-navigation"
        aria-expanded="false"
        data-menu-toggle
    >
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
    </button>

    <div class="site-nav__links" id="primary-navigation">
        <a href="{{ route('home') }}" @class(['is-active' => $active === 'home']) @if ($active === 'home') aria-current="page" @endif>
            Home
        </a>
        <a href="{{ route('about') }}" @class(['is-active' => $active === 'about']) @if ($active === 'about') aria-current="page" @endif>
            About Us
        </a>
        <a href="{{ route('product') }}" @class(['is-active' => $active === 'product']) @if ($active === 'product') aria-current="page" @endif>
            Product
        </a>
        <a href="{{ route('contact') }}" @class(['is-active' => $active === 'contact']) @if ($active === 'contact') aria-current="page" @endif>
            Contact
        </a>
    </div>
</nav>
