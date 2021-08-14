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
</body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
