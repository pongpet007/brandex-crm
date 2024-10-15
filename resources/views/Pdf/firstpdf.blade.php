<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="Content-Language" content="th" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laravel 11 Generate PDF Example - ItSolutionStuff.com ภาษาไทย</title>


    <style>
        @font-face {
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
        }

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
            font-size: 16px;
        }

        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid;
            padding: 5px;
        }

        .f {
            font-family: 'THSarabunNew';
        }
    </style>
</head>

<body>
    <div>
        <div style="float: left; width: 35%; height: 50%; background-color: #cc6633;"></div>
        <div style="margin-left: 35%; width: 65%; height: 50%; background-color: #3366cc;"></div>
    </div>
    
    <div class="page-break"></div>

    <div style="display: flex;">
        <div>aaa</div>
        <div>aaa</div>
        <div>aaa</div>
        <div>aaa</div>
    </div>



    <div class="f" style="font-weight: bold">
        ทดสอบภาษาไทย ขอขอบคุณในการสั่งซื้อ
    </div>
    <h1>ทำไมไม่ได้ภาษาไทยได้มั้ย</h1>
    <p>{{ date('Y-m-d h:i:s:A') }}</p>
    <p>Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit, <br>sed do eiusmod
        tempor incididunt ut labore<br> et dolore magna aliqua.</p>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        <tr>
            <th>ไทย</th>
            <th>พงศ์เพชร</th>
            <th>มีทรัพย์</th>
        </tr>
    </table>
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
    <h1>Page 1</h1>
    <div class="page-break"></div>
    <h1>Page 2</h1>
    <div class="f">ทดสอบภาษาไทย</div>
</body>

</html>
