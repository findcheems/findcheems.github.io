<?php

error_reporting(0);

session_start();

if(!$_SESSION["active"]){
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find Cheems game! Enjoy this game web page finding cheems!">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Find Cheems</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1 style="text-align: center; margin-top: 3%;font-size: 80px;font-family: 'Roboto Condensed', sans-serif;">Find Cheems</h1>
    <div id="imagen">    
        <img id="cheems" onclick="sonido()" src="img/cheems.png" alt="">
    </div>
    <div id="botones">
        <a id="a1" href="easy">Easy</a>
        <a id="a2" href="medium">Medium</a>
        <a id="a3" href="hard">Hard</a>
    </div>

    <!--------------SCRIPT------------------->
    <script>
        function sonido(){
            var sound = new Audio("audios/dogebonk.mp3");
            sound.play();
        }
    </script>
    <!--------------END OF SCRIPT------------>

</body>
</html>
