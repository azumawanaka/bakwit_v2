@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 @guest mb-5 @endguest">Calamity Information</h1>
        @auth
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item active">Calamity Information</li>
        </ol>
        @endauth
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="h3 calamity-name">
                            @if($calamity !== null)
                                @if($calamity->type === 0)
                                    <svg class="" width="80" height="80" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" style="display: inline-block; vertical-align: middle;"><path d="M800 128c-10.624 0-21.124 0.75-31.584 2.25-59.748-81.416-154.040-130.25-256.416-130.25s-196.624 48.834-256.416 130.25c-10.46-1.5-20.96-2.25-31.584-2.25-123.5 0-224 100.5-224 224s100.5 224 224 224c27.376 0 54.168-5 79.418-14.666 43.082 37.542 94.832 62.582 150.208 73.042l-69.626 69.624 64 64-64 192 192-192-64-64 22-65.998c68.916-4.876 134.25-31.086 186.582-76.668 25.25 9.666 52.042 14.666 79.418 14.666 123.5 0 224-100.5 224-224s-100.5-224-224-224z" style="fill: rgb(60, 55, 68);"></path></svg>
                                    Tropical Cyclone (Bagyo)
                                @else
                                    <svg class="" width="80" height="80" viewBox="0 0 1152 1024" xmlns="http://www.w3.org/2000/svg" style="display: inline-block; vertical-align: middle;"><path d="M576 229.92l-437.060 385.5c-3.24 2.92-7.38 4.28-10.94 6.7v369.88c0 17.68 14.32 32 32 32h298.46l-74.46-145.62 208.22-128-120.32-238.44 296.1 273.56-208.22 128 79.84 110.5h352.38c17.68 0 32-14.32 32-32v-369.8c-3.4-2.32-7.44-3.64-10.52-6.4l-437.48-385.88zM1141.38 472.56l-117.38-103.66v-272.9c0-17.68-14.32-32-32-32h-128c-17.68 0-32 14.32-32 32v103.38l-202.5-178.76c-15.26-13.72-34.38-20.6-53.5-20.62s-38.2 6.82-53.4 20.54l-511.98 452.020c-13.14 11.82-14.24 32.040-2.42 45.2l42.8 47.64c11.8 13.14 32.040 14.24 45.2 2.42l458.64-404.56c12.1-10.66 30.24-10.66 42.34 0l458.64 404.54c13.14 11.8 33.38 10.72 45.2-2.42l42.8-47.64c11.8-13.14 10.72-33.38-2.44-45.18z" style="fill: rgb(60, 55, 68);"></path></svg>
                                    Earthquake
                                @endif
                            @else
                                <svg viewBox="0 0 500 500" width="230" height="230" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#f8b62d;}.cls-1,.cls-2{stroke:#231815;stroke-miterlimit:10;}.cls-2,.cls-4{fill:#231815;}.cls-3{fill:#fff;}</style></defs><title/><g data-name="图层 1" id="图层_1"><path class="cls-1" d="M236.75,272.11A82.26,82.26,0,0,1,316,241.64a76.19,76.19,0,0,1,10.36,2.59,82.65,82.65,0,0,0-64.92-68.08C228.11,169.4,193.17,185,175.64,214a83,83,0,0,0-4.41,76.58c.47-.46.94-.92,1.42-1.37A70.52,70.52,0,0,1,236.75,272.11Z"/><path class="cls-2" d="M171.23,290.58A83,83,0,0,1,175.64,214c17.54-28.95,52.48-44.6,85.76-37.86a82.65,82.65,0,0,1,64.92,68.08,78.27,78.27,0,0,1,15.84,7.19,98,98,0,0,0-63.86-86.09c-37.69-13.82-81.9-1.62-107.27,29.43-25,30.6-29.26,74.3-10,108.8A67.76,67.76,0,0,1,171.23,290.58Z"/><path class="cls-2" d="M253.07,131.54V97.89c0-9.65-15-9.67-15,0v33.65C238.07,141.19,253.07,141.21,253.07,131.54Zm-7.5-33.65v0Z"/><path class="cls-2" d="M176.66,152.05c4.83,8.36,17.79.81,13-7.57l-16.83-29.15c-4.83-8.36-17.79-.81-13,7.57Zm6.48-3.79-16.83-29.15Z"/><path class="cls-2" d="M141.22,187.49l-29.15-16.83c-8.37-4.84-15.94,8.12-7.57,13l29.15,16.83C142,205.28,149.59,192.32,141.22,187.49Zm-32.93-10.35L137.44,194Z"/><path class="cls-2" d="M87.06,263.9h33.65c9.65,0,9.67-15,0-15H87.06C77.4,248.9,77.39,263.9,87.06,263.9Zm33.65-7.5h0Z"/><path class="cls-2" d="M112.08,342.13l29.15-16.83c8.36-4.83.81-17.79-7.57-13l-29.15,16.83C96.15,334,103.69,347,112.08,342.13Zm25.36-23.3-29.15,16.83Z"/><path class="cls-2" d="M370.42,263.9h33.65c9.65,0,9.67-15,0-15H370.42C360.77,248.9,360.75,263.9,370.42,263.9Zm0-7.5h0Z"/><path class="cls-2" d="M357.48,200.44l29.15-16.83c8.36-4.83.81-17.79-7.57-13l-29.15,16.83C341.55,192.32,349.1,205.28,357.48,200.44Zm25.36-23.3L353.7,194Z"/><path class="cls-2" d="M314.47,152.05l16.83-29.15c4.84-8.37-8.12-15.94-13-7.57l-16.83,29.15C296.68,152.86,309.64,160.42,314.47,152.05Zm10.35-32.93L308,148.27Z"/><path class="cls-2" d="M377.25,293.37c.54,1.41,1.05,2.84,1.51,4.29a7.08,7.08,0,0,1,.16,4.09,51.75,51.75,0,0,1-17.73,100.37H220.54a62.23,62.23,0,0,1-55-91.35c-1-1.44-1.95-2.9-2.86-4.4-.56-.93-1.1-1.87-1.62-2.81a71.25,71.25,0,0,0-9.23,48,69.75,69.75,0,0,0,38.58,51.19c11.68,5.47,23.78,6.86,36.45,6.86H350.31c9.8,0,19.5.28,29-2.82,24.63-8.06,41.85-31.83,41.13-57.87A59.93,59.93,0,0,0,377.25,293.37Z"/><path class="cls-2" d="M220.54,277.65a62.16,62.16,0,0,1,19.18,3,73.75,73.75,0,0,1,87.48-28.16,82.09,82.09,0,0,0-.89-8.29A76.19,76.19,0,0,0,316,241.64a82.26,82.26,0,0,0-79.21,30.47c1.67.38,3.32.82,5,1.33l-8.47,3.45q1.68-2.46,3.5-4.78a70.52,70.52,0,0,0-64.11,17.1c-.48.45-1,.91-1.42,1.38a78.51,78.51,0,0,0,3.63,7.06A62.05,62.05,0,0,1,220.54,277.65Z"/><path class="cls-2" d="M241.72,273.44c-1.65-.51-3.3-.95-5-1.33q-1.82,2.32-3.5,4.78Z"/><path class="cls-2" d="M342.22,260.28A74,74,0,0,1,369,292.76a7.49,7.49,0,0,1,4.52-.35c1.26.27,2.5.6,3.73,1a83.68,83.68,0,0,0-35.1-42c.1,1.65.17,3.31.18,5C342.32,257.7,342.28,259,342.22,260.28Z"/><path class="cls-2" d="M369,292.76a73,73,0,0,1,2.53,6.89,51.3,51.3,0,0,1,7.39,2.1,7.08,7.08,0,0,0-.16-4.09c-.46-1.45-1-2.87-1.51-4.29-1.23-.35-2.47-.68-3.73-1A7.49,7.49,0,0,0,369,292.76Z"/><path class="cls-2" d="M342.33,256.4c.06-8.29-11-9.46-14.15-3.5a73.42,73.42,0,0,1,13.39,7A7.44,7.44,0,0,0,342.33,256.4Z"/><path class="cls-2" d="M342.22,260.28c.06-1.29.11-2.59.12-3.89a7.44,7.44,0,0,1-.77,3.46Z"/><path class="cls-2" d="M165.54,310.77a62.36,62.36,0,0,1,9.32-13.13,78.51,78.51,0,0,1-3.63-7.06,67.76,67.76,0,0,0-10.17,13c.53.94,1.06,1.88,1.62,2.81C163.59,307.87,164.56,309.33,165.54,310.77Z"/><path class="cls-2" d="M327.21,252.51l1,.38c3.17-6,14.22-4.79,14.15,3.5,0-1.67-.08-3.33-.18-5a78.27,78.27,0,0,0-15.84-7.19A82.09,82.09,0,0,1,327.21,252.51Z"/><path class="cls-3" d="M405.36,347.5c1,19.06-10.19,37.28-28.18,44.17-8.12,3.11-16.25,2.95-24.71,2.95H237c-5.48,0-11,.05-16.45,0a54.71,54.71,0,0,1-50-77.11,53.89,53.89,0,0,1,6-10.38c.78-1.05,1.59-2.06,2.44-3,14.38-16.69,37.56-22.69,58.65-16.18,3.34,1,6.63-.74,8.47-3.45,14.64-21.53,41.42-33.13,67.15-28.1a66.85,66.85,0,0,1,13.82,4.31c.87.38,1.73.77,2.57,1.18s1.94,1,2.89,1.49a67,67,0,0,1,31.6,38.11,6.37,6.37,0,0,0,5.31,5.44C388.93,311.09,404.25,327.28,405.36,347.5Z"/><path class="cls-4" d="M378.92,301.75a51.75,51.75,0,0,1-17.73,100.37H220.54a62.24,62.24,0,1,1,19.18-121.44,73.75,73.75,0,0,1,87.48-28.16l1,.38a72.34,72.34,0,0,1,13.39,7c.22.14.44.28.65.43A73.93,73.93,0,0,1,369,292.77c.95,2.24,1.8,4.54,2.53,6.89A50.84,50.84,0,0,1,378.92,301.75Zm-1.74,89.92c18-6.89,29.22-25.11,28.18-44.17-1.11-20.22-16.43-36.41-35.82-40.61a6.37,6.37,0,0,1-5.31-5.44,67,67,0,0,0-31.6-38.11c-1-.52-1.91-1-2.89-1.49s-1.7-.8-2.57-1.18a66.85,66.85,0,0,0-13.82-4.31c-25.73-5-52.51,6.57-67.15,28.1-1.84,2.71-5.13,4.48-8.47,3.45-21.09-6.51-44.27-.51-58.65,16.18-.85,1-1.66,2-2.44,3a53.89,53.89,0,0,0-6,10.38,54.71,54.71,0,0,0,50,77.11c5.48.05,11,0,16.45,0H352.47C360.93,394.62,369.06,394.78,377.18,391.67Z"/></g></svg>
                                Sunny
                            @endif
                        </div>
                        @if($calamity !== null)
                        <div class="h6 mb-5">
                            @if($calamity->type === 1)
                                Magnitude: {!! $calamity->info_arr['magnitude'] !!}
                            @else
                                Name of Tropical Cyclone: {!! $calamity->info_arr['name_of_tropical_cyclone'] !!}
                            @endif
                        </div>
                        <div class="">
                            @if($calamity->type === 1)
                                Location of epicenter: <strong>{!! $calamity->info_arr['location_of_epicenter'] !!}</strong><br/>
                                @php
                                    $intensity = array_values(\App\Models\Calamity::EARTHQUAKE_INTENSITIES);
                                @endphp
                                Intensity of earthquake: <strong>{!! $intensity[intval($calamity->info_arr['intensity_of_earthquake'])] !!}</strong>
                            @else
                                <div>
                                    Windspeed of tropical cyclone (km/h): {!! $calamity->info_arr['windspeed_of_tropical_cyclone_(km/h)'] !!}
                                </div>
                                <div>
                                    Direction of tropical cyclone: {!! $calamity->info_arr['direction_of_tropical_cyclone'] !!}
                                </div>
                                <div>
                                    @php
                                        $classifications = array_values(\App\Models\Calamity::TROPICAL_CYCLONE_CLASSIFICATIONS);
                                    @endphp
                                    Classification of tropical cyclone: {!! $classifications[intval($calamity->info_arr['classification_of_tropical_cyclone'])] !!}
                                </div>
                            @endif
                        </div>
                        @endif
                    </div>
                    @auth()
                        @if(auth()->user()->type === 1)
                            <div class="card-footer p-0">
                                <button type="button" class="btn btn-block btn-primary rounded-0 toggle-form">Update Calamity Info</button>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
            @auth()
            <div class="col-md-6">
                <div id="calamity_form" class="card d-none">
                    <div class="card-body">
                        <form action="{{ route('calamity.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Select Calamity Type</label>
                                <select class="form-control toggle-cType" name="type">
                                    <option selected disabled></option>
                                    <option value="0">Tropical Cyclone (Bagyo)</option>
                                    <option value="1">Earthquake</option>
                                </select>
                            </div>
                            <div id="info_arr">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endauth
        </div>
    </div>

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

            let type = ''
            let isOpen = true
            $(document).on('click', '.toggle-form', function (e) {
                type = ''
                $('.toggle-cType').val('')
                $('#info_arr').html('')
                if (isOpen) {
                    $(this).removeClass('btn-primary').addClass('btn-default').html('Close Form')
                    $('#calamity_form').removeClass('d-none')
                    isOpen = false
                } else {
                    $(this).removeClass('btn-default').addClass('btn-primary').text('Update Calamity Information')
                    $('#calamity_form').addClass('d-none')
                    isOpen = true
                }
            })

            $(document).on('change', '.toggle-cType', function(e) {
                type = $(this).val()
                if (type == 1) {
                    $(`#info_arr`).html(`
                        <div class="form-group required">
                            <label>Location of Epicenter</label>
                            <input class="form-control" name="info_arr[location_of_epicenter]" required>
                        </div>
                        <div class="form-group required">
                            <label>Magnitude of Earthquake</label>
                            <input class="form-control" name="info_arr[magnitude]" value="0" required>
                        </div>
                        <div class="form-group required">
                            <label>Intensity of Earthquake</label>
                            <select class="form-control" name="info_arr[intensity_of_earthquake]" required>
                                <option disabled selected hidden>Select intensity of earthquake</option>
                                @foreach(\App\Models\Calamity::EARTHQUAKE_INTENSITIES as $index => $intensity)
                                <option value="{{ $index }}">{{ $intensity }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                        </div>
                    `)
                } else {
                    $(`#info_arr`).html(`
                        <div class="form-group required">
                            <label>Name of Tropical Cyclone</label>
                            <input class="form-control" name="info_arr[name_of_tropical_cyclone]" required>
                        </div>
                        <div class="form-group required">
                            <label>Windspeed of tropical cyclone (km/h)</label>
                            <input class="form-control" name="info_arr[windspeed_of_tropical_cyclone_(km/h)]" value="0" required>
                        </div>
                        <div class="form-group required">
                            <label>Direction of tropical cyclone</label>
                            <input class="form-control" name="info_arr[direction_of_tropical_cyclone]" required>
                        </div>
                        <div class="form-group required">
                            <label>Classification of tropical cyclone</label>
                            <select class="form-control" name="info_arr[classification_of_tropical_cyclone]" required>
                                <option disabled selected hidden>Select classification of tropical cyclone</option>
                                @foreach(\App\Models\Calamity::TROPICAL_CYCLONE_CLASSIFICATIONS as $index => $classification)
                                <option value="{{ $index }}">{{ $classification }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                        </div>
                    `)
                }
            })

        })
    </script>
@endsection