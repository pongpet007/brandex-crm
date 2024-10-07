<div wire:ignore.self class="modal fade" id="leads-calendar-modal" tabindex="-1"
    aria-labelledby="leads-calendar-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="leads-calendar-modalLabel">Create Calendar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" wire:submit='save' action="" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="text" wire:model='calendar_date' class="form-control datepicker"
                                value="" placeholder="Date" value="<?= date('Y-m-d') ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Detail</label>
                        <div class="col-sm-10">
                            <textarea wire:model='calendar_detail' class="form-control" placeholder="your message" cols="30" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" name="btncalendarsave" class="btn btn-success">SAVE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div x-data x-init="@this.on('leads-modal-close', event => {
        var myModalEl = document.getElementById('leads-calendar-modal');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
    })"></div>

</div>
