<div class="row table-responsive">
    <table class="table table-dashed">
        <thead>
        <tr>
            <th>Barangay</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Is head</th>
            <th>Purok</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @if($evacuees->count() > 0)
            @foreach($evacuees as $list)
            <tr>
                <td>{{ $brgy->name }}</td>
                <td>{{ $list->first_name }}</td>
                <td>{{ $list->last_name }}</td>
                <td>{{ $list->gender }}</td>
                <td>{{ $list->age }}</td>
                <td>{{ $list->is_head ? 'Yes' : 'No' }}</td>
                <td>{{ $list->purok }}</td>
                <td>
                    <a href="#" class="btn btn-info text-white btn-sm"><i class="fa fa-pencil"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
        {{ $evacuees->links() }}
    </div>
</div>