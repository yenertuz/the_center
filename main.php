<?php

include "install.php";

session_start();

if (isset($_GET["sign_in"]))
{
  $_SESSION["user"] = "guest";
  $_SESSION["view"] = "login";
}
else if (isset($_GET["events"]))
{
  $_SESSION["view"] = "events";
}
else if (isset($_GET["cyber_center"]))
{
  $_SESSION["view"] = "cyber_center";
}
else if (isset($_GET["admin"]))
{
  $_SESSION["view"] = "administrative";
}

redirect_to_index();

?>
