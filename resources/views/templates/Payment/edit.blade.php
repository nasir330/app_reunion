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
                            <h1 class="m-0">Edit-Package</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">Edit-Package</li>
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
                                <div id="successMessage" class="text-center text-danger p-1">
                                    {{session('success')}}
                                </div>
                                @endif
                                <div class="card-header">
                                    <h3 class="card-title">My package</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-cener text-danger">
                                        <x-jet-validation-errors />
                                    </div>
                                    <form method="POST" action="{{route('submit-participant')}}">
                                        @csrf

                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <th>Participant</th>
                                                <th>T-Shirt</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $key=>$item)
                                                <tr>
                                                    <td>{{$item->participant_qty}}</td>
                                                    <td>{{$item->tShirt_size}}</td>
                                                    <td>{{$item->tShirt_rate*$item->participant_qty}}</td>
                                                    <td>
                                                    <a href="{{route('package-delete',['id'=>$item->id])}}" class="btn btn-danger">X</a> 
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="col-sm-2">
                                            <a href="{{route('package')}}" class="btn btn-secondary btn-block">Back to
                                                Package</a>
                                        </div>
                                    </form>
                                </div>
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