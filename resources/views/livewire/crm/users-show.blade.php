<div class="container">
   
    <div class="row">  
        <div class="col-12 order-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between p-3"
                    style="background-color: rgba(217, 217, 217, 0.923)">
                    <div class="card-title mb-0">
                        <div class="d-flex">
                            <div class="me-3"> <a href="{{url('users-form')}}" class="btn btn-primary">Create User</a></div>

                            <div><input type="text" placeholder="Search" class="form-control"></div>
                           
                            
                        </div>
                    </div>
                    <div class="dropdown d-none">
                        <button class="btn p-0" type="button" id="routeVehicles" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical"></i>
                        </button>
                        {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="routeVehicles">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="dt-route-vehicles table table-hover">
                        <tr>
                            <th class="text-black">Fullname</th>
                            <th class="text-black">Username</th>
                            <th class="text-black">is admin</th>
                            <th class="text-black">is Active</th>
                            <th class="text-black">Action</th>
                            
                        </tr>
                        <tr>                         
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>                            
                            <td>Active</td>
                            <td>
                                <a href="" class="btn btn-warning">edit</a>                                
                            </td>
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
