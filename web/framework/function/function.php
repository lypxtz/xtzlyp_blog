<?php

	function root($str){
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
	}
	function C($controller,$method){
		//开始执行
		//echo '/Libs/Controller/'.$controller.'Controller.class.php';
		require_once('Libs/Controller/'.$controller.'Controller.class.php');
		eval('$obj = new '.$controller.'Controller();$obj->'.$method.'();');
	}
	
	function M($table){
		require_once('Libs/Model/'.$table.'Model.class.php');
		eval('$obj = new '.$table.'Model();');
		return $obj;
	}