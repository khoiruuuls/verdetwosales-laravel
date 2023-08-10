@extends('layouts.app')

@section('title', $title)

@section('content')
    <section id="hero gallery-single" class="gallery-single">
        <div class="position-relative h-100">
            <div class="slides-1 portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="swiper-slide">
                            <img src="{{ asset('img/gallery/verde-two-(' . $i . ').jpg') }}" class="img-fluid" alt="">
                            <div class="overlay">
                                <h2>Award</h2>
                                <div class="d-flex gap-5 logo-wrap">
                                    <img src="{{ asset('img/development/logo-guru.png') }}" class="img-home" alt="">
                                    <img src="{{ asset('img/development/logo-fiabci.png') }}"
                                        class="img-home img-home-mobile" alt="">
                                    <img src="{{ asset('img/development/logo-edge.png') }}" class="img-home img-home-mobile"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="pt-5 container">
        <div class="container">
            <div class="row box-home">
                <div class="col-md-12 col-lg-8 p-0">
                    <div class="pic-overlay p-2">
                        <img src="{{ asset('img/gallery/verde-two-(8).jpg') }}"class="img-fluid img-frame">
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 d-flex flex-column pt-5 px-3">
                    <div>
                        <h2>Say hello to our</h2>
                        <p>Amenities</p>
                    </div>
                    <p class="pt-4 text-justify">
                        The Verde Two experience starts at the majestic double-height Grand Lobby, an embodiment of Yabu
                        Pushelberg’s bold
                        vision. Bronze gilded screens with batik motifs, refined wooden panels and beautifully veined marble
                        line
                        the walls,
                        illuminated with abundant natural light through soaring floor-to-ceiling glass.
                    </p>
                    <button class="mt-4" style="filter: invert(1)">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="row align-items-center justify-content-center pt-5">
                <div class="col-lg-3 col-6 d-flex justify-content-center align-items-center mb-4">
                    <img src="{{ asset('img/development/logo-farpoint.png') }}" class="img-logo" alt="">
                </div>
                <div class="col-lg-3 col-6 d-flex justify-content-center align-items-center mb-4">
                    <img src="{{ asset('img/development/logo-yabu.png') }}" class="img-logo" alt="">
                </div>
                <div class="col-lg-3 col-6 d-flex justify-content-center align-items-center mb-4">
                    <img src="{{ asset('img/development/logo-asia.png') }}" class="img-logo" alt="">
                </div>
                <div class="col-lg-3 col-6 d-flex justify-content-center align-items-center mb-4">
                    <img src="{{ asset('img/development/logo-cushman.png') }}" class="img-logo" alt="">
                </div>
            </div>

        </div>
    </section>

    {{-- gallery section --}}
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                @foreach ($aminities as $index => $amenity)
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <img src="{{ asset('img/aminities/verde-two-' . $amenity . '.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="d-flex align-items-center justify-content-center">
                                <a href="{{ asset('img/aminities/verde-two-' . $amenity . '.jpg') }}"
                                    title="{{ $amenity }}" class="glightbox preview-link"><i
                                        class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                            <div class="box-gallery">
                                <p class="text-center m-0 py-2 px-4">{{ $amenity }}</p>
                            </div>
                            <a href="{{ route('home.page', str_replace(' ', '-', strtolower($amenity))) }}"
                                class="box-icon">
                                <i class="las la-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

@section('custom-css')
    <link href="{{ asset('css/' . $doc . '.css') }}" rel="stylesheet">
@endsection
