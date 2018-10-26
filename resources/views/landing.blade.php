<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/landing.css">
    <title>LANDING</title>
</head>
<body>

<div class="navbar">
    <div class="navbar__elem">Login</div>
    <div class="navbar__elem">Registration</div>
</div>
<div class="line"></div>

<div class="jambotron">
    <div class="slogan">
        <h1>RSS Reader</h1>
        <h2>The oldschoolest way to read the news</h2>
    </div>

    <div class="iphone">
        <img src="img/iphone.png" alt="">
    </div>

</div>

<div class="what_is_rss">
    <div class="content">
        <h1>What is RSS reader</h1>
        <p>RSS is a tool that helps you to keep your newslines
            organized and easy to access. It store all
            your favorit news sources and shows all recently published articles </p>
    </div>
</div>

<div class="how_to_use">
    <h1>How to use it</h1>
    <ul>
        <li>step 1 - <span>Register <small>(click here)</small></span></li>
        <li>step 2 - Add your favorite rss channels</li>
        <li>step 3 - You are excellent! Read news</li>
    </ul>
</div>

<form method="POST" action="{{ route('login') }}">
    {{--@csrf--}}

    <label for="log-email">{{ __('E-Mail Address') }}</label>


    <input id="log-email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
           value="{{ old('email') }}" required autofocus>

    @if ($errors->has('email'))

        <strong>{{ $errors->first('email') }}</strong>

    @endif

    <label for="log-password">{{ __('Password') }}</label>


    <input id="log-password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
           name="password" required>

    @if ($errors->has('password'))
        <strong>{{ $errors->first('password') }}</strong>
    @endif


    <input type="checkbox" name="remember"
           id="log-remember" {{ old('remember') ? 'checked' : '' }}>

    <label for="log-remember">
        {{ __('Remember Me') }}
    </label>


    <button type="submit">
        {{ __('Login') }}
    </button>

    {{--<a href="{{ route('password.request') }}">--}}
    {{--{{ __('Forgot Your Password?') }}--}}
    {{--</a>--}}


</form>
<br>
{{ __('Register') }}

<form method="POST" action="{{ route('register') }}">
    {{--@csrf--}}

    <label for="reg-name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

    <input id="reg-name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
           value="{{ old('name') }}" required autofocus>

    @if ($errors->has('name'))
        <strong>{{ $errors->first('name') }}</strong>
    @endif

    <label for="reg-email">{{ __('E-Mail Address') }}</label>

    <input id="reg-email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
           value="{{ old('email') }}" required>

    @if ($errors->has('email'))
        <strong>{{ $errors->first('email') }}</strong>
    @endif

    <label for="reg-password">{{ __('Password') }}</label>

    <input id="reg-password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
           name="password" required>

    @if ($errors->has('password'))
        <strong>{{ $errors->first('password') }}</strong>
    @endif


    <label for="reg-password-confirm">{{ __('Confirm Password') }}</label>


    <input id="reg-password-confirm" type="password" name="password_confirmation" required>


    <button type="submit">
        {{ __('Register') }}
    </button>

</form>

</body>
</html>