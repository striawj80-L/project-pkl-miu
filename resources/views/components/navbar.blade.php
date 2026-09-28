@props(['active' => ''])

<nav class="site-nav" aria-label="Navigasi utama">
    <a class="site-nav__brand" href="{{ route('home') }}" aria-label="Mitra Inovasi Unggul - Home">
        <img src="{{ asset('images/Logo MIU.webp') }}" alt="" width="42" height="42">
        <span>Mitra Inovasi Unggul</span>
    </a>

    <div class="site-nav__links">
        <a href="{{ url('/about') }}" @class(['is-active' => $active === 'about']) @if ($active === 'about') aria-current="page" @endif>
            About Us
        </a>
        <a href="{{ route('home') }}" @class(['is-active' => $active === 'home']) @if ($active === 'home') aria-current="page" @endif>
            Home
        </a>
        <a href="{{ url('/product') }}" @class(['is-active' => $active === 'product']) @if ($active === 'product') aria-current="page" @endif>
            Product
        </a>
        <a href="{{ route('contact') }}" @class(['is-active' => $active === 'contact']) @if ($active === 'contact') aria-current="page" @endif>
            Contact
        </a>
    </div>
</nav>
