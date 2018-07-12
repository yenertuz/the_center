<?php

session_start();

if (isset($_POST["main_menu"]) && $_POST["main_menu"] == "Main Menu")
{
	$_SESSION["layout"] = "menu";
}
else
{
	echo "no";
	exit();
}

header("Location: index.php");
exit();

?>
