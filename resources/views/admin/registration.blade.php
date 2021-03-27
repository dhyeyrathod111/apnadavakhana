@extends('layouts.adminlayout')

@section('content')
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            {{-- <h1>Apna Dawakhana</h1> --}}
        </div>
        <div class="login-box">
            <form method="POST" id="registration-form" class="login-form" action="{{ route('registrationprocess') }}">
                @csrf
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                <div id="alert_message"></div>
                <div class="form-group">
                    <label class="control-label">name</label>
                    <input id="name" type="text" class="form-control" name="name" required autocomplete="off" autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="control-label">Confirm password</label>
                    <input type="password" class="form-control" name="confirm_password" required autocomplete="off">
                </div>
                <div class="form-group">
                    <div class="utility">
                        <div class="animated-checkbox">
                            <label>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="label-text">{{ __('Remember Me') }}    </span>
                            </label>
                        </div>
                        <p class="semibold-text mb-2"><a href="{{ route('adminlogin') }}">I have an account</a></p>
                    </div>
                </div>
                
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('pageScript')
    <script src="{{ asset('public/assets/admin/js/registratio.js') }}"></script>
@endsection