<?php
$header = "From: Donald Tusk <donald.tusk@sejm.gov.pl>\nMAIL FROM: <donald.tusk@sejm.gov.pl>\n";
var_dump(mail('ardin@poczta.fm', 'test without from', 'body',$header));
?>

