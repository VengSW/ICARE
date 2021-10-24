<!DOCTYPE html>
<html lang="en">
    <head>
        <audio src="/test/audio.mp3" id="audio" controls style="display:none;"></audio>
    <script>
        function playSound(){
            document.getElementById("audio").play();
        }
    </script>
    </head>
    <body>
       <button onclick="playSound();">Play</button>  
       <audio controls>
  <source src="/test/audio.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    </body>
</html>