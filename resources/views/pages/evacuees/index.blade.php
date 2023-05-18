@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ $brgy->name }} list of evacuees</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item">
                @if(auth()->user()->type === 0)
                <a href="{{ route('mdrrmo.centers') }}" class="text-decoration-none">MDRRMO</a>
                @else
                    <a href="{{ route('bdrrmo.index') }}" class="text-decoration-none">BDRRMO</a>
                @endif
            </li>
            <li class="breadcrumb-item active">Evacuees</li>
        </ol>
        <div class="d-flex justify-content-between">
            @if(auth()->user()->type === 0)
            <button type="button"
                    class="btn btn-primary btn-sm"
                    data-toggle="modal"
                    data-target="#evacueeModalCenter">
                <i class="fa fa-plus"></i> Add Evacuee
            </button>
            @endif
            <form class="d-flex align-items-center" method="GET" action="{{ route('bdrrmo.evacuees.lists', ['evacuee' => $evacuee]) }}">
                @if(isset(request()->keyword))
                    <div class="mr-2">
                        <a href="{{ route('bdrrmo.evacuees.lists', ['evacuee' => $evacuee]) }}" class="btn btn-sm"><i class="fas fa-refresh"></i></a>
                    </div>
                @endif
                <div class="input-group">
                    <input class="form-control"
                           type="text"
                           name="keyword"
                           placeholder=""
                           value="{{ request()->keyword }}"
                           aria-describedby="btnESearch">
                    <button class="btn btn-primary" id="btnESearch" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
    
            @if(auth()->user()->type === 1)
            <a href="{{ route('bdrrmo.evacuees.generate-pdf', ['evacuee' => $evacuee]) }}"
                class="btn btn-secondary">
                Generate Evacuee Report
            </a>
            @endif
        </div>

        @if (session('msg'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                <strong>Success!</strong> {{ session('msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <hr/>

        @include('pages.evacuees.tables.lists')
        @include('pages.evacuees.modal.new_evacuee')
        @include('pages.evacuees.modal.generate-pdf')
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {

        })
    </script>
@endsection