<?php

function check_if_layout_is_set() {
	if (isset($_SESSION["layout"]) == 0)
	{
		$_SESSION["layout"] = "login";
	}
}

function display_layout() {
	if ($_SESSION["layout"] == "login")
	{
		if (isset($_SESSION["invalid_login"]) && $_SESSION["invalid_login"] == 1)
		{
			echo "Invalid username and password combination <br>".PHP_EOL;
		}
		echo file_get_contents("login.html").PHP_EOL;
	}
	else if ($_SESSION["layout"] == "menu")
	{
		echo file_get_contents("menu.html").PHP_EOL;
	}
}

function write_comment($string) {
	echo PHP_EOL.'<!--'.PHP_EOL;
	echo $string.PHP_EOL;
	echo '-->'.PHP_EOL;
}

?>
