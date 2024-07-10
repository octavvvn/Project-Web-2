@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

    body {
        background-color: #f5f5dc; /* Warna krem */
        font-family: 'Roboto', sans-serif;
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 90vh;
    }

    .login-card {
        display: flex;
        width: 800px;
        height: 470px;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .login-image {
        flex: 1;
        background-image: url('https://i.pinimg.com/564x/04/71/64/0471640d445c8308cabed301d47e2cf6.jpg');
        background-size: cover;
        background-position: center;
    }

    .login-form {
        flex: 1;
        padding: 20px;
    }

    .login-form h1 {
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
        font-weight: 700;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        border-radius: 25px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
    }

    .form-check-input {
        margin-top: 0.3rem;
    }

    .form-check-label {
        margin-left: 1.25rem;
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        font-weight: 700;
        border-radius: 25px;
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-link {
        display: block;
        text-align: center;
        margin-top: 10px;
        font-size: 14px;
    }

    .social-login {
        text-align: center;
        margin-top: 20px;
    }

    .social-login p {
        margin: 10px 0;
    }

    .social-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .social-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid #ccc;
        background-color: #fff;
        cursor: pointer;
    }

    .social-button img {
        width: 20px;
        height: 20px;
    }
</style>

<div class="container login-container">
    <div class="login-card">
        <div class="login-image"></div>
        <div class="login-form">
            <h1>{{ __('Login') }}</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
            <div class="social-login">
                <p>or login with</p>
                <div class="social-buttons">
                    <div class="social-button">
                        <img src="https://i.pinimg.com/564x/45/20/dd/4520ddfc56208707045c56232e946f7f.jpg" alt="Google">
                    </div>
                    <div class="social-button">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
