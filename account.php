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
    <title>Account</title>
    <link rel="stylesheet" href="account.css">
    <script src='https://kit.fontawesome.com/14f9b6775b.js' crossorigin='anonymous'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
</head>
<body>
    <div class="main">
        <h1>Hola, <?php echo $_SESSION["user"];?>!</h1>
        <hr>
        <h1>Selecciona tu arma</h1>
        <input id="arma" type="file">
        <hr>
        <h1>Selecciona tu objetivo</h1>
        <input id="objetivo" type="file">
        <hr>
        <button class="btn btn-primary" id="jugar">Jugar</button>
    </div>
    <script src="jugar.js"></script>
</body>
</html>