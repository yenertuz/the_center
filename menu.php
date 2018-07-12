<?php

session_start();

if (isset($_POST["daily_tally"]) && $_POST["daily_tally"] == "Daily Tally")
{
	$_SESSION["layout"] = "daily_tally";
}
else if (isset($_POST["cyber_center"]) && $_POST["cyber_center"] = "Cyber Center")
{
	$_SESSION["layout"] = "cyber_center";
}

else
{
	$_SESSION["layout"] = "login";
	$_SESSION["privilage"] = "";
	$_SESSION["invalid_login"] = 0;
}

header("Location: index.php");
exit();

?>
