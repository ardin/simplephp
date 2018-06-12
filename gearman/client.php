<?php
$gmClient = new GearmanClient();
$gmClient->addServer('127.0.0.1');

print('Test gearman client' . PHP_EOL);

$resp = $gmClient->do('Test/TestTask', 'Data');

printf('Worker reply: %s' . PHP_EOL, $resp);
