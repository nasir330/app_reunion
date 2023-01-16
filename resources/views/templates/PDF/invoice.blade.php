<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Invoice|The Watch Choice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css">
    <style type="text/css">
    * {
        box-sizing: border-box;
    }

    @page {
        margin: 20px;
        width: 800px;
    }

    body {
        font-size: 13px;
        font-family: 'Lato', sans-serif;
        width: 100%;
    }

    header img {
        width: 32%;
        padding: 20px;
    }

    header h2 {
        color: #bd8d2f;
        text-decoration: underline;
    }

    #header table,
    footer {
        position: absolute;
        bottom: 100px;
    }



    .main-color {
        color: #bd644a;
    }

    h1,
    h2,
    h3 {
        margin-bottom: 0;
        font-weight: 500;
    }

    h4 span {
        position: relative;
        padding-bottom: 5px;
    }

    h4 span::after {
        position: absolute;
        left: -5%;
        bottom: 0;
        width: 110%;
        height: 1px;
        border-bottom: 2px solid #000;
        content: "";
    }

    h5 {
        font-size: 13px;
        font-weight: 400;
    }

    .table-bordered.main-table thead th {
        font-size: 15px;
        border: 1px solid #bd8d2f;
        text-align: center;
        color: #bd8d2f;
        text-transform: uppercase;
    }

    .table-bordered.main-table td {
        background-color: #fde9d1;
        border: 0.5px solid #bd8d2f;
        padding: 5px;
        font-size: 13px;
    }

    .table-bordered.main-table {
        border: 0.5px solid #bd8d2f;
    }

    .underline {
        text-decoration: underline;
    }

    main table {
        border-collapse: collapse;
        border-spacing: 0;
        border: 0.5px solid #bd8d2f;
        width: 100%;
        margin-top: 5px;
        height: auto !important;
    }

    .page_break {
        page-break-before: always;
    }
    </style>
</head>

<body>
    <header>
        <table style="width:100%; text-align: center;">
            <tbody>
                <tr>
                    <td style="text-align:left;">
                        <img src="{{asset('images/twc_logo.jpg')}}" alt="">
                    </td>
                    <td class="text-right p-4">
                        <h2>Invoice : WC321</h2>
                        <span>Date: 13/08/2022</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
    <main>
        <table style="width:100%; text-align: center;">
            <tbody>
                <tr>
                    <td style="text-align:left;" class="p-4">
                        <span>Address</span>
                        <p>
                            Suite 37, 88-90 Hatton Garden <br>
                            London, EC1N 8PN <br>
                            Email: info@thewatchchoice.com <br>
                            Cell: 0207 4040 235


                        </p>
                    </td>
                    <td style="margin-right:5px;" class="text-right">
                        <span>Deliver To</span>
                        <strong>Andrew Ben </strong>
                        <p>
                            123 London Road<br>
                            Southwark, SE5 7QY, London <br>
                            Email: andrewben@gmail.com <br>
                            Cell: 44 7900000000
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table-bordered table-striped main-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>PAYMENT TERMS </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Rolex Day-Date 40 Rose Gold Chocolate Dial 228235 - 2018 </td>
                    <td>Due on receipt </td>
                </tr>
            </tbody>
        </table>
        <table class="table-bordered table-striped main-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>DESCRIPTION</th>
                    <th>QUANTITY</th>
                    <th>AMOUNT</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Rolex Day-Date 40 Rose Gold Chocolate Dial 228235</td>
                    <td>1.00</td>
                    <td>£1,000.00</td>
                    <td>£1,000.00</td>
                </tr>

                <tr>
                    <td>02</td>
                    <td>Rolex Day-Date 40 Rose Gold Chocolate Dial 228235</td>
                    <td>2.00</td>
                    <td>£1,000.00</td>
                    <td>£2,000.00</td>
                </tr>

                <tr>
                    <td>03</td>
                    <td>Rolex Day-Date 40 Rose Gold Chocolate Dial 228235</td>
                    <td>1.00</td>
                    <td>£1,000.00</td>
                    <td>£1,000.00</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:right; font-weight:bold;" class="p-2">TOTAL DUE</td>
                    <td style="text-decoration-line: underline;" class="p-2"> <strong> £4,000.00</strong></td>
                </tr>

            </tbody>
        </table>
    </main>
    <footer>
        <table style="width:100%;">

            <tbody>

                <tr>
                    <th>
                        Watch Choice <br>
                        Bank Name: Anna <br>
                        Sort Code: 04-03-70 <br>
                        Account Number: 72458586
                    </th>
                </tr>
                <tr>
                    <td>
                    Tax Summary - Second Hand Goods: The goods on this receipt have been sold under VAT margin scheme.			
                    </td>
                </tr>
            </tbody>
        </table>
    </footer>
</body>