<div>
    <div wire:ignore.self class="modal fade" id="final-step-modal" tabindex="-1" aria-labelledby="final-step-modalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="final-step-modalLabel">ตั้งค่าการขายครั้งต่อไป
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit='save' action="">
                        <div class="p-3">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-9 col-form-label">คุณต้องการสร้าง Leads
                                    เพื่อต่อสัญญาครั้งต่อไปหรือไม่</label>
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <select wire:model.live='continue_leads' class="form-control"
                                            name="continue_leads">
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row {{ $this->continue_leads == 1 ? '' : 'd-none' }}" id="leads_start">
                                <label for="staticEmail" class="col-sm-5 col-form-label">Leads start next due</label>
                                <div class="col-sm-7">
                                    <div class="mb-3">
                                        <input wire:model='continue_start' class="form-control datepicker"
                                            autocomplete="off" type="text" name="start" id="start"
                                            >
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" id="btnclosesaleleads" name="btnclosesaleleads"
                                        class="btn btn-success">ยืนยันปิดการขาย</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div x-data x-init="@this.on('final-step-modal-close', event => {
        var myModalEl = document.getElementById('final-step-modal');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
    })"></div>
</div>
