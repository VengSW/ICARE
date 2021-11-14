<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ICARE</title>
        <style>
                a{
                    color:#52734D; 
                    font-family:"Lato"; 
                    text-decoration: none;
                    font-size: 20px;
                }
                .card-header{
                    font-size: 50px;
                    margin: 10px;
                    font-family: "Lucida Fax";
                    color: #354a32;
                    height: 10vh;
                }

                body{
                    padding-top: 20px;
                    background-color: #FEFFDE;
                }

                .form-control{
                    width: 550px;
                    font-size: 25px;
                    background-color: #7C9473;
                    border: none;
                    text-align: center;
                    border-radius:10px;
                }

                /* .container{
                    padding-left: 130px;
                } */

                ::-webkit-input-placeholder {
                    text-align: center;
                    font-weight: bold;
                    color: white;
                }

                button{
                    font-family: 'ZCOOL XiaoWei' ;
                    font-size: 20px;
                    color: white;
                    border-radius: 35px;
                    border: none;
                    padding: 10px 70px;
                    background-color: #91C788;
                    align-items: center;
                }
                button:hover{
                    background-color: #77a66f;
                }
                .shadow {
                    -moz-box-shadow:    3px 3px 5px 6px #ccc;
                    -webkit-box-shadow: 3px 3px 5px 6px #ccc;
                    box-shadow:         3px 3px 5px 6px #ccc;
                }
        </style>
    </head>

<!--HOME BUTTON-->

<center>
<div style="height:10vh;"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h1 class="card-header">{{ __('Registration Interface') }}</h1>
                <div class="card-body">
                    <div ><strong><a href="<?php echo url('') ?>">ICARE</a></strong></div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <br>
                        <div style="font-size: 15px;"><i>Please fill in the form below.</div>
                        <br>

                        <!--USERNAME SLOT
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>-->

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <!--EMAIL SLOT-->
                        <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <!--PASSWORD SLOT-->
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <!--PASSWORD CONFIRM SLOT-->
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                            </div>
                        </div>
                        <br>

                        <!--ALREADY HAS ACCOUNT-->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a href="<?php echo url('login') ?>">Already have an account? Log in here!</a>
                            </div>
                        </div>

                        <br>
                        <!--REGISTER BUTTON-->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary shadow">
                                    {{ __('Register Now') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</center>