<?php session_start(); 

include "display_layout.php";

check_if_layout_is_set();

?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<title> The Center </title>
<body>
<?php 
write_comment("Layout: ".$_SESSION["layout"]);
display_layout(); 

echo $_SESSION["layout"]."<br>".PHP_EOL;

?>
</body>
</html>
