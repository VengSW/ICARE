<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <style>
                a{
                    text-decoration: none;
                }
                h1{
                    background-color: #52734D;
                    font-size: 50px;
                    color: white;
                    font-family: "Lato";
                    border-radius: 35px;
                    width: 350px;
                }
                body{
                    padding-top: 100px;
                    background-color: #FEFFDE;
                }
                div{
                    font-size: 30px;
                }
                p{
                    font-size: 25px;
                }
                .form-control{
                    width: 550px;
                    font-size: 30px;
                    background-color: #DDFFBC;
                    border: none;
                }
                ::-webkit-input-placeholder {
                    text-align: center;
                    font-weight: bold;
                    color: #52734D;
                }
                button{
                    font-family: "Lucida Fax";
                    font-size: 25px;
                    color: white;
                    border-radius: 25px;
                    border: none;
                    padding: 20px 40px;
                    margin: 15px;
                    background-color: #91C788;
                }
                .btn-link{
                    color:#52734D; 
                    font-size: 15px;
                    font-family:"Lato"; 
                    text-decoration: none;
                }
        </style>
    </head>

    <body>
        <center>
            <h1>Welcome to</h1>
            <div>
            <a href="<?php echo url('') ?>">ICARE</a>
            <p><i>Computer Vision Syndrome Recognition For Sitting Posture<i><p>
            </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
<!--EMAIL SLOT-->
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="{{ __('E-Mail Address') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
<!--PASSWORD SLOT-->
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <center>
<!--REMEMBER ME
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

<!--FORGET PASSWORD BUTTON-->
                        <div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
<!--LOGIN BUTTON-->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>