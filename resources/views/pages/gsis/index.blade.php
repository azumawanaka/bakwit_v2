@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4 pb-5">
        <h1 class="mt-4 @guest mb-5 @endguest"> GeoInformation System</h1>
        @auth()
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item active"> GeoInformation System</li>
        </ol>
        @endauth

        <div id="map" style="height: 450px;"></div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCswO_df1SesOd8uViwi5VkgT2tQ6H6Cto"></script>
    <script src="{{ asset('js/jquery.googlemap.js') }}"></script>
    <script src="{{ asset('js/multi-gmap.js') }}"></script>
@endsection