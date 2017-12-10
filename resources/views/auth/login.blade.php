@extends('layouts.app')

@section('content')
<section class="height-100 imagebg text-center" data-overlay="4">
    <div class="background-image-holder"><img alt="background" src="img/inner-6.jpg"></div>
    <div class="container pos-vertical-center">
        <div class="row">
            <div class="col-sm-7 col-md-5">
                <h2>Login to continue</h2>
                <p class="lead"> Welcome back, sign in with your existing Stack account credentials </p>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12"> <input placeholder="Email" type="text" name="email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif 
                        </div>
                        <div class="col-sm-12"> <input placeholder="Password" type="password" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif</div>
                        <div class="col-sm-12"> <button class="btn btn--primary type--uppercase" type="submit">Login</button> </div>
                    </div>
                </form> <span class="type--fine-print block">Dont have an account yet? <a href="{{ route('register') }}">Create account</a></span> <span class="type--fine-print block">Forgot your username or password? <a href="{{ route('password.request') }}">Recover account</a></span> </div>
        </div>
    </div>
</section>
@endsection
