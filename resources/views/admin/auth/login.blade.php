@extends('admin.layout.auth')

@section('content')
    <div class="container">
        <div class="row center-div">
            <form autocomplete="off" class="login" role="form" method="POST" action="{{ url('/admin/login') }}">
                {{ csrf_field() }}
                <h1 class="login-title">Simple Login</h1>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" placeholder="E-Mail Address" class="login-input form-control" name="email" value="{{
                     old('email') }}"
                           autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block validate-error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" placeholder="Password" class="login-input form-control" name="password" value="{{ old
                    ('password') }}"
                           autofocus>

                    @if ($errors->has('password'))
                        <span class="help-block validate-error">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="remember">
                        <input id="remember" class="checkbox" name="remember" type="checkbox" value="">
                        <span>Remember me</span>
                    </label>
                </div>
                <input type="submit" value="Login" class="login-button">
            </form>

        </div>
    </div>
@endsection
