<?php
	error_reporting(0);//变量未定义出来报错情况
	//控制器定义方法
	function C($controller,$method){
		//默认是首页方法
		require_once '/Libs/Controller/'.$controller.'Controller.class.php';
		if(!$method){
			echo "方法不存在";die();		
		}
		if(!$controller){
			echo "控制器不存在";die();		
		}
		$str='$obj = new '.$controller.'Controller();$obj->'.$method.'();';
		eval($str);
	}
	
	//定义视图类库 方法
	function ORG($path, $name, $params=array()){// path 是路径  name是第三方类名 params 是该类初始化的时候需要指定、赋值的属性，格式为 array(属性名=>属性值, 属性名2=>属性值2……)
		require_once('/libs/ORG/'.$path.$name.'.class.php');
		$obj = new $name();
		if(!empty($params)){
		foreach($params as $key=>$value){
				$obj->$key = $value;
			}
		}
		return $obj;
	}
	
	
	//模型定义
	function M($name){
		require_once('/Libs/Model/Model.class.php');
		require_once('/Libs/Model/'.$name.'Model.class.php');
		$str='$obj = new '.$name.'Model();';
		eval($str);
		return $obj;
	}
	
	
	
	
	
	