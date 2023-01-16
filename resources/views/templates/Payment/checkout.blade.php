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
                            <h1 class="m-0">Payment</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">Payment</li>
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
                                @if(session()->has('success'))
                                <div id="successMessage" class="text-center text-success p-1">
                                    {{session('success')}}
                                </div>
                                @endif
                                <div class="card-header text-center">                                
                                <img class="img-fluid" src="{{asset('images/bkash-payment.png')}}">
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body col-md-6 offset-md-3">
                                    <div style="background-color:#de0f6a;" class="card-header text-center text-white">
                                      <strong> Payment to bKash No.</strong> <h5>01857797647</h5>
                                    </div>
                                    <form action="{{route('payment-confirm')}}" method="POST">
                                        @csrf
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>total Item</th>
                                                    <th>Total Payment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                        <strong>
                                                            {{$checkout->sum('participant_qty')}}</strong>
                                                        <input type="hidden" id="total_item" name="total_item"
                                                            value="{{$checkout->sum('participant_qty')}}">
                                                    </td>
                                                    <td>
                                                        <strong>
                                                            {{$checkout->sum('total')}}</strong>
                                                        <input type="hidden" id="total_payment" name="total_payment"
                                                            value="{{$checkout->sum('total')}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Your Bkash Number :</td>
                                                    <td>
                                                        <input type="text" class="form-control text-center"
                                                            id="member_bkash" name="member_bkash" required>
                                                        <input type="hidden" id="payment_bkash" name="payment_bkash" value="{{'01857797647'}}">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Transaction ID :</td>
                                                    <td>
                                                        <input type="text" class="form-control text-center" id="trx_id"
                                                            name="trx_id" required>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button style="background-color:#de0f6a;" class="btn btn-default text-bold form-control text-white">Confirm</button>
                                    </form>
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