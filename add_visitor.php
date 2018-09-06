<?php

session_start();

file_put_contents("visitors", $_POST["visitor"]."\n", FILE_APPEND);

$_SESSION["user"] = $_POST["visitor"];

header("Location: index.php");

 ?>
