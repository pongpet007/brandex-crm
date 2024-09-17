<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createModalLabel">Lead Create </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="p-3">
                        <div class="mb-3 row" id="leads_start">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Lead name</label>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control " type="text" name="start" id="start" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row" id="leads_start">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Lead detail</label>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <textarea name="" class="form-control" id="" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row" id="leads_start">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Company</label>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control " type="text" name="start" id="start" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row" id="leads_start">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Assignee</label>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control " type="text" name="start" id="start"
                                        value="{{ Auth::user()->name }}" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" id="btnclosesaleleads" name="btnclosesaleleads"
                                    class="btn btn-success">Confirm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
