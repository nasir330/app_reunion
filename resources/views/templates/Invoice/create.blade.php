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
                        <!-- form start -->
                        <form action="{{route('invoice-submit')}}" method="post">
                            @csrf
                            <!--Customer data section start-->
                            <div class="row">
                                <table style="background-color:rgb(183,155,225, 0.1);" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <!--Left side data-->
                                            <th style="width:50%;">
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <!--Invoice no and date-->
                                                    <tr>
                                                        <td>Invoice No :</td>
                                                        <td>
                                                            <input type="text" class="form-control" id="invoice_no"
                                                                name="invoice_no" value="312201">
                                                        </td>
                                                        <td colspan="2">
                                                            <div class="input-group date" id="reservationdate"
                                                                data-target-input="nearest">
                                                                <input type="text" name="reservationdate"
                                                                    class="form-control datetimepicker-input"
                                                                    data-target="#reservationdate"
                                                                    placeholder="Select Date" />
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
                                                                    placeholder="Check-in Date" />
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
                                                                    placeholder="Check-out Date" />
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
                                                                value="{{'4'}}">
                                                            4
                                                        </td>
                                                        <td colspan="2">
                                                            <input type="hidden" id="income_total" name="income_total"
                                                                value="{{'10000'}}">
                                                            Total of rooms
                                                        </td>
                                                    </tr>
                                                    <!--Room types-->
                                                    <tr>
                                                        <td>Room Type</td>
                                                        <td colspan="3">
                                                            <select name="room_type" class="form-control">
                                                                @foreach ($rooms as $key => $room)
                                                                <option value="{{$room->room_name}}">
                                                                    {{$room->room_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!--Source -->
                                                    <tr>
                                                        <td>Source</td>
                                                        <td colspan="2">
                                                            <select name="bookingSource_name" class="form-control">
                                                                @foreach ($bookingSource as $key => $booking)
                                                                <option value="{{$booking->source_name}}">
                                                                    {{$booking->source_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!--Income-->
                                                    <tr>
                                                        <td>Advance</td>
                                                        <td>
                                                            <select name="incomeSource_name" class="form-control">
                                                                @foreach ($incomeSource as $key => $income)
                                                                <option value="{{$income->income_source_name}}">
                                                                    {{$income->income_source_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>Payment</td>
                                                        <td>
                                                            <input type="text" class="form-control" id="payment"
                                                                name="payment">
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

                                    </tbody>
                                </table>
                            </div>
                            <!--Customer data section end-->
                            <!--Room details and bill section start-->
                            <div class="row">
                                <table style="background-color:rgb(183,155,225, 0.1);" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <tr>
                                                        <th>Room Type</th>
                                                        <th>Total Rooms</th>
                                                        <th>Days</th>
                                                        <th>Rate</th>
                                                        <th>Amount</th>
                                                        <th>GST</th>
                                                        <th>Total</th>
                                                    </tr>
                                                    <tbody>
                                                        @foreach ($rooms as $key => $room)
                                                        <tr>
                                                            <td style="width:20%;">
                                                                <select name="room_name" class="form-control">
                                                                    <option value="{{$room->room_name}}">
                                                                        {{$room->room_name}}</option>
                                                                </select>
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="number_of_room"
                                                                    name="number_of_room" placeholder="Number of rooms">
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="number_of_days"
                                                                    name="number_of_days" placeholder="Number of days">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="room_rate"
                                                                    name="room_rate" value="{{$room->room_rate}}">
                                                                {{$room->room_rate}}
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_rate" name="total_room_rate" value="1000"
                                                                    >
                                                                    <span id="total_room_amount"></span>
                                                                   
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="gst"
                                                                    name="gst">
                                                                    <span id="gst"></span>

                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_amount" name="total_room_amount">

                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </th>
                                        </tr>
                                        <!--Payment calculation start-->
                                        <tr>
                                            <th>
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <tr>
                                                        <th style="width:80%;">
                                                            <input type="hidden" id="amount_in_words"
                                                                name="amount_in_words">
                                                            Amount in words:
                                                        </th>

                                                        <th>
                                                            <div class="row">
                                                                <div style="border-right:0.5px solid lightgray; border-bottom:0.5px solid lightgray; text-align:left;"
                                                                    class="col-6">
                                                                    Room amount
                                                                </div>
                                                                <div style="border-bottom:0.5px solid lightgray; text-align:right;"
                                                                    class="col-6">
                                                                    <input type="hidden" id="room_amount"
                                                                        name="room_amount">
                                                                    14000
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div style="border-right:0.5px solid lightgray; border-bottom:0.5px solid lightgray; text-align:left;"
                                                                    class="col-6">
                                                                    CGST
                                                                </div>
                                                                <div style="border-bottom:0.5px solid lightgray; text-align:right;"
                                                                    class="col-6">
                                                                    <input type="hidden" id="cgst" name="cgst">
                                                                    864
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div style="border-right:0.5px solid lightgray; border-bottom:0.5px solid lightgray; text-align:left;"
                                                                    class="col-6">
                                                                    SGST
                                                                </div>
                                                                <div style="border-bottom:0.5px solid lightgray; text-align:right;"
                                                                    class="col-6">
                                                                    <input type="hidden" id="sgst" name="sgst">
                                                                    864
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div style="border-right:0.5px solid lightgray; border-bottom:0.5px solid lightgray; text-align:left;"
                                                                    class="col-6">
                                                                    Total
                                                                </div>
                                                                <div style="border-bottom:0.5px solid lightgray; text-align:right;"
                                                                    class="col-6">
                                                                    <input type="hidden" id="total" name="total">
                                                                    16128
                                                                </div>
                                                            </div>


                                                        </th>
                                                    </tr>

                                                </table>
                                            </th>
                                        </tr>
                                        <!--Payment calculation end-->
                                    </tbody>
                                </table>

                            </div>
                            <!--Room details and bill section end-->
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