@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">MDRRMO</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item active">MDRRMO</li>
        </ol>

        <div class="row">
            <div class="col-md-5">
                <h4 class="mb-3"><i class="fa fa-house"></i> Barangay Information</h4>
                @include('pages.mdrrmo.tables.brgy-evacuation')
            </div>
            <div class="col-md-7">
                <div id="map" class="mb-4" style="height: 400px;"></div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCswO_df1SesOd8uViwi5VkgT2tQ6H6Cto"></script>
    <script src="{{ asset('js/jquery.googlemap.js') }}"></script>
    <script src="{{ asset('js/multi-gmap.js') }}"></script>
    <script>
        $(document).ready(function () {
        })
    </script>
@endsection