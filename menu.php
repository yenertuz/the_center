<?php

session_start();

if (isset($_POST["daily_tally"]) && $_POST["daily_tally"] == "Daily Tally")
{
	$_SESSION["layout"] = "daily_tally";
}
else
{
	$_SESSION["layout"] = "cyber_center";
}

header("Location: index.php");
exit();

?>
