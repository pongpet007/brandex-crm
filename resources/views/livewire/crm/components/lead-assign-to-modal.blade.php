<div wire:ignore.self class="modal fade" id="assign-to-modal" tabindex="-1" aria-labelledby="assign-to-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="assign-to-modalLabel">Assign this lead to
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit='save' action="">                    
                   
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
                                @endif
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

                </form>
            </div>
        </div>
    </div>
    <div x-data x-init="@this.on('assign-to-modal-close', event => {
        var myModalEl = document.getElementById('assign-to-modal');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
    })"></div>
</div>
