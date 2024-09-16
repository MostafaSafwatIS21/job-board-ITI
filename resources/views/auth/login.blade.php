
@extends('layouts.app')
@section('title') Sign in @endsection

@section('content')

<div class="d-flex min-vh-100 justify-content-center align-items-center">
<div class="container px-4 py-5">
    <div class="mx-auto text-center" style="max-width: 400px;">
        <img class="mx-auto mb-4" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" height="40">
        <h2 class="mb-4 h4 fw-bold">Sign in to your account</h2>
    </div>

    <div class="mx-auto" style="max-width: 550px;">
        <form class="mb-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input id="email" name="email" type="email" autocomplete="email"  class="form-control @error('email') is-invalid @enderror">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="password" class="form-label">Password</label>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="small text-decoration-none text-indigo-600">Forgot password?</a>
                    @endif
                </div>
                <input id="password" name="password" type="password" autocomplete="current-password"  class="form-control @error('password') is-invalid @enderror">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div>
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
        </form>

        <p class="text-center text-muted mt-4">
            Not a member?
            <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
        </p>
    </div>
</div>
</div>
@endsection
