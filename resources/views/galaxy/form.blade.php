<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Galaxy Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <form autocomplete="off">
            <div class="modal-body">
                <input type="text" wire:model="name" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>