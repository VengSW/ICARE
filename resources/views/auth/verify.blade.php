<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>
		a{
			color:white;
			padding-right: 50px;
			font-family: "Lato";
			font-size: 25px;
			text-decoration: none;
		}
		a:hover{
			font-size:170%;
		}
		nav{
			border-radius: 25px;
			margin: auto;
			padding: 30px 50px;
		}
		.center {
			margin: auto;
			width: 100%;
			padding: 10px;
		}
		label{
			color: #52734D;
			font-size: 25px;
			font-family: "Lucida Fax";
			border-radius: 5px;
			width: 400px;
		}
		.card-header{
			font-size: 50px;
			color: #476343;
			font-family: "Lucida Fax";
			border-radius: 35px;
			width: 700px;
			margin: 90px 5px 50px;
		}
		.col-md-6{
			margin: 20px 10px;
		}
		hr {
			width: 570px;
			margin-left: auto;
			margin: 0px 0px 50px;
		}
		.form-control{
			text-align: center;
			width: 500px;
			font-size: 30px;
			background-color: #d1deb4;
			border: none;
			border-radius: 10px;
		}
		body{
			background-color:#FEFFDE;
		}
		input{
			font-family: "Lucida Fax";
			font-size: 5px;
			color: #30332f;
		}
		button{
			font-family: "Lucida Fax";
			font-size: 25px;
			color: white;
			border-radius: 15px;
			border: none;
			padding: 10px 30px;
			margin: 50px;
			background-color: #91C788;
			position: absolute;
            transform: translate(-60%, -30%);
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
<body>
    

<center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{ __('A fresh verification link has been sent to your email address.') }}</strong>
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </center>
</body>