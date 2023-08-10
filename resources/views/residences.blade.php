@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="verde-two page-header d-flex align-items-center">
        <div class="container position-relative section-header">

            <!-- Terra Section -->

            <div class="terraverde-unit">

                {{-- type a1 - a4 --}}
                @for ($i = 1; $i <= 4; $i++)
                    @include('type.terraverde.terra-type-a' . $i)
                @endfor

                {{-- type b1 - b2 --}}
                @for ($i = 1; $i <= 2; $i++)
                    @include('type.terraverde.terra-type-b' . $i)
                @endfor

            </div>

            <!-- Monte Section  -->

            <div class="monteverde-unit">

                @include('type.monteverde.monte-type-c1')

            </div>

        </div>
    </div>
@endsection

@section('custom-css')
    <link href="{{ asset('css/' . $doc . '.css') }}" rel="stylesheet">
@endsection
