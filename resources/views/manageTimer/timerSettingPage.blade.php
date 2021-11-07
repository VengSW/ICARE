@extends('layouts.nav')

@section('content')
<?php	
	session_start();
	
?>
<html lang="en">
    <head>
        <title>Timer</title>
        <audio src="/test/audio.mp3" id="audio" controls style="display:none;" loop></audio><!--Audio file of notification sound set loop-->
    </head>
    <style>
        .countdowncontainer{
            position: absolute;
            transform : translateX(650px);
            text-align: center;
            background: #ddd;
            border: 1px solid #999;
            padding: 10px;
            box-shadow: 0 0 5px 3px #ccc;
        }
        #form{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #info{
            height: 40vh;
            font-size: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 100px;
            transform: translateX(380px);
        }
        #min{
            font-size: 20px;
            padding: 5px;
            color: darkolivegreen;
            background-color: #CFDAC8;
            border: none;
            border-radius: 15px;
            text-align: center;
            transform : translateX(400px);
        }
        #s{
            font-size: 20px;
            padding: 5px 2px;
            background-color: #CFDAC8;
            border: none;
            border-radius: 15px;
            text-align: center;
            transform : translateX(450px);
        }
        #timer{
            font-size: 40px;
            color: #263624;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <body>
        <h2 class="header">{{ __('Timer Page') }}</h2>
        <div class="caption">Recommended time is 20 minutes.</div>

        <button type="button" class="main-btn shadow"  onclick="startTimer()">Start</button>
        <button type="button" class="main-btn shadow"  onclick="location.href='timer'">Reset</button>

        <table id="info" >
            <tr>
                <td>Alert will be in</td>
            </tr> 
            <tr>
                <td><span id="timer">00:00</span></td>
            </tr>   
        </table> 

        <form name="form">
            <input type="number" id="min" placeholder="Minutes" required />
            <input type="number" id="s" placeholder="Seconds" required />  
        </form>
       
        
      <!-- custom js -->
      <script>
        //window.onload = function () {
        function startTimer(){
           var minute = document.form.min.value;
           var sec = document.form.s.value;
           var distance = minute + sec;
           
           const countdown = setInterval(function () {
              document.getElementById("timer").innerHTML =
              `${minute<10 ? '0' : ''}${minute}` + " : " + `${sec<10 ? '0' : ''}${sec}`;
              sec--;
              if (sec == 00) {
                 minute--;
                 sec = 60;
                 if (minute < 0) {
                    document.getElementById("audio").play();
                    stopTimer();
                    clearInterval(countdown);
                 }
              }
           }, 1000);
        };

        // stop the countdown after time set has reached
        function stopTimer() {
            document.getElementById("timer").innerHTML = "EXPIRED";
        }
     </script>
    </body>
</html>
@endsection