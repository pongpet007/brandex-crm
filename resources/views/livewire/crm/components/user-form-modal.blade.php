<div wire:ignore.self class="modal fade" id="user-form-modal" tabindex="-1" aria-labelledby="user-form-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="user-form-modalLabel">{{ $this->title }} </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit='save' method="POST" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Fullname</label>
                        <div class="col-sm-10">
                            <input type="text" wire:model='name' class="form-control" name="name"
                                id="name" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="text" wire:model='email' class="form-control" name="fileattach"
                                id="fileattach" />
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" wire:model='password' class="form-control" name="fileattach"
                                id="fileattach" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail"class="col-sm-2 col-form-label">IS
                            Admin</label>
                        <div class="col-sm-10">
                            <select wire:model='is_admin' class="form-control">
                                <option value="2">NO</option>
                                <option value="1">YES</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail"class="col-sm-2 col-form-label">IS
                            Active</label>
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
    <div x-data x-init="@this.on('user-modal-close', event => {       
        var myModalEl = document.getElementById('user-form-modal');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
        })"></div>
</div>
