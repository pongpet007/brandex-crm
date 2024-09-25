<div wire:ignore.self class="modal fade" id="leads-form-modal" tabindex="-1" aria-labelledby="leads-form-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="leads-form-modalLabel">Lead Create </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit='save' action="">
                    <div class="p-3">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Company </label>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    @if ($this->cus_id == 0)
                                        <small>To search company fill minimum 2 charectors </small>
                                        <input class="form-control " list="datalistCompanys"
                                            wire:model.live='search_cus_name' type="text" autocomplete="off" />
                                    @endif
                                    @if (strlen($this->search_cus_name) >= 2)
                                        @if (count($customers) == 0)
                                            <div class="mt-3">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#customer-form-modal">Create new customer</a>
                                            </div>
                                        @else
                                            <div style="position: relative;">
                                                <div>
                                                    <div class="d-flex">
                                                        <select wire:model.live='cus_id' class="form-control"
                                                            name="" id="">
                                                            <option value="0">Found company {{ count($customers) }}
                                                            </option>
                                                            @foreach ($customers as $customer)
                                                                <option value="{{ $customer->cus_id }}">
                                                                    {{ $customer->cus_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <button type="button" class="btn btn-sm btn-warning"
                                                            wire:click='resetsearch'>reset</button>
                                                    </div>

                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Assignee</label>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    @if (Auth::user()->is_admin == 1)
                                        <select wire:model.live='user_id' class="form-control">
                                            <option value="0">Select assignee</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    @else
                                        <div class="pt-2">
                                            {{ Auth::user()->name }}
                                            <input type="hidden" wire:model='user_id' value="{{ Auth::user()->id }}">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Lead name</label>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control" wire:model='leads_name' type="text" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Lead detail</label>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <textarea name="" wire:model='leads_detail' class="form-control" id="" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Lead Start</label>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control datepicker" wire:model='leads_start' type="text" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" id="btnclosesaleleads" name="btnclosesaleleads"
                                    class="btn btn-success">SAVE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <livewire:crm.components.customer-form-modal>

        <div x-data x-init="@this.on('leads-modal-close', event => {
            var myModalEl = document.getElementById('leads-form-modal');
            var modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        })"></div>

</div>
