<?php /* Smarty version Smarty-3.1.16, created on 2015-08-07 12:50:10
         compiled from "tpl/Admin/add.html" */ ?>
<?php /*%%SmartyHeaderCode:112787226055668ef1aa9fd6-61455127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e82fc4ec0e8c7c6978a812d38beb9b7c827db41' => 
    array (
      0 => 'tpl/Admin/add.html',
      1 => 1438923011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112787226055668ef1aa9fd6-61455127',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55668ef1b409e4_00243490',
  'variables' => 
  array (
    'tagList' => 0,
    'classList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55668ef1b409e4_00243490')) {function content_55668ef1b409e4_00243490($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>后台首页</title>	 <script type="text/javascript" charset="utf-8" src="/pub/edit/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/pub/edit/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/pub/edit/lang/zh-cn/zh-cn.js"></script>

    <link rel="stylesheet" href="/tpl/Admin/css/vendor/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="/tpl/Admin/css/vendor/dropzone/dropzone.css">
    <link rel="stylesheet" href="/tpl/Admin/css/vendor/slider/slider.css">
    <link rel="stylesheet" href="/tpl/Admin/css/vendor/bootstrap-datepicker/datepicker.css">
    <link rel="stylesheet" href="/tpl/Admin/css/vendor/timepicker/jquery.timepicker.css">
    <link rel="stylesheet" href="/tpl/Admin/css/vendor/offline/theme.css">
    <link rel="stylesheet" href="/tpl/Admin/css/vendor/pace/theme.css">
    <link rel="stylesheet" href="/tpl/Admin/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tpl/Admin/css/css/font-awesome.min.css">
    <link rel="stylesheet" href="/tpl/Admin/css/css/animate.min.css">
    <link rel="stylesheet" href="/tpl/Admin/css/css/panel.css">
    <link rel="stylesheet" href="/tpl/Admin/css/css/skins/palette.1.css" id="skin">
    <link rel="stylesheet" href="/tpl/Admin/css/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="/tpl/Admin/css/css/main.css">
    <script src="/tpl/Admin/css/vendor/modernizr.js"></script>
	<style>.app>.header .brand {background-color: #17c3e5;}</style>
	
	

</head>
<body>
   <div class="app">

        <header class="header header-fixed navbar">
            <div class="brand">
                <a href="javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>
                <a href="index.html" class="navbar-brand text-white">
                    <i class="fa fa-stop mg-r-sm"></i>
                    <span class="heading-font">
<b>博客管理</b>
</span>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right off-right">
                <li class="hidden-xs">
                    <a href="javascript:;">我是管理员</a>
                </li>
                <li class="quickmenu">
                    <a href="javascript:;" data-toggle="dropdown">
                        <img src="img/avatar.jpg" class="avatar pull-left img-circle" alt="user" title="user">
                        <i class="caret mg-l-xs hidden-xs no-margin"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                        <li>
                            <a href="javascript:;">
                                <div class="pd-t-sm">
                                    gerald@morris.com
                                    <br>
                                    <small class="text-muted">4.2 MB of 51.25 GB used</small>
                                </div>
                                <div class="progress progress-xs no-radius no-margin mg-b-sm">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="profile.html">Settings</a>
                        </li>
                        <li>
                            <a href="javascript:;">Upgrade</a>
                        </li>
                        <li>
                            <a href="javascript:;">Notifications
<div class="badge bg-danger pull-right">3</div>
</a>
                        </li>
                        <li>
                            <a href="javascript:;">Help ?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="signin.html">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>

        <section class="layout">

            <aside class="sidebar canvas-left">

                <nav class="main-navigation">
                    <ul>
                        <li>
                            <a href="/index.php?c=Admin&m=index">
                                <i class="fa fa-coffee"></i>
                                <span>博客管理</span>
                            </a>
                        </li>
                        <li class="dropdown active show-on-hover" >
                            <a href="/index.php?c=Admin&m=add">
                                <i class="fa fa-ellipsis-h"></i>
                                <span>新增博文</span>
                            </a>
                         </li>
						   <li class="dropdown active show-on-hover">
                            <a href="/">
                                <i class="fa fa-coffee"></i>
                                <span>返回首页</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>


            <section class="main-content">
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content ">
                                <section class="tab-pane active" id="elements">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <section class="panel">
											<form action="" method="post">
                                                <header class="panel-heading">新增博文<button type="submit" class="btn btn-success btn-outline" style="margin-left:50px;">提交保存</button></header>
												
                                                <div class="panel-body">
                                                    <div class="form-horizontal bordered-group" role="form">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">博客题目</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="title">
                                                            </div>
                                                        </div>
														
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">标签</label>
                                                            <div class="col-sm-10">
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
																<label class="checkbox checkbox-custom" style="width:120px;float:left;">
                                                                    <input type="checkbox" name="tag[]" value="<?php echo $_smarty_tpl->tpl_vars['tagList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" >
                                                                    <i class="checkbox checked"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['tagList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</label>
															<?php endfor; endif; ?>
                                                            </div>
                                                        </div>
														
														<div class="form-group">
                                                            <label class="col-sm-2 control-label">分类</label>
                                                            <div class="col-sm-10">
															<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['classList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
																 <label class="radio radio-custom" style="width:100px;float:left;">
                                                                    <input type="radio" name="class" value="<?php echo $_smarty_tpl->tpl_vars['classList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"  >
                                                                    <i class="radio"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['classList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</label>
															<?php endfor; endif; ?>
                                                            </div>
                                                        </div>
                                                        
														
														<div class="form-group">
                                                            <label class="col-sm-2 control-label">简单描述</label>
                                                            <div class="col-sm-10">
															      <textarea   class="form-control" contenteditable="true"  name="dsc" style="height:100px;"></textarea>
                                                          
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="form-group" action="" method="post">
                                                            <div class="col-sm-10">
															<textarea id="kkeditor"  class="form-control" contenteditable="true"  name="content" style="height:500px;width:100%;"></textarea>
                                                            </div>  
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                               </section>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </section>
    </div>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('kkeditor');

    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>

    <script src="/tpl/Admin/css/vendor/jquery-1.11.1.min.js"></script>
    <script src="/tpl/Admin/css/bootstrap/js/bootstrap.js"></script>
    <script src="/tpl/Admin/css/vendor/jquery.easing.min.js"></script>
    <script src="/tpl/Admin/css/vendor/jquery.placeholder.js"></script>
    <script src="/tpl/Admin/css/vendor/fastclick.js"></script>


    <script src="/tpl/Admin/css/vendor/bootstrap-select/bootstrap-select.js"></script>
    <script src="/tpl/Admin/css/vendor/dropzone/dropzone.js"></script>
    <script src="/tpl/Admin/css/vendor/parsley.min.js"></script>
    <script src="/tpl/Admin/css/vendor/jquery.maskedinput.min.js"></script>
    <script src="/tpl/Admin/css/vendor/fuelux/checkbox.js"></script>
    <script src="/tpl/Admin/css/vendor/fuelux/radio.js"></script>
    <script src="/tpl/Admin/css/vendor/fuelux/wizard.js"></script>
    <script src="/tpl/Admin/css/vendor/fuelux/pillbox.js"></script>
    <script src="/tpl/Admin/css/vendor/fuelux/spinner.js"></script>
    <script src="/tpl/Admin/css/vendor/slider/bootstrap-slider.js"></script>
    <script src="/tpl/Admin/css/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="/tpl/Admin/css/vendor/wysiwyg/jquery.hotkeys.js"></script>
    <script src="/tpl/Admin/css/vendor/wysiwyg/bootstrap-wysiwyg.js"></script>
    <script src="/tpl/Admin/css/vendor/switchery/switchery.js"></script>
    <script src="/tpl/Admin/css/vendor/timepicker/jquery.timepicker.js"></script>
    <script src="/tpl/Admin/css/vendor/offline/offline.min.js"></script>
    <script src="/tpl/Admin/css/vendor/pace/pace.min.js"></script>


    <script src="/tpl/Admin/css/js/off-canvas.js"></script>
    <script src="/tpl/Admin/css/js/main.js"></script>

    <script src="/tpl/Admin/css/js/panel.js"></script>
    <script src="/tpl/Admin/css/js/forms.js"></script>
</body>

</html><?php }} ?>
