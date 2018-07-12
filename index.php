<?php session_start(); 

include "install.php";

check_if_layout_is_set();

?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<title> The Center </title>
<body>
<?php 
echo "Layout: ".$_SESSION["layout"];
display_menu();

display_layout(); 

?>
</body>
</html>
