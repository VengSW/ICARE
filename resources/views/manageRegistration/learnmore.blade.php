@extends('layouts.nav')

<title>Learn More</title>
    <style>
        p{
            border-radius: 25px;
            margin: 20px 350px;
            text-align: justify;
            font-family: Goudy Old Style;
            font-size: 25px;
        }
        .card-header{
            font-family:Mongolian;
            margin: 10px;
            text-align:center;
            font-size: 30px;
            color:#104f15;
        }
    </style>

    @section('content') 
    <h2 class="header">Hello {{ Auth::user()->name }}</h2>
    <div>
        <p>This is a system that recognize the <b>sitting posture</b> of the user to avoid back pain and strains as sitting for a long period
            which will leads to many <b>health issues</b> such as spine misaligned, back muscle pain and strains. The project will help to <b>remind users to keep in a correct sitting posture 
            by sending alert notifications</b> and some exercise videos to remind users to refresh their body after a long period of sitting. 
            Once the wrong sitting posture is recognized the system will also send alert notifications too.
        </p>
        <p>Computer vision syndrome also known as digital eye strain where this condition can cause specific vision and eye problems such as eye strain, eye fatigue, dry eyes, neck pain, shoulder pain and blurry vision. 
            This condition is caused by high concentration on digital screen of computers or e-readers for a prolonged time.
            Circumstances such as poor posture while sitting and <b>incorrect viewing distance or angle</b> will also risk the eyes to have computer vision syndrome.
            Posture recognition is the <b>ability of the computer to detect movement or alignment of the body</b>. 
            This system will raise alert to the user to keep in a good sitting posture and record the poor sitting posture as the a record for the user to refer.
        </p>
        <p>
            Thank you for joining us!
        </p>
        
    </div>
@endsection
