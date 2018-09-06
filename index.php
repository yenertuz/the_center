<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php

if (isset($_SESSION["user"]) == 0)
{
  $_SESSION["user"] = "";
}

function write_visitor_count()
{
  if (file_exists("visitor_count") == 0)
  {
    file_put_contents("visitor_count", "1");
  }
  $visitor_count = file_get_contents("visitor_count");
  echo $visitor_count;
  if ($_SESSION["user"] != "")
  { return; }
  $visitor_count += 1;
  file_put_contents("visitor_count", $visitor_count);
}

?>
<style>
a:hover{
  text-decoration: underline;
}
</style>
<header>
  <title>Yener's Website
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</header>

  <div class="jumbotron text-center" style="background-color: white;">
    <h1><a href="https://www.youtube.com/watch?v=LuOxckNvTy8">Hello there 😁</a><br>-Yener<h1>
      <p>Visitor count: <?php write_visitor_count(); ?></p>
    </div>
<div id="visitor_p"><p class="large text-center">Thanks <?php echo $_SESSION["user"];?>! Yener will appreciate that ☺️</p><br><br></div>
    <img class="center-block img-responsive" style="width: 30%; height:30%;" src="https://openclipart.org/image/2400px/svg_to_png/293844/under-construction_geek_man_01.png">
<br><br>
  <form id="visitor_form" action="add_visitor.php" method="post" class="input-group-lg">
    <input type="text" class="form-control" name="visitor" placeholder="Enter a nickname"><br>
    <input type="submit" class="form-control" value="Say hi 👋">
  </form>
<script>
if (<?php echo "\"".$_SESSION["user"]."\""; ?> != "")
{
  document.getElementById("visitor_form").style.display = "none";
}
else
{
  document.getElementById("visitor_p").style.display = "none";
}
</script>
</html>
