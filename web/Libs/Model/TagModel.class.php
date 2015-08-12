<?php
	class TagModel{
		public $_table = 'blog_tag';
		public function findall($where=array()){//array('id'=>1,'pid'=>1)
			if(count($where)>=1){
				foreach($where as $k=>$v){
					$str.=$k.'="'.$v.'" and ';
				}
				;
				$str=substr($str, 0, -5);
				$sql='select * from '.$this->_table.' where '.$str;
			}else{
				$sql='select * from '.$this->_table;
			}
			//print_r($sql);
			//die();
			return DB::findAll($sql);
			
		}
	}
?>