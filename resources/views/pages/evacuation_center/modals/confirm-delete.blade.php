<!-- Confirm Delete Modal -->
<div class="modal fade2 confirm-modal" id="confirmDelete" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header py-2">
                <h4 class="modal-title">Deleting..</h4>
            </div>
            <div class="modal-body">
                Are you sure you want to continue?
            </div>
            <div class="modal-footer">
                <form class="form-row delete-row d-flex justify-content-end align-items-center"
                      method="POST"
                      action="">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-dark mr-1" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>