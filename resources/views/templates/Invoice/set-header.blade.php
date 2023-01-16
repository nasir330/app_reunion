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
                            <h1 class="m-0">Set Invoice Header</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Invoice Header</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @include('templates/boxdata')

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="card">
                                <div class="card-body login-card-body class="bg-success p-4"">
                                    <h5 class="card-header bg-success text-center">Set an invoice header</h5>
                                   
                                       @if(session()->has('success'))
                                       <div class="text-center text-success p-1">
                                        {{session('success')}}
                                       </div>
                                       @endif
                                   
                                    <form method="POST" action="{{route('submit-invoice-header')}}" class="p-4">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="text" id="company_name" name="company_name"
                                                class="form-control" placeholder="Enter Name" required>
                                        </div>                                       
                                        <div class="mb-3">
                                            <input type="email" id="email" name="email"
                                                class="form-control" placeholder="Enter email address" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="number" id="phone" name="phone"
                                                class="form-control" placeholder="Enter Phone no.">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="street_address" name="street_address"
                                                class="form-control" placeholder="Enter street address">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="address" name="address"
                                                class="form-control" placeholder="address line 2" required>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-4 offset-md-4 text-center">
                                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>

                                </div>
                                <!-- /.login-card-body -->
                            </div>
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