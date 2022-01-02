<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>ICARE</title>
        <style>
                /* login hyperlink */
                a{
                    color:#52734D; 
                    font-family:"Lato"; 
                    text-decoration: none;
                    font-size: 25px;
                }
                body{
                    padding-top: 20px;
                    background-color: #FEFFDE;
                }
                /* input */
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
                    font-weight: bold;
                    color: white;
                }
                /* register now button */
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
                
                img{
                    width: 300px;
                    height: 120px;
                }
                /* password requirements */
                .des{
                    font-size: 15px;
                }
                /* user's icon */
                .user-icon{
                    background-color: #93ad89;
                    border-radius:5px;
                    padding: 10px 15px;
                    font-size: 30px;
                }
                /* envelope icon */
                .env-icon{
                    background-color: #93ad89;
                    border-radius:5px;
                    padding: 10px 13px;
                    font-size: 30px;
                }
                /* lock icon */
                .lock-icon{
                    background-color: #93ad89;
                    border-radius:5px;
                    padding: 10px 18px;
                    font-size: 30px;
                }
        </style>
    </head>

<!--HOME BUTTON-->

<center>
    <div style="height:10vh;"></div>
        <div ><strong><a href="<?php echo url('') ?>"><img src="/images/icare3.png" alt="logo"></a></strong></div>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div style="font-size: 25px;"><i><strong>Please fill in the form below.</strong></i></div>
                <br>
                <div class="des" style="transform: translateX(-120px);">- Password must have numbers and symbol letters.</div>
                <div class="des" style="transform: translateX(-110px)">- Password must have lower and upper capital letters.</div>
                <div class="des" style="transform: translateX(-50px)">- Password must be at least 8 characters of combination mentioned above.</div>
                <br>

                <!--USERNAME SLOT-->
                    <div class="col-md-6">
                        <i class="fa fa-user-o user-icon"></i>
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
                    <i class="fa fa-envelope env-icon"></i>
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
                    <i class="fa fa-lock lock-icon"></i>
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
                    <i class="fa fa-lock lock-icon"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                    </div>
                </div>
                <br>

                <!--ALREADY HAS ACCOUNT-->
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                    <a href="<?php echo url('login') ?>" style="font-size: 20px;">Already have an account? Log in here!</a>
                    </div>
                </div>

                <br>
                <!--REGISTER BUTTON-->
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register Now') }}
                        </button>
                    </div>
                </div>
            </form>
</center>