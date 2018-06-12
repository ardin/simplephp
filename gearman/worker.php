<?php
$gmWorker = new GearmanWorker();
$gmWorker->addServer('127.0.0.1');
$gmWorker->addFunction("Test/TestTask", "my_testTask");

while ($gmWorker->work());

/**
 * @param GearmanJob $job
 * @return mixed
 */
function my_testTask($job)
{
	sleep(3);
	printf('Received: %s' . PHP_EOL, $job->workload());
  return strlen((string) $job->workload());
}
