@extends('layouts.auth')

@section('form')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="login-wrap p-0">
    <h3 class="mb-4 text-center">Have an account?</h3>
    <form action="{{ route('login') }}" class="signin-form" method="POST">
        @csrf
        @method('POST')
        <div class="dropdown form-group">
            <button class="btn btn-secondary dropdown-toggle form-control" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login As
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Admin</a>
            <a class="dropdown-item" href="#">User</a>
        </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
    <div class="form-group">
        <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
    </div>
    <div class="form-group d-md-flex">
        <div class="w-50">
            <label class="checkbox-wrap checkbox-primary">Remember Me
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="w-50 text-md-right">
                        <a href="#" style="color: #fff">Forgot Password</a>
                    </div>
    </div>
    </form>
        <!-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
        <div class="social d-flex text-center">
        <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
        </div> -->
    </div>
    </div>
</div>

@endsection