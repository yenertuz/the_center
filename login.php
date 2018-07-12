<?php

session_start();

function try_to_login($username, $password)
{
	if ($username == "" || $password == "")
	{
		$_SESSION["invalid_login"] = 1;
		header("Location: index.php");
		exit ();
	}
	$lines = explode("\n", file_get_contents("private/accounts"));
	foreach ($lines as $single_line)
	{
		$array = explode("\t", $single_line);
		if ($username == $array[0] && $password == $array[1])
		{
			$_SESSION["privilage"] = $array[2];
			$_SESSION["layout"] = "menu";
			header("Location: index.php");
			exit();
		}
	}
	$_SESSION["invalid_login"] = 1;
	header("Location: index.php");
	exit();
}

function continue_as_guest()
{
	$_SESSION["privilage"] = "guest";
	$_SESSION["layout"] = "menu";
	header("Location: index.php");
	exit();
}

if (isset($_POST["guest"]) && $_POST["guest"] == "Continue As Guest")
{
	continue_as_guest();
}
else
{
	try_to_login($_POST["username"], $_POST["password"]);
}
