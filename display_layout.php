<?php

function display_layout() {
	if ($_SESSION["layout"] == "login")
		echo file_get_contents("login.html").PHP_EOL;
}

?>
