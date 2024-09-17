<div class="container">

    <div class="row">
        <div class="col-12 order-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between p-3"
                    style="background-color: rgba(217, 217, 217, 0.923)">
                    <div class="card-title mb-0">
                        <div class="d-flex">
                            <div class="me-3">
                                <a href="{{ url('customer-form') }}" class="btn btn-primary">Create Customer</a>
                            </div>
                            <div>
                                <input type="text" placeholder="Search Customer" class="form-control">
                            </div>
                        </div>
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
                <div class="card-datatable table-responsive">
                    <table class="dt-route-vehicles table table-hover">
                        <tr>
                            <th>Customer name</th>
                            <th>Address</th>
                            <th>Logo</th>
                        </tr>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>

                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!--/ On route vehicles Table -->
    </div>

</div>
