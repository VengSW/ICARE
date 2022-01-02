<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Login Page</title>
        <style>
                /* forgot password link */
                a{
                    color:#52734D; 
                    font-family:"Lato"; 
                    text-decoration: none;
                    font-size: 20px;
                }
                /* header */
                h1{
                    font-size: 80px;
                    margin: 10px;
                    font-family: "Lucida Fax";
                    color: #354a32;
                }
                body{
                    padding-top: 100px;
                    background-color: #FEFFDE;
                }
                /* CVSRFSP */
                p{
                    font-size: 25px;
                }
                /* inputs */
                .form-control{
                    width: 550px;
                    font-size: 25px;
                    background-color: #7C9473;
                    border: none;
                    text-align: center;
                    border-radius:5px;
                    height: 50px;
                }
                /* input placeholder */
                ::-webkit-input-placeholder {
                    text-align: center;
                    color:white;
                }
                /* login button */
                button{
                    font-family: 'ZCOOL XiaoWei' ;
                    font-size: 20px;
                    color: white;
                    border-radius: 35px;
                    border: none;
                    padding: 10px 70px;
                    background-color: black;
                    align-items: center;
                }
                button:hover{
                    background-color: #77a66f;
                }
                /* icare image */
                img{
                    width: 300px;
                    height: 120px;
                }
                /* email icon */
                .env-icon{
                    background-color: #93ad89;
                    border-radius:5px;
                    padding: 10px 18px;
                    font-size: 30px;
                }
                /* lock icon */
                .icon{
                    background-color: #93ad89;
                    border-radius:5px;
                    padding: 10px 22px;
                    transform: translateY(2px);
                    font-size: 30px;
                }
        </style>
    </head>

    <body>
        <center>
            <h1>Welcome To</h1>
            <div>
            <a href="<?php echo url('') ?>">  <img src="/images/icare3.png" alt="logo">  </a>
            <p><i>Computer Vision Syndrome Recognition For Sitting Posture<i><p>
            </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!--EMAIL SLOT-->
                        <div class="form-group row">
                            <div class="col-md-6">
                            <i class="fa fa-envelope env-icon"></i>
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
                            <i class="fa fa-lock icon"></i>
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

                        <!--FORGET PASSWORD BUTTON-->
                        <div style="height: 5vh;"></div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <!--LOGIN BUTTON-->
                        <div style="height: 5vh;"></div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
    </body>