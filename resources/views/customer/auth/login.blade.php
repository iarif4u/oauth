@extends('customer.layout.auth')
@section('title',"Customer Login")
@section('content')
<div class="container">
    <div class="row center-div">
        <form autocomplete="off" class="login" role="form" method="POST" action="{{ url('/customer/login') }}">
            {{ csrf_field() }}
            <h1 class="login-title">Customer Login</h1>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" placeholder="E-Mail Address" class="login-input form-control" name="email" value="{{
                     old('email') }}"
                           autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block validate-error">
                            <strong>{!!  $errors->first('email')  !!}</strong>
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

@section('script')
    <script>
        $(document).ready(function () {
            if ($(".attempt-error")[0]){
                var remain_sec =parseInt($(".attempt-error").text());

                // Called the function in each second
                var interval = setInterval(function() {
                    $(".attempt-error").text(remain_sec--); // Update the value in paragraph

                    if (remain_sec == 0) {
                        $(".attempt-error").text(0);
                        clearInterval(interval); // If exceeded 100, clear interval
                    }
                }, 1000); // Run for each second
            }
        });

    </script>
@endsection
