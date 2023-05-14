<div class="modal fade2 confirm-modal" id="generatePdfModal" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header py-2">
                <h4 class="modal-title">Generate Empty Evacuee List</h4>
            </div>
            <form method="get" action="{{ route('bdrrmo.evacuees.generate-pdf', ['evacuee' => $evacuee]) }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label>How many rows?</label>
                        <input type="number"
                               class="numberonly form-control"
                               name="num_rows"
                               value="1"
                               min="1"
                               required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark mr-1" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Generate</button>
                </div>
            </form>
        </div>
    </div>
</div>