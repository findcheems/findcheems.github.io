<?php

include('conexion.php');

$user = str_replace("'", "/", $_POST["user"]);
$pass = md5(str_replace("'", "/", $_POST["pass"]));

$consult = mysqli_query($conexion, "SELECT * FROM users WHERE user = '$user' AND password = '$pass'");

if($_COOKIE["intentos"] < 5){
    if(mysqli_fetch_assoc($consult)) {
       setcookie("intentos", 0, time()+1);
       session_start();
       $_SESSION["active"] = true;
       $_SESSION["user"] = $user;
        header("Location: account.php");   
    } else {
        setcookie("intentos", $_COOKIE["intentos"] + 1, time()+120);
        header("Location: login.php?error=si");
    };
}else{
    header("Location: login.php?error=i");
};
?>