<?php

$worker = new GearmanWorker();
$worker->addServer();
$i=1;
$worker->addFunction("create_vps", function(GearmanJob $job) {
    global $i;
    $workload = json_decode($job->workload());
    echo "Creating vps [".$i++."]: " . print_r($workload,1);

    sleep (10);
    echo "  done..\n";
});

while ($worker->work());

