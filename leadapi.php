<?php

ini_set("allow_url_fopen", 1);
$purejsondata = file_get_contents('http://www.reporting.rf.gd/SF/cnx.php?token=YOUR_TOKEN');
$data = json_decode($purejsondata,true);

echo $data["prospects"][0]["ID"]; //example of retreiving the first lead's id
echo $data["prospects"][0]["EMAIL"];//example of retreiving the first lead's Email

?>
