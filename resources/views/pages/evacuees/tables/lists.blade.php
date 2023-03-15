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
            <tr>
                <td>Barangay name</td>
                <td>Filjumar</td>
                <td>Jumamoy</td>
                <td>Male</td>
                <td>28</td>
                <td>No</td>
                <td>Purok 1</td>
                <td></td>
            </tr>
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