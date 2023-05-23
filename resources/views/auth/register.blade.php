@extends('layouts.app')

@section('content')
    {{-- <div class="login-box">
    <h2>Login</h2>
    <form>
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
  </div> --}}

    <div class="login-box">

        <h2>{{ __('Register') }}</h2>

        <form class="" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="user-box">
                <input id="name" type="text" class="@error('name')  border-red-500 @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror

                <label for="name" class="">
                    {{ __('Name') }}:
                </label>
            </div>

            <div class="user-box">
                <input id="email" type="email" class="@error('email') border-red-500 @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror

                <label for="email" class="">
                    {{ __('E-Mail Address') }}:
                </label>
            </div>

            <div class="user-box">
                <input id="password" type="password" class="@error('password') border-red-500 @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror

                <label for="password" class="">
                    {{ __('Password') }}:
                </label>
            </div>

            <div class="user-box">
                <input id="password-confirm" type="password" class="form-input w-full" name="password_confirmation" required
                    autocomplete="new-password">

                    <label for="password-confirm" class="">
                        {{ __('Confirm Password') }}:
                    </label>
            </div>

            <div class="flex flex-wrap">
                <button type="submit"
                    class="">
                    {{ __('Register') }}
                </button>

                <p class="text-white w-full text-xs text-center mt-3 -mb-4">
                    {{ __('Already have an account?') }}
                    <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </p>
            </div>
        </form>

    </div>
@endsection
