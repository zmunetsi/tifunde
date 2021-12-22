@extends('layouts.app')

@section('content')
<section id="login-form"  class="px-4 flex justify-content-center">
    <div class="grid pt-8 justify-content-center align-items-center w-full">
        <div class="col-12 md:col-6">
        <div class="card p-fluid">
        <h5>{{ __('Login') }}</h5>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="field">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="p-inputtext p-component @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="field">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="p-inputtext p-component @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="field">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
            </div>
            <div class="grid">
                <div class="col-12 md:col-6">
                    <button class="p-button p-component p-button-primary">
                        <span class="p-button-label p-c">{{_('Login') }}</span>
                        <span class="p-ink" style="height: 85px; width: 85px; top: -19.1px; left: 15.5px;">
                        </span>
                    </button>
                </div>
                <div class="col-12 md:col-6">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                </div>

            </div>
        </form>
    </div>
        </div>
    </div>

</section>
@endsection
