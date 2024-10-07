<div class="container">

    <div class="row">
        <div class="col-6 order-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between p-3">
                    <div class="card-title mb-0">
                        <div class="d-flex">
                            <h5 class="text-warning mb-0">Default Invoice setting</h5>
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
                                    <label for="inputtext" class="col-sm-4 col-form-label">Tax ID</label>
                                    <div class="col-sm-8">
                                        <input type="text" wire:model='taxid' class="form-control" id="inputtext">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">Company name </label>
                                    <div class="col-sm-8">
                                        <input type="text" wire:model='companyname' class="form-control"
                                            id="inputtext">
                                    </div>
                                </div>
                                {{-- <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">Company name (EN)</label>
                                    <div class="col-sm-8">
                                        <input type="text" wire:model='companyname_en' class="form-control"
                                            id="inputtext">
                                    </div>
                                </div> --}}
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">Address </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" wire:model='address' name="" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                {{-- <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">Address (EN)</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" wire:model='address_en' name="" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div> --}}
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">Logo</label>
                                    <div class="col-sm-8">
                                        <img src="{{ asset('logo/logo.png') }}?{{rand()}}" class="img-fluid">
                                       
                                        @if ($this->logo)
                                            new logo:<img src="{{ $logo->temporaryUrl() }}" class="img-fluid">
                                        @endif

                                        <div wire:loading wire:target="logo">Uploading...</div>
                                        
                                        <input wire:model='logo' type="file" class="form-control" id="inputtext">
                                        
                                        @error('logo')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                        
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

        <div class="col-6 order-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between p-3">
                    <div class="card-title mb-0">
                        <div class="d-flex">
                            <h5 class="text-warning mb-0">Leads setting</h5>
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
                                    <label for="inputtext" class="col-sm-4 col-form-label">Default Leads owner</label>
                                    <div class="col-sm-8">
                                        <select wire:model='leadsowner' class="form-control">
                                            <option value="0">Select Owner</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">Interval time to
                                        return</label>
                                    <div class="col-sm-8">
                                        <select wire:model='timereturn' class="form-control" name=""
                                            id="">
                                            <option value="1 WEEK">1 Week</option>
                                            <option value="2 WEEK">2 Week</option>
                                            <option value="3 WEEK">3 Week</option>
                                            <option value="1 MONTH">1 Month</option>
                                            <option value="2 MONTH">2 Month</option>
                                            <option value="3 MONTH">3 Month</option>
                                            <option value="4 MONTH">4 Month</option>
                                            <option value="5 MONTH">5 Month</option>
                                        </select>
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
        @if (false)
            <div class="col-6 order-5">
                <div class="card mt-3">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                        <div class="card-title mb-0">
                            <div class="d-flex">
                                <h5 class="text-warning mb-0">SMTP E-mail setting</h5>
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
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">SMTP Server <br><small>(
                                            domain
                                            or IP address)</small></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputtext">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">SMTP Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputtext">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">SMTP Password</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputtext">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label">SMTP Port</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputtext">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputtext" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <button class="btn btn-success">SAVE</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
        <!--/ On route vehicles Table -->
    </div>
    <livewire:crm.components.toast-alert />
</div>
@push('scripts')
    <script src="assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
@endpush
