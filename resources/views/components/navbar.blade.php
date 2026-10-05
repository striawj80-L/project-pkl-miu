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
        <div class="site-nav__item">
            <a href="{{ route('about') }}" aria-controls="about-submenu" aria-expanded="false" data-submenu-trigger @class(['is-active' => $active === 'about']) @if ($active === 'about') aria-current="page" @endif>
                About Us
            </a>
            <ul class="site-nav__submenu" id="about-submenu">
                <li><a href="{{ route('about') }}#timeline-title">Our Timeline</a></li>
                <li><a href="{{ route('about') }}#why-title">Why Us</a></li>
                <li><a href="{{ route('about') }}#commitment">Our commitment</a></li>
            </ul>
        </div>
        <div class="site-nav__item">
            <a href="{{ route('home') }}" aria-controls="home-submenu" aria-expanded="false" data-submenu-trigger @class(['is-active' => $active === 'home']) @if ($active === 'home') aria-current="page" @endif>
                Home
            </a>
            <ul class="site-nav__submenu" id="home-submenu">
                <li><a href="{{ route('home') }}#solutions-title">Services</a></li>
                <li><a href="{{ route('home') }}#support-title">Capabilities</a></li>
                <li><a href="{{ route('home') }}#faq-title">FAQ</a></li>
            </ul>
        </div>
        <div class="site-nav__item">
            <a href="{{ route('product') }}" aria-controls="product-submenu" aria-expanded="false" data-submenu-trigger @class(['is-active' => $active === 'product']) @if ($active === 'product') aria-current="page" @endif>
                Product
            </a>
            <ul class="site-nav__submenu" id="product-submenu">
                <li><a href="{{ route('product') }}#product">All Product</a></li>
                <li><a href="{{ route('product') }}#product-details-inventory">IT Inventory (ERP)</a></li>
                <li><a href="{{ route('product') }}#product-details-cn-app">CN App</a></li>
                <li><a href="{{ route('product') }}#product-details-internal-app">Basic Internal App</a></li>
            </ul>
        </div>
        <a href="{{ route('contact') }}" @class(['is-active' => $active === 'contact']) @if ($active === 'contact') aria-current="page" @endif>
            Contact
        </a>
    </div>
</nav>
