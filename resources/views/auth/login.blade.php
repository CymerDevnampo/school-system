<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Admin Dashboard</title>
<link rel="shortcut icon" href="{{ asset('/papsystem/assets/img/paplogo.jpg') }}">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/papsystem/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/papsystem/assets/plugins/feather/feather.css') }}">
<link rel="stylesheet" href="{{ asset('/papsystem/assets/plugins/icons/flags/flags.css') }}">
<link rel="stylesheet" href="{{ asset('/papsystem/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/papsystem/assets/plugins/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('/papsystem/assets/css/style.css') }}">

<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="{{ asset('papsystem/assets/img/login.png') }}" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Welcome to PAP <img src="{{ asset('papsystem/assets/img/paplogo.jpg') }}" width="50"
                                alt=""></h1>
                        <p class="account-subtitle">Need an account? <a href="register">Sign Up</a></p>
                        <h2>Sign in</h2>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email <span class="login-danger">*</span></label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="profile-views"><i class="fas fa-user-circle"></i></span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password <span class="login-danger">*</span></label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror pass-input"
                                    name="password" required autocomplete="current-password">
                                <span class="profile-views feather-eye toggle-password"></span>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="forgotpass">
                                <div class="remember-me">
                                    <label for="remember" class="custom_check mr-2 mb-0 d-inline-flex remember-me">
                                        Remember me
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </form>

                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>

                        <div class="social-login">
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('/papsystem/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('/papsystem/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/papsystem/assets/js/feather.min.js') }}"></script>
<script src="{{ asset('/papsystem/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('/papsystem/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('/papsystem/assets/plugins/apexchart/chart-data.js') }}"></script>
<script src="{{ asset('/papsystem/assets/js/script.js') }}"></script>
