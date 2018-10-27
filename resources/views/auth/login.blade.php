<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet/less" type="text/css" href="styles.less" />
</head>
<body>

<div id="login-form" class="app"></div>


<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sass.js/0.10.11/sass.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/redux/4.0.1/redux.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>

<script type="text/babel" src="app.jsx"></script>
</body>
</html>


{{--@section('content')--}}

    {{--<div class="card-header">{{ __('Login') }}</div>--}}

    {{--<form method="POST" action="{{ route('login') }}">--}}
        {{--@csrf--}}

        {{--<label for="email">{{ __('E-Mail Address') }}</label>--}}


        {{--<input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"--}}
               {{--value="{{ old('email') }}" required autofocus>--}}

        {{--@if ($errors->has('email'))--}}

            {{--<strong>{{ $errors->first('email') }}</strong>--}}

        {{--@endif--}}

        {{--<label for="password">{{ __('Password') }}</label>--}}


        {{--<input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
               {{--name="password" required>--}}

        {{--@if ($errors->has('password'))--}}
            {{--<strong>{{ $errors->first('password') }}</strong>--}}
        {{--@endif--}}


        {{--<input type="checkbox" name="remember"--}}
               {{--id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

        {{--<label for="remember">--}}
        {{--{{ __('Remember Me') }}--}}
        {{--</label>--}}


        {{--<button type="submit">--}}
            {{--{{ __('Login') }}--}}
        {{--</button>--}}

        {{--<a href="{{ route('password.request') }}">--}}
            {{--{{ __('Forgot Your Password?') }}--}}
        {{--</a>--}}

    {{--</form>--}}

{{--@endsection--}}
