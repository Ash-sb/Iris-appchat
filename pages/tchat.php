<?php

    if(!isset($_GET['user']) || isLogged() == 0 || user_exist() != 1){
        header("Location:index.php?page=home");
    }

    $_SESSION['user'] = $_GET['user'];

    foreach(get_user() as $user){
        ?>
        <div class="app">
            <h2 class="header">Votre discussion avec <?= $user->name; ?></h2>

            <div class="messages-box"></div>

            <div class="bottom">
                <div class="field field-area">
                    <label for="message" class="field-label">Votre message</label>
                    <textarea name="message" id="message" rows="2" class="field-input field-textarea"></textarea>
                </div>
                <button type="submit" id="send" class="circle-button">
                    <span class="i-send"></span>
                </button>
                <button  onclick="sendUsername(), startCall();" class="circle-button">
                    <span class="fas fa-video"></span>
                </button>
            </div>
            </div>
            <div id="video-call-div">
                <video id="local-video" autoplay></video>
                <video id="remote-video" autoplay></video>
                <div class="call-action-div">
                    <button class="circle-button command" onclick="muteVideo()"><i class="fas fa-volume-mute"></i></button>
                    <button class="circle-button command" onclick><i class="fas fa-video-slash"></i></button>
                </div>
            </div>
        <?php
    }
