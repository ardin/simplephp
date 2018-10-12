<?php

// set no-cache headers

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ". gmdate( 'D, d M Y H:i:s' ) . " GMT");
header("Pragma: no-cache");

echo date("Y-m-d H:i:s"); 

?>
