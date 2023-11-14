@extends('layouts.backend.main')
@pushOnce('page-css')
    <link rel="stylesheet" href="sneat/vendor/css/pages/page-auth.css" />
@endPushOnce
@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                    </span>
                    <span class="app-brand-text demo text-body fw-bolder">{{ config('app.name') }}</span>
                </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Register here 🚀</h4>
    
            <form id="formAuthentication" class="mb-3" action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">name</label>
                    <input type="text" class="form-control" id="username" name="name" placeholder="Enter your username"
                        autofocus />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                </div>
                <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password" />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                </div>
    
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                        <label class="form-check-label" for="terms-conditions">
                            I agree to
                            <a href="javascript:void(0);">privacy policy & terms</a>
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary d-grid w-100">Register</button>
            </form>
    
            <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('login') }}">
                    <span>Login instead</span>
                </a>
            </p>
        </div>
    </div>
@endsection