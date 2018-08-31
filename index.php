<?php

session_start();

$json = [];
$json["key"] = "west";
$json_string = json_encode($json);

echo <<<EOD
<html>
<script>
var str0 =
EOD;

echo $json_string.";";

echo <<<EOD
</script>
<body bgcolor="#D9FFFC">
<div id="main_title"></div>
</body>
<script>
document.getElementById("main_title").innerHTML = str0["key"];
</script>
</html>\n
EOD;

?>
