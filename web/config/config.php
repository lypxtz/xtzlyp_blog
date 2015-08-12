<?php
$config=array(
//'配置项'=>'配置值'
'APP_GROUP_LIST' => 'Home,Admin', //项目分组设定
'defaultController'  => 'Index', //默认分组
'defaultMethod'  => 'index', //默认分组
/* 数据库配置*/
    'sql_type'               => 'mysql',     // 数据库类型
	'sql_config'=>array(
		    'db_host'               => '121.40.144.140', // 服务器地址
		    'db_name'               => 'blog',          // 数据库名
		    'db_user'               => 'root',      // 用户名
		    'db_psw'                => 'xtzlyp',          // 密码
		    'db_port'               => 3306,        // 端口
		    'db_prefix'             => 'li_',  // 数据库表前缀
			'dbcharset' 				=> 'utf8'   // 数据库表前缀
		),
/* 模板配置*/
	'templete'=>'Smarty',
	'templete_config'=>array('left_delimiter'=>'<{', 'right_delimiter' => '}>', 'template_dir' => 'tpl', 'compile_dir' => 'template_c'),
);
?>