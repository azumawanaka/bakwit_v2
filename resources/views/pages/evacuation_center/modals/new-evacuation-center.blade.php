<div id="evacuationCenterModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header py-2">
                <h4 class="modal-title">Add Evacuation Center</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="post" action="{{ route('bdrrmo.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <select class="form-control @error('barangay_id') is-invalid @enderror"
                                name="barangay_id"
                                id="barangay_id">
                            @foreach($barangays as $brgy)
                                <option value="{{ $brgy->id }}" {{ old('barangay_id') == $brgy->id ? 'selected' : ''  }}>{{ $brgy->name }}</option>
                            @endforeach
                        </select>
                        <label for="barangay_id">Barangay</label>
                        @error('barangay_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               id="is_flood_prone"
                               name="is_flood_prone"
                               type="checkbox"
                                {{ old('is_flood_prone') ? 'checked' : '' }} />
                        <label class="form-check-label" for="is_flood_prone"><small>Is this barangay flood prone?</small></label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               id="is_storm_surge"
                               name="is_storm_surge"
                               type="checkbox"
                                {{ old('is_storm_surge') ? 'checked' : '' }} />
                        <label class="form-check-label" for="is_storm_surge"><small>Is this barangay near storm surge areas?</small></label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               id="is_land_slide"
                               name="is_land_slide"
                               type="checkbox"
                                {{ old('is_land_slide') ? 'checked' : '' }} />
                        <label class="form-check-label" for="is_land_slide"><small>Is this barangay near landslide areas?</small></label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               id="is_earthquake"
                               name="is_earthquake"
                               type="checkbox"
                                {{ old('is_earthquake') ? 'checked' : '' }} />
                        <label class="form-check-label" for="is_earthquake"><small>Is this barangay affected by earthquake?</small></label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input"
                               id="is_tsunami"
                               name="is_tsunami"
                               type="checkbox"
                                {{ old('is_tsunami') ? 'checked' : '' }} />
                        <label class="form-check-label" for="is_tsunami"><small>Is this barangay affected by tsunami?</small></label>
                    </div>

                    <hr/>

                    <div class="form-floating mb-3">
                        <select class="form-control @error('evacuation_center_type_id') is-invalid @enderror"
                                name="evacuation_center_type_id"
                                id="evacuation_center_type_id">
                            @foreach($evacuation_center_types as $eCenter)
                                <option value="{{ $eCenter->id }}" {{ old('evacuation_center_type_id') == $eCenter->id ? 'selected' : ''  }}>{{ $eCenter->name }}</option>
                            @endforeach
                        </select>
                        <label for="evacuation_center_type_id">Evacuation Center Type</label>
                        @error('evacuation_center_type_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control numberonly @error('max_capacity') is-invalid @enderror"
                               name="max_capacity"
                               value="11"
                               min="11">
                        <label for="max_capacity">Max Capacity</label>
                        @error('max_capacity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="files">Upload Photos <small class="text-muted">(optional)</small></label>
                        <input type="file" name="files[]" id="files" class="form-control" multiple>
                    </div>
                </div>
                <div class="modal-footer py-1">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>