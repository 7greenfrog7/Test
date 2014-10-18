<?php
	//$request_main="http://www.baidu.com?a=777&b=999";
	//$request_main="http://www.baidu.com";
	$request_main="account/login/?a=777&b=999";
	$request = explode('?', $request_main, 2);
	print_r($request);
	if (count($request) == 1)
  		{
  			$request = explode('&', $request_main, 2);
  		}
  	print_r($request);
  	$uri = array(
			'first' => array_shift($request), 
			'last' => ltrim(implode($request), '?')
		);
	print_r($uri);
	if ($uri['last'])
		{
			parse_str($uri['last'], $query_string);
			
			foreach ($query_string AS $key => $val)
			{
				echo $val;
//				if (!$_GET[$key])
//				{
//					$_GET[$key] = $val;
//				}
			}
		}
	$request = explode("/", $uri['first']);
	print_r($request);
?>