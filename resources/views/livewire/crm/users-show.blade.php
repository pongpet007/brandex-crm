<div class="container">

    <div class="row">
        <div class="col-12 order-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between p-3"
                    style="background-color: rgba(217, 217, 217, 0.923)">
                    <div class="card-title mb-0">
                        <div class="d-flex">
                            <div class="me-3"> <a href="{{ url('users-form/0') }}" class="btn btn-primary">Create
                                    User</a>
                            </div>

                            <div><input type="text" wire:model.live='search' placeholder="Search"
                                    class="form-control"></div>


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
                    <table class="dt-route-vehicles table table-hover table-striped">
                        <tr>
                            <th class="text-black">Fullname</th>
                            <th class="text-black">E-mail</th>
                            <th class="text-black">Is Admin</th>
                            <th class="text-black">Is Active</th>
                            <th class="text-black">Action</th>

                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->is_admin == 1 ? 'YES' : '' }}</td>
                                <td>{{ $user->is_active == 1 ? 'YES' : '' }}</td>
                                <td>
                                    <a href="{{ url("users-form/{$user->id}") }}" class="btn btn-warning">edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="p-3">
                        <nav aria-label="Page navigation example">
                            {{ $users->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--/ On route vehicles Table -->
    </div>

</div>
