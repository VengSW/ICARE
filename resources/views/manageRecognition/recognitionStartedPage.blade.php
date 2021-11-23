@extends('layouts.nav')

@section('content')
<h2 class="header">{{ __('Recognition Started Page') }}</h2>
<head>
    <style>
    /* CSS comes here */
    #video {
        border: 1px solid black;
        width: 580px;
        height: 440px;
    }

    #photo {
        border: 1px solid black;
        width: 580px;
        height: 440px;
    }

    #canvas {
        display: none;
    }

    .camera {
        width: 580px;
        display: inline-block;
    }

    .output {
        width: 580px;
        display: inline-block;
    }

    #startbutton {
        display: block;
        position: relative;
        margin-left: auto;
        margin-right: auto;
        bottom: 36px;
        padding: 5px;
        background-color: #6a67ce;
        border: 1px solid rgba(255, 255, 255, 0.7);
        font-size: 14px;
        color: rgba(255, 255, 255, 1.0);
        cursor: pointer;
    }

    .contentarea {
        font-size: 16px;
        font-family: Arial;
        text-align: center;
        transform: translateX(400px);
    }
    </style>
    <title>My Favorite Sport</title>
</head>

<form action="submit" method="post">
    @csrf
    <center>
    <table>
        <input type="hidden" name="recordid" >
        <input type="hidden" name="userid" value="{{ Auth::user()->UserID }}">
        <tr>
            <td><input type="date" name="date" placeholder="date" ></td>
        </tr>
        <tr>
            <td><label for="img">Select image:</label></td>
        </tr>
        <tr>
            <td><input type="text" id="img" name="image"></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
        </tr>
    </table>
    </center> 
</form>

<body>
    <div class="contentarea">
        <div class="camera">
            <video id="video">Video stream not available.</video>
        </div>
        <div><button id="startbutton">Take photo</button></div>
        <canvas id="canvas"></canvas>
        <div class="output">
            <img id="photo" alt="The screen capture will appear in this box.">
        </div>
    </div>

    <script>
    /* JS comes here */
    (function() {

        var width = 580; // We will scale the photo width to this
        var height = 0; // This will be computed based on the input stream

        var streaming = false;

        var video = null;
        var canvas = null;
        var photo = null;
        var startbutton = null;

        function startup() {
            video = document.getElementById('video');
            canvas = document.getElementById('canvas');
            photo = document.getElementById('photo');
            startbutton = document.getElementById('startbutton');

            navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: false
                })
                .then(function(stream) {
                    video.srcObject = stream;
                    video.play();
                })
                .catch(function(err) {
                    console.log("An error occurred: " + err);
                });

            video.addEventListener('canplay', function(ev) {
                if (!streaming) {
                    height = video.videoHeight / (video.videoWidth / width);

                    if (isNaN(height)) {
                        height = width / (4 / 3);
                    }

                    video.setAttribute('width', width);
                    video.setAttribute('height', height);
                    canvas.setAttribute('width', width);
                    canvas.setAttribute('height', height);
                    streaming = true;
                }
            }, false);

            startbutton.addEventListener('click', function(ev) {
                takepicture();
                ev.preventDefault();
            }, false);

            clearphoto();
        }


        function clearphoto() {
            var context = canvas.getContext('2d');
            context.fillStyle = "#AAA";
            context.fillRect(0, 0, canvas.width, canvas.height);

            var data = canvas.toDataURL('image/png');
            photo.setAttribute('src', data);
        }

        function takepicture() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                photo.setAttribute('src', data);
            } else {
                clearphoto();
            }
        }

        window.addEventListener('load', startup, false);
    })();
    </script>
</body>
@endsection
