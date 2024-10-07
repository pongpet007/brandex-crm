<div wire:ignore.self class="modal fade" id="leads-memo-modal" tabindex="-1" aria-labelledby="leads-memo-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="leads-memo-modalLabel">Create Memo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" wire:ignore.self wire:submit='save' action=""
                    enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Memo</label>
                        <div class="col-sm-10">
                            <textarea wire:model='memo_message' class="form-control" placeholder="your message" cols="30" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">File
                            attachment</label>
                        <div class="col-sm-10">
                            <div class="mb-3">
                                <input class="form-control" wire:model='memofile' type="file" id="formFile">
                                @error('memofile')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" name="btnmemosave" class="btn btn-success">SAVE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div x-data x-init="@this.on('leads-modal-close', event => {
        var myModalEl = document.getElementById('leads-memo-modal');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
    })"></div>

</div>
