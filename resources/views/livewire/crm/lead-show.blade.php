<div class="container">
    <div class="row">
        <div class="col-sm-6 col-lg-3 mb-4">
            <a href="#">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="ti ti-truck ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">42</h4>
                        </div>
                        <p class="mb-1">ใหม่</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <a href="#">
                <div class="card card-border-shadow-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-warning"><i
                                        class="ti ti-alert-triangle ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">8</h4>
                        </div>
                        <p class="mb-1">นำเสนอ</p>
                        {{-- <p class="mb-0">
                        <span class="fw-medium me-1">-8.7%</span>
                        <small class="text-muted">than last week</small>
                    </p> --}}
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <a href="#">
                <div class="card card-border-shadow-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-danger"><i
                                        class="ti ti-git-fork ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">27</h4>
                        </div>
                        <p class="mb-1">ต่อรอง</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <a href="#">
                <div class="card card-border-shadow-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-info"><i
                                        class="ti ti-clock ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">13</h4>
                        </div>
                        <p class="mb-1">ปิดการขาย</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <!-- On route vehicles Table -->

        <div class="col-12 order-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between p-3"
                    style="background-color: rgba(217, 217, 217, 0.923)">
                    <div class="card-title mb-0">
                        <a href="{{ url('lead-form') }}" class="btn btn-primary">Create Leads</a>
                    </div>
                    
                </div>
                <div class="card-datatable table-responsive">
                    <table class="dt-route-vehicles table table-hover">
                        <tr>
                            <th class="text-black">Detail</th>
                            <th class="text-black">Date</th>
                            <th class="text-black">Amount</th>
                        </tr>
                        <tr>
                            <td>
                                <div style="color: black">บริษัท</div>
                                <div>รายละเอียด</div>
                            </td>
                            <td>2024-9-15</td>
                            <td>100,000</td>
                        </tr>
                    </table>
                    <div class="p-3">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--/ On route vehicles Table -->
    </div>

</div>
