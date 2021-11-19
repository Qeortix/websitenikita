<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body
        style="
            min-width: 100vh;
            min-height: 10vh;
            display: grid;
            place-items: center;
        "
    >
        <audio id="bomba" src="goblinskayabochka.mp3"></audio>
        <div style="display: flex; align-items: center; flex-direction: column">
            <img src="smehmonkey.png" alt="monkey" style="width: 600px" />
        </div>
        <div>
            <input
                style="
                    height: 50px;
                    width: 200px;
                    margin-top: 40px;
                    background-color: rgb(153, 19, 19);
                    color: aliceblue;
                    font-weight: bold;
                    justify-items: center;
                    border-left: rgb(136, 9, 47);
                "
                type="button"
                name="Реальный Detonate"
                id="knopka"
                ;
                onclick="{document.getElementById('bomba').play();}"
                type="button"
                value="Реальный DETONATE"
            />
        </div>
    </body>
</html>
