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
                            <h1 class="m-0">Package</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">T-Shirt</li>
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
                                    <h3 class="card-title">T-Shirt List</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-cener text-danger">
                                        <x-jet-validation-errors />
                                    </div>
                                    <form method="POST" action="{{route('submit-participant')}}">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="hidden" name="user_id" id="user_id"
                                                value="{{Auth::user()->id}}">
                                            <select class="col-md-4" name="tShirt_id" id="tShirt_id">
                                                <option value="">Select T-Shirt Size</option>
                                                @foreach($data as $key=>$tshirt)
                                                <option value="{{$tshirt->id}}">{{$tshirt->tShirt_size}}</option>
                                                @endforeach
                                            </select>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-tshirt"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <th>T-Shirt Size</th>
                                            <th>T-Shirt Rate</th>
                                            <th>Participant quantity</th>                                            
                                        </thead>
                                        <tbody id="participantTable">

                                        </tbody>
                                        </table>

                                        <div class="row">
                                            <div class="col-4">
                                                <button type="submit" class="btn btn-primary btn-block">Add</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-left">SL</th>
                                                    <th>Size</th>
                                                    <th>Participant </th>
                                                    <th>Amount</th>                                                   
                                                </tr>
                                            </thead>
                                            <tbody>                                                                                             
                                                @foreach($participants as $key=> $participant)
                                                <tr>
                                                <td class="text-left">{{$key+1}}</td>
                                                <td class="text-left">{{$participant->tShirt_size}}</td>
                                                <td class="text-left">{{$participant->participant_qty}}</td>
                                                <td class="text-left">{{$participant->participant_qty*$participant->tShirt_rate}}</td>                                                
                                                </tr>                                               
                                                @endforeach
                                            </tbody>

                                        </table>
                                        @if(!empty($participant))
                                        <div>
                                           <a href="{{route('package-edit',['id'=>$participant->user_id])}}" class="col-xs-6 btn btn-info"> Edit </a>
                                            <a href="{{route('payment')}}"  class="col-xs-6 btn btn-success">Payment </a>                                         
                                        </div>
                                        @endif                                       
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