<div id="accordion">
    @foreach($evacuationCenters as $key => $center)
    <div class="card">
        <div class="card-header" id="heading-{{$center->id}}">
            <button class="btn btn-link btn-block text-left text-decoration-none toggle-barangay"
                    data-url="{{ route('barangays.open', ['barangay' => $center->barangay->id]) }}"
                    data-toggle="collapse"
                    data-target="#collapse{{$center->id}}"
                    aria-expanded="true"
                    aria-controls="collapse{{$center->id}}">
                    {{ $center->barangay->name }}
            </button>
        </div>
        @php
            $male_count = isset($center->evacuee) != null ? $center->evacuee->male_count : 0;
            $female_count = isset($center->evacuee) != null ? $center->evacuee->female_count : 0;
            $total = $male_count + $female_count;
        @endphp
        <div id="collapse{{$center->id}}" class="collapse" aria-labelledby="heading{{$center->id}}" data-parent="#accordion">
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Evacuation Center Type
                        <span class="badge badge-primary badge-pill">{{ $center->evacuationCenterType->name }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Is Evacuation Center Full?
                        <span class="badge badge-{{ $center->is_evacuation_center_full ? 'danger' : 'primary' }} badge-pill">{{ $center->is_evacuation_center_full ? 'Yes' : 'No' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Number of Evacuees
                        <span class="badge badge-{{ $total === 0 ? 'danger' : 'primary' }} badge-pill">{{ $total }}</span>
                    </li>
                    {{-- <li class="list-group-item d-flex justify-content-between align-items-center">
                        Number of Families
                        <span class="badge badge-{{ $center->evacuee !== null && $center->evacuee->family_count === 0 ? 'danger' : 'primary' }} badge-pill">{{ isset($center->evacuee) != null ? $center->evacuee->family_count : 0 }}</span>
                    </li> --}}
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Number of Males
                        <span class="badge badge-{{ $male_count === 0 ? 'danger' : 'primary' }} badge-pill">{{ $male_count }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Number of Females
                        <span class="badge badge-{{ $female_count === 0 ? 'danger' : 'primary' }} badge-pill">{{ $female_count }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>