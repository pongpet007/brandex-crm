<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div
                    class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">

                    <h5 class="card-title mb-sm-0 me-2 text-uppercase  ">
                        <div class="d-flex">

                            @if ($this->is_leads_name_edit)
                                <input type="text" class="form-control" wire:model='leads_name' style="width:500px">
                                <div class="p-2">
                                    <a href="#" wire:click.prevent='savetitle'><i class="ti ti-check"></i></a>
                                    <a href="#" wire:click.prevent='edit'><i class="ti ti-x"></i></a>
                                </div>
                            @else
                                <div class="me-3">LEADS : <b class="text-info">{{ $leads->code }}</b></div>
                                <div>

                                    Title : <b class="text-warning">{{ $leads->leads_name }}</b> <a href="#"
                                        wire:click.prevent='edit'><i class="ti ti-pencil"></i></a>
                                </div>
                            @endif
                        </div>
                    </h5>
                    @if ($leads->step_id != 5)
                        <div class="dropdown ">
                            <button class="btn p-0" type="button" id="routeVehicles" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="routeVehicles">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#assign-to-modal">กำหนดผู้รับผิดชอบใหม่</a>
                                @if ($leads->step_id < 6)
                                    <a class="dropdown-item" href="#" wire:confirm='ยกเลิกการติดตาม?'
                                        wire:click.prevent='setCancle'>เลิกติดตาม</a>
                                @endif
                                {{-- <a class="dropdown-item" href="javascript:void(0);">ติดป้ายกำกับ</a> --}}
                            </div>
                        </div>
                    @endif
                </div>
                <div class="card-body pt-0">
                    <div class="row my-3">
                        <div class="col-11 mb-3">
                            <div class="d-flex justify-content-between">
                                <div class="containerprogress">
                                    <ul class="progressbar">

                                        <li class="{{ $leads->step_id >= 1 ? 'active' : '' }}">ใหม่</li>
                                        <li class="{{ $leads->step_id >= 2 ? 'active' : '' }}">นำเสนอ</li>
                                        <li class="{{ $leads->step_id >= 3 ? 'active' : '' }}">เข้าพบ</li>
                                        <li class="{{ $leads->step_id >= 4 ? 'active' : '' }}">ต่อรอง</li>
                                        <li class="{{ $leads->step_id >= 5 ? 'active' : '' }}">ปิดการขาย</li>
                                    </ul>
                                </div>
                                <div>
                                    {{-- 
                                    @click="$dispatch('check-step',{leads_id:20})" 
                                    data-bs-toggle="modal"
                                        data-bs-target="#final-step-Modal"
                                    --}}
                                    @if ($leads->step_id < 5)
                                        <button wire:click='nextstep' class="btn btn-info text-white ">Next
                                            step</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-warning">ข้อมูลของ leads</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col content-center">
                                    <small class="text-uppercase">Company NAME : </small>
                                    <div class="fw-bold">{{ $leads->customer->cus_name }}</div>
                                </div>
                                <div class="col content-center">
                                    <small class="text-uppercase">Address : </small>
                                    <div class="fw-bold">{{ $leads->customer->cus_address_th }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-warning">leads assigned : </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <small class="text-uppercase">Assignee : </small>
                                    <div class="fw-bold">{{ $leads->user->name }}</div>
                                </div>
                                <div class="col">
                                    <small class="text-uppercase"> LEADS START :</small>
                                    <div class="fw-bold">{{ $leads->leads_start }}</div>
                                </div>
                                <div class="col">
                                    <small class="text-uppercase">LEADS Expire :</small>
                                    <div class="fw-bold">{{ $leads->leads_expire }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">

                        <div class="col">
                            <h5 class="text-warning">ข้อมูลผู้ติดต่อ</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <small class="text-uppercase">name : </small>
                            <div class="fw-bold">{{ $leads->customer->contact_name }}</div>
                        </div>
                        <div class="col">
                            <small class="text-uppercase">telephone : </small>
                            <div class="fw-bold"><a href="tel:0123456789">{{ $leads->customer->contact_telephone }}</a>
                            </div>
                        </div>
                        <div class="col">
                            <small class="text-uppercase">line : </small>
                            <div class="fw-bold">{{ $leads->customer->contact_line }}</div>
                        </div>
                        <div class="col">
                            <small class="text-uppercase">email : </small>
                            <div class="fw-bold"><a
                                    href="mailto:{{ $leads->customer->contact_email }}">{{ $leads->customer->contact_email }}</a>
                            </div>
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
                                    <button class="text-uppercase nav-link  {{ $tab_id == 1 ? 'active' : '' }}"
                                        id="carlendarbtn" type="button" wire:click='settab(1)' role="tab"
                                        aria-controls="calendar_tab" aria-selected="true">Calendars</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="text-uppercase nav-link {{ $tab_id == 2 ? 'active' : '' }}"
                                        id="generalbtn" type="button" role="tab" wire:click='settab(2)'
                                        aria-controls="general_tab" aria-selected="true">memo</button>
                                </li>
                                @if (false)
                                    <li class="nav-item" role="presentation">
                                        <button class="text-uppercase nav-link {{ $tab_id == 3 ? 'active' : '' }}"
                                            id="checkinbtn" type="button" role="tab" wire:click='settab(3)'
                                            aria-controls="checkin_tab" aria-selected="false">check in</button>
                                    </li>
                                @endif
                                <li class="nav-item" role="presentation">
                                    <button class="text-uppercase nav-link {{ $tab_id == 4 ? 'active' : '' }}"
                                        id="quotationbtn" type="button" role="tab" wire:click='settab(4)'
                                        aria-controls="quotation_tab" aria-selected="false">Quotation</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade {{ $tab_id == 1 ? 'show active' : '' }}" id="calendar_tab"
                                    role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <button class="btn btn-sm btn-success mb-3" type="button" data-bs-toggle="modal"
                                        data-bs-target="#leads-calendar-modal">Create calendar</button>

                                    <div>
                                        <table class="table table-striped">
                                            <tr>
                                                <td>Date</td>
                                                <td>Detail</td>
                                            </tr>
                                            @foreach ($calendars as $calendar)
                                                <tr>
                                                    <td>
                                                        {{ $calendar->calendar_date }}<br>
                                                        <small>cby : {{ $calendar->cby }}</small>
                                                    </td>
                                                    <td>{{ $calendar->calendar_detail }}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="3">
                                                    {{ $calendars->withQueryString()->links() }}
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade  {{ $tab_id == 2 ? 'show active' : '' }}" id="general_tab"
                                    role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <button class="btn btn-sm btn-success mb-3" type="button" data-bs-toggle="modal"
                                        data-bs-target="#leads-memo-modal">Create Memo</button>

                                    <div>
                                        <table class="table table-striped">
                                            <tr>
                                                <td>Date</td>
                                                <td>Detail</td>
                                            </tr>
                                            @foreach ($memos as $memo)
                                                <tr>
                                                    <td>
                                                        {{ $memo->memo_timestamp }}<br>
                                                        <small>cby : {{ $memo->cby }}</small>

                                                    </td>
                                                    <td>
                                                        {{ $memo->memo_message }}<br>
                                                        @if ($memo->originalfilename)
                                                        <i class="ti ti-paperclip"></i> :
                                                            <a href="{{ url($memo->filename) }}" download="{{ $memo->originalfilename }}">
                                                                {{ $memo->originalfilename }}
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="3">{{ $memos->withQueryString()->links() }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                @if (false)
                                    <div class="tab-pane fade  {{ $tab_id == 3 ? 'show active' : '' }}"
                                        id="checkin_tab" role="tabpanel" aria-labelledby="profile-tab"
                                        tabindex="0">
                                        <div class="text-center">
                                            <img src="{{ asset('images/google.png') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div>
                                            <table class="table table-striped">
                                                <tr>
                                                    <td>Date</td>
                                                    <td>Detail</td>
                                                </tr>
                                                <tr>
                                                    <td>xxxxxx</td>
                                                    <td>xxxxxx</td>

                                                </tr>
                                                <tr>
                                                    <td>xxxxxx</td>
                                                    <td>xxxxxx</td>

                                                </tr>
                                                <tr>
                                                    <td>xxxxxx</td>
                                                    <td>xxxxxx</td>

                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                @endif
                                <div class="tab-pane fade  {{ $tab_id == 4 ? 'show active' : '' }}"
                                    id="quotation_tab" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

                                    <button class="btn btn-sm btn-success mb-3" type="button"
                                        wire:confirm='คุณต้องการสร้างใบเสนอราคา ? '
                                        wire:click.prevent="addquote">Create Quotation</button>

                                    <livewire:crm.components.lead-quotation-show leads_id="{{ $this->leads_id }}" />
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <livewire:crm.components.lead-activity-log-show leads_id="{{ $this->leads_id }}" />
        </div>
    </div>

    <livewire:crm.components.lead-calendar-modal leads_id="{{ $this->leads_id }}" />
    <livewire:crm.components.lead-memo-modal leads_id="{{ $this->leads_id }}" />
    <livewire:crm.components.lead-assign-to-modal leads_id="{{ $this->leads_id }}" />
    <livewire:crm.components.lead-final-step-modal leads_id="{{ $this->leads_id }}" />
    <livewire:crm.components.lead-invoice-create-modal leads_id="{{ $this->leads_id }}" />
    <livewire:crm.components.activity-log-modal />
    <livewire:crm.components.toast-alert />

    {{-- <div x-data x-init="@this.on('leadschangtab', event => {
        setTimeout(function() {
            if (event.tab == 1) {
                $('#carlendarbtn').click();
            } else if (event.tab == 2) {
                $('#generalbtn').click();
            } else if (event.tab == 3) {
                $('#checkinbtn').click();
            } else {
                $('#quotationbtn').click();
            }
        }, 100);
    })"></div> --}}

    <div x-data x-init="@this.on('leads-final-step-open', event => {
    
        const myModal = new bootstrap.Modal(document.getElementById('final-step-modal'));
        myModal.show();
    
    })"></div>
</div>

@push('scripts')
    <script src="{{ asset('assets/vendor/libs/jquery-sticky/jquery-sticky.js') }}"></script>
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
