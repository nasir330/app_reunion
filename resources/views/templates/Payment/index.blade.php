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
                                <div class="card-header">
                                    <h3 class="card-title">Payment</h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{route('payment-checkout')}}" method="GET">
                                        @csrf
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-left">T-Shirts</th>
                                                    <th>Rate</th>
                                                    <th>Qty</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $key => $item)
                                                <tr>
                                                    <td class="text-left">{{$item->tShirt_size}}</td>
                                                    <td>{{$item->tShirt_rate}}</td>
                                                    <td class="text-right">{{$item->participant_qty}}</td>
                                                    <td class="text-right">{{$item->total}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot class="card-header">
                                                <tr>
                                                    <td colspan="3" class="text-right">
                                                        <strong>Total =
                                                            {{$data->sum('participant_qty')}}</strong>
                                                        <input type="hidden" id="total_item" name="total_item"
                                                            value="{{$data->sum('participant_qty')}}">
                                                    </td>
                                                    <td class="text-right">
                                                        <strong>Total =
                                                            {{$data->sum('total')}}</strong>
                                                        <input type="hidden" id="total_payment" name="total_payment" value="{{$data->sum('total')}}">

                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button class="btn btn-info text-bold">Pay Now</button>
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