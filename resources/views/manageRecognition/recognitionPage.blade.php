@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recognition Page</title>
    <style>
        .card{
            margin: 10px 100px;
        }
        table{
            width: 80%;
            margin: 70px;
            font-size: 15px;
            color: white;
            border-color: white;
            background-color: #5c7a57;
            justify-content: center;
        }
        button{
            font-family: "Lucida Fax";
            font-size: 20px;
            color: white;
            border-radius: 15px;
            border: none;
            padding: 10px;
            background-color: #91C788;
            align-items: center;
            margin: 225px 5px;
        }
        button:hover{
            background-color: #77a66f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="font-size: 40px; color: #263624; margin:10px;">{{ __('Recognition Page') }}</div>
                </div>
            </div>
        </div>
    </div>
    <center>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <td>{{ $row->UserID}}</td>
                <td>{{ $row->recordID}}</td>
                <td>{{ $row->created_at}}</td>
            @endforeach
        </tbody>
    </table>
    <button>Back</button>
    <button onclick="location.href='/startRecognition'">Start</button>
    </center>
</body>
</html>

@endsection
