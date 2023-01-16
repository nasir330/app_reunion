<x-header />

<body>
    <div class="row">
        <div class="col-lg-12 p-2">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-lg-12 text-center p-2 bg-info">
                            <h2>Hotel Somnath Atithigruh</h2>
                        </div>
                        @if(session()->has('success'))
                        <div class="col-md-4 offset-md-4 text-center alert-success p-2 mt-1">
                            <h5> {{session('success')}}</h5>
                        </div>
                        @endif
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section>
                <div class="card">
                    <div class="card-body">
                        {{$data}}
                        <!-- form start -->
                        <form action="{{route('invoice-create')}}" method="post">
                            @csrf
                            <!--Customer data section start-->
                            <div class="row">
                                <table style="background-color:rgb(183,155,225, 0.1);" class="table table-bordered">
                                    <tbody>
                                        @foreach($data as $date)
                                     
                                        
                                        <tr>
                                            <!--Left side data-->
                                            <th style="width:50%;">
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <!--Invoice no and date-->
                                                    <tr>
                                                        <td>Invoice No :</td>
                                                        <td>
                                                            <input type="text" class="form-control" id="invoice_no"
                                                                name="invoice_no" value="{{$date->invoice_no}}">
                                                        </td>
                                                        <td colspan="2">
                                                            <div class="input-group date" id="reservationdate"
                                                                data-target-input="nearest">
                                                                <input type="text" name="reservationdate"
                                                                    class="form-control datetimepicker-input"
                                                                    data-target="#reservationdate"
                                                                    placeholder="Select Date"
                                                                    value="{{$date->reservationdate}}" />
                                                                <div class="input-group-append"
                                                                    data-target="#reservationdate"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--Check-in and Check-out date-->
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="input-group date" id="check_in_date"
                                                                data-target-input="nearest">
                                                                <input type="text" name="check_in_date"
                                                                    id="check_in_date"
                                                                    class="form-control datetimepicker-input"
                                                                    data-target="#check_in_date"
                                                                    placeholder="Check-in Date"
                                                                    value="{{$date->check_in_date}}" />
                                                                <div class="input-group-append"
                                                                    data-target="#check_in_date"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td colspan="2">
                                                            <div class="input-group date" id="check_out_date"
                                                                data-target-input="nearest">
                                                                <input type="text" name="check_out_date"
                                                                    class="form-control datetimepicker-input"
                                                                    data-target="#check_out_date"
                                                                    placeholder="Check-out Date"
                                                                    value="{{$date->check_out_date}}" />
                                                                <div class="input-group-append"
                                                                    data-target="#check_out_date"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--total date count-->

                                                    <tr>
                                                        <td>Days</td>
                                                        <td>
                                                            <input type="hidden" id="no_of_days" name="no_of_days"
                                                                value="{{$date->check_out_date}}">
                                                            <span>{{$noOfDays}}</span>
                                                        </td>
                                                        <td colspan="2">
                                                            <input type="hidden" id="income_total" name="income_total">
                                                            Total of rooms
                                                        </td>
                                                    </tr>

                                                </table>
                                            </th>

                                            <th></th>
                                            <!--Right side data-->
                                            <th style="width:50%;">
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <!--GSTN data-->
                                                    <tr>
                                                        <td style="width:35%;">Hotel GSTN Number :</td>
                                                        <td>GSTN Number</td>
                                                    </tr>
                                                    <!--Customer Name -->
                                                    <tr>
                                                        <td>Customer Name</td>
                                                        <td>
                                                            <input type="text" class="form-control" id="customer_name"
                                                                name="customer_name">
                                                        </td>
                                                    </tr>
                                                    <!--Customer Name -->
                                                    <tr>
                                                        <td>Contact No.</td>
                                                        <td>
                                                            <input type="text" class="form-control" id="customer_phone"
                                                                name="customer_phone">
                                                        </td>
                                                    </tr>
                                                    <!--Customer GSTN data -->
                                                    <tr>
                                                        <td>Customer GSTN Number</td>
                                                        <td>GSTN Number</td>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!--Customer data section end-->

                            <div class="row">
                                <button class="col-md-4 btn btn-success toastrDefaultSuccess">Save</button>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                    <!-- /.card-body -->
                </div>
            </section>
        </div>
    </div>

    <x-footer />