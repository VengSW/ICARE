@extends('layouts.nav')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recognition Page</title>

    <style>
        @import url('https://fonts.google.com/specimen/ZCOOL+XiaoWei?preview.text=Button&preview.text_type=custom#standard-styles');

        .card{
            margin: 10px 100px;
        }
        table{
            width: 125%;
            margin: 70px;
            font-size: 15px;
            color: white;
            border-color: white;
            justify-content: center;
            transform: translateX(150px);"
        }
        thead{
            background-color: #5c7a57;
            text-align: center;
        }
        tbody{
            background-color: #759c6e;
            text-align: center;
        }

        button{
            font-family: "Lucida Fax";
            font-size: 15px;
            color: white;
            border: none;
            align-items: center;
            background-color: #759c6e;
        }
        button:hover{
            background-color: #77a66f;
        }
    </style>
</head>
<body>
    <h2 class="header" style="transform: translateX(650px);">{{ __('Recognition Page') }}</h2>
    <div >
        <article style="transform: translateX(560px);">Users can start recognition function by clicking the start button</article>
        <p style="transform: translateX(400px);">By clicking start button, user is allowing the system to access the camera for posture recognition purpose.</p>
    </div>
    <center>
    <!-- <table border="1" >
        <thead>
            <tr>
                <th>No.</th>
                <th>Date & Time</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->recordID}}</td>
                <td>{{ $row->created_at}}</td>
                <td><a href="/show/{{ $row->recordID }}'">View</a></td>
                <td><a href="/destroy/{{ $row->recordID }}'">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table> -->
        <!-- <button class="main-btn float-left shadow" style="transform: translateX(630px) translateY(330px);" onclick="location.href='/home'">Back</button> -->
        <button class="main-btn float-left shadow" style="transform: translateX(720px) translateY(130px);" onclick="window.open('http://127.0.0.1:5000/')">Start</button>
    </center>
</body>
</html>

@endsection
