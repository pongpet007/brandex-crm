<div class="container">

    <div class="row">
        <div class="col-12 order-5">
            <div class="card">
                <div class="d-none card-header d-flex align-items-center justify-content-between p-3">
                    <div class="card-title mb-0">
                        <button class="btn btn-success">Save</button>
                    </div>
                    <div class="dropdown d-none">
                        <button class="btn p-0" type="button" id="routeVehicles" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="routeVehicles">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-datatable">
                    <div class="row px-3 py-0">
                        <div class="col-12 mb-4 p-2">                            
                            <div class="bs-stepper wizard-numbered mt-2">
                                <div class="bs-stepper-header">
                                    <div class="step" data-target="#account-details">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Account Details</span>
                                                <span class="bs-stepper-subtitle">Setup Account Details</span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line">
                                        <i class="ti ti-chevron-right"></i>
                                    </div>
                                    <div class="step" data-target="#personal-info">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Personal Info</span>
                                                <span class="bs-stepper-subtitle">Add personal info</span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line">
                                        <i class="ti ti-chevron-right"></i>
                                    </div>
                                    <div class="step" data-target="#social-links">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Social Links</span>
                                                <span class="bs-stepper-subtitle">Add social links</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bs-stepper-content">
                                    <form onSubmit="return false">
                                        <!-- Account Details -->
                                        <div id="account-details" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-0">Account Details</h6>
                                                <small>Enter Your Account Details.</small>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="username">Username</label>
                                                    <input type="text" id="username" class="form-control"
                                                        placeholder="johndoe" />
                                                </div>                                               
                                                
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-warning btn-label-secondary btn-prev" disabled>
                                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button class="btn btn-primary btn-next">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Personal Info -->
                                        <div id="personal-info" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-0">Personal Info</h6>
                                                <small>Enter Your Personal Info.</small>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="first-name">First Name</label>
                                                    <input type="text" id="first-name" class="form-control"
                                                        placeholder="John" />
                                                </div>
                                               
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-warning btn-label-secondary btn-prev">
                                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button class="btn btn-primary btn-next">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Social Links -->
                                        <div id="social-links" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-0">Social Links</h6>
                                                <small>Enter Your Social Links.</small>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="twitter">Twitter</label>
                                                    <input type="text" id="twitter" class="form-control"
                                                        placeholder="https://twitter.com/abc" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="facebook">Facebook</label>
                                                    <input type="text" id="facebook" class="form-control"
                                                        placeholder="https://facebook.com/abc" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="google">Google+</label>
                                                    <input type="text" id="google" class="form-control"
                                                        placeholder="https://plus.google.com/abc" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="linkedin">LinkedIn</label>
                                                    <input type="text" id="linkedin" class="form-control"
                                                        placeholder="https://linkedin.com/abc" />
                                                </div>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-warning btn-label-secondary btn-prev">
                                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button class="btn btn-success btn-submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--/ On route vehicles Table -->
    </div>

</div>
@push('scripts')
<script src="assets/vendor/libs/bs-stepper/bs-stepper.js"></script>


<script type="text/javascript">
    (function () {
        // Numbered Wizard
        // --------------------------------------------------------------------
        const wizardNumbered = document.querySelector('.wizard-numbered'),
          wizardNumberedBtnNextList = [].slice.call(wizardNumbered.querySelectorAll('.btn-next')),
          wizardNumberedBtnPrevList = [].slice.call(wizardNumbered.querySelectorAll('.btn-prev')),
          wizardNumberedBtnSubmit = wizardNumbered.querySelector('.btn-submit');
      
        if (typeof wizardNumbered !== undefined && wizardNumbered !== null) {
          const numberedStepper = new Stepper(wizardNumbered, {
            linear: false
          });
          if (wizardNumberedBtnNextList) {
            wizardNumberedBtnNextList.forEach(wizardNumberedBtnNext => {
              wizardNumberedBtnNext.addEventListener('click', event => {
                numberedStepper.next();
              });
            });
          }
          if (wizardNumberedBtnPrevList) {
            wizardNumberedBtnPrevList.forEach(wizardNumberedBtnPrev => {
              wizardNumberedBtnPrev.addEventListener('click', event => {
                numberedStepper.previous();
              });
            });
          }
          if (wizardNumberedBtnSubmit) {
            wizardNumberedBtnSubmit.addEventListener('click', event => {
              alert('Submitted..!!');
            });
          }
        }
    })();
</script>
@endpush