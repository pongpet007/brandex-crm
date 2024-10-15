<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quotation Code({{ $quotation->code }})</title>


    <style>
        /* @font-face {
            font-family: 'Kanit';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/Kanit-Regular.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'Kanit';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/Kanit-Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'Kanit';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/Kanit-Italic.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'Kanit';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/Kanit-BoldItalic.ttf') }}") format('truetype');
        } */

        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        body {
            font-family: 'THSarabunNew';
            font-size: 18px;
            line-height: 1.05em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .border-blue {
            width: 90%;
            margin: 10px;
            padding: 10px;
            border: 1px solid blue;
            border-radius: 10px;
        }

        .color-red {
            color: red;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td width="100">
                <img src="{{ public_path($quotation->logo) }}" width="120" alt="">
            </td>
            <td>
                <div style="font-size: 18px;"><b>{{ $quotation->com_name }}</b></div>
                <div>{!! $quotation->com_address !!}</div>
                <div> โทร {{ $quotation->com_tel }} มือถือ {{ $quotation->com_mobile }}</div>
            </td>
            <td>
                <h1 class="text-end" style="color:blue;">
                    ใบเสนอราคา<br>
                    QUOTATION
                </h1>
                <h4>เลขที่ประจำตัวผู้เสียภาษี : <b style="color:blue">{{ $quotation->taxid }}</b></h4>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="50%">
                <div class="border-blue">
                    <table>
                        <tr>
                            <td>ชื่อลูกค้า</td>
                            <td>{{ $quotation->cus_name }}</td>
                        </tr>
                        <tr>
                            <td>บริษัท</td>
                            <td>{{ $quotation->cus_company }}</td>
                        </tr>
                        <tr>
                            <td>ที่อยู่</td>
                            <td>{{ $quotation->cus_address }}</td>
                        </tr>
                        <tr>
                            <td> &nbsp;</td>
                            <td>โทร {{ $quotation->cus_tel }} มือถือ {{ $quotation->cus_mobile }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="color-red">
                                    เป็นผู้มีอำนาจในการว่าจ้างให้ {{ $quotation->cus_company }}<br>
                                    เป็นผู้รับจ้างในการทำงานตามที่ระบุในใบสั่งขาย
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
            <td width="50%">
                <div class="border-blue">
                    <table>
                        <tr>
                            <td>เลขที่ใบเสนอราคา</td>
                            <td>{{ $quotation->code }}</td>
                        </tr>
                        <tr>
                            <td>พนักงานขาย </td>
                            <td>{{ $quotation->user_id }}</td>
                        </tr>
                        <tr>
                            <td>รูปแบบการต่อสัญญา</td>
                            <td>{{ $quotation->qoute_type }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="color-red">
                                    เพื่อให้งานมีความต่อเนื่อง ควรอนุมัติก่อนหมดสัญญา 90 วัน
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <style>
        td,
        th {
            padding: 2px;
        }

        .border-right-blue {
            border-right: 1px solid blue;
        }

        .border-top-blue {
            border-top: 1px solid blue;
        }

        .text-center {
            text-align: center;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .padding-left {
            padding-left: 10px;
        }

        .padding-right {
            padding-right: 10px;
        }
    </style>

    <table style="border:1px solid blue;">
        <tr style="background: blue; color:white; font-size:18px;">
            <td class="text-center" width="40">ลำดับ</td>
            <td class="">รายการสินค้า</td>
            <td class="text-center" width="80">ราคาสินค้า</td>
        </tr>
        @php
            $no = 1;
            $sum = 0;
        @endphp
        @foreach ($quotationItems as $item)
            <tr>
                <td class="text-center border-right-blue"> {{ $no }} </td>
                <td class="padding-left border-right-blue"> {{ $item->product->pro_name }} </td>
                <td class="text-end padding-right">{{ number_format($item->price, 0) }} </td>
            </tr>
            @php
                $no++;
                $sum += $item->price;
            @endphp
        @endforeach
        @for ($i = 0; $i < 8 - $no; $i++)
            <tr>
                <td class="text-center border-right-blue">&nbsp;</td>
                <td class="padding-left border-right-blue">&nbsp;</td>
                <td class="text-end padding-right">&nbsp;</td>
            </tr>
        @endfor

        <tr>
            <td colspan="2" class="border-right-blue border-top-blue text-end padding-right">ราคารวม <span
                    style="color:blue">( สามแสนสี่หมื่น บาทถ้วน )</span></td>
            <td class="border-top-blue text-end padding-right">{{ number_format($sum, 0) }}</td>
        </tr>
        @if ($quotation->discount > 0)
            <tr>
                <td colspan="2" class="border-right-blue border-top-blue  text-end padding-right">ส่วนลด</td>
                <td class="border-top-blue text-end padding-right">{{ number_format($quotation->discount, 0) }}</td>
            </tr>

            <tr>
                <td colspan="2" class="border-right-blue border-top-blue text-end padding-right"> จำนวนเงินทั้งสิ้น
                    <span style="color:blue">( สามแสนสี่หมื่น บาทถ้วน )</span> ไม่รวมภาษีมูลค่าเพิ่ม
                </td>
                <td class="border-top-blue text-end padding-right">{{ number_format($sum - $quotation->discount, 0) }}
                </td>

            </tr>
        @endif
    </table>
    <div>
        <h3 class="text-center">ในนาม {{ $quotation->com_name }}</h3>
    </div>

    <table>
        <tr>
            <td class="text-center" style="border: 2px solid #ccc;" width="25%">
                ........................................<br>
                ( ........................................ )<br>
                กรรมการผู้จัดการ<br>
                วันที่........../........../.........
            </td>
            <td class="text-center" style="border: 2px solid #ccc;" width="25%">
                ........................................<br>
                ( ........................................ )<br>
                ผู้อนุมัติใบสั่งขาย<br>
                วันที่........../........../.........
            </td>
            <td class="text-center" style="border: 2px solid #ccc;" width="25%">
                ........................................<br>
                ( ........................................ )<br>
                ที่ปรึกษาทางการตลาด<br>
                วันที่........../........../........
            </td>
            <td class="text-center" style="border: 2px solid #ccc;" width="25%">
                ........................................<br>
                ( ........................................ )<br>
                ผู้ซื้อลงนาม (ประทับตราบริษัท)<br>
                วันที่........../........../.........
            </td>
        </tr>
    </table>
    <br>
    <h3 class="text-center">รูปแบบการชำระ</h3>
    <table>
        <tr>
            <td width="25%">
                <input type="checkbox" name="checkbox" style="transform: scale(1.5);">
                <label style="display: inline-block;padding-left: 10px; padding-bottom: 3px;">
                    แบ่งชำระ
                </label>
            </td>
            <td width="25%">
                <input type="checkbox" name="checkbox" style="transform: scale(1.5);">
                <label style="display: inline-block;padding-left: 10px; padding-bottom: 3px;">
                    บัตรเครดิต
                </label>
            </td>
            <td width="25%">
                <input type="checkbox" name="checkbox" style="transform: scale(1.5);">
                <label style="display: inline-block;padding-left: 10px; padding-bottom: 3px;">
                    เช็คสั่งจ่าย
                </label>
            </td>
            <td width="25%">
                <input type="checkbox" name="checkbox" style="transform: scale(1.5);">
                <label style="display: inline-block;padding-left: 10px; padding-bottom: 3px;">
                    โอนเงิน
                </label>
            </td>
        </tr>
    </table>
    <style>
        /* [type=checkbox]:after {
            content: attr(50);
            margin: -3px 5px;
            vertical-align: middle;
            white-space: nowrap;
            display: inline-block;
        } */
    </style>

</body>

</html>
