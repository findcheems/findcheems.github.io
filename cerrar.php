<?php

session_start();
$_SESSION["active"] = false;
header("Location: login.php");

?>