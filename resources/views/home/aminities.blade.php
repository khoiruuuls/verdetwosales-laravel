@extends('layouts.app')

@section('title', $title)

@section('content')
    <div id="parallax-world-of-ugg">
        <section class="page-header-section pb-0">
            <div class="parallax image-one">
                <div class="overlay">
                    <h2>{{ $text_1 }}</h2>
                </div>
            </div>
        </section>
        <section>
            <div class="parallax image-two">
                <div class="overlay ">
                    <h2>{{ $text_2 }}</h2>
                </div>
            </div>
        </section>
        <section>
            <div class="parallax image-three">
                <div class="overlay">
                    <h2>{{ $text_3 }}</h2>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('custom-css')
    <link href="{{ asset('css/aminities.css') }}" rel="stylesheet">
@endsection

@section('custom-js')
@endsection
