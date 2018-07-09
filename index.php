<?php session_start(); 

include "display_layout.php";

if (!$_SESSION["layout"])
{
	$_SESSION["layout"] = "login";
}

?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<title> The Center </title>
<body>
<?php display_layout(); ?>
</body>
</html>
