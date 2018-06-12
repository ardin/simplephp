<?php

ini_set('session.gc_maxlifetime',60*60*24);
ini_set('session.gc_probability',1);
ini_set('session.gc_divisor',1);
ini_set('session.cookie_lifetime',60*60*24); // IMPORTANT

// ini_set('session.save_handler','memcached');					// form memcached must be  memcached, NOT mmemcache!
// ini_set('session.save_path','mysql.db.krk.prod.service.ienv:11211');		// for memcached must be server:port, NOT tcp://server:port

//echo ini_get('session.cookie_lifetime');

session_start();

echo "1. Showing session: ".$_SESSION['test']."<br>";

if (! $_SESSION['test']) {
	$_SESSION['test'] = date("Y-m-d H:i:s");
	echo "Setting session ". date("Y-m-d H:i:s")."<br>";
}

echo "2. Showing session: ".$_SESSION['test']."<br>";
