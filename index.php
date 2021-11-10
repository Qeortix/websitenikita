<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Nikita biografija lox</title>
        <style>
            body {
                min-width: 100vh;
                min-height: 10vh;
                display: grid;
                place-items: center;
            }
            #video-bg {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                overflow: hidden;
                z-index: 1;
                background: url(bg/daisy-stock-poster.jpg) no-repeat #94a233;
                background-size: cover;
            }

            #video-bg > video {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                min-height: 100%;
                width: auto;
                height: auto;
            }

            @supports (object-fit: cover) {
                #video-bg > video {
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            }
            #nikita {
                display: none;
            }
        </style>
    </head>
    <body>
        <video
            id="nikita"
            width="1920"
            height="1080"
            controls="controls"
            poster="video/duel.jpg"
        >
            <source
                src="videoplayback.mp4"
                type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'
            />
        </video>
        <img src="1452806850_abyPgGv_700b_v1(1)_STICKERED_ (2).png" />

        <p>
            <input
                onclick="{document.getElementById('nikita').style.display='block';document.getElementById('nikita').play();}"
                type="button"
                value=" Нажми меня нежно "
            />
        </p>

        <input id="num1" />

        <div id="operator_btns">
            <button id="plus" class="operator">+</button>
        </div>

        <input id="num2" />

        <button
            onclick="{func();document.getElementById('kiril').style.display='block';document.getElementById('kiril').play();}"
        >
            равняется...
        </button>

        <p id="result"></p>
        <audio id="kiril">
            <source src="videoplayback.mp3" type="audio/mpeg" />
        </audio>
        <script>
            function func() {
                var num1 = Number(document.getElementById("num1").value);
                var num2 = Number(document.getElementById("num2").value);
                result = num1 + num2;

                document.getElementById("result").innerHTML = result;
            }
        </script>
    </body>
</html>
