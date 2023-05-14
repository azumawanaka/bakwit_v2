<!-- Modal -->
<div class="modal fade" id="evacueeModalCenter" tabindex="-1" role="dialog" aria-labelledby="evacueeModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="evacueeModalCenterTitle">Add Evacuee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('bdrrmo.evacuees.lists.store', ['evacuee' => $evacuee]) }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group required">
                        <label for="first_name">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="John" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Cena">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <div class="col-6 pl-0">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col-6 px-0">
                            <label for="age">Age <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="age" placeholder="0" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="purok">Purok</label>
                        <input type="text" name="purok" class="form-control" id="purok" placeholder="Purok 1..">
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1" name="is_head" type="checkbox" id="is_head" value="1">
                            <label class="form-check-label" for="is_head">Is head of family</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1" name="is_pwd" type="checkbox" id="is_pwd" value="1">
                            <label class="form-check-label" for="is_head">Is PWD</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1" name="is_pregnant" type="checkbox" id="is_pregnant" value="1">
                            <label class="form-check-label" for="is_pregnant">Is Pregnant</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1" name="is_infant" type="checkbox" id="is_infant" value="1">
                            <label class="form-check-label" for="is_infant">Is Infant</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1" name="is_senior" type="checkbox" id="is_senior" value="1">
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