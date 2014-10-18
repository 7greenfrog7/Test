<?php
	//$request_main="http://wenda.wecenter.com/question/20035?notification_id=191166&rf=false&column=log";
	$request_main="http://www.biuuu.com/app/home/main.php?p=222&q=biuuu";
	//$request_main="http://wenda.wecenter.com/?www";
	$requests = explode('?/', $request_main);
	print_r($requests);
	echo count($request_main);
	//echo dirname("/main.php");
	$request_main = preg_replace('/^' . preg_quote(dirname("/main.php"), '/') . '/i', '', $request_main);
	echo $request_main;
?>