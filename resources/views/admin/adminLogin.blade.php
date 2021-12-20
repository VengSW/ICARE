<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login Page</title>
        <style>
                a{
                    text-decoration: none;
                }
                h1{
                    font-size: 50px;
                    margin: 10px;
                    font-family: "Lucida Fax";
                    color: #354a32;
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
                    font-size: 25px;
                    background-color: #7C9473;
                    border: none;
                    text-align: center;
                    border-radius:10px;
                }
                ::-webkit-input-placeholder {
                    text-align: center;
                    /* color: #52734D; */
                    color:white;
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
            <h1>Welcome back</h1>
            <div>
            <a href="<?php echo url('') ?>">ICARE</a>
            <p><i>Admin<i><p>
            </div>

            <p>@if(session()->get('global'))
                {{ session()->get('global') }}  
            <br></p>
            @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="adlogin">
                        @csrf
<!--EMAIL SLOT-->
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="adminName" type="text" class="form-control @error('username') is-invalid @enderror" name="email" value="{{ old('adminName') }}" required autocomplete="adminName" autofocus
                                placeholder="{{ __('Username') }}">

                                @error('adminName')
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
                                <input id="adminPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="adminPassword" required autocomplete="current-password"
                                placeholder="{{ __('Password') }}">

                                @error('adminPassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <center>
                        
<!--LOGIN BUTTON-->
                        <div style="height:10vh"></div>
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
            </body>