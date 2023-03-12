<div class="row table-responsive">
    <div class="mb-3">
        Legend:
        <small><span class="legend bg-danger"></span> Full</small> 
        <small><span class="legend bg-success"></span> Available</small>
    </div>
    <table class="table table-dashed">
        <thead>
        <tr>
            <th>Barangay</th>
            {{--            <th>Photos</th>--}}
            <th>Evacuation Center Type</th>
            <th>Maximum Capacity</th>
            <th>Families</th>
            <th>Males</th>
            <th>Females</th>
            <th>PWDs</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @if($evacuationCenters->count() > 0)
            @foreach($evacuationCenters as $center)
                <tr>
                    <td>{{ $center->barangay->name }}</td>
                    {{--            <td>--}}
                    {{--                @foreach($center->files as $file)--}}
                    {{--                    <img src='{{ asset($file->path) }}' width="50">--}}
                    {{--                @endforeach--}}
                    {{--            </td>--}}
                    <td>{{ $center->evacuationCenterType->name }}</td>
                    <td>{{ $center->max_capacity }}</td>
                    <td>{{ isset($center->evacuee) != null ? $center->evacuee->family_count : 0 }}</td>
                    <td>{{ isset($center->evacuee) != null ? $center->evacuee->male_count : 0 }}</td>
                    <td>{{ isset($center->evacuee) != null ? $center->evacuee->female_count : 0 }}</td>
                    <td>{{ isset($center->evacuee) != null ? $center->evacuee->pwd_count : 0 }}</td>
                    <td>
                        <span class="legend bg-{{ $center->is_evacuation_center_full ? 'danger' : 'success' }}"></span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-success edit-evacuation-center"
                           data-center="{{ $center->id }}"
                           data-get-url="{{ route('bdrrmo.center', ['bdrrmo' => $center]) }}"
                           data-update-url="{{ route('bdrrmo.update', ['bdrrmo' => $center]) }}"
                           data-toggle="modal"
                           data-target="#editEvacuationCenterModal">
                            <i class="fas fa-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-danger confirmModalDelete"
                           data-url="{{ route('bdrrmo.destroy', ['bdrrmo' => $center]) }}"
                           data-toggle="modal"
                           data-target="#confirmDelete">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="9" class="text-muted text-center">No Record</td>
            </tr>
        @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-end mt-5">
        {{ $evacuationCenters->links() }}
    </div>
</div>