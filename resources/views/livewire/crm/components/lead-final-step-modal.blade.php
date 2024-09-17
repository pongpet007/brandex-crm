<div wire:ignore.self class="modal fade" id="final-step-Modal" tabindex="-1" aria-labelledby="final-step-ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="final-step-ModalLabel">ตั้งค่าการขายครั้งต่อไป
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="p-3">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-9 col-form-label">คุณต้องการสร้าง Leads
                                    เพื่อต่อสัญญาครั้งต่อไปหรือไม่</label>
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <select id="continue_leads" onchange="checkconfirm()" class="form-control"
                                            name="continue_leads">
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row" id="leads_start">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Leads start</label>
                                <div class="col-sm-9">
                                    <div class="mb-3">
                                        <input class="form-control datepicker" type="text" name="start"
                                            id="start" value="{{ date('Y-m-d') }}">
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