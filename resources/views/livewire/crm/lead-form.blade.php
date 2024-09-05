<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2 text-uppercase  text-info">Lead manage</h5>
                    <div class="dropdown ">
                        <button class="btn p-0" type="button" id="routeVehicles" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="routeVehicles">
                            <a class="dropdown-item" href="javascript:void(0);">ส่งต่อ leads</a>
                            <a class="dropdown-item" href="javascript:void(0);">ยกเลิกการติดตาม</a>
                            <a class="dropdown-item" href="javascript:void(0);">ติดป้ายกำกับ</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-warning">ข้อมูลของ leads</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col content-center">
                                    <small class="text-uppercase">LEADS NAME</small>
                                    <div>Mr.xxx</div>
                                </div>
                                <div class="col">
                                    <small class="text-uppercase">START LEADS</small>
                                    <div><?= date('Y-m-d') ?></div>
                                </div>
                                <div class="col">
                                    <small class="text-uppercase">SALE</small>
                                    <div>Ms.yyy</div>
                                </div>
                                <div class="col ">
                                    <small class="text-uppercase">amount</small>
                                    <div class="text-info">10,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row ">
                                <div class="col-10">
                                    <div class="containerprogress">
                                        <ul class="progressbar">
                                            <li class="active">ใหม่</li>
                                            <li class="active">นำเสนอ</li>
                                            <li class="active">เข้าพบ</li>
                                            <li class="active">ต่อรอง</li>
                                            <li class="">ปิดการขาย</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col " style="display: block;align-content: center;">
                                    <button class="btn btn-info text-white ">Next step</button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">

                        <div class="col">
                            <h5 class="text-warning">ข้อมูลผู้ติดต่อ</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <small class="text-uppercase">name</small>
                            <div>คุณ ล่ำซำ</div>
                        </div>
                        <div class="col">
                            <small class="text-uppercase">telephone</small>
                            <div><a href="tel:0123456789">0123456789</a></div>
                        </div>
                        <div class="col">
                            <small class="text-uppercase">line</small>
                            <div><a href="#">@idline</a></div>
                        </div>
                        <div class="col">
                            <small class="text-uppercase">email</small>
                            <div><a href="mailto:email@domain.com">email@domain.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-8">
            <div class="card">
                <div
                    class="card-header d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2 text-uppercase text-info">Activity</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="text-uppercase nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#general_tab" type="button" role="tab"
                                        aria-controls="general_tab" aria-selected="true">General memo</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="text-uppercase nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#checkin_tab" type="button" role="tab"
                                        aria-controls="checkin_tab" aria-selected="false">check in</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="text-uppercase nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#invoice_tab" type="button" role="tab"
                                        aria-controls="invoice_tab" aria-selected="false">invoice</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="general_tab" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Memo</label>
                                            <div class="col-sm-10">
                                                <textarea name="" class="form-control" placeholder="your message" id="" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">File
                                                attachment</label>
                                            <div class="col-sm-10">
                                                <div class="mb-3">                                                   
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" name="btnmemosave"
                                                    class="btn btn-success">SAVE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="checkin_tab" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <div class="text-center">
                                        <img src="images/google.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="invoice_tab" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">
                                    <table class="table">
                                        <tr class="bg-secondary">
                                            <td class="text-white">Date</td>
                                            <td class="text-white">Items</td>
                                            <td class="text-white">Amount</td>
                                            <td class="text-white">Status</td>
                                        </tr>
                                        <tr class="bg-warning">
                                            <td class="text-white"><?= date('Y-m-d') ?></td>
                                            <td class="text-white">SEO </td>
                                            <td class="text-white">10,000</td>
                                            <td class="text-white">Not approve</td>
                                        </tr>
                                        <tr class="bg-success">
                                            <td class="text-white"><?= date('Y-m-d') ?></td>
                                            <td class="text-white">SEO </td>
                                            <td class="text-white">10,000</td>
                                            <td class="text-white">approve</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div
                    class="card-header d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2 text-uppercase  text-info">Activity Log</h5>
                    <div class="text-info">Date: <input type="text" style="display: inline-block;width:80%"
                            class="form-control" placeholder="filter by date"></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div style="height: 300px; overflow-y: auto;">
                            <table class="mt-1 table table-striped ">
                                @for ($i = 0; $i < 20; $i++)
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div><?= date('Y-M-d D H:i:s') ?> : <br>
                                                    <div>Memo</div>
                                                </div>
                                                <div style="width: 25px">
                                                    @if ($i < 2)
                                                        <i class="ti ti-pin"></i>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor

                            </table>
                        </div>

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
    <style type="text/css">
        .containerprogress {
            width: 100%;
            margin: 0;
        }

        .progressbar {
            counter-reset: step;
        }

        .progressbar li {
            list-style-type: none;
            width: 20%;
            float: left;
            font-size: 12px;
            position: relative;
            text-align: center;
            text-transform: uppercase;
            color: #7d7d7d;
        }

        .progressbar li:before {
            width: 30px;
            height: 30px;
            content: counter(step);
            counter-increment: step;
            line-height: 30px;
            border: 2px solid #7d7d7d;
            display: block;
            text-align: center;
            margin: 0 auto 10px auto;
            border-radius: 50%;
            background-color: white;
            position: relative;
            z-index: 11;
        }

        .progressbar li:after {
            width: 100%;
            height: 2px;
            content: '';
            position: absolute;
            background-color: #7d7d7d;
            top: 15px;
            left: -50%;
            z-index: 10;
        }

        .progressbar li:first-child:after {
            content: none;
        }

        .progressbar li.active {
            color: var(--bs-info);
        }

        .progressbar li.active:before {
            border-color: var(--bs-info);
        }

        .progressbar li.active+li:after {
            background-color: var(--bs-info);
        }

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: blue !important;
            opacity: 0.4 !important;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: blue;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: blue;
        }

        .text-white {
            color: white;
        }
    </style>
@endpush
