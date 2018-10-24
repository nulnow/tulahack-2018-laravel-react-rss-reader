@extends('layouts.app')

@section('content')

    <div class="card-header">{{ __('Login') }}</div>

    <form method="POST" action="{{ route('login') }}">
        {{--@csrf--}}

        <label for="email">{{ __('E-Mail Address') }}</label>


        <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
               value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))

            <strong>{{ $errors->first('email') }}</strong>

        @endif

        <label for="password">{{ __('Password') }}</label>


        <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
               name="password" required>

        @if ($errors->has('password'))
            <strong>{{ $errors->first('password') }}</strong>
        @endif


        <input type="checkbox" name="remember"
               id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label for="remember">
        {{ __('Remember Me') }}
        </label>


        <button type="submit">
            {{ __('Login') }}
        </button>

        {{--<a href="{{ route('password.request') }}">--}}
            {{--{{ __('Forgot Your Password?') }}--}}
        {{--</a>--}}

    </form>

@endsection
