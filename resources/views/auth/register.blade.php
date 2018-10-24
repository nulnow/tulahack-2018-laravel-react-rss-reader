@extends('layouts.app')

@section('content')
    {{ __('Register') }}

    <form method="POST" action="{{ route('register') }}">
        {{--@csrf--}}

        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
               value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <strong>{{ $errors->first('name') }}</strong>
        @endif

        <label for="email">{{ __('E-Mail Address') }}</label>

        <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
               value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <strong>{{ $errors->first('email') }}</strong>
        @endif

        <label for="password">{{ __('Password') }}</label>

        <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
               name="password" required>

        @if ($errors->has('password'))
            <strong>{{ $errors->first('password') }}</strong>
        @endif


        <label for="password-confirm">{{ __('Confirm Password') }}</label>


        <input id="password-confirm" type="password" name="password_confirmation" required>


        <button type="submit">
            {{ __('Register') }}
        </button>

    </form>

@endsection
