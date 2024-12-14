<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Admin Dashboard</title>
<link rel="shortcut icon" href="{{ asset('/papsystem/assets/img/paplogo.jpg') }}">
<link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
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
                    <img class="img-fluid" src="{{ 'papsystem/assets/img/login.png' }}" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Sign Up</h1>
                        <p class="account-subtitle">Enter details to create your account</p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email <span class="login-danger">*</span></label>

                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                <span class="profile-views"><i class="fas fa-envelope"></i></span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password <span class="login-danger">*</span></label>

                                <input id="password" type="password"
                                    class="form-control pass-input @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">
                                <span class="profile-views feather-eye toggle-password"></span>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">Confirm password <span
                                        class="login-danger">*</span></label>

                                <input id="password-confirm" type="password" class="form-control pass-confirm"
                                    name="password_confirmation" required autocomplete="new-password">
                                <span class="profile-views feather-eye reg-toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <label for="name">Name <span class="login-danger">*</span></label>

                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="profile-views"><i class="fas fa-user-circle"></i></span>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Address <span class="login-danger">*</span></label>

                                <input id="address" type="address"
                                    class="form-control @error('address') is-invalid @enderror" name="address" required
                                    value="{{ old('address') }}" autocomplete="new-address" autofocus>
                                <span class="profile-views"><i class="fas fa-map-marker-alt"></i></span>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile <span class="login-danger">*</span></label>

                                <input id="mobile" type="number"
                                    class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                    mobile="mobile" value="{{ old('mobile') }}" required autocomplete="mobile"
                                    autofocus>
                                <span class="profile-views"><i class="fa fa-phone" aria-hidden="true"></i></span>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth<span class="login-danger">*</span></label>

                                <input id="date_of_birth" type="date"
                                    class="form-control @error('date_of_birth') is-invalid @enderror"
                                    name="date_of_birth" date_of_birth="date_of_birth"
                                    value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth"
                                    autofocus>
                                {{-- <span class="profile-views"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span> --}}

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class=" dont-have">Already Registered? <a href="login">Login</a></div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
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
