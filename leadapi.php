<?php

ini_set("allow_url_fopen", 1);

$purejsondata = file_get_contents('http://www.reporting.rf.gd/SF/cnx.php');
$data = json_decode($purejsondata,true);

echo $data["prospects"][0]["ID"];
echo $data["prospects"][0]["EMAIL"];


?>
