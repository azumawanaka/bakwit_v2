@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">BDRRMO</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item active">BDRRMO</li>
        </ol>
        <div class="d-flex justify-content-between">
            <div class="d-flex gap-2 align-items-center mb-2">
                <button type="button"
                        class="btn btn-md btn-outline-primary"
                        data-toggle="modal"
                        data-target="#evacuationCenterModal">
                    <i class="fas fa-plus"></i> Add Evacuation Center
                </button>
                <a href="#"
                   class="btn btn-secondary"
                   data-toggle="modal"
                   data-target="#generatePdfModal">
                    Generate Empty Evacuee List
                </a>
            </div>
            <form class="d-flex align-items-center">
                @if(isset(request()->keyword))
                <div class="mr-2">
                    <a href="{{ route('bdrrmo.index') }}" class="btn btn-sm"><i class="fas fa-refresh"></i></a>
                </div>
                @endif
                <div class="input-group">
                    <input class="form-control"
                           type="text"
                           name="keyword"
                           placeholder=""
                           value="{{ request()->keyword }}"
                           aria-describedby="btnESearch">
                        <button class="btn btn-primary" id="btnESearch" type="submit"><i class="fas fa-search"></i>
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

        @include('pages.evacuation_center.tables.brgy-evacuation')
    </div>

    @include('pages.evacuation_center.modals.new-evacuation-center')
    @include('pages.evacuation_center.modals.edit-evacuation-center')
    @include('pages.evacuation_center.modals.confirm-delete')
    @include('pages.evacuation_center.modals.generate-pdf')

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.numberonly').keypress(function (e) {
                let charCode = (e.which) ? e.which : event.keyCode
                if (String.fromCharCode(charCode).match(/[^0-9]/g)) {
                    return false
                }
                return true
            })

            function getEvacuationCenter(url, updateUrl) {
                window.axios.get(url).then(response => {
                    let data = response.data

                    $('#form-edit').attr('action', updateUrl)
                    $('#update_barangay_id')
                        .attr('disabled', 'disabled')
                        .val(data.barangay.id)
                        .change()
                    $('#update_evacuation_center_type_id').val(data.center_type).change()

                    $('#update_max_capacity').val(data.max_capacity)
                    $('#brgy_needs').html(data.needs)

                    let is_flood_prone = data.barangay.is_flood_prone ? true : false
                    let is_storm_surge = data.barangay.is_storm_surge ? true : false
                    let is_land_slide = data.barangay.is_land_slide ? true : false
                    let is_earthquake = data.barangay.is_earthquake ? true : false
                    let is_tsunami = data.barangay.is_tsunami ? true : false
                    $('[name=is_flood_prone]').prop('checked', is_flood_prone)
                    $('[name=is_storm_surge]').prop('checked', is_storm_surge)
                    $('[name=is_land_slide]').prop('checked', is_land_slide)
                    $('[name=is_earthquake]').prop('checked', is_earthquake)
                    $('[name=is_tsunami]').prop('checked', is_tsunami)

                    if (data.evacuee !== null) {
                        let family_count = data.evacuee.family_count
                        let min_capacity = family_count == 0 ? 11 : family_count
                        $('#update_max_capacity').attr('min', min_capacity)
                        $('[name=family_count]').val(family_count)
                    }
                })
            }

            $(document).on('click','.edit-evacuation-center', function(e) {
                let url = $(this).attr('data-get-url')
                updateUrl = $(this).attr('data-update-url')

                $('[name=family_count]').val(0)
                $('[name=pwd_count]').val(0)
                $('[name=needs]').val('')

                getEvacuationCenter(url, updateUrl)
            })

            $(document).on('click', '.confirmModalDelete', function (e) {
                e.preventDefault()
                let url = $(this).attr('data-url')
                $('#confirmDelete form').attr('action', url)
            })

        })
    </script>
@endsection