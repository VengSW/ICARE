@extends('layouts.main')

@section('content')
<?php	
	session_start();
	
?>
<html lang="en">
    <head>
        <title>Timer</title>
        <audio src="/test/audio.mp3" id="audio" controls style="display:none;" autoplay></audio>
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
            height: 15vh;
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
            margin: 15px;
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
    </style>
    <body>
        <br>
        <div class="card">
            <div class="card-header" style="font-size: 40px; color: #263624; margin:10px;">{{ __('Timer Page') }}</div>
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
        </form>
    <button type="button" onclick="playSound()">Play</button> 
    

      <!-- custom js -->
      <script>
        //window.onload = function () {
        function startTimer(){
           var minute = document.form.min.value;
           var sec = document.form.s.value;
           setInterval(function () {
              document.getElementById("timer").innerHTML =
              `${minute<10 ? '0' : ''}${minute}` + " : " + `${sec<10 ? '0' : ''}${sec}`;
              sec--;
              if (sec == 00) {
                 minute--;
                 sec = 60;
                 if (minute <= 0) {
                    alert("hello");
                 }
              }
           }, 1000);
        };

        function playSound(){
            document.getElementById("audio").play();
        }
     </script>
    </body>
</html>
@endsection