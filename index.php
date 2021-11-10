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
    <body style="background-image:url(hacker.jpg);"
    {style="background-image:url('1.jpg');background-image:url('hacker.jpg';)">
        <input placeholder="nikita" type="text" id="bomba"
        style="width:1000px; height: 30px;
        border: black 1px solid;
        background-image: url('1.jpg') ;"  />
        
        <input style="height:50px; width: 100px;font-weight: bold;" 
        type="submit"
        onclick="window.location.href=`${document.getElementById('bomba').value + '.php'}`"
        
        value= detonate
        
    />
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
            <input style="background-color: rgb(125, 167, 247);"
                onclick="{document.getElementById('nikita').style.display='block';document.getElementById('nikita').play();}"
                type="button"
                value=" Кастомные игры "
            />
        </p>
             <form name="calc" class="wrapper" style="background-color: rgb(125, 167, 247);">
                <table class="main">
                    <tr class="display">
                         <td colspan="4"><input type="text" name="input"></td>
                    </tr>
                    <tr class="buttons">
                         <td><input type="button" value="1" OnClick="calc.input.value += '1'"></td>
                         <td><input type="button" value="2" OnClick="calc.input.value += '2'"></td>
                         <td><input type="button" value="3" OnClick="calc.input.value += '3'"></td>
                         <td><input type="button" value="+" OnClick="calc.input.value += '+'"></td>
                    </tr>
                    <tr class="buttons">
                         <td><input type="button" value="4" OnClick="calc.input.value += '4'"></td>
                         <td><input type="button" value="5" OnClick="calc.input.value += '5'"></td>
                         <td><input type="button" value="6" OnClick="calc.input.value += '6'"></td>
                         <td><input type="button" value="-" OnClick="calc.input.value += '-'"></td>
                    </tr>
                    <tr class="buttons">
                         <td><input type="button" value="7" OnClick="calc.input.value += '7'"></td>
                         <td><input type="button" value="8" OnClick="calc.input.value += '8'"></td>
                         <td><input type="button" value="9" OnClick="calc.input.value += '9'"></td>
                         <td><input type="button" value="x" OnClick="calc.input.value += '*'"></td>
                    </tr>
                    <tr class="buttons">
                         <td><input type="reset" value="c" OnClick="calc.input.value = ''"></td>
                         <td><input type="button" value="0" OnClick="calc.input.value += '0'"></td>
                         <td><input type="button" value="=" OnClick=
                            "{func() ;calc.input.value = eval(calc.input.value)}"></td>
                         <td><input type="button" value="/" OnClick="calc.input.value += '/'"></td>
                     </tr>
               <table>
          </form>
            
            </div>
        </form>

        <p id="result"></p>
        <audio  id="kiril">
            <source src="videoplayback.mp3" type="audio/mpeg" />
        </audio>
        <audio id="arbuz">
            <source
                src="Among-Us-_Role-Reveal_-Sound-Effect-_HD_.mp3"
                type="audio/mpeg"
        <audio id="morg">
            <source
                src="a4.mp3"
                type="audio/mpeg"
            />
        </audio>
        <script>
        var mama=true
            function func() {
                
                if (mama) {
                    mama=!mama
                    document.getElementById("arbuz").play();
                    document.getElementById("kiril").pause();
                    document.getElementById("kiril").currentTime=0;
                }
                if {
                    mama=!mama
                    document.getElementById("kiril").play();
                    document.getElementById("morg").pause();
                    document.getElementById("morg").currentTime=0;
                }
                if {
                   mama=!mama
                   document.getElementById("morg").play();
                   document.getElementById("arbuz").pause();
                   document.getElementById("arbuz").currentTime=0;
            }                           

            
        </script>
    </body>
</html>
