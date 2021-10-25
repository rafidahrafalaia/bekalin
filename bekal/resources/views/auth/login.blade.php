@extends('layouts.app')

@section('content')

<div style="background-image: url('glorious/images/bg.jpg'); margin-top: -20px; background-size: cover">
    <div class="center-container" style="margin-top: -20px;">
        <div class="banner wthree">
            <div class="container">
                <div class="x">
                    <div class="banner_top">
                        <div class="col-md-6 col-sm-4 col-xs-4 logo">
                            <h1><a href="index.html">Bekal.in<span>Surabaya Homemade Food</span></a></h1>
                        </div>
                    </div>
                    <div class="col-md-5 callbacks_container form-w3l-agil3">
                        <div class="modal-body login-page">
                            <div class="login-top sign-top">
                                <div class="agileits-login" style="background-color: #ffffff">
                                    <h5 style="color:#000000; font-family: Times;">Login</h5>
                                    <form class="form-horizontal" method="POST" action="{{ url('login') }}">
                                    {{ csrf_field() }}
                                        <fieldset>
                                            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            <input id="password" type="password" name="password" placeholder="Password"required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                            <div class="wthree-text"> 
                                                <ul> 
                                                    <li>
                                                        <label class="anim">
                                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <span> Remember me</span> 
                                                        </label> 
                                                    </li>
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        Forgot Your Password?
                                                    </a>
                                                </ul>
                                                <!-- <div class="clearfix"> </div> -->
                                            </div>
                                            <div class="w3ls-submit"> 
                                                <input type="submit" value="LOGIN">     
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
