<?php



	$redis = new Redis();


	$redis->open('192.168.50.100',6379);

	$time = microtime(true);

	$redis->set('myname','ikodota');

	for ($i = 0; $i < 1000; $i++) {
		$redis->set("myname$i","ikodota$i <br/>");
	}

	echo $redis->get('myname');

