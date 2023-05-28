
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
                <th>Evacuees/Max Capacity</th>
                <th>Males</th>
                <th>Females</th>
                <th>Adults</th>
                <th>Children</th>
                <th>Infants</th>
                <th>Senior Citizens</th>
                <th>PWDs</th>
                <th>Pregnant</th>
                <th>Head of families</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @if($evacuationCenters->count() > 0)
            @foreach($evacuationCenters as $center)
                <tr>
                    <td>{{ $center->barangay->name }}</td>
                    <td>
                        {{ $center->evacuee !== null ? $center->evacuee->evacueeInfos->count() : 0 }} / {{ $center->max_capacity }}
                    </td>
                    <td>{{ isset($center->evacuee) != null ? $center->evacuee->male_count : 0 }}</td>
                    <td>{{ isset($center->evacuee) != null ? $center->evacuee->female_count : 0 }}</td>
                    <td>
                        {{ $center->evacuee !== null ? $center->evacuee->adult_count : 0 }}
                    </td>
                    <td>
                        {{ $center->evacuee !== null ? $center->evacuee->children_count : 0 }}
                    </td>
                    <td>
                        @if ( $center->evacuee !== null )
                            {{ $center->totalInfant() }}
                        @endif
                    </td>
                    <td>
                        @if ( $center->evacuee !== null )
                            {{ $center->totalSenior() }}
                        @endif
                    </td>
                    <td>
                        @if ( $center->evacuee !== null )
                            {{ $center->totalPwd() }}
                        @endif
                    </td>
                    <td>
                        @if ( $center->evacuee !== null )
                            {{ $center->totalPregnant() }}
                        @endif
                    </td>
                    <td>
                        @if ( $center->evacuee !== null )
                            {{ $center->totalFamilyHead() }}
                        @endif
                    </td>
                    <td>
                        <span class="legend bg-{{ $center->is_evacuation_center_full ? 'danger' : 'success' }}"></span>
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