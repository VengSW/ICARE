<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <style>
                a{
                    color:#52734D; 
                    font-family:"Lato"; 
                    text-decoration: none;
                    font-size: 20px;
                }
                h1{
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
        </style>
    </head>
<body>
    <center>
    <div style="height:20vh;"></div>
    <h1>Password Reset</h1>
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
                        <div style="height:5vh;"></div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary shadow">
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
