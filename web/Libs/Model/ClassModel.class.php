<?php
	class ClassModel{
		public $_table = 'blog_class';
		public function findall($where=array()){//array('id'=>1,'pid'=>1)
			if(count($where)>=1){
				foreach($where as $k=>$v){
					$str.=$k.'="'.$v.'" and ';
				}
				$sql='select * from '.$this->_table.' where id="'.$username.'"';
			}else{
				$sql='select * from '.$this->_table;
			}
			//print_r($sql);
			//die();
			return DB::findAll($sql);
			
		}
		
		public function findOne($where=array(),$field=array('*')){
			//array('id'=>1,'pid'=>1)
			$fieldstr=implode(',',$field);
			if(count($where)>=1){
				foreach($where as $k=>$v){
					$str.=$k.'="'.$v.'" and ';
				}
				$str=substr($str, 0, -5);
				$sql='select '.$fieldstr.' from '.$this->_table.' where '.$str;
			}else{
				$sql='select '.$fieldstr.' from '.$this->_table;
			}
		//	print_r();
			$result=DB::findAll($sql);
			return $result[0];
		}
		
		
	}
?>