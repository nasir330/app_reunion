<x-header />
@include('templates/nav')
@include('templates/menu')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    @if(session()->has('success'))
                                <h5 id="successMessage" class="col-md-4 offset-md-4 text-center alert-success p-2 mt-1">
                                    {{session('success')}}</h5>
                                @endif
                    </div>
                    @if(empty($profiles->user_id))
                    <div class="row">
                        <!-- profile sections start-->
                        <div class="col-md-4">
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="image text-center">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                        @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ Auth::user()->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                        @endif
                                    </div>

                                    <h3 class="profile-username text-center"> {{ Auth::user()->name }}</h3>

                                    <p class="text-muted text-center"></p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-graduation-cap mr-1"></i> SSC-Batch</strong>
                                            <strong class="float-right"></strong>
                                        </li>
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-phone-alt mr-1"></i> Mobile</strong>
                                            <strong class="float-right">{{Auth::user()->phone}}</strong>
                                        </li>
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                                            <strong class="float-right">{{Auth::user()->email}}</strong>
                                        </li>
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-user-graduate mr-1"></i> Last Degree</strong>
                                            <strong class="float-right"></strong>
                                        </li>
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                                            <strong class="float-right"></strong>
                                        </li>
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-pencil-alt mr-1"></i> Occupation</strong>
                                            <strong class="float-right"></strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- profile sections end-->
                        <!-- info sections start-->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header bg-primary p-2 text-center">
                                    <h4>Submit your profile information</h4>
                                </div><!-- /.card-header -->                                
                                <div class="card-body">
                                    <form method="POST" action="{{ route('profile-info-submit') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                                        <div class="input-group mb-3">
                                            <label for="ssc_batch" class="col-sm-3 col-form-label">SSC-Batch</label>
                                            <input class="form-control" type="text" id="ssc_batch" name="ssc_batch"
                                                :value="old('ssc_batch')" required autofocus autocomplete="ssc_batch"
                                                placeholder="Example: 2006 - 2008">
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="last_degree" class="col-sm-3 col-form-label">Your last
                                                degree</label>
                                            <input class="form-control" type="text" id="last_degree" name="last_degree"
                                                :value="old('last_degree')" required autofocus
                                                autocomplete="last_degree" placeholder="Mention your last degree">
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="occupation" class="col-sm-3 col-form-label">Your
                                                occupation</label>
                                            <input class="form-control" type="text" id="occupation" name="occupation"
                                                :value="old('occupation')" required autofocus autocomplete="occupation"
                                                placeholder="Your occupation">
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="designation" class="col-sm-3 col-form-label">Your
                                                designation</label>
                                            <input class="form-control" type="text" id="designation" name="designation"
                                                :value="old('designation')" required autofocus
                                                autocomplete="designation" placeholder="Your designation">
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="organization" class="col-sm-3 col-form-label">Your
                                                organization</label>
                                            <input class="form-control" type="text" id="organization"
                                                name="organization" :value="old('organization')" required autofocus
                                                autocomplete="organization" placeholder="Your organization">
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="present_address" class="col-sm-3 col-form-label">Your present
                                                address</label>
                                            <input class="form-control" type="text" id="present_address"
                                                name="present_address" :value="old('present_address')" required
                                                autofocus autocomplete="present_address"
                                                placeholder="Your present address">
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="participant_qty" class="col-sm-3 col-form-label">Participant
                                                quantity</label>
                                            <input class="form-control" type="text" id="participant_qty"
                                                name="participant_qty" :value="old('participant_qty')" required
                                                autofocus autocomplete="participant_qty"
                                                placeholder="Enter participant quantity">
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="participant_qty" class="col-sm-3 col-form-label">T-shirt
                                                Size</label>
                                            <select class="col-sm-6 " name="tShirt_size" id="tShirt_size">
                                                <option value="">Select T-Shirt Size</option>
                                                <option value="Short">Short</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Large">Large</option>
                                                <option value="Extra Large">Extra Large</option>
                                            </select>
                                        </div>


                                        <div class="row">

                                            <div class="col-4">
                                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- info sections end-->
                        </div>
                    </div>
                    @else
                    <div class="row">
                        <!-- profile sections start-->
                        <div class="col-md-4">
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="image text-center">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                        @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ Auth::user()->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                        @endif
                                    </div>

                                    <h3 class="profile-username text-center"> {{ Auth::user()->name }}</h3>

                                    <p class="text-muted text-center">{{$profiles->designation}}</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-graduation-cap mr-1"></i> SSC-Batch</strong>
                                            <strong class="float-right">{{$profiles->ssc_batch}}</strong>
                                        </li>
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-phone-alt mr-1"></i> Mobile</strong>
                                            <strong class="float-right">{{Auth::user()->phone}}</strong>
                                        </li>
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                                            <strong class="float-right">{{Auth::user()->email}}</strong>
                                        </li>
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-user-graduate mr-1"></i> Last Degree</strong>
                                            <strong class="float-right">{{$profiles->last_degree}}</strong>
                                        </li>
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                                            <strong class="float-right">{{$profiles->present_address}}</strong>
                                        </li>
                                        <li class="list-group-item">
                                            <strong><i class="fas fa-pencil-alt mr-1"></i> Occupation</strong>
                                            <strong class="float-right">{{$profiles->occupation}}</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- profile sections end-->
                        <!-- info sections start-->
                        <div class="col-md-8">
                        <div class="card">
                                <div class="card-header bg-primary p-2 text-center">
                                    <h4>Profile information</h4>
                                </div><!-- /.card-header -->

                                <div class="card-body">
                                    <div class="row">
                                        <table class="col-md-9 offset-md-1 table table-hover text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>SSC-Batch</td>
                                                    <td>{{$profiles->ssc_batch}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Last Degree</td>
                                                    <td>{{$profiles->last_degree}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Occupation</td>
                                                    <td>{{$profiles->occupation}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Designation</td>
                                                    <td>{{$profiles->designation}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Organization</td>
                                                    <td>{{$profiles->organization}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Present Address</td>
                                                    <td>{{$profiles->present_address}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Participant Quantity</td>
                                                    <td>{{$profiles->participant_qty}}</td>
                                                </tr>
                                                <tr>
                                                    <td>T-shirt size</td>
                                                    <td>{{$profiles->tShirt_size}}</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div><!-- /.card-body -->
                                </div>
                            <!-- info sections end-->
                        </div>
                    </div>
                    @endif
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
    <x-footer />