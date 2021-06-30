<div id="modal-edit" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Ubah Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.dokumen.update') }}" id="form-patch" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')
                    <input type="hidden" name="id" id="id">
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Judul Dokumen</label>
                        <div class="col-sm-8">
                            <input type="text" id="judul" name="judul" class="form-control" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-4 col-form-label">Upload File</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="old_name_file" id="old_name_file">
                            <input type="file" name="name_file" class="form-control" accept=".pdf">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <a target="_blank" id="lihat_file" class="btn btn-primary">Lihat File</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="form-patch">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@push('scripts')
@endpush