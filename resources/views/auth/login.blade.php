@extends('layouts.admin')


@section('theme_js')
    <script type="text/javascript"
            src="{{ asset('themes/pmt_default/js/plugins/forms/styling/uniform.min.js') }}"></script>
@endsection

@section('content')

    <div class="page-container">
        <div class="page-content">
            <div class="content-wrapper">

                <div class="content">
                    @include('shared.admin.alert')
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form method="POST" action="{{  route('login')  }}" class="form-validate">
                                @csrf
                                <div class="panel panel-body login-form">
                                    <div class="text-center">
                                        <img src="{{ url('images/logo.png') }}" alt="logo" style="width: 250px">
                                        <h5 class="content-group">Login to your account
                                            <small class="display-block">Your credentials</small>
                                        </h5>
                                    </div>
                                    <div class="form-group form-group-material has-feedback has-feedback-left">
                                        <label class="control-label">Email</label>
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}"
                                               placeholder="{{ __('Email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert"></span>
                                        @endif
                                        <div class="form-control-feedback">
                                            <i class="icon-user text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-material has-feedback has-feedback-left">
                                        <label class="control-label">Password</label>
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required placeholder="{{ __('Password') }}">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert"></span>
                                        @endif
                                        <div class="form-control-feedback">
                                            <i class="icon-lock2 text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="form-group login-options">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="checkbox-inline">
                                                    <input class="form-check-input styled" type="checkbox"
                                                           name="remember"
                                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    Remember
                                                </label>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                @if (Route::has('admin.password.reset'))
                                                    <a href="{{ route('admin.password.request') }}">
                                                        {{ __('Forgot password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}
                                            <i class="icon-arrow-right14 position-right"></i>
                                        </button>
                                    </div>
                                    {{--                                    <div class="content-divider text-muted form-group">--}}
                                    {{--                                        <span>Don't have an account?</span>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <a href="{{ route('register') }}" class="btn btn-default btn-block content-group">Sign--}}
                                    {{--                                        up</a>--}}
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        @include('shared.admin.footer')
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom_js')

    <script type="text/javascript">
        $(function () {

            // Style checkboxes and radios
            $('.styled').uniform();

        });
    </script>
@endsection

