<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div
                    class="card-header sticky-element d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2 text-warning">Product edit</h5>
                    {{-- <div class="action-btns">
                        <button class="btn btn-success">SAVE</button>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <form method="POST" wire:submit='save' action="" enctype="multipart/form-data">                           
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" wire:model='pro_name' class="form-control" name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Detail</label>
                                <div class="col-sm-10">
                                    <textarea  wire:model='pro_detail' class="form-control" placeholder="your message" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text"  wire:model='pro_price' class="form-control" name="fileattach" id="fileattach" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail"  class="col-sm-2 col-form-label">IS Active</label>
                                <div class="col-sm-10">
                                    <select  wire:model='is_active' class="form-control">
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
    <script src="assets/vendor/libs/jquery-sticky/jquery-sticky.js"></script>
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
