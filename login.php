<?php

include "install.php";

function try_to_login($username, $password)
{
  $a = read_records("private/users");
  if (empty($a) == 1)
  {
    echo "AAA"; exit();
    return (0);
  }
  else
  {
    foreach ($a as $r)
    {
      if ($r["username"] == $username &&
      $r["password"] == $password)
      {
        return (1);
      }
    }
    return (0);
  }
}

if (isset($_SESSION["login_error"]))
{
  unset($_SESSION["login_error"]);
}

if (isset($_POST["login"]))
{
  if (try_to_login($_POST["username"], $_POST["password"]) == 1)
  {
    $_SESSION["user"] = $_POST["username"];
    $_SESSION["view"] = "main";
  }
  else
  {
    $_SESSION["login_error"] = 1;
    $_SESSION["view"] = "login";
  }
}
else
{
  $_SESSION["view"] = "main";
}

redirect_to_index();

?>
