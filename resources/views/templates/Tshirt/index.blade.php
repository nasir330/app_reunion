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
                            <h1 class="m-0">T-shirt List</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">T-shirt</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

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
                                <div class="card-body">
                                <form method="POST" action="{{route('tshirt-submit')}}">
                                        @csrf
                                        <div class="input-group">
                                            <select class="col-md-3 form-control mr-1" name="tShirt_size" id="tShirt_size">
                                                <option value="Small">Select T-Shirt Size</option>
                                                <option value="S-Small">S-Small</option>
                                                <option value="M-Medium">M-Medium</option>
                                                <option value="L-Large">L-Large</option>
                                                <option value="XL-Extra Large">XL-Extra Large</option>
                                            </select>  
                                            <input class="col-md-3 form-control ml-1" type="text" id="rate"
                                                name="rate" :value="old('rate')" required
                                                autofocus autocomplete="rate"
                                                placeholder="Enter rate">
                                               
                                                <button type="submit" class="btn btn-primary col-md-2 form-control ml-1">Submit</button>
                                                                                    
                                        </div>                                      

                                        <div class="row">
                                           
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">T-shirt List</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>T-shirt Size</th>
                                                <th>Price</th>
                                                <th style="text-align: center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($data as $key=> $item)                                      
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$item->tShirt_size}}</td>
                                                <td>{{$item->rate}}</td>
                                                <td class="text-center">
                                                  <a href="{{route('tshirt-edit',['id'=>$item->id])}}">  <button class="btn btn-info form-control">Edit</button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot class="text-center">
                                            <tr>
                                                <td>SL</td>
                                                <td>T-shirt Size</td>
                                                <td>Price</td>
                                                <td>Action</td>
                                            </tr>
                                        </tfoot>
                                    </table>
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