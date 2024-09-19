<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="text-warning text-uppercase card-title mb-sm-0 me-2">Customer Edit</h5>
                    <div class="action-btns">
                        {{-- <button class="btn btn-success">SAVE</button> --}}
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" wire:submit='save' action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-form-label">Company Name</label>
                                    <div class="">
                                        <input type="text" wire:model='cus_name' class="form-control"
                                            name="fileattach" id="fileattach" />
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
                                        <input type="text" class="form-control" wire:model='cus_email'
                                            name="fileattach" id="fileattach" />
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

                        <div class="mb-3 row">
                            <div class="col-md-12 text-center">

                                <button type="submit" class="btn btn-success ">SAVE Company </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div
                    class="card-header d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="text-warning text-uppercase card-title mb-sm-0 me-2">Contact Edit</h5>
                    <div class="action-btns">
                        <button type="button" class="btn btn-warning " wire:click='newcontact'
                            wire:confirm="Are you sure you want to move contact to archive?">New contact
                            and
                            Move to archive</button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" wire:submit='save' action="">

                        <div class="row">
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

                                <button type="submit" class="btn btn-success ">SAVE Contact</button>
                            </div>
                        </div>
                    </form>
                    <div>
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td>Mobile</td>
                                <td>Telephone</td>
                                <td>Action</td>
                            </tr>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->contact_name }}</td>
                                    <td>{{ $contact->contact_mobile }}</td>
                                    <td>{{ $contact->contact_telephone }}</td>
                                    <td>
                                        <button @click="$dispatch('show-contact',{id:{{ $contact->contact_id }}})"
                                            class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">View</button>
                                        <button class="btn btn-sm btn-warning"
                                            wire:click="restoreContact({{ $contact->contact_id }})"
                                            wire:confirm="Restore contact ?">
                                            Restore contact
                                        </button>
                                        <button class="btn btn-sm btn-danger"
                                            wire:click="deleteContact({{ $contact->contact_id }})"
                                            wire:confirm="Delete contact ?">
                                            Delete contact
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="p-3">
                            <nav aria-label="Page navigation example">
                                {{ $contacts->links() }}
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>       
    </div>
    <livewire:crm.components.customer-contact-view-modal>
    <livewire:crm.components.toast-alert>
</div>
@push('scripts')
    <script src="{{ asset('assets/vendor/libs/jquery-sticky/jquery-sticky.js') }}"></script>
    <script type="text/javascript">
        var topSpacing;
        const stickyEl = $('.sticky-element');

        // Init custom option check
        window.Helpers.initCustomOptionCheck();

        // Set topSpacing if the navbar is fixed
        if (Helpers.isNavbarFixed()) {
            topSpacing = $('.layout-navbar').height() + 7;
        } else {
            topSpacing = 0;
        }

        // sticky element init (Sticky Layout)
        if (stickyEl.length) {
            stickyEl.sticky({
                topSpacing: topSpacing,
                zIndex: 9
            });
        }
    </script>
@endpush
