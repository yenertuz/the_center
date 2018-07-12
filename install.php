<?php

function check_if_layout_is_set() {
	if (isset($_SESSION["layout"]) == 0)
	{
		$_SESSION["layout"] = "login";
	}
}

function display_layout() {
	if ($_SESSION["layout"] == "login" && isset($_SESSION["invalid_login"]) &&
			$_SESSION["invalid_login"] = 1)
	{
		echo "Invalid username and password combination <br>".PHP_EOL;
	}
	echo(file_get_contents($_SESSION["layout"]."html").PHP_EOL);
}

function write_comment($string) {
	echo PHP_EOL.'<!--'.PHP_EOL;
	echo $string.PHP_EOL;
	echo '-->'.PHP_EOL;
}

function display_menu() {
	if ($_SESSION["layout"] != "login" && $_SESSION["layout"] != "menu")
	{
		echo file_get_contents("menu_bar.html").PHP_EOL;
	}
}
?>
