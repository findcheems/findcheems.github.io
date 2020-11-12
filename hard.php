<?php

session_start();

if(!$_SESSION["active"]){
    header("Location: login.php");
}

?>

<!--Created By Hd-117-->
<!DOCTYPE html>
<html id="pagina" lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Find Cheems</title>
</head>
<body>
    <a id="home" href="index">Home</a>
    <h1 id="finish_him">Finish Him!</h1>
    <img id="cheems" onclick="funcion()" src="img/white.png" alt="">
    <a onclick="location.reload()" id="play_again">Play Again</a>

    <!-------------------SCRIPT------------------->
    <script>
        var width = screen.width;
        var height = screen.height;
        var dimensiones = width + "x" + height;
        switch (dimensiones) {
            case "1024x768":
                topa = "15%";
                lefta = "37%";
                break;
            case "1280x1024":
                topa = "17%";
                lefta = "39%";
                break;
            case "1600x1200":
                topa = "21.5%";
                lefta = "41.5%";
                break;
            case "1280x800":
                topa = "22.7%";
                lefta = "39.5%";
                break;
            case "1680x1050":
                topa = "26.5%";
                lefta = "41.8%";
                break;
            case "1920x1200":
                topa = "28.8%";
                lefta = "43%";
                break;
            case "2560x1600":
                topa = "31.9%";
                lefta = "44.7%";
                break;
            case "1280x720":
                topa = "26%";
                lefta = "39.5%";
                break;
            case "1366x768":
                topa = "27%";
                lefta = "40.3%";
                break;
            case "1600x900":
                topa = "29.8%";
                lefta = "41.8%";
                break;
            case "1920x1080":
                topa = "32.4%";
                lefta = "43.1%";
                break;
            case "2560x1440":
                topa = "35.4%";
                lefta = "44.9%";
                break;            
            default:
                topa = "22%";
                lefta = "40%";
                break;
        }
        var finishHim = document.getElementById("finish_him");
        var finalOuch = false;
        var cheems = document.getElementById("cheems");
        cheems.style.top = random(0,90)+"%";
        cheems.style.bottom = random(0,90)+"%";
        cheems.style.right = random(0,90)+"%";
        cheems.style.left = random(0,90)+"%";
        let elementStyle = window.getComputedStyle(cheems);
        cheems.style.width = "25px";
        cheems.style.height = "25px";
        function funcion(){
            if(finalOuch == true){
                cheems.src = "img/ouch.png";
                var sound = new Audio("audios/ouch.mp3");
                sound.play();
                var play_again = document.getElementById("play_again");
                play_again.style.display = "block";
                var home = document.getElementById("home");
                home.style.display = "inline-block";
            }
            if(finalOuch == false){
                cheems.src = "img/cheems.png";
                var snd = new Audio("audios/dogebonk.mp3");
                snd.play();
                cheems.style.width = "250px";
                cheems.style.height = "250px";
                cheems.style.left = lefta;
                cheems.style.right = "50%";
                cheems.style.top = topa;
                cheems.style.bottom = "50%";
                finishHim.style.display = "block";
                finalOuch = true;
            }
        }
        function random(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }
    </script>
    <!-------------------END OF SCRIPT------------------->
</body>
</html>
