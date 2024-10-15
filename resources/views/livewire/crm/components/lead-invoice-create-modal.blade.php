<div wire:ignore.self class="modal fade modal-xl" id="leads-invoice-create-modal" tabindex="-1"
    aria-labelledby="leads-invoice-create-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="leads-invoice-create-modalLabel">ใบเสนอราคา : <span
                        class="text-warning">{{ $code }}</span></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="editheader" class="row mb-3" style="position: relative">
                    <div class="editiconheader">
                        @if ($iseditheader)
                            <a href="#" wire:click.prevent='saveheader'><i class="ti ti-check"></i></a>
                            <a href="#" wire:click.prevent='editheader'><i class="ti ti-x"></i></a>
                        @else
                            <a href="#" wire:click.prevent='editheader'><i class="ti ti-pencil"></i></a>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="{{ $iseditheader ? '' : 'd-flex' }}">
                            <div class="pe-3">
                                @if ($iseditheader)
                                    @if ($this->filereplace)
                                        <img src="{{ $filereplace->temporaryUrl() }}" class="img-fluid">
                                    @endif
                                    <input type="file" wire:model='filereplace'>
                                @else
                                    <img src="{{ asset($logo) }}" style="max-width: 200px;" alt="">
                                @endif

                            </div>
                            <div>
                                <div  style="font-size: 14px; color:black;">
                                    @if ($iseditheader)
                                        <input type="text" wire:model='com_name' class="form-control">
                                    @else
                                        {{ $com_name }}
                                    @endif
                                </div>
                                <div style="font-size: 13px; color:black;">
                                    @if ($iseditheader)
                                        <input type="text" wire:model='com_address' class="form-control">
                                    @else
                                        {{ $com_address }}
                                    @endif
                                </div>
                                <div style="font-size: 13px; color:black;">
                                    โทร
                                    @if ($iseditheader)
                                        <input type="text" wire:model='com_tel' class="form-control"
                                            style="width:150px;display:inline; ">
                                    @else
                                        {{ $com_tel }}
                                    @endif
                                    มือถือ
                                    @if ($iseditheader)
                                        <input type="text" wire:model='com_mobile' class="form-control"
                                            style="width:150px;display:inline; ">
                                    @else
                                        {{ $com_mobile }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="">
                            <h3 style="color:black;">ใบเสนอราคา/Quotation</h3>
                        </div>
                        <div class="" style="color:black;">เลขที่ประจำตัวผู้เสียภาษี :
                            @if ($iseditheader)
                                <input type="text" wire:model='taxid' class="form-control"
                                    style="width:150px;display:inline; ">
                            @else
                                <b>{{ $taxid }}</b>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 ">
                        <div id="edit1" class="border border-info rounded  rounded-5 p-3 "
                            style="position: relative;">
                            <div class="editicon">
                                @if ($iseditmode1)
                                    <a href="#" wire:click.prevent='savemode1'><i class="ti ti-check"></i></a>
                                    <a href="#" wire:click.prevent='editmode1'><i class="ti ti-x"></i></a>
                                @else
                                    <a href="#" wire:click.prevent='editmode1'><i class="ti ti-pencil"></i></a>
                                @endif
                            </div>
                            <table>
                                <tr>
                                    <td>ชื่อลูกค้า</td>
                                    <td>
                                        @if ($iseditmode1)
                                            <input type="text" class="form-control" wire:model='cus_name'>
                                        @else
                                            <b>{{ $cus_name }}</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>บริษัท</td>
                                    <td>
                                        @if ($iseditmode1)
                                            <input type="text" class="form-control" wire:model='cus_company'>
                                        @else
                                            <b>{{ $cus_company }}</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>ที่อยู่ </td>
                                    <td>
                                        @if ($iseditmode1)
                                            <input type="text" class="form-control" wire:model='cus_address'>
                                        @else
                                            <b>{{ $cus_address }}</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>โทร</td>
                                    <td>
                                        @if ($iseditmode1)
                                            <input type="text" class="form-control" wire:model='cus_tel'>
                                        @else
                                            <b>{{ $cus_tel }}</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>มือถือ</td>
                                    <td>
                                        @if ($iseditmode1)
                                            <input type="text" class="form-control" wire:model='cus_mobile'>
                                        @else
                                            <b>{{ $cus_mobile }}</b>
                                        @endif

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span class="text-danger">
                                            เป็นผู้มีอำนาจในการว่าจ้างให้ {{ $cus_company }}
                                            เป็นผู้รับจ้างในการทำงานตามที่ระบุในใบสั่งขาย
                                        </span>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div id="edit2" class="border border-info rounded  rounded-5 p-3"
                            style="position: relative;">
                            <div class="editicon">
                                @if ($iseditmode2)
                                    <a href="#" wire:click.prevent='savemode2'><i class="ti ti-check"></i></a>
                                    <a href="#" wire:click.prevent='editmode2'><i class="ti ti-x"></i></a>
                                @else
                                    <a href="#" wire:click.prevent='editmode2'><i class="ti ti-pencil"></i></a>
                                @endif
                            </div>
                            <table>
                                <tr>
                                    <td> เลขที่</td>
                                    <td><b>{{ $code }}</b></td>
                                </tr>
                                <tr>
                                    <td>พนักงานขาย </td>
                                    <td>
                                        @if ($iseditmode2)
                                            <select wire:model='user_id' class="form-control">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        @else
                                            <b>{{ $quotation?->user?->name }}</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>รูปแบบการต่อสัญญา </td>
                                    <td>
                                        @if ($iseditmode2)
                                            <select wire:model='quote_type' class="form-control">
                                                @foreach ($quote_types as $item)
                                                    <option value="{{ $item->quote_type_id }}">{{ $item->type_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        @else
                                            <b>{{ $quotation->quote_type_table->type_name }}</b>
                                        @endif
                                    </td>
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
                                        <select wire:model='pro_id' class="form-control" name=""
                                            id="" style="width: 400px;">
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
                                        <a href=""
                                            wire:click.prevent="deleteitem({{ $item->quote_item_id }})">
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
    <style>
        #edit1:hover>.editicon,
        #edit2:hover>.editicon,
        #editheader:hover>.editiconheader {
            display: block;
            transition: all 1s;
        }

        .editicon {
            display: none;
            position: absolute;
            width: 60px;
            height: 25px;
            right: 5px;
            transition: all 1s;
        }

        .editiconheader {
            display: none;
            position: absolute;
            width: 100px;
            height: 25px;
            right: 45%;
            top: -10px;
            transition: all 1s;
        }
    </style>
</div>
