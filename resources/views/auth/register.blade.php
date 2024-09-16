@extends('layouts.app')
@section('title')
    Sign up
@endsection

@section('content')

    <div class="d-flex min-vh-100 justify-content-center align-items-center">
        <div class="container">
            <div class="mx-auto text-center" style="max-width: 400px;">

                <h2 class="mb-4 h4 fw-bold">Sign in to your account</h2>
            </div>

            <div class="mx-auto" style="max-width: 550px;">
                <form class="mb-3" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-center mb-3">
                        <div class="me-2">

                            <input type="radio" class="btn-check @error('role') is-invalid @enderror" name="role"
                                   id="success-outlined-1" autocomplete="off" checked value="candidate">
                            <label class="btn btn-outline-success" for="success-outlined-1">Candidate</label>

                        </div>
                        <div>
                            <input type="radio" class="btn-check @error('role') is-invalid @enderror" name="role"
                                   id="success-outlined-2" autocomplete="off" checked value="employer">
                            <label class="btn btn-outline-success" for="success-outlined-2">Employer</label>
                        </div>
                        @error('role')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    {{--            --------}}


                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" name="name" type="text" autocomplete="name"
                               class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Phone Number</label>
                        <input id="phone" name="phone" type="text" autocomplete="phone"
                               class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email"
                               class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <input id="password" name="password" type="password" autocomplete="current-password"
                               class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="password-confirm" class="form-label">Confirm Password</label>
                        </div>
                        <input id="password-confirm" name="password_confirmation" type="password"
                               autocomplete="current-password"
                               class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input id="avatar" name="avatar" type="file" autocomplete=""
                               class="form-control @error('avatar') is-invalid @enderror">
                        @error('avatar')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary w-100">Sign up</button>
                    </div>
                </form>

                <p class="text-center text-muted mt-4">
                    You a member?
                    <a href="{{ route('register') }}" class="text-decoration-none">Login</a>
                </p>
            </div>
        </div>
    </div>

@endsection
