@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-6 text-center px-5">
                    <div class="section-header">
                        <h2>Contact</h2>
                    </div>
                    <p class="text-justify">
                        Should you have any inquiry or request, kindly reach us via the box below. We will be pleased to
                        assist you over WhatsApp and will get back to you.
                    </p>
                    <div class="row justify-content-evenly">
                        <a class="col-sm-6" href="{{ 'https://wa.me/6282317164462?text=' . $message }}">
                            <button class="my-1">
                                Inquire Now
                            </button>
                        </a>
                        <a class="col-sm-6" href="{{ 'mailto:khoirul@verdetwosales.com?subject=' . $message }}">
                            <button class="my-1 ">
                                Contact Me
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center mt-sm-4">
                    <img src="{{ asset('img/verde-two.jpg') }}" alt="" style="height: 70vh; object-fit: cover"
                        class="img-fluid img-frame">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-css')
    <link href="{{ asset('css/' . $doc . '.css') }}" rel="stylesheet">
@endsection
