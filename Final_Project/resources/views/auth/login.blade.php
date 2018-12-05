<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/back_end') }}/assets/img/favicon.png">
    <title>Admission Help Desk || Login</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/back_end') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/back_end') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/back_end') }}/assets/css/style.css">
</head>
<body>
    <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title">{{ __('Login') }}</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="#"><img src="{{ asset('/back_end') }}/assets/img/logo2.png" alt="Preadmin"></a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                          @csrf
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('E-Mail Address') }}</label>
                                <input class="form-control floating {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus type="email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control floating{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus text-center">
                              <label class="form-check-label text-center" for="remember">
                                  {{ __('Remember Me') }} &nbsp;&nbsp;&nbsp;
                              </label>
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-block account-btn" type="submit">{{ __('Login') }}</button>
                            </div>
                            <div class="text-center">
                                {{-- <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> --}}
                            </div>
                            <div class="text-center">
                                <a href="{{ route('register') }}"> New user?? Regester Here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/back_end') }}/assets/js/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="{{ asset('/back_end') }}/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('/back_end') }}/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('/back_end') }}/assets/js/app.js"></script>
</body>
</html>
