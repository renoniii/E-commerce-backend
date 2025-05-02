@extends('layouts.app')

@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100%;">
    <div class="card card-auth shadow-sm border-0">
        <div class="card-header text-center card-header-auth">
            {{ __('Dashboard') }}
        </div>

        <div class="card-body text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>
</div>
@endsection