<?php
	//框架核心入口文件
	//1).引入function.php  db公共操作类库   本框架提供的mysql具体操作类  视图公共类   本框架提供的smarty提供的操作类引入
	$currentdir = dirname(__FILE__);
	 require_once($currentdir.'/include.list.php');
	 foreach ($paths as $va){
	 	require_once($currentdir.'/'.$va);
	 }
	 
	 //初始化
	 class XTZLYP{
	 	public static $controller;
		public static $method;
		private static $config;
	 	//初始化数据库类型
		private static function init_db(){
			DB::init(self::$config['sql_type'], self::$config['sql_config']);
		}
	 	//初始化视图类型
		private static function init_view(){
			VIEW::init(self::$config['templete'], self::$config['templete_config']);
		}
	 	//初始化传过来的控制器和对应的方法
	 	//这个地方可以对短路有进行设置
		private static function init_controllor(){
			self::$controller = isset($_GET['c'])?root($_GET['c']):'Index';
		}
		private static function init_method(){
			self::$method = isset($_GET['m'])?root($_GET['m']):'index';
		}
		public static function run($config){
			self::$config = $config;
			self::init_db();
			self::init_view();
			self::init_controllor();
			self::init_method();
			
			C(self::$controller, self::$method);
		}
	 	
	 }