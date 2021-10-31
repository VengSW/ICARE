@extends('layouts.main')

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
        .card{
            margin: 10px 100px;
        }
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
            height: 5vh;
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
        }
        #min, #s{
            font-size: 20px;
            padding: 10px;
            margin: 5px;
            background-color: #DDFFBC;
            border: none;
            width: 100px;
            text-align: center;
        }
        #timer{
            font-size: 40px;
            color: #263624;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        button{
            font-family: "Lucida Fax";
            font-size: 10px;
            color: white;
            border-radius: 25px;
            border: none;
            padding: 10px;
            background-color: #91C788;
            align-items: center;
            margin: 15px 5px;
        }
        button:hover{
            background-color: #77a66f;
        }
    </style>
    <body>
        <br>
        <div class="card">
            <div class="card-header" style="font-size: 40px; color: #263624; margin:10px;">{{ __('Timer Page') }}</div>
            <div style="font-size: 10px; color: #263624; margin:10px;">Recommended time duration is 20 minutes.</div>
        </div>

        <table id="info" >
            <tr>
                <td>Alert will be in</td>
            </tr> 
            <tr>
                <td><span id="timer">00:00</span></td>
            </tr>   
        </table> 

        <form name="form" id="form">
            <input type="text" id="min" placeholder="Minutes" required>
            <input type="text" id="s" placeholder="Seconds" required>
            <button type="button" onclick="startTimer()">Start</button>
            <button type="button" onclick="location.href='timer'">Reset</button>
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