<?php
	class AdminController{
		public function index(){
			/*获取最新的文章*/
			$arcticle=M('Content');
			$arclist=$arcticle->findall($where,array('title','id','pid','tag','time'));
			VIEW::assign(array('arclist'=>$arclist));
			VIEW::display('Admin/lists.html');
		}
		
		public function add(){
			if($_POST){
				$arcticle=M('Content');
				$add=$arcticle->insert(array('pid'=>$_POST['class'],'dsc'=>$_POST['dsc'],'tag'=>','.implode(',',$_POST['tag']).',','title'=>$_POST['title'],'content'=>$_POST['content'],'time'=>time(),'month'=>date('Ym')));
				if($add){
					echo '添加成功';
					
				}
			}else{
				/*获取栏目*/
				$class=M('Class');
				$classList=$class->findall();
				/*获取最新的文章*/
				$arcticle=M('Content');
				$arclist=$arcticle->findall($where);
				/*获取所有tags标签*/
				$tags=M('Tag');
				$tagList=$tags->findall();
				VIEW::assign(array('classList'=>$classList,'arclist'=>$arclist,'tagList'=>$tagList));
				VIEW::display('Admin/add.html');
			}
		}
		
		
		
		public function eidt(){
			if($_POST){
				$arcticle=M('Content');
				$add=$arcticle->insert(array('dsc'=>$_POST['dsc'],'title'=>$_POST['title'],'content'=>$_POST['content']));
				if($add){
					echo '添加成功';
				}
			}else{
				/*获取栏目*/
				/*获取最新的文章*/
				$arcticle=M('Content');
				$arclist=$arcticle->findOne(array('id'=>$_GET['pid']));
				//print_r($arclist);
				VIEW::assign(array('arc'=>$arclist));
				VIEW::display('Admin/eidt.html');
			}
		}
	}
?>