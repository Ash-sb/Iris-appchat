
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div>
            <input placeholder="Enter username..."
                    type="text"
                    id="username-input" /><br>
            <button onclick="joinCall()">Lancer la video</button>
        </div>
        <div id="video-call-div">
            <video muted id="local-video" autoplay></video>
            <video id="remote-video" autoplay></video>
            <div class="call-action-div">
            <button class="circle-button command" onclick="muteAudio()"><i class="fas fa-volume-mute"></i></button>
            <button class="circle-button command" onclick="muteVideo()"><i class="fas fa-video-slash"></i></button>
            </div>
        </div>
        <script src="js\video.func.js"></script>
    </body>

</html>