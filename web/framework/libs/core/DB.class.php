<?php
//数据库中间层
class DB{
	public static $db;
	public static function init($sql_type,$sql_config){
		self::$db = new $sql_type;
		self::$db->connect($sql_config);
	}
	
	public static function findOne($sql){
		$query=self::$db->query($sql);
		$result=self::$db->findOne($query);
		return $result[0];
	}
	
	public static function findAll($sql){
		$query=self::$db->query($sql);
		$result=self::$db->findAll($query);
		return $result;
	}

	public static function insert($table,$arr){
		$result=self::$db->insert($table,$arr);
		return $result;
	}
	
	
	public static function save($table,$arr,$where){
		$result=self::$db->update($table,$arr,$where);
		return $result;
	}
	
	
	

}