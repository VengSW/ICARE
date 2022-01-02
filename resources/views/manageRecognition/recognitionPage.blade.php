@extends('layouts.nav')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recognition Page</title>

   
</head>
<body>
    <div style="height: 20vh;"></div>
    <h2 class="header" style="transform: translateX(650px);">{{ __('Recognition Page') }}</h2>
    <div >
        <article style="transform: translateX(560px);">Users can start recognition function by clicking the start button</article>
        <p style="transform: translateX(400px);">By clicking start button, user is allowing the system to access the camera for posture recognition purpose.</p>
    </div>
    <center>
        <button class="main-btn float-left shadow" style="transform: translateX(720px);" onclick="window.open('http://127.0.0.1:5000/')">Start</button>
    </center>
</body>
</html>

@endsection
