<?php /* Smarty version Smarty-3.1.16, created on 2015-08-10 22:57:32
         compiled from "tpl/Index/arc.html" */ ?>
<?php /*%%SmartyHeaderCode:1651300795567c463847963-46529888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8472b5012ea6e08339901205645c2eac216adaac' => 
    array (
      0 => 'tpl/Index/arc.html',
      1 => 1439218596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1651300795567c463847963-46529888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5567c463abb8f5_85078488',
  'variables' => 
  array (
    'arcInfo' => 0,
    'classInfo' => 0,
    'tagList' => 0,
    'readcord' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5567c463abb8f5_85078488')) {function content_5567c463abb8f5_85078488($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/Xtzlyp/myblog/web/framework/libs/view/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="zh">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title><?php echo $_smarty_tpl->tpl_vars['arcInfo']->value[0]['title'];?>
_xtz_码兵</title> 
  <meta http-equiv="X-UA-Compatible" content="IE=10" /> 
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, width=device-width"/>
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <meta name="author" content="netease" /> 
  <meta name="version" content="1.0" /> 
  <link href="/tpl/Index/blog_2.0/pt_lib_macro.css" type="text/css" rel="stylesheet" /> 
  <link href="/tpl/Index/blog_2.0/pt_page_newpublish_dashboardnew.css" type="text/css" rel="stylesheet" /> 
  <link rel="stylesheet" type="text/css" href="/tpl/Index/blog_2.0/ueditor.css" /> 
  <link href="/tpl/Index/blog_2.0/pt_page_newpublish_dashboard_common.css" type="text/css" rel="stylesheet" /> 
   <style>.ridss{padding-top:10px;height:150px;background:#ffffff;border-radius: 5px;padding-bottom:10px;}
	   .msmd{ height: 34px;background:#888;font: normal 18px/40px 'Microsoft Yahei' ;text-align:center;border-radius: 3px;color:#ffffff;}
	   .ridss a{display:block;float:left;  border: 1px solid #36E5AB; margin-left:6px; height:15px;padding:6px;border-radius: 5px;margin-top:6px;}
		 .order {padding-left:10px;}
	  .order a{  border: 0px ; border-bottom: 1px solid #36E5AB;}
	   </style><script type="text/javascript" src="/pub/edit/third-party/SyntaxHighlighter/shCore.js"></script>
<link rel="stylesheet" href="/pub/edit/third-party/SyntaxHighlighter/shCoreDefault.css"  />
 <script type="text/javascript">
		SyntaxHighlighter.all(); </script>
 </head> 
 <body class="page-lofter" style="height: 100%;padding-top:10px;background:#ffffff;"> 
 
  <div class="g-bd" style="  width: 1028px;"> 
   <div class="g-bdc"> 
    <div class="g-mn" id="main" style="  width: 790px;"> 
	<!-- <div id="publishBarArea" class="publishBarArea">
	  <ul id="publishPostBar" class="m-nav2">
		<li class="user"><a href="/"><img src="/tpl/Index/blog_2.0/face.png"></a></li>
	        <li><a class="publishlink n21" href="/" style="background: url(/tpl/Index/blog_2.0/php.png) no-repeat 999px 999px;" >文字</a></li>
	        <li><a class="publishlink n22" href="#publish=photo" bakhref="/blog/xtz46/new/photo/">图片</a></li>
	        <li><a class="publishlink n23" href="#publish=music" bakhref="/blog/xtz46/new/music/">音乐</a></li>
	        <li><a class="publishlink publishlink-video n24" href="#publish=video" bakhref="/blog/xtz46/new/video/">视频</a></li>
	  </ul>
	</div> -->
	
	
     <div class="m-mlist m-mlist-self"> 
      <div class=""> 
       <div class=""> 
        <div class="" style="padding-top:20px;"> 
         <div class="w-who">
          <a class="js-459511" target="_blank" style="color:red;  font-size: 18px;"> <?php echo $_smarty_tpl->tpl_vars['arcInfo']->value[0]['title'];?>
</a>
         </div> 
         <div class="js-459511">
          <div class="m-icnt"> 
           <div class="cnt"> 
            <div class="txt js-361597" style="">
             <p><!-- 【<?php echo $_smarty_tpl->tpl_vars['classInfo']->value[0]['title'];?>
】 --><?php echo $_smarty_tpl->tpl_vars['arcInfo']->value[0]['dsc'];?>
<?php echo $_smarty_tpl->tpl_vars['arcInfo']->value[0]['content'];?>
<br /></p> 
            </div> 
           </div> 
          </div>
         </div> 
         <div class="w-opt" style="margin: 0px 0 0; "> 
          <div class="optb"> 
           <span class="opti"><a href="" class="js-459511" hidefocus="true">时间:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arcInfo']->value[0]['time'],'%Y-%m-%d ');?>
</a><span class="opticrt"></span></span>
           <span class="opti"><a href="" class="js-459511" hidefocus="true">热度(<?php echo $_smarty_tpl->tpl_vars['arcInfo']->value[0]['hot'];?>
)</a><span class="opticrt"></span></span>
           <span class="opti"><a href="" class="js-459511" hidefocus="true">评论(0)</a><span class="opticrt"></span></span>
           <span class="opti"><a class="js-459511"  href="" title="喜欢">喜欢(<?php echo $_smarty_tpl->tpl_vars['arcInfo']->value[0]['zli'];?>
)<span></span><span></span></a></span> 
          </div> 
         </div> 
        </div>  
       </div> 
      </div> 
     </div>
     
  </div> 
  
    <div id="rside" class="g-sd"> 
     <div class="g-box" style="margin-top:30px;"> 
      <div class="m-menu"> 
       <div class="msmd" >技术标签</div> 
       <div class="menum" style=" margin-top:1px;"> 
	    <div class="ridss "> 
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tagList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
				<a href="tag_<?php echo $_smarty_tpl->tpl_vars['tagList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tagList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a> 
			<?php endfor; endif; ?>
        </div> 
       </div> 
       <div class="menub"></div> 
      </div> 
	  
	  <div class="" style="margin-top:30px;"> 
       <div class="msmd">阅读排行榜</div> 
       <div class="" style=" margin-top:1px;"> 
	    <div class="ridss order" style="height:270px;"> 
			<ul>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['readcord']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
				<li><a href=""  style="white-space: nowrap;text-overflow: ellipsis;  overflow: hidden; width:90%;"><?php echo $_smarty_tpl->tpl_vars['readcord']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a> </li>
			<?php endfor; endif; ?>
			</ul>
        </div> 
       </div> 
       <div class="menub"></div> 
      </div> 
     </div> 
	 </div>
	 
	 
	 
	 
   
 </body>
</html><?php }} ?>
