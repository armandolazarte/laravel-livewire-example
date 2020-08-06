<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Laravel Bootstrap Modal Form Validation Example -
                    NiceSnippets.com</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" style="display:none"></div>
                <form class="image-upload" method="post" action="{{ route('modal.store') }}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Author Name</label>
                        <input type="text" name="auther_name" id="auther_name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="textarea form-control" id="description" cols="40"
                                  rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="formSubmit">Save</button>
            </div>
        </div>
    </div>
</div>