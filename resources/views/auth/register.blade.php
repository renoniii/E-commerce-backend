@extends('layouts.app')

@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 100%;">
    <div class="text-center mb-4">
        <img src="{{ asset('images/logoheaderorange.png') }}" alt="UNAB Logo" style="height: 80px;">
        <h4 class="mt-3">{{ __('Sistema de Gestión Universitaria') }}</h4>
        <hr style="width: 60px; border-top: 2px solid #f29f05; margin: 0 auto;">
    </div>

    <div class="card shadow-sm border-0 card-auth">
        <div class="card-header text-center card-header-auth">
            {{ __('Register') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3 align-items-center">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    <div class="col-md-8 d-flex">
                        <div class="input-group" style="max-width: 300px; width: 100%;">
                            <span class="input-group-text"></span>
                            <input id="name" type="text" placeholder="Nombre completo"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                        @error('name')
                            <div class="invalid-feedback d-block" style="max-width: 300px;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            
                <div class="row mb-3 align-items-center">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="col-md-8 d-flex">
                        <div class="input-group" style="max-width: 300px; width: 100%;">
                            <span class="input-group-text"></span>
                            <input id="email" type="email" placeholder="usuario@unab.edu.co"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        @error('email')
                            <div class="invalid-feedback d-block" style="max-width: 400px;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            
                <div class="row mb-3 align-items-center">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <div class="col-md-8 d-flex">
                        <div class="input-group" style="max-width: 300px; width: 100%;">
                            <span class="input-group-text"></span>
                            <input id="password" type="password" placeholder="••••••••"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="new-password">
                        </div>
                        @error('password')
                            <div class="invalid-feedback d-block" style="max-width: 400px;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            
                <div class="row mb-4 align-items-center">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                    <div class="col-md-8 d-flex">
                        <div class="input-group" style="max-width: 300px; width: 100%;">
                            <span class="input-group-text"></span>
                            <input id="password-confirm" type="password" placeholder="Repite la contraseña"
                                   class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-orange px-4">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
