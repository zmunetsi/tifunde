@extends('layouts.app')

@section('content')
<section id="login-form"  class="px-4 flex justify-content-center">
    <div class="grid pt-8 justify-content-center align-items-center w-full">
        <div class="col-12 md:col-6">
        <div class="card p-fluid">
        <h5>{{ __('Sign up') }}</h5>
        <form method="POST" action="{{ route('coach.store') }}">
            @csrf
            <div class="field">
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" class="p-inputtext p-component @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="field">
                <label for="email">Email</label>
                <input id="email" type="email" class="p-inputtext p-component @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="field">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="p-inputtext p-component @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="field">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="p-inputtext p-component" name="password_confirmation" required autocomplete="new-password">

            </div>

            <div class="grid">
                <div class="col-12 md:col-6">
                    <button class="p-button p-component p-button-secondary">
                        <span class="p-button-label p-c">{{ __('Sign up') }}</span>
                        <span class="p-ink" style="height: 85px; width: 85px; top: -19.1px; left: 15.5px;">
                        </span>
                    </button>
                </div>
                <div class="col-12 md:col-6">
                @if (Route::has('login'))
                    Already have an account?
                    <a class="btn btn-link" href="{{ route('login') }}">
                        {{ __('Login') }}
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
