@extends('layouts.nav')

@section('content')

<!-- {{ $data }} -->
<head>
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
        }
        th{
            background-color: #5c7a57;
            text-align: center;
        }
        td{
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
<h2 class="header">{{ __('Record Details Page') }}</h2>
    <p>This is your record of poor sitting posture.</p>
    <center>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th><td>{{ $data->recordID}}</td>
            </tr>
            <tr>
                <th>Date & Time</th><td>{{ $data->created_at}}</td>
            </tr>
            <tr style="height=50vh;">
                <th>Image</th><td>{{ $data->Image}}</td>
            </tr>
        </thead>
    </table>

@endsection
