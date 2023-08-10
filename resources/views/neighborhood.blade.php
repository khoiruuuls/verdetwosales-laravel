@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="page-header container">
        <div class="row">
            <div class="box-nav-neighborhood">
                <div class="d-flex gap-3 ">
                    <div onclick="showMap('mapTransit')">
                        <i class="las la-subway fs-icon-lg btn" data-map="mapTransit"></i>
                    </div>
                    <div onclick="showMap('mapSchool')">
                        <i class="las la-graduation-cap fs-icon-lg btn" data-map="mapSchool"></i>
                    </div>
                    <div onclick="showMap('mapRestaurant')">
                        <i class="las la-utensils fs-icon-lg btn" data-map="mapRestaurant"></i>
                    </div>
                    <div onclick="showMap('mapMall')">
                        <i class="las la-shopping-bag fs-icon-lg btn" data-map="mapMall"></i>
                    </div>
                    <div onclick="showMap('mapHospital')">
                        <i class="las la-hospital fs-icon-lg btn" data-map="mapHospital"></i>
                    </div>

                </div>
            </div>
            <div class="p-0">
                <div id="mapTransit" class="map active"></div>
                <div id="mapSchool" class="map" style="display: none"></div>
                <div id="mapRestaurant" class="map" style="display: none"></div>
                <div id="mapMall" class="map" style="display: none"></div>
                <div id="mapHospital" class="map" style="display: none"></div>
                <div class="d-flex gap-2 justify-content-center align-item-center">
                    <button id="directionsBtn" class="mt-3">Get Direction</button>
                    <a
                        href="https://www.google.com/maps/@-6.21375,106.8339067,3a,49.4y,131.01h,88.15t/data=!3m6!1e1!3m4!1sf5xtEnrul9cZjHF3i62hjw!2e0!7i16384!8i8192?entry=ttu">
                        <button class="mt-3">Get View</button>
                    </a>
                </div>
                {{-- <div class="row">
                    <div class="d-flex flex-column justify-content-evenly">
                        <div id="mapTransit" class="map"></div>
                        <div id="mapSchool" class="map" style="display: none"></div>
                        <div id="mapRestaurant" class="map" style="display: none"></div>
                        <div id="mapMall" class="map" style="display: none"></div>
                        <div id="mapHospital" class="map" style="display: none"></div>

                    </div> --}}
            </div>
        </div>
    </div>
@endsection

@section('custom-css')
    <link href="{{ asset('css/' . $doc . '.css') }}" rel="stylesheet">
    <script type="text/javascript"
        src="https://www.bing.com/api/maps/mapcontrol?key=AoNFMMt-p7ltMiWQX4u9yYtS2hzEI7A8StpDFk-7pSu9MwFNek1WeZ4RtXX4DZnm&callback=initialize">
    </script>
@endsection

@section('custom-js')
    <script src="{{ asset('js/maps.js') }}"></script>
@endsection
