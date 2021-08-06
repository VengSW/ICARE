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
            padding-bottom: 50px;
        }
    </style>
</head>
<body>

    <!--NAVIGATION BAR-->
    <br>
    <nav class="navbar navbar-light" style="background-color: #52734D;">
    <a class="navbar-brand" href="#">Welcome back xx</a><br>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link" href="#">Home <span class="sr-only"></span></a>
        <a class="nav-item nav-link" href="#">Learn More!</a>
        <a class="nav-item nav-link" href="#">Recognition</a>
        <a class="nav-item nav-link" href="#">Exercises</a>
        <a class="nav-item nav-link" href="#">Timer Settings</a>
        </div>
    </div>
    </nav>
    <div class="container">
        @yield('content');
    </div>
</body>
</html>