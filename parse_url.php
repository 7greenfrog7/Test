<?php 
	$request_main="app/home/?p=222&q=biuuu";
	$requests = explode('/?',$request_main);
	print_r($requests);
			//QUERY_URI="/index.php?p=222&q=biuuu"
			//QUERY_URI="/?p=222&q=biuuu"
	if (count($requests) == 1 AND dirname($_SERVER['SCRIPT_NAME']) != '/')//当前脚本目录不是根目录
	//http://www.biuuu.com/?p=222&q=biuuu
	//QUERY_URI="/index.php?p=222&q=biuuu"
	//http://www.biuuu.com/index.php?p=222&q=biuuu
	//$_SERVER["SCRIPT_NAME"]="/index.php"
	{
		$request_main = preg_replace('/^' . preg_quote(dirname($_SERVER['SCRIPT_NAME']), '/') . '/i', '', $request_main);
				//$request_main=			
	}
?>