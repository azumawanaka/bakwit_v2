<!-- Modal -->
<div class="modal fade" id="evacueeEditModal_{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="evacueeEditModalTitle_{{ $list->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="evacueeEditModalTitle_{{ $list->id }}">{{ $list->full_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST"
                  action="{{ route('bdrrmo.evacuees.lists.update', [
                    'evacuee' => $evacuee,
                    'info' => $list
                  ]) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group required">
                        <label for="fname">First Name <span class="text-danger">*</span></label>
                        <input type="text"
                               class="form-control"
                               name="first_name"
                               placeholder="John"
                               value="{{ $list->first_name }}"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text"
                               class="form-control"
                               name="last_name"
                               placeholder="Cena"
                                value="{{ $list->last_name }}">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <div class="col-6 pl-0">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="male" @if($list->gender === 'male') selected @endif>Male</option>
                                <option value="female" @if($list->gender === 'female') selected @endif>Female</option>
                            </select>
                        </div>
                        <div class="col-6 px-0">
                            <label for="age">Age <span class="text-danger">*</span></label>
                            <input type="number"
                                   class="form-control"
                                   name="age"
                                   placeholder="0"
                                   value="{{ $list->age }}"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="purok">Purok</label>
                        <input type="text"
                               name="purok"
                               class="form-control"
                               value="{{ $list->purok }}"
                               placeholder="Purok 1..">
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1"
                                   name="is_head"
                                   type="checkbox"
                                   value="1"
                                   @if($list->is_head) checked @endif>
                            <label class="form-check-label" for="is_head">Is head of family</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1"
                                   name="is_pwd"
                                   type="checkbox"
                                   value="1"
                                   @if($list->is_pwd) checked @endif>
                            <label class="form-check-label" for="is_pwd">Is PWD</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1"
                                   name="is_pregnant"
                                   type="checkbox"
                                   value="1"
                                   @if($list->is_pregnant) checked @endif>
                            <label class="form-check-label" for="is_pregnant">Is Pregnant</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1"
                                   name="is_infant"
                                   type="checkbox"
                                   value="1"
                                   @if($list->is_infant) checked @endif>
                            <label class="form-check-label" for="is_infant">Is Infant</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1"
                                   name="is_senior"
                                   type="checkbox"
                                   value="1"
                                   @if($list->is_senior) checked @endif>
                            <label class="form-check-label" for="is_senior">Is Senior Citizen</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>