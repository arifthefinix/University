<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/back_end') }}/assets/img/favicon.png">
    <title>Student || Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/back_end') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/back_end') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/back_end') }}/assets/css/style.css">

</head>

<body>
    <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title">{{ __('Student Registration Form') }}</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="#"><img src="{{ asset('/back_end') }}/assets/img/logo2.png" alt="Preadmin"></a>
                        </div>
                        <form method="POST" action="{{route('studentregister')}}">
                          @csrf
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('E-mail Address') }}</label>
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('Phone Number') }}</label>
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('SSC Year') }}</label>
                                <input id="ssc_year" type="text" class="form-control{{ $errors->has('ssc_year') ? ' is-invalid' : '' }}" name="ssc_year" value="{{ old('ssc_year') }}" required autofocus>
                                @if ($errors->has('ssc_year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ssc_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('SSC GPA') }}</label>
                                <input id="ssc_gpa" type="text" class="form-control{{ $errors->has('ssc_gpa') ? ' is-invalid' : '' }}" name="ssc_gpa" value="{{ old('ssc_gpa') }}" required autofocus>
                                @if ($errors->has('ssc_gpa'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ssc_gpa') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('HSC Year') }}</label>
                                <input id="hsc_year" type="text" class="form-control{{ $errors->has('hsc_year') ? ' is-invalid' : '' }}" name="hsc_year" value="{{ old('hsc_year') }}" required autofocus>
                                @if ($errors->has('hsc_year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ssc_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('HSC GPA') }}</label>
                                <input id="hsc_gpa" type="text" class="form-control{{ $errors->has('hsc_gpa') ? ' is-invalid' : '' }}" name="hsc_gpa" value="{{ old('hsc_gpa') }}" required autofocus>
                                @if ($errors->has('hsc_gpa'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hsc_gpa') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('Select Group') }}</label>
                                <select id="group" class="form-control{{ $errors->has('group') ? ' is-invalid' : '' }}" name="group" value="{{ old('group') }}" required autofocus>
                                  <option value="">Select One</option>
                                  <option value="Science">Science</option>
                                  <option value="Commerce">Commerce</option>
                                  <option value="arts">Arts</option>
                                </select>
                                @if ($errors->has('group'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('group') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('Address') }}</label>
                                <textarea id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" required autofocus>{{ old('address') }}</textarea>
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">{{ __('Conform Password') }}</label>
                                <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus>
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-block account-btn" type="submit">{{ __('Register') }}</button>
                            </div>
                            <div class="text-center">
                                <a href="{{route('login')}}">Already have an account?</a>
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
