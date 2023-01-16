<x-header />

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
        <h4 class="text-bold text-info"> Re-Union Member Registration </h4>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <div class="text-cener text-danger">
                    <x-jet-validation-errors />
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" id="name" name="name" :value="old('name')" required
                            autofocus autocomplete="name" placeholder="Enter full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="email" id="email" name="email" :value="old('email')" required
                            autofocus autocomplete="email" placeholder="Enter email address">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="number" id="phone" name="phone" :value="old('phone')" required
                            autofocus autocomplete="phone" placeholder="Enter phone number">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="password" id="password" name="password" required
                            placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        @error('password_confirmation')
                        <span class="invalid-feedack text-danger" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                        <input type="password" class="form-control" id="password_confirmation" type="password"
                            name="password_confirmation" required placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="{{route('main')}}" class="text-center">I already have a membership</a>
            </div>
        </div>
        <!-- /.login-box -->
        <x-footer />