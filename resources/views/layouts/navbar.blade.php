{{-- header --}}

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/" class=" box-nav">Home</a></li>
                <li><a href="/residences" class="box-nav">Residences</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="logo">
            <a href="/">
                <img src="{{ asset('img/logo-verde.png') }}" alt="">
            </a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="/" class="box-nav menu-boy">Home</a></li>
                <li><a href="/residences" class="box-nav menu-boy">Residences</a></li>
                <li><a href="/neighborhood" class="box-nav">Neighborhood</a></li>
                <li><a href="/contact" class="box-nav">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show ri-menu-line"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none ri-close-line"></i>

    </div>
</header>
