<div wire:ignore.self class="modal fade" id="product-form-modal" tabindex="-1" aria-labelledby="product-form-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="product-form-modalLabel">{{ $this->title }} </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" wire:submit='save' enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" wire:model='pro_name' class="form-control" name="fileattach"
                                id="fileattach" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Detail</label>
                        <div class="col-sm-10">
                            <textarea wire:model='pro_detail' class="form-control" placeholder="your message" id="" cols="30"
                                rows="10"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" wire:model='pro_price' class="form-control" name="fileattach"
                                id="fileattach" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">IS Active</label>
                        <div class="col-sm-10">
                            <select wire:model='is_active' class="form-control">
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
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
    <div x-data x-init="@this.on('product-modal-close', event => {
        var myModalEl = document.getElementById('product-form-modal');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
    })"></div>
</div>
