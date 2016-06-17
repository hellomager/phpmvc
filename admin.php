<?php
	header("Content-type: text/html; charset=utf-8");
	//url形式  index.php?controller=控制器名&method=方法名
	error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
	require_once('config.php');
	require_once('framework/pc.php');
	PC::run($config);
?>