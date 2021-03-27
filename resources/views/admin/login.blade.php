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
            <form id="login-form" class="login-form" action="{{ route('loginprocess') }}">
                @csrf
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                <div id="alert_message"></div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required autocomplete="off">
                </div>
                <div class="form-group">
                    <div class="utility">
                        <div class="animated-checkbox">
                            <label>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="label-text">{{ __('Remember Me') }}    </span>
                            </label>
                        </div>
                        <p class="semibold-text mb-2"><a href="{{ route('adminregistration') }}">create new account</a></p>
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                </div>
            </form>
            <form class="forget-form" action="index.html">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
                <div class="form-group">
                    <label class="control-label">EMAIL</label>
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('pageScript')
    <script src="{{ asset('public/assets/admin/js/loginscriptadmin.js') }}"></script>
@endsection