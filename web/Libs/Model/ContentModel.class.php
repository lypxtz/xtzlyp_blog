<?php
	class ContentModel{
		public $_table = 'blog_content';
		public function findall($where=array(),$field=array('*'),$order,$limit=''){
			if(empty($order)){
				$order=array('node'=>'id','o'=>'desc');
			}
			
			//array('id'=>1,'pid'=>1)
			$fieldstr=implode(',',$field);
			
			if(count($where)>=1){
				foreach($where as $k=>$v){
					if(is_array($v)){
						$str.=$k.' '.$v[0].'"'.$v[1].'" and ';
					}else{
						$str.=$k.'="'.$v.'" and ';
					}
				}
				$str=substr($str, 0, -5);
				$sql='select '.$fieldstr.' from '.$this->_table.' where '.$str.' order by '.$order['node'].' '.$order['o'].' '.$limit;
				
			}else{
				$sql='select '.$fieldstr.' from '.$this->_table.' order by '.$order['node'].' '.$order['o'].' '.$limit;
			}
			//print_r($sql);
			//die();
			return DB::findAll($sql);
		}
		
		
		
		
		
		
		public function insert($arr=array()){
			return DB::insert($this->_table,$arr);
		}
		
		public function findOne($where=array(),$field=array('*')){
			//array('id'=>1,'pid'=>1)
			$fieldstr=implode(',',$field);
			if(count($where)>=1){
				foreach($where as $k=>$v){
					$str.=$k.'="'.$v.'" and ';
				}
				;
				$str=substr($str, 0, -5);
				$sql='select '.$fieldstr.' from '.$this->_table.' where '.$str;
			}else{
				$sql='select '.$fieldstr.' from '.$this->_table;
			}
			return DB::findAll($sql);
		}
		
		
		public function save($where=array(),$arr=array()){
			if(count($where)>=1){
				foreach($where as $k=>$v){
					$str.=$k.'="'.$v.'" and ';
				}
				$str=substr($str, 0, -5);
			}else{
				return 'error';
			}
			return DB::save($this->_table,$arr,$str);
		}
		
		
	}
?>