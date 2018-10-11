<?php

$seconds_to_cache = 60;
$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
header("Expires: $ts");
header("Pragma: cache");
header("Cache-Control: max-age=$seconds_to_cache");

echo date("Y-m-d H:i:s"); 

?>
