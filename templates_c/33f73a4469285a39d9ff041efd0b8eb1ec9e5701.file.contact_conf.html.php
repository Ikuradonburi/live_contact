<?php /* Smarty version Smarty-3.1.15, created on 2014-07-05 17:59:33
         compiled from "contact_conf.html" */ ?>
<?php /*%%SmartyHeaderCode:248053b7be75a30e91-90576924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33f73a4469285a39d9ff041efd0b8eb1ec9e5701' => 
    array (
      0 => 'contact_conf.html',
      1 => 1404547329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248053b7be75a30e91-90576924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
    'lb_contactPart' => 0,
    'contactYear' => 0,
    'contactMonth' => 0,
    'contactDay' => 0,
    'lb_contactPlace' => 0,
    'lb_contactTime' => 0,
    'lb_contactOption' => 0,
    'contactPart' => 0,
    'contactPlace' => 0,
    'contactTime' => 0,
    'contactOption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53b7be75a9a2a6_70273835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b7be75a9a2a6_70273835')) {function content_53b7be75a9a2a6_70273835($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/user_screen.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHPシステム</title>
<!-- InstanceBeginEditable name="doctitle" -->
<!-- InstanceEndEditable -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrap">
	<div id="head">
		<h1>
<!-- InstanceBeginEditable name="h1" -->
			ライブ申し込み（確認）
<!-- InstanceEndEditable -->
		</h1>
	</div>
	<div id="content">
		<div id="lead">
<!-- InstanceBeginEditable name="lead" -->
			以下の内容でライブ申し込みします。宜しいですか？
<!-- InstanceEndEditable -->
		</div>
<!-- InstanceBeginEditable name="body" -->
		<form action="contact_end.html" method="post">
		<dl>
			<dt>お名前：</dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
さん</dd>
			<dt>パート：</dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['lb_contactPart']->value;?>
</dd>
			<dt>日付：</dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['contactYear']->value;?>
年<?php echo $_smarty_tpl->tpl_vars['contactMonth']->value;?>
月<?php echo $_smarty_tpl->tpl_vars['contactDay']->value;?>
日</dd>
			<dt>会場：</dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['lb_contactPlace']->value;?>
</dd>
			<dt>時間帯：</dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['lb_contactTime']->value;?>
</dd>
			<dt>	譜面台レンタル：</dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['lb_contactOption']->value;?>
<br>(1つ300円)</dd>
		</dl>	
		<p class="taC">
            <input type="submit" name="back" value="戻る">
        	<input type="submit" value="この内容で申込">
        </p>
            
        	<input type="hidden" name="contactPart" value="<?php echo $_smarty_tpl->tpl_vars['contactPart']->value;?>
">
        	<input type="hidden" name="contactYear" value="<?php echo $_smarty_tpl->tpl_vars['contactYear']->value;?>
">
        	<input type="hidden" name="contactMonth" value="<?php echo $_smarty_tpl->tpl_vars['contactMonth']->value;?>
">
        	<input type="hidden" name="contactDay" value="<?php echo $_smarty_tpl->tpl_vars['contactDay']->value;?>
">
        	<input type="hidden" name="contactPlace" value="<?php echo $_smarty_tpl->tpl_vars['contactPlace']->value;?>
">
        	<input type="hidden" name="contactTime" value="<?php echo $_smarty_tpl->tpl_vars['contactTime']->value;?>
">
        	<input type="hidden" name="contactOption" value="<?php echo $_smarty_tpl->tpl_vars['contactOption']->value;?>
">
        	<input type="hidden" name="m" value="contact_end">
		</form>
<!-- InstanceEndEditable -->
	</div>
</div>
</body>
<!-- InstanceEnd --></html><?php }} ?>
