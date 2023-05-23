@extends('layouts.app')

{{-- @section('content')
<div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
    @csrf
      <div class="user-box">
        <input type="text" name="" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="" required="">
        <label>Password</label>
      </div>
      <a href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Submit
      </a>
    </form>
  </div>
@endsection --}}

@section('content')
    <div class="login-box text-white">
        <h2>{{ __('Login') }}</h2>

        <form class="" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="user-box">
                <input id="email" type="email" class="@error('email') border-red-500 @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror
                <label class="">
                    {{ __('E-Mail Address') }}:
                </label>
            </div>

            <div class="user-box">
                <input id="password" type="password" class="@error('password') border-red-500 @enderror"
                    name="password" required>

                @error('password')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror
                <label for="password" class="">
                    {{ __('Password') }}:
                </label>
            </div>

            <div class="flex">
                <label class="inline-flex items-center text-sm" for="remember">
                    <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                        {{ old('remember') ? 'checked' : '' }}>
                    <span class="ml-2">{{ __('Remember Me') }}</span>
                </label>
            </div>

            <div class="flex flex-wrap items-center">
                <button type="submit" class="">
                    </a>{{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                @if (Route::has('register'))
                    <p class="w-full text-xs text-center mt-8 -mb-4">
                        {{ __("Don't have an account?") }}
                        <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    </p>
                @endif
            </div>
        </form>

    </div>
@endsection
