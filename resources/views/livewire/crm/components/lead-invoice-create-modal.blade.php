<div wire:ignore.self class="modal fade modal-xl" id="leads-invoice-create-modal" tabindex="-1"
    aria-labelledby="leads-invoice-create-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="leads-invoice-create-modalLabel">Quotation : <span
                        class="text-warning">{{ $code }}</span></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div>
                                <img src="{{ asset($logo) }}" style="max-width: 200px;" alt="">
                            </div>
                            <div>
                                <div>{{ $com_name }}</div>
                                <div>{{ $com_address }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="">
                            <h3 style="color:black;">ใบเสนอราคา/Quotation</h3>
                        </div>
                        <div class="" style="color:black;">เลขที่ประจำตัวผู้เสียภาษี : <b>{{ $taxid }}</b>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 ">
                        <div class="border border-info rounded  rounded-5 p-3">
                            <table>
                                <tr>
                                    <td>ชื่อลูกค้า</td>
                                    <td><b>{{ $cus_name }}</b></td>
                                </tr>
                                <tr>
                                    <td>บริษัท</td>
                                    <td><b>{{ $cus_company }}</b></td>
                                </tr>
                                <tr>
                                    <td>ที่อยู่ </td>
                                    <td><b>{{ $cus_address }}</b></td>
                                </tr>
                                <tr>
                                    <td>โทร</td>
                                    <td><b>{{ $cus_tel }}</b></td>
                                </tr>
                                <tr>
                                    <td>มือถือ</td>
                                    <td><b>{{ $cus_mobile }}</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span class="text-danger">
                                            เป็นผู้มีอำนาจในการว่าจ้างให้ {{ $com_name }}
                                            เป็นผู้รับจ้างในการทำงานตามที่ระบุในใบสั่งขาย
                                        </span>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="border border-info rounded  rounded-5 p-3">
                            <table>
                                <tr>
                                    <td> เลขที่</td>
                                    <td><b>{{ $code }}</b></td>
                                </tr>
                                <tr>
                                    <td>พนักงานขาย </td>
                                    <td><b>{{ $user_id }}</b></td>
                                </tr>
                                <tr>
                                    <td>รูปแบบการต่อสัญญา </td>
                                    <td><b>{{ $qoute_type }}</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span class="text-danger">เพื่อให้งานมีความต่อเนื่อง ควรอนุมัติก่อนหมดสัญญา
                                            90 วัน</span>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="d-flex">
                            <div class="">
                                <form action="">
                                    <div class="input-group">
                                        <label class="pt-2 pe-2" for="">Our product :</label>
                                        <select wire:model='pro_id' class="form-control" name="" id=""
                                            style="width: 400px;">
                                            <option value="0">-- Select product --</option>
                                            @foreach ($products as $product)
                                                <option value="{{ $product->pro_id }}">{{ $product->pro_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button type="button" wire:click='addItem' class="btn btn-warning">Add
                                            item</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <table class="table mt-3">
                            <tr
                                class="bg-info bg-opacity-10 border border-info border-start-0 border-end-0 rounded-end">
                                <td>No.</td>
                                <td>รายการ/Item</td>
                                <td class="text-end">Price</td>

                            </tr>
                            @php
                                $sum = 0;
                            @endphp
                            @foreach ($quotationItems as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <a href="" wire:click.prevent="deleteitem({{ $item->quote_item_id }})">
                                            <i class="ti ti-square-rounded-x" style="color:red"></i>
                                        </a>
                                        {{ $item->product->pro_name }}<br>
                                        updated at : <span class="text-info">{{ $item->updated_at }}</span><br>
                                    </td>
                                    <td class="text-end">{{ number_format($item->price, 0) }}</td>

                                </tr>
                                <? $sum += $item->price ;?>
                            @endforeach
                            <tr
                                class="bg-info bg-opacity-10 border border-info border-start-0 border-end-0 rounded-end">
                                <td class="text-end" colspan="2">Discount</td>
                                <td class="text-end" style="width: 150px;">
                                    <input type="text" wire:model='discount' class="form-control"
                                        style="width: 120px;">
                                </td>
                            </tr>
                            <tr
                                class="bg-info bg-opacity-25 border border-info border-start-0 border-end-0 rounded-end">
                                <td class="text-end" colspan="2">Total</td>
                                <td class="text-end">{{ number_format($sum, 0) }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12 p-3 text-center">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-success"
                            style="width:300px">CLOSE</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div x-data x-init="@this.on('leads-invoice-create-modal-close', event => {
        var myModalEl = document.getElementById('leads-invoice-create-modal');
        var modal = new bootstrap.Modal(myModalEl)
        modal.hide();
    })"></div>

    <div x-data x-init="@this.on('leads-invoice-create-modal-show', event => {
        const myModal = new bootstrap.Modal(document.getElementById('leads-invoice-create-modal'));
        myModal.show();
    })"></div>

</div>
