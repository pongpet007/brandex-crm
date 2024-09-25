<div class="container">

    <div class="row">
        <div class="col-6 order-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between p-3">
                    <div class="card-title mb-0">
                        <div class="d-flex">
                            <h5 class="text-warning mb-0">Change Password</h5>
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
                <div class="card-body">
                    <form wire:submit='save' action="">
                        <div class="row  mt-3">
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">Old Password : </label>
                                    <div class="col-sm-8">
                                        <input type="password" wire:model='oldpass' class="form-control" id="inputtext">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">New Password : </label>
                                    <div class="col-sm-8">
                                        <input type="password" wire:model='newpass' class="form-control" id="inputtext">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">Confirm Password : </label>
                                    <div class="col-sm-8">
                                        <input type="password" wire:model='confirmpass' class="form-control" id="inputtext">
                                    </div>
                                </div>                            
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-success">SAVE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <livewire:crm.components.toast-alert />
    
</div>

@push('scripts')
   
@endpush
