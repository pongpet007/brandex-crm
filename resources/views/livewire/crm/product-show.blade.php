<div class="container">

    <div class="row">
        <div class="col-12 order-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between p-3"
                    style="background-color: rgba(217, 217, 217, 0.923)">
                    <div class="card-title mb-0">
                        <div class="d-flex">
                            <div class="me-3">
                                <a href="{{ url('product-form/0') }}" class="btn btn-primary">Create Product</a>
                            </div>
                            <div>
                                <input type="text" wire:model.live='search' placeholder="Search Product" class="form-control">
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
                    <table class="dt-route-vehicles table table-hover table-striped">
                        <tr>
                            <th class="text-black">Product name</th>
                            <th class="text-black">Detail</th>
                            <th class="text-black">Price</th>
                            <th class="text-black">IS Active</th>
                            <th class="text-black">Action</th>
                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <div style="color: black">{{ $product->pro_name }}</div>
                                </td>
                                <td>{{ $product->pro_detail }}</td>
                                <td>{{ $product->pro_price }}</td>
                                <td>{{ $product->is_active==1?'YES':'' }}</td>
                                <td>
                                    <a href="{{ url("/product-form/{$product->pro_id}") }}" class="btn btn-warning">edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="p-3">
                        <nav aria-label="Page navigation example">
                            {{ $products->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--/ On route vehicles Table -->
    </div>

</div>
