@extends('layouts.app')

@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100%;">
    <div class="card card-auth shadow-sm border-0">
        <div class="card-header text-center card-header-auth">
            {{ __('Reset Password') }}
        </div>

        <div class="card-body text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="row mb-3 align-items-center">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="col-md-8 d-flex">
                        <div class="input-group" style="max-width: 300px; width: 100%;">
                            <span class="input-group-text"></span>
                            <input id="email" type="email" placeholder="usuario@unab.edu.co"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>
                    @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-orange px-4">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

