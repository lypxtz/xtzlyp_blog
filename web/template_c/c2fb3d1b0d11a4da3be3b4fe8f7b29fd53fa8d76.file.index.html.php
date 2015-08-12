<?php /* Smarty version Smarty-3.1.16, created on 2015-08-10 14:13:33
         compiled from "tpl/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1571409937556588f230e161-65038955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2fb3d1b0d11a4da3be3b4fe8f7b29fd53fa8d76' => 
    array (
      0 => 'tpl/Index/index.html',
      1 => 1439187217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1571409937556588f230e161-65038955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_556588f23bc276_66754551',
  'variables' => 
  array (
    'arclist' => 0,
    'last_id' => 0,
    'tagList' => 0,
    'readcord' => 0,
    'tagid' => 0,
    'pid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556588f23bc276_66754551')) {function content_556588f23bc276_66754551($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/Xtzlyp/myblog/web/framework/libs/view/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="zh">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title>xtz_编程小兵</title> 
  <meta http-equiv="X-UA-Compatible" content="IE=10" /> 
   <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" /> 
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <meta name="author" content="netease" /> 
  <meta name="version" content="1.0" /> 
  <link href="/tpl/Index/blog_2.0/pt_lib_macro.css" type="text/css" rel="stylesheet" /> 
  <link href="/tpl/Index/blog_2.0/pt_page_newpublish_dashboardnew.css" type="text/css" rel="stylesheet" /> 
  <link rel="stylesheet" type="text/css" href="/tpl/Index/blog_2.0/ueditor.css" /> 
  <link href="/tpl/Index/blog_2.0/pt_page_newpublish_dashboard_common.css" type="text/css" rel="stylesheet" /> 
  
	<script type="text/javascript" src="/tpl/Index/blog_2.0/pb/js/jquery.min.js"></script>
	<script type="text/javascript" src="/tpl/Index/blog_2.0/pb/js/jquery.lazyload.min.js"></script>
	<script type="text/javascript" src="/tpl/Index/blog_2.0/pb/js/blocksit.min.js"></script>
  
  
   <style>.ridss{padding-top:10px;height:150px;background:#ffffff;border-radius: 5px;padding-bottom:10px;}
	   .msmd{ height: 34px;background:#888;font: normal 18px/40px 'Microsoft Yahei' ;text-align:center;border-radius: 3px;color:#ffffff;}
	   .ridss a{display:block;float:left;  border: 1px solid #36E5AB; margin-left:6px; height:15px;padding:6px;border-radius: 5px;margin-top:6px;}
		 .order {padding-left:10px;}
	  .order a{  border: 0px ; border-bottom: 1px solid #36E5AB;}
	   </style>
 </head> 
 <body class="page-lofter" style="height: 100%;padding-top:10px;"> 
 
  <div class="g-bd"> 
   <div class="g-bdc"> 
    <div class="g-mn" id="main"> 
	<div id="publishBarArea" class="publishBarArea">
	  <ul id="publishPostBar" class="m-nav2">
		<li class="user"><a href="/"><img src="/tpl/Index/blog_2.0/face.png"></a></li>
	        <li><a class="publishlink n21" href="/class_1"  >php</a></li>
	        <li><a class="publishlink n22" href="/class_2" bakhref="/blog/xtz46/new/photo/">数据库</a></li>
	        <li><a class="publishlink n23" href="/class_6" bakhref="/blog/xtz46/new/music/">代码人生</a></li>
	        <li><a class="publishlink publishlink-video n24" href="/class_7" bakhref="/blog/xtz46/new/video/">新世界</a></li>
	  </ul>
	</div>
	
	<div id="container">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['arclist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
     <div class="m-mlist m-mlist-self"> 
      <div class="mlistcnt"> 
       <div class="isay"> 
        <div class="isaym" style="padding-top:20px;"> 
         <div class="w-who">
          <a href="/arc_<?php echo $_smarty_tpl->tpl_vars['arclist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" class="js-459511" target="_blank"><?php echo $_smarty_tpl->tpl_vars['arclist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a>
<!--           <span class="whosep js-459511" style="">转载自</span>
          <span class="whosep js-459511" style="">来源</span> -->
         </div> 
         <div class="js-459511">
          <div class="m-icnt"> 
           <div class="cnt"> 
            <div class="txt js-361597" style="">
             <p>【<?php echo $_smarty_tpl->tpl_vars['arclist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['class']['title'];?>
】<?php echo $_smarty_tpl->tpl_vars['arclist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['dsc'];?>
<br /></p> 
             <!-- <p><strong>戳→_→关注&nbsp;</strong><a target="_blank" loftermentionblogid="54186" href=""><strong>@非僮</strong></a><strong>&nbsp;</strong></p> -->
            </div> 
           </div> 
          </div>
         </div> 
         <div class="w-opt"> 
          <div class="optb"> 
           <span class="opti"><a href="" class="js-459511" hidefocus="true">时间:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arclist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['time'],'%Y-%m-%d ');?>
</a><span class="opticrt"></span></span>
           <span class="opti"><a href="" class="js-459511" hidefocus="true">热度(<?php echo $_smarty_tpl->tpl_vars['arclist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['hot'];?>
)</a><span class="opticrt"></span></span>
           <span class="opti"><a href="" class="js-459511" hidefocus="true">评论(0)</a><span class="opticrt"></span></span>
           <span class="opti"><a class="js-459511"  href="" title="喜欢">喜欢(<?php echo $_smarty_tpl->tpl_vars['arclist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['zli'];?>
)<span></span><span></span></a></span> 
          </div> 
         </div> 
        </div> 
        <div class="isayb"></div> 
       </div> 
      </div> 
     </div>
	 <?php endfor; endif; ?>
     </div> 
  </div> 
  <input name="last_id" type="hidden" class="last_id" value="<?php echo $_smarty_tpl->tpl_vars['last_id']->value;?>
">
    <div id="rside" class="g-sd"> 
     <div class="g-box" style="margin-top:130px;"> 
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
				<li><a href="/arc_<?php echo $_smarty_tpl->tpl_vars['readcord']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"  style="white-space: nowrap;text-overflow: ellipsis;  overflow: hidden; width:90%;"><?php echo $_smarty_tpl->tpl_vars['readcord']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a> </li>
			<?php endfor; endif; ?>
			</ul>
        </div> 
       </div> 
       <div class="menub"></div> 
      </div> 
     </div> 
	 </div>

<script type="text/javascript">
$(function(){

	$(window).scroll(function(){
			// 当滚动到最底部以上50像素时， 加载新内容
		
		if ($(document).height() - $(this).scrollTop() - $(this).height()<50){
			//ajax 获取
			//alert($('.last_id').val());
			var aj = $.ajax({
				url:'/index.php?c=Index&m=getlist',
				data:{
						<?php if ($_smarty_tpl->tpl_vars['tagid']->value) {?>tagid : <?php echo $_smarty_tpl->tpl_vars['tagid']->value;?>
,<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['pid']->value) {?>pid : <?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
,<?php }?>
						last_id : $('.last_id').val(),
				}, 
				type:'post', 
				cache:false,    
				dataType:'json',    
				success:function(data) {
					if(data.status ==1){
						var arclist = data.arc;
						//alert(arclist[0]['title']);
						$.each(arclist,function(n,value) {
							var str='<div class="m-mlist m-mlist-self"> '
										  +'<div class="mlistcnt"> '
										   +'<div class="isay"> '
											+'<div class="isaym" style="padding-top:20px;"> '
											 +'<div class="w-who">'
											  +'<a href="/arc_'+value['id']+'" class="js-459511" target="_blank">'+value['title']+'</a>'
											 +'</div> '
											 +'<div class="js-459511">'
											 +' <div class="m-icnt"> '
											  +' <div class="cnt"> '
											+'	<div class="txt js-361597" style="">'
											+'	 <p>【'+value['class']['title']+'】'+value['dsc']+'<br /></p> '
											+'	</div> '
											 +'  </div>' 
											+'  </div>'
											+' </div> '
											+' <div class="w-opt"> '
											+'  <div class="optb"> '
											+'   <span class="opti"><a href="" class="js-459511" hidefocus="true">时间:'+value['time']+'</a><span class="opticrt"></span></span>'//
											 +' <span class="opti"><a href="" class="js-459511" hidefocus="true">热度('+value['hot']+')</a><span class="opticrt"></span></span>'
											+'   <span class="opti"><a href="" class="js-459511" hidefocus="true">评论(0)</a><span class="opticrt"></span></span>'
											+'   <span class="opti"><a class="js-459511"  href="" title="喜欢">喜欢('+value['zli']+')<span></span><span></span></a></span> '
											+'  </div> '
											+' </div> '
											+'</div> '
											+'<div class="isayb"></div> '
										   +'</div> '
										  +'</div>' 
										 +'</div>';
										
							$('#container').append(str);
							$('.last_id').val(value['id']);
						});
					}
				 },
				 error : function() {    
					  alert('异常!');
				 }
			});
		}
	});
	
	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth < 1100) {
			conWidth = 880;
			col = 4;
		} else {
			conWidth = 1100;
			col = 5;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({
				numOfCol: col,
				offsetX: 8,
				offsetY: 8
			});
		}
	});
});
</script>
	 
	 
   
 </body>
</html><?php }} ?>
