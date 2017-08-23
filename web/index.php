<?php
	//入口文件
	echo '8888';
	error_reporting(0); 
	session_start(); 
	header("Content-type: text/html; charset=utf-8");
	//倒入config文件和框架核心哭文件
	require_once 'config/config.php';
	require_once 'framework/xtzlyp.php';
	XTZLYP::run($config);