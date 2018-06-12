<?php

$vm_name = "new-vps";
$vm_description = "Installed via extra cli";
$ram=2;
$hdd=12;
$network="Bond 0+1";
$cpus="1";

$client = new GearmanClient();
$client->addServer();
$result = $client->doBackground("create_vps", json_encode(array(
  'vm_name' => $vm_name,
  'vm_description' => $vm_description,
  'ram' => $ram,
  'hdd' => $hdd,
  'network' => $network,
  'cpus' => $cpus,
)));
