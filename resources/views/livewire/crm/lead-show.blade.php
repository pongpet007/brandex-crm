<div class="container">
    <div class="row">
        <div class="col-sm-6 col-lg-2 mb-4">
            <a href="#">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="ti ti-truck ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $countNew }}</h4>
                        </div>
                        <p class="mb-1">ใหม่</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-2 mb-4">
            <a href="#">
                <div class="card card-border-shadow-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-warning"><i
                                        class="ti ti-alert-triangle ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $countPresent }}</h4>
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
        <div class="col-sm-6 col-lg-2 mb-4">
            <a href="#">
                <div class="card card-border-shadow-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-info"><i
                                        class="ti ti-alert-triangle ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $countMeet }}</h4>
                        </div>
                        <p class="mb-1">เข้าพบ</p>
                        {{-- <p class="mb-0">
                        <span class="fw-medium me-1">-8.7%</span>
                        <small class="text-muted">than last week</small>
                    </p> --}}
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-2 mb-4">
            <a href="#">
                <div class="card card-border-shadow-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-danger"><i
                                        class="ti ti-git-fork ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $countNegotiate }}</h4>
                        </div>
                        <p class="mb-1">ต่อรอง</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-2 mb-4">
            <a href="#">
                <div class="card card-border-shadow-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-success"><i
                                        class="ti ti-clock ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $countFinish }}</h4>
                        </div>
                        <p class="mb-1">ปิดการขาย</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-2 mb-4">
            <a href="#">
                <div class="card card-border-shadow-secondary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-secondary"><i
                                        class="ti ti-clock ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $countCancle }}</h4>
                        </div>
                        <p class="mb-1">ยกเลิกการติดตาม</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <!-- On route vehicles Table -->

        <div class="col-12 order-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between p-3">
                    <div class="card-title mb-0">
                        <div class="d-flex">
                            <div class="me-3">
                                <button data-bs-toggle="modal" data-bs-target="#leads-form-modal"
                                    class="btn btn-primary">Create Leads</button>
                            </div>
                            <div><input type="text" wire:model.live='search' placeholder="Search leads" class="form-control"></div>
                        </div>
                    </div>

                </div>
                <div class="card-datatable table-responsive">
                    <table class="dt-route-vehicles table table-hover">
                        <tr>
                            <th class="text-black">status</th>
                            <th class="text-black">Code</th>
                            <th class="text-black">Leads name</th>
                            <th class="text-black">Company</th>
                            <th class="text-black text-center">Assignee</th>
                            <th class="text-black text-center">Leads start-expire</th>
                            <th class="text-black text-center">Quotation Active Value</th>
                        </tr>
                        @foreach ($leads as $lead)
                        <tr>
                            <td> {{ $lead->step_id }} </td>
                            <td> <a href="{{ url('lead-form') }}">{{ $lead->code }}</a></td>
                            <td>

                                <div style="color: black"> <a href="{{ url('lead-form') }}">{{ $lead->leads_name }} </a></div>
                                <div class="text-warning"> [ {{ $lead->leads_detail }} ] </div>

                            </td>
                            <td>{{ $lead->cus_id }}</td>
                            <td class="text-center">{{ $lead->user_id }}</td>
                            <td class="text-center">
                                <span class="text-warning">{{ $lead->leads_start }}</span> <br>valid to<br>
                                <span class="text-warning">{{ $lead->leads_expire }}</span>
                            </td>
                            <td class="text-center">0</td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="p-3">
                        <nav aria-label="Page navigation example">
                            {{ $leads->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--/ On route vehicles Table -->
    </div>
    <livewire:crm.components.lead-create-modal>
    <livewire:crm.components.toast-alert>
</div>
