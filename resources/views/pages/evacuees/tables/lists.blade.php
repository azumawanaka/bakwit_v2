<div class="row table-responsive">
    <table class="table table-dashed">
        <thead>
        <tr>
            <th>Purok</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Is head</th>
            <th>Is PWD</th>
            <th>Is Pregnant</th>
            <th>Is Infant</th>
            <th>Is Senior</th>
            <th>Date Added</th>

            @if(auth()->user()->type === 0)
            <th>Options</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @if($evacuees->count() > 0)
            @foreach($evacuees as $list)
            <tr>
                <td>{{ $list->purok }}</td>
                <td>{{ $list->first_name }}</td>
                <td>{{ $list->last_name }}</td>
                <td>{{ $list->gender }}</td>
                <td>{{ $list->age }}</td>
                <td>{{ $list->is_head ? 'Yes' : 'No' }}</td>
                <td>{{ $list->is_pwd ? 'Yes' : 'No' }}</td>
                <td>{{ $list->is_pregnant ? 'Yes' : 'No' }}</td>
                <td>{{ $list->is_infant ? 'Yes' : 'No' }}</td>
                <td>{{ $list->is_senior ? 'Yes' : 'No' }}</td>
                <td>{{ date('m-d-Y', strtotime($list->updated_at)) }}</td>

                @if(auth()->user()->type === 0)
                <td class="d-flex align-items-center">
                    <a href="javascript:void(0)"
                       class="btn btn-info text-white btn-sm mr-2"
                       data-toggle="modal"
                       data-target="#evacueeEditModal_{{ $list->id }}">
                        <i class="fa fa-pencil"></i>
                    </a>

                    @include('pages.evacuees.modal.edit_evacuee')
                    <form method="post"
                          action="{{ route('bdrrmo.evacuees.lists.delete', [
                            'evacuee' => $list->evacuee_id,
                            'info' => $list
                            ]) }}" style="line-height: 0;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
                @endif
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