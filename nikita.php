<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            * {
                z-index: 10;
            }
            .avtobus {
                position: absolute;
width: 1054px;
height: 463px;
left: 0px;
top: 280px;

            }
        </style>
    </head>
    <body style="background-image: url(Hacker-Hero.jpg);">
        
        <div>
        <input  placeholder="sosal" type="text" id="bomba" style="width: 500px; height: 40px" />
        <input
            type="submit"
            onclick="window.location.href=`${document.getElementById('bomba').value ??('sosatnegri.php'):(document.getElementById('bomba').value) + '.php'}`;"
            value="detonate" 
            style="
                width: 100px;
                height: 50px;
                border: 5px solid rgb(124, 134, 133);
                background-color: rgb(186, 186, 197);
            "
        />
        <form id="konus"; style="background-color: rgb(201, 201, 201); width: 10%;padding: 1.2rem ">
            
            <p>Please select your preferred contact method:</p>
            <div style="color: rgb(16, 66, 29)">
                <input
                    type="radio"
                    id="contactChoice1"
                    name="contact"
                    value="email"
                />
                <label for="contactChoice1">Email</label>

                <input
                    type="radio"
                    id="contactChoice2"
                    name="contact"
                    value="phone"
                />
                <label for="contactChoice2">Phone</label>

                <input
                    type="radio"
                    id="contactChoice3"
                    name="contact"
                    value="mail"
                />
                <label for="contactChoice3">Mail</label>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
        <div>
            <img src="Group 1.png" class="avtobus" />
            </div>>
        </form>
    </body>
</html>
