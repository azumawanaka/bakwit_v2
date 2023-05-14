@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">MDRRMO</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item active">BDRRMO</li>
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
            <div class="col-md-5">
                @if(auth()->user()->type === 0)
                <h4 class="mb-3"><i class="fa fa-house"></i> Barangay Information</h4>
                @endif
                @include('pages.mdrrmo.tables.brgy-evacuation')
            </div>
            @endif
            <div class="col-md-{{ auth()->user()->type === 0 ? '12' : '7' }}">
                <h4 class="mb-3"><i class="fa fa-house"></i> Barangay Information</h4>
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
                        $('[name=max_capacity]').val(data.max_capacity)
                        $('[name=needs]').html(data.needs)

                        $('[name=family_count]')
                            .attr('max', data.max_capacity)

                        if (data.evacuee !== null) {
                            let family_count = data.evacuee.family_count
                            let pwd_count = data.evacuee.pwd_count

                            $('[name=family_count]')
                                .val(family_count)
                            $('[name=pwd_count]').val(pwd_count)
                        }
                    })
                }

                $(document).on('click','.edit-evacuation-center', function(e) {
                    let url = $(this).attr('data-get-url')
                    updateUrl = $(this).attr('data-update-url')

                    $('[name=family_count]').val(0)
                    $('[name=pwd_count]').val(0)

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