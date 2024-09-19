<div wire:ignore.self class="modal fade modal-xl" id="customer-form-modal" tabindex="-1"
    aria-labelledby="customer-form-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="customer-form-modalLabel">{{ $this->title }} </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" wire:submit='save' action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Company Name</label>
                                <div class="">
                                    <input type="text" wire:model='cus_name' class="form-control" name="fileattach"
                                        id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">ชื่อจดทะเบียนภาษาไทย</label>
                                <div class="">
                                    <input type="text" wire:model='cus_name_register_th' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">ที่อยู่ภาษาไทย</label>
                                <div class="">
                                    <textarea class="form-control" wire:model='cus_address_th' cols="30" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">E-mail</label>
                                <div class="">
                                    <input type="text" class="form-control" wire:model='cus_email' name="fileattach"
                                        id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Website</label>
                                <div class="">
                                    <input type="text" class="form-control" wire:model='cus_website'
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Tax ID</label>
                                <div class="">
                                    <input type="text" class="form-control" wire:model='taxid' name="fileattach"
                                        id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">ชื่อจดทะเบียนภาษาอังกฤษ</label>
                                <div class="">
                                    <input type="text" wire:model='cus_name_register_en' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">ที่อยู่ภาษาอังกฤษ</label>
                                <div class="">
                                    <textarea class="form-control" wire:model='cus_address_en' cols="30" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Telephone</label>
                                <div class="">
                                    <input type="text" class="form-control" wire:model='cus_telephone'
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Fax</label>
                                <div class="">
                                    <input type="text" class="form-control" wire:model='cus_fax'
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 my-3">
                            <div class="d-flex d-flex justify-content-between ">
                                <h5 class="text-warning card-title mb-sm-0 me-2 text-uppercase">
                                    Contact detail
                                </h5>                               
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Name</label>
                                <div class="">
                                    <input type="text" wire:model='contact_name' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Nicname</label>
                                <div class="">
                                    <input type="text" wire:model='contact_nickname' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Birthday</label>
                                <div class="">
                                    <input type="text" wire:model='contact_birthday'
                                        class="form-control datepicker" name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Position</label>
                                <div class="">
                                    <input type="text" wire:model='contact_position' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">E-mail</label>
                                <div class="">
                                    <input type="text" wire:model='contact_email' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Mobile</label>
                                <div class="">
                                    <input type="text" wire:model='contact_mobile' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Telephone</label>
                                <div class="">
                                    <input type="text" wire:model='contact_telephone' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Line</label>
                                <div class="">
                                    <input type="text" wire:model='contact_line' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">IG</label>
                                <div class="">
                                    <input type="text" wire:model='contact_ig' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-form-label">Facebook</label>
                                <div class="">
                                    <input type="text" wire:model='contact_facebook' class="form-control"
                                        name="fileattach" id="fileattach" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success ">SAVE Company and Contact</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div x-data x-init="@this.on('customer-modal-close', event => {
        var myModalEl = document.getElementById('customer-form-modal');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
    })"></div>
</div>
