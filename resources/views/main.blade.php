<x-header />

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h4 class="text-bold text-info"> Re-Union Member Login </h4>
        </div>

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo">

                </div>
                <div class="text-cener text-danger">
                    <x-jet-validation-errors />
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" :value="old('email')" class="form-control"
                            placeholder="Email" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" name="password" class="form-control" placeholder="Password"
                            required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember_me" name="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-1">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">I forgot my password</a>
                    @endif

                </p>
            </div>
            <div class="card-footer bg-primary">
            <p class="mb-0">
                <a href="{{route('register')}}" class="text-center text-light">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    <x-footer />