@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ auth()->user()->type === 1 ? 'MDRRMO' : 'BDRRMO' }}</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item active">{{ auth()->user()->type === 1 ? 'MDRRMO' : 'BDRRMO' }}</li>
        </ol>
        @if(auth()->user()->type === 0)
            <div class="row">
                @include('pages.evacuation_center.tables.brgy-evacuation')
                @include('pages.evacuation_center.modals.edit-evacuation-center')
                @include('pages.evacuation_center.modals.confirm-delete')
            </div>
        @endif
        <div class="row">
            @if(auth()->user()->type === 1)
            <div class="col-md-12">
                @if(auth()->user()->type === 0)
                <h4 class="mb-3"><i class="fa fa-house"></i> Barangay Information</h4>
                @endif
                @include('pages.mdrrmo.tables.brgy-evacuation')
            </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
@endsection