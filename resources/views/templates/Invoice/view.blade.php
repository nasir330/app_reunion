<x-header />

@include('templates/nav')
@include('templates/menu')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Invoices Details</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('invoices-list')}}">Back</a></li>
                                <li class="breadcrumb-item active">Invoices Details</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->


            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">All Invoice List</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
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
                                    </div>

                                    <div class="row">
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
                                    </div>

                                    <div class="row">
                                        <table class="table table-bordered table-striped main-table">
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
                                    </div>

                                    <div class="row">
                                        <table class="table table-bordered table-striped main-table">
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
                                                    <td colspan="4" style="text-align:right; font-weight:bold;"
                                                        class="p-2">TOTAL DUE</td>
                                                    <td style="text-decoration-line: underline;" class="p-2"> <strong>
                                                            £4,000.00</strong></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <table style="width:100%; margin-top:100px;">

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
                                                        Tax Summary - Second Hand Goods: The goods on this receipt have
                                                        been sold under VAT margin scheme.
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <x-footer />