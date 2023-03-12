@extends('layouts.app-login')

@section('content')
     <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 mt-5">
                    <div class="card shadow-lg border-0 rounded-md">
                        <div class="card-header"><h4 class="text-center">Login</h4></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('email') is-invalid @enderror"
                                           id="email"
                                           type="email"
                                           name="email"
                                           value="{{ old('email') }}"
                                           placeholder="name@example.com" />
                                    <label for="email">{{ __('Email Address') }}</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('password') is-invalid @enderror"
                                           id="password"
                                           type="password"
                                           name="password"
                                           placeholder="Password"
                                           autocomplete="current-password" />
                                    <label for="password">{{ __('Password') }}</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input"
                                           id="remember"
                                           name="remember"
                                           type="checkbox"
                                            {{ old('remember') ? 'checked' : '' }} />
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
