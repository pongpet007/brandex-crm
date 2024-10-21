<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-5">
                <h5 class="card-title mb-sm-0 me-2 mt-2 text-uppercase  text-info">Activity Log 
                </h5>
            </div>
            <div class="col-md-7">
                <div class="text-info">
                    <input type="text" wire:model.live='search' style="display: inline-block;" class="form-control" placeholder="search log">
                </div>
            </div>
        </div>


    </div>
    <div class="card-body">
        <div class="row">
            <div style="height: 300px; overflow-y: auto;">
                <table class="mt-1 table table-striped ">
                    @foreach ($logs as $log)
                        <tr>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small class="">
                                            {{ $log->log_timestamp }} :
                                            {{ $log->cby }}
                                        </small>

                                        <div class="text-warning">
                                            {!! $log->log_message !!}
                                            {{-- <a href="#"
                                                @click="$dispatch('show-log',{msg: '{{ $log->log_message }}'})"
                                                data-bs-toggle="modal"
                                                data-bs-target="#activityLogModal">{!! $log->log_message !!}
                                            </a> --}}
                                        </div>
                                    </div>
                                    @if(false)
                                    <div style="width: 25px">
                                        <i class="ti ti-pin"></i>
                                    </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>

        </div>
    </div>
    <livewire:crm.components.activity-log-modal />
</div>
