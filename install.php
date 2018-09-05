<?php

session_start();

function unset_tmp()
{
	if (isset($_SESSION["tmp"]))
	{
		unset($_SESSION["tmp"]);
	}
}

function read_records($filepath)
{
	if (file_exists($filepath) == 1)
	{
		return (json_decode(file_get_contents($filepath), 1));
	}
	else
	{
		return ([]);
	}
}

function render_html()
{
	if (isset($_SESSION["view"]) == 0)
	{
		$_SESSION["view"] = "main";
	}
	if (isset($_SESSION["user"]) == 0)
	{
		$_SESSION["user"] = "guest";
	}
	$j = json_encode($_SESSION);
	echo "<!DOCTYPE html><html>\n
	<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">";
		echo <<<EOD
<script>
var json =
EOD;
		echo $j.";";
		echo "</script>\n";
	echo file_get_contents($_SESSION["view"].".html");
	echo "<script>var forms = document.getElementsByTagName(\"form\");
	var i;
	for (i = 0; i < forms.length; i++)
	{
		forms[i].action = json[\"view\"] + \".php\";
	}
	</script>
	</html>\n";
	unset_tmp();
}

function redirect_to_index()
{
	header("Location: index.php");
}
