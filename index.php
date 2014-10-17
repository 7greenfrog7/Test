<?php
require_once 'system.php';//将get_setting()这个函数全部读取到这个文件中，所以下面run()中可以调用get_setting()
AWS_APP::run();
//有一种感觉：只要在这个文件中加载的函数或者php文件，都是在这个文件中（在执行的时候代码也真实的require到本文件中）
//按顺序执行
?>
