<?php
	class IndexController{
		public function index(){
		//	echo strtotime('2015-07-26');
			if($_GET['tagid']){
				//$condition[''];
				$where['tag']=array('like','%,'.$_GET['tagid'].',%');	
			}
			if($_GET['pid']){
				$where['pid']=$_GET['pid'];				
			}
			/*获取栏目*/
			$class=M('Class');
			$classList=$class->findall();
			
			
			/*获取所有tags标签*/
			$tags=M('Tag');
			$tagList=$tags->findall();
			
			/*获取最新的文章*/
			$arcticle=M('Content');
			$arclist=$arcticle->findall($where,array('title','pid','time','dsc','id','hot','zli'),array(),'limit 5');
			foreach($arclist as $ke=>$va){
				$arclist[$ke]=$va;
				$arclist[$ke]['class']=$class->findOne(array('id'=>$va['pid']),array('title'));
				//$arclist[$par]=$tags->findOne(array('id'=>$va['pid']),array('title'));
			}
			
			
			// $pp=$arcticle->findall($where,array('title','pid','time','dsc','id','hot','zli'),array(),'limit 22,2');
			// print_r($pp);
			
			/*获取排行榜*/
			$redis = new Redis();
			$redis->connect('121.40.144.140', 6379);
			$data=$redis->zRevRange('readsort',0,7,true);
			$readcord=array();
			foreach($data as $k=>$v){
				$pre=$arcticle->findOne(array('id'=>$k),array('title','id'));
				$readcord[]=$pre[0];
			}
			if($_SESSION['user']){
				VIEW::assign(array('userid'=>1));
			}
			VIEW::assign(array('classList'=>$classList,'arclist'=>$arclist,'tagList'=>$tagList,'readcord'=>$readcord,
			'tagid'=>$_GET['tagid'],
			'pid'=>$_GET['pid'],
			'last_id'=>$va['id']));
			VIEW::display('Index/index.html');
		}
		
		public function arc(){
			if($_GET['tag']){
				//$condition[''];
			}
			if($_GET['pid']){
				$where['pid']=$_GET['pid'];				
			}
			/*获取栏目*/
			$class=M('Class');
			$classList=$class->findall();
			
			/*获取最新的文章*/
			$arcticle=M('Content');
			$arclist=$arcticle->findall($where);
			if($_SESSION['user']){
				VIEW::assign(array('userid'=>1));
			}
			
			
			/*获取本篇文章*/
			if($_GET['pid']){
				$arcInfo=$arcticle->findOne(array('id'=>$_GET['pid']));
				$arcInfo['classInfo']=$class->findOne(array('id'=>$arcInfo[0]['pid']),array('title'));
				//更新文章访问量
				$arcticle->save(array('id'=>$_GET['pid']),array('hot'=>$arcInfo[0]['hot']+1));
				VIEW::assign(array('arcInfo'=>$arcInfo));
				
				
				
			}
			//print_r($arcInfo);
			//每当文章打开的时候 就 给对应的数据放到redis的zet排名上
			$redis = new Redis();
			$redis->connect('121.40.144.140', 6379);
			$score=$redis->zScore('readsort',$_GET['pid']);
			if($score){
				$redis->zAdd('readsort',$score+1,$_GET['pid']);
			}else{
				$redis->zAdd('readsort',1,$_GET['pid']);
			}
			$data=$redis->zRevRange('readsort',0,7,true);
			$readcord=array();
			foreach($data as $k=>$v){
				$pre=$arcticle->findOne(array('id'=>$k),array('title','id'));
				$readcord[]=$pre[0];
			}
			
			//$arcInfo=$arcticle->findOne(array('id'=>8));
			/*获取所有tags标签*/
			$tags=M('Tag');
			$tagList=$tags->findall();
			VIEW::assign(array('classList'=>$classList,'arclist'=>$arclist,'tagList'=>$tagList,'readcord'=>$readcord));
			VIEW::display('Index/arc.html');
		}
		
		public function getredis(){
			die();
			$redis = new Redis();
			$redis->connect('121.40.144.140', 6379);
			$result = $redis->set('test',"11111111111");  
			//var_dump($result);    //结果：bool(true)  
			$getinfo=$redis->get('test');
			var_dump($getinfo);
			$redis->delete('test');
			
			//写入排行榜
			$redis->zAdd('readsort',45,'1');
			$redis->zAdd('readsort',5,'2');
			$redis->zAdd('readsort',55,'3');
			$redis->zAdd('readsort',45,'4');
			$redis->zAdd('readsort',86,'5');
			$redis->zAdd('readsort',8,'6');
			$redis->zDelete('readsort','6');
			$redis->zDelete('readsort','5');
			$redis->zDelete('readsort','4');
			$redis->zDelete('readsort','3');
			$redis->zDelete('readsort','2');
			$redis->zDelete('readsort','1');
			//$data=$redis->zRange('readsort',0,-1,true);
			//从大到小排列zRevRange
			$data=$redis->zRevRange('readsort',0,-1,true);
			var_dump($data);
	
		}
		
		
		public function getlist(){
			if($_POST['tagid']){
				//$condition[''];
				$where['tag']=array('like','%,'.$_POST['tagid'].',%');	
			}
			if($_POST['pid']){
				$where['pid']=$_POST['pid'];				
			}
			$where['id']=array('<',$_POST['last_id']);
			$arcticle=M('Content');
			$arclist=$arcticle->findall($where,array('title','pid','time','dsc','id','hot','zli'),array(),'limit 5');
			//$where['tag']=array('like','%,'.$_GET['tagid'].',%');
			$class=M('Class');
			foreach($arclist as $ke=>$va){
				$arclist[$ke]=$va;
				$arclist[$ke]['time']=date('Y-m-d',$va['time']);
				$arclist[$ke]['class']=$class->findOne(array('id'=>$va['pid']),array('title'));
			}
			echo json_encode(array('status'=>1,'arc'=>$arclist));
		}
		
		
		
		
	}
?>