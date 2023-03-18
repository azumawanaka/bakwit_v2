
<div class="table-responsive">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            Legend:
            <small><span class="legend bg-danger"></span> Full</small> 
            <small><span class="legend bg-success"></span> Available</small>
        </div>
        <a href="{{ route('mdrrmo.generate-report') }}" class="btn btn-sm btn-outline-primary">Generate Report</a>
    </div>
    <table class="table table-dashed table-hover mdrrmo-tbl">
        <thead>
            <tr>
                <th>Barangay</th>
                <th>Status</th>
                <th>Evacuees/Max Capacity</th>
                <th>Males</th>
                <th>Females</th>
            </tr>
        </thead>
        <tbody>
        @if($evacuationCenters->count() > 0)
            @foreach($evacuationCenters as $center)
                <tr>
                    <td>{{ $center->barangay->name }}</td>
                    <td>
                        <span class="legend bg-{{ $center->is_evacuation_center_full ? 'danger' : 'success' }}"></span
                    </td>
                    <td>
                        @php
                            $male_count = isset($center->evacuee) != null ? $center->evacuee->male_count : 0;
                            $female_count = isset($center->evacuee) != null ? $center->evacuee->female_count : 0;
                            $family_count = isset($center->evacuee) != null ? $center->evacuee->family_count : 0;
                        @endphp
                        {{ $family_count }} / {{ $center->max_capacity }}
                    </td>
                    <td>{{ $male_count }}</td>
                    <td>{{ $female_count }}</td>
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