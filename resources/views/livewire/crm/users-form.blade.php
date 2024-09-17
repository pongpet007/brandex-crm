<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div
                    class="card-header sticky-element d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2 text-warning">User edit</h5>
                    {{-- <div class="action-btns">
                        <button class="btn btn-success">SAVE</button>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <form wire:submit='save' method="POST" action="{{ url("users-form/{$this->id}") }}"
                            enctype="multipart/form-data">
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
        </div>
    </div>
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
