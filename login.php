<?php

session_start();

function try_to_login($username, $password)
{
	$lines = explode("\n", file_get_contents("/private/password"));
	foreach ($lines as $single_line)
	{
		$array = explode("\t", $single_line);
		if ($username == $array[0] && $password == $array[1])
		{
			$_SESSION["privilage"] = $array[2];
			$_SESSION["layout"] = "menu";
		}
	}
	$_SESSION["invalid_login"] = 1;
	header("Location: index.php");
}

if (isset($_POST["guest"]) && $_POST["guest"] == "guest")
{
	continue_as_guest();
}
else
{
	try_to_login($_POST["username"], $_POST["password"]);
}
