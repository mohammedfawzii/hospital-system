@extends('layouts.auth')
@section('auth')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="auth-form" action="{{ route('login.post') }}" method="post">
        @csrf
        <!-- .form-group -->
        <div class="form-group">
            <div class="form-label-group">
                <input type="email" name="email" class="form-control placeholder-shown" placeholder="Email" required=""
                    autofocus=""> <label for="inputEmail">Email</label>
            </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
            <div class="form-label-group">
                <input type="password"  name='password'  class="form-control placeholder-shown" placeholder="Password"
                    required=""> <label for="inputPassword">Password</label>
            </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="log in">
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
            <div class="custom-control custom-control-inline custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="newsletter"> <label class="custom-control-label"
                    for="newsletter">Sign me up for the newsletter</label>
            </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <p class="text-center text-muted mb-0"> By creating an account you agree to the <a href="#">Terms of Use</a>
            and <a href="#">Privacy Policy</a>. </p><!-- /recovery links -->
    </form>
@endsection
