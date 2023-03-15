@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Evacuees</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item active">Evacuees</li>
        </ol>
        <div class="d-flex justify-content-between">
            <form class="d-flex align-items-center">
                @if(isset(request()->keyword))
                    <div class="mr-2">
                        <a href="{{ route('bdrrmo.evacuees.lists') }}" class="btn btn-sm"><i class="fas fa-refresh"></i></a>
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
        </div>

        @if (session('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <hr/>

        @include('pages.evacuees.tables.lists')
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {

        })
    </script>
@endsection