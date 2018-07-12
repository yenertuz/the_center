<?php session_start(); 

include "install.php";

check_if_layout_is_set();

?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<title> The Center </title>
<body>
<?php 
write_comment("Layout: ".$_SESSION["layout"]);
display_layout(); 

?>
</body>
</html>
