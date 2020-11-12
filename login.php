<?php

error_reporting(0);

session_start();
if($_SESSION["active"] == 1){
        header("index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <h1 class="container_h1">Login</h1>
        <form action="validar.php" method="POST">
            <input class="container_input" type="user" name="user" placeholder="Usuario">
            <input class="container_input" type="password"name="pass" placeholder="Contraseña"> 
            <div class="submit_container">
                <input value="Ingresar" type="submit">
            </div>
        </form>
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "si"){
                echo "<h3 style='color: #f10'>Credenciales erroneas.</h3>";
            }elseif($_GET["error"] == "i"){
                echo "<h3 style='color: #f10'>Ha realizado muchos intentos, intente de nuevo mas tarde.</h3>";
            };
        };
        ?>
    </div>
</body>
</html>