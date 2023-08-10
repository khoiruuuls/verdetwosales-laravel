<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Verde Two')</title>

    <!-- Favicons -->
    <link href="{{ asset('img/logo-verde.png') }}" rel="icon">
    <link href="{{ asset('img/logo-verde.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- icon line awesome --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <!-- remixicons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

    {{-- swiper js --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    {{-- custom css --}}
    @yield('custom-css')
</head>

<body>

    {{-- header --}}
    @include('layouts.navbar')

    {{-- main --}}
    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    @include('layouts.footer')

    {{-- whatsapp --}}
    <a href="https://wa.me/6282317164462?text=Halo%2C%0A%0ASaya%20mendapat%20informasi%20dari%20verdetwosales.com%20tertarik%20untuk%20melihat%20properti%20dari%20Verde%20Two.%20Saya%20ingin%20informasi%20lebih%20lanjut%20tentang%20properti%20yang%20tersedia.%0A%0ATerima%20kasih!"
        class="scroll-top d-flex align-items-center justify-content-center">
        <i class="lab la-whatsapp" style="font-size: 35px;"></i>
    </a>

    {{-- custom-js --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>

    @yield('custom-js')
</body>



{{-- swiper js --}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</html>
