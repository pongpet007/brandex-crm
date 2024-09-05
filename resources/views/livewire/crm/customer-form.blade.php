<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2">Customer</h5>
                    <div class="action-btns">
                        {{-- <button class="btn btn-success">SAVE</button> --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        xx
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div
                    class="card-header d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2">Contact</h5>
                    <div class="action-btns">
                        {{-- <button class="btn btn-success">SAVE</button> --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        xx
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
