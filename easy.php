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
        window.onmousemove = function (){
            var x = window.event.clientX;
            var y = window.event.clientY;
            var resx = x - elementLeft;
            var resx = Math.abs(resx);
            var resy = y - elementTop;
            var resy = Math.abs(resy);
            var res = resx + resy;
            if(res <= 100){
                document.getElementById("pagina").style.cursor = 'url("img/muycerca.png"), pointer';
            }else if(res <= 300){
                document.getElementById("pagina").style.cursor = 'url("img/cerca.png"), pointer';
            }
            else if(res <= 500){
                document.getElementById("pagina").style.cursor = 'url("img/lejos.png"), pointer';
            }
            else if(res <= 700){
                document.getElementById("pagina").style.cursor = 'url("img/bastantelejos.png"), pointer';
            }
            else if(res <= 1000 || res >= 1000){
                document.getElementById("pagina").style.cursor = 'url("img/muylejos.png"), pointer';
            }
        }
        var cheems = document.getElementById("cheems");
        cheems.style.top = random(0,90)+"%";
        cheems.style.bottom = random(0,90)+"%";
        cheems.style.right = random(0,90)+"%";
        cheems.style.left = random(0,90)+"%";
        let elementStyle = window.getComputedStyle(cheems);
        let elementTop = parseInt(elementStyle.getPropertyValue('top').replace("px",""), 10);
        let elementLeft = parseInt(elementStyle.getPropertyValue('left').replace("px",""), 10);
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
