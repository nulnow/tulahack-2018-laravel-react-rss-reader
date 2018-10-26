<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LANDING</title>
</head>
<body>
@guest
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
@else
    {{ Auth::user()->name }}

    <form action="{{ route('logout') }}" method="POST">
        {{--@csrf--}}
        <input type="submit" value="Выйти">
    </form>
@endguest
</body>
</html>