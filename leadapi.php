<?php

ini_set("allow_url_fopen", 1);

$json = file_get_contents('http://localhost/Salesforce/cnx.php');
$obj = json_decode($json,true);

echo $obj["prospects"][0]["ID"];
echo $obj["prospects"][0]["EMAIL"];


?>