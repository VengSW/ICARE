<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
        body{
            background-color:#FEFFDE;
        }
    </style>
</head>
<body>

    <!--NAVIGATION BAR-->
    <br>
    <center>
    <nav class="navbar navbar-light" style="background-color: #52734D;">
    <a class="navbar-brand" href="#" style="font-size: 40px;">Welcome back </a><br><br>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link" href="#">Home <span class="sr-only"></span></a>
        <a class="nav-item nav-link" href="#">Learn More!</a>
        <a class="nav-item nav-link" href="#">Recognition</a>
        <a class="nav-item nav-link" href="#">Exercises</a>
        <a class="nav-item nav-link" href="#">Timer Settings</a>
        <a class="nav-item nav-link" href="{{route('logout') }}" 
            onclick="event.preventDefault(); document.getElementById('logout-form').submit(); alert('You have logout!!');">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
    </div>
    </nav>
    </center>

    

    <div class="container">
        @yield('content');
    </div>
</body>
</html>
