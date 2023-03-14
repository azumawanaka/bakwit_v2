<div id="editEvacuationCenterModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header py-2">
                <h4 class="modal-title">Update Evacuation Center</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="form-edit" method="post" action="" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <select class="form-control"
                                readonly="true"
                                id="update_barangay_id"
                                @if(auth()->user()->type == 0) disabled @endif>
                            @foreach($allBarangay as $brgy)
                                <option value="{{ $brgy->id }}">{{ $brgy->name }}</option>
                            @endforeach
                        </select>
                        <label for="update_barangay_id">Barangay</label>
                    </div>

                    @if(auth()->user()->type === 1)
                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               id="update_is_flood_prone"
                               name="is_flood_prone"
                               type="checkbox"/>
                        <label class="form-check-label" for="update_is_flood_prone"><small>Is this barangay flood prone?</small></label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               id="update_is_storm_surge"
                               name="is_storm_surge"
                               type="checkbox"
                                {{ old('is_storm_surge') ? 'checked' : '' }} />
                        <label class="form-check-label" for="update_is_storm_surge"><small>Is this barangay near storm surge areas?</small></label>
                    </div>
                    <hr/>
                    @endif

                    <div class="form-floating mb-3">
                        <select class="form-control @error('evacuation_center_type_id') is-invalid @enderror"
                                name="evacuation_center_type_id"
                                id="update_evacuation_center_type_id"
                                @if(auth()->user()->type == 0) disabled @endif>
                            @foreach($evacuation_center_types as $eCenter)
                                <option value="{{ $eCenter->id }}" {{ old('evacuation_center_type_id') == $eCenter->id ? 'selected' : ''  }}>{{ $eCenter->name }}</option>
                            @endforeach
                        </select>
                        <label for="update_evacuation_center_type_id">Evacuation Center Type</label>
                        @error('evacuation_center_type_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number"
                               class="form-control numberonly @error('max_capacity') is-invalid @enderror"
                               name="max_capacity"
                               id="update_max_capacity"
                               value="11"
                               min="11"
                               @if(auth()->user()->type == 0) disabled @endif>
                        <label for="update_max_capacity">Max Capacity</label>
                        @error('max_capacity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    @if (auth()->user()->type == 1)
                    <div class="form-group">
                        <label for="update_files">Upload Photos <small class="text-muted">(optional)</small></label>
                        <input type="file" name="files[]" id="update_files" class="form-control" multiple>
                    </div>
                    @endif

                    @if(auth()->user()->type === 0)
                    <div class="row evacuees_fields">
                        <label>Evacuees</label>
                        <hr />
                        <div class="form-floating mb-3 col-md-6">
                            <input type="number"
                                   class="form-control numberonly @error('family_count') is-invalid @enderror"
                                   name="family_count"
                                   value="0">
                            <label for="family_count" class="ml-2">No. of family</label>
                            @error('family_count')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="number"
                                   class="form-control numberonly @error('male_count') is-invalid @enderror"
                                   name="male_count"
                                   value="0">
                            <label for="male_count" class="ml-2">No. of male</label>
                            @error('male_count')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="number"
                                   class="form-control numberonly @error('female_count') is-invalid @enderror"
                                   name="female_count"
                                   value="0">
                            <label for="female_count" class="ml-2">No. of female</label>
                            @error('female_count')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="number"
                                   class="form-control numberonly @error('pwd_count') is-invalid @enderror"
                                   name="pwd_count"
                                   value="0">
                            <label for="pwd_count" class="ml-2">No. of PWD</label>
                            @error('pwd_count')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                </div>
                <div class="modal-footer py-1">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>