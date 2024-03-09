<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.s7template.com/tf/bankapp/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Feb 2024 06:10:02 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Econet | Econet Group | Econet Wireless |Inspired To Change Your World</title>

    <!-- Stylesheet File -->
    <link rel="stylesheet" href="{{asset('mobile/assets/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('mobile/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('mobile/assets/css/responsive.css')}}">
</head>

<body>

    <!-- page-title stary -->
    <div class="page-title">
        <div class="container">
            <a class="float-left" href="{{url('/')}}">Home</a>
            {{-- <span class="float-right">Sign In</span> --}}
            <a class="float-right" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </div>
    <div class="ba-page-name text-center mg-bottom-40">
        <h3><img style="max-width:150px;" src="{{asset('mobile/assets/img/logo1.png')}}" alt="logo"></h3>
    </div>
    <!-- page-title end -->

    <!-- singin-area start -->
    <div class="signin-area">
        <div class="container">

            <form class="contact-form-inner" method="POST" action="{{ route('login') }}">
                @csrf

                <label class="single-input-wrap">
                    <span>User name or email address*</span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </label>
                <label class="single-input-wrap">
                    <span>Password*</span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <div class="single-checkbox-wrap">
                    <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox"><span>{{ __('Remember Me') }}</span>
                </div>

                <button type="submit" class="btn btn-purple">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="forgot-btn" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
        </div>
    </div>
    <!-- singin-area End -->




    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- All Js File here -->
    <script src="{{asset('mobile/assets/js/vendor.js')}}"></script>
    <script src="{{asset('mobile/assets/js/main.js')}}"></script>

</body>


<!-- Mirrored from www.s7template.com/tf/bankapp/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Feb 2024 06:10:02 GMT -->
</html>
