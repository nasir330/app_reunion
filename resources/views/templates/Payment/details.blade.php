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
                            <h1 class="m-0">Payment Details</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">Payment Details</li>
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
                                <div class="card-header text-center">

                                </div>

                                <!-- /.card-header -->
                                <div class="card-body col-md-6 offset-md-3">
                                    <div style="border:4px solid #de0f6a;" class="card-header text-center text-white">
                                        <img class="img-fluid" src="{{asset('images/bkash-payment.png')}}">
                                    </div>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Name :</td>
                                               <td>{{Auth::user()->name}}</td>
                                            </tr>                                           
                                            <tr>
                                                <td>Transaction ID :</td>
                                               <td>{{$data->trx_id}}</td>
                                            </tr>                                           
                                            <tr>
                                                <td>bkash Number :</td>
                                               <td>{{$data->member_bkash}}</td>
                                            </tr>                                           
                                            <tr>
                                                <td>Payment Number :</td>
                                               <td>{{$data->payment_bkash}}</td>
                                            </tr>                                           
                                            <tr>
                                                <td>Total Items :</td>
                                               <td>{{$data->total_item}}</td>
                                            </tr>                                           
                                            <tr>
                                                <td>Total Payment :</td>
                                               <td>{{$data->total_payment}}</td>
                                            </tr>                                           
                                            <tr>
                                                <td>Payment Status:</td>
                                                @if(is_null($data->payment_verification))                                                                                              
                                                <td class="text-warning text-bold">Pending</td>
                                                @elseif($data->payment_verification == 'cancelled')
                                                <td class="text-danger text-bold">Cancelled</td>
                                                @else
                                                <td class="text-success text-bold">Approved</td>
                                                @endif
                                            </tr>   
                                            <tr>
                                                <td>Payment Date :</td>
                                               <td>{{$data->created_at}}</td>
                                            </tr>                                          
                                        </tbody>
                                    </table>
                                    <a href="{{route('payment-list')}}" class="btn btn-info form-control">Back</a>
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