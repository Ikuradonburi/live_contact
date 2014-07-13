<?php /* Smarty version Smarty-3.1.15, created on 2014-07-04 16:14:39
         compiled from "reg2_conf.html" */ ?>
<?php /*%%SmartyHeaderCode:2075453b6b6cf4a7b61-00552687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0eb564570eb2c2e3d104dd3fde79e8703806bfe' => 
    array (
      0 => 'reg2_conf.html',
      1 => 1399962768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2075453b6b6cf4a7b61-00552687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userMail' => 0,
    'userName' => 0,
    'userPw' => 0,
    'userId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53b6b6cf515811_10440220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b6b6cf515811_10440220')) {function content_53b6b6cf515811_10440220($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<!-- InstanceBeginEditable name="h1" --> 新規登録（登録内容の確認） <!-- InstanceEndEditable -->
		</h1>
	</div>
	<div id="content">
		<div id="lead">
<!-- InstanceBeginEditable name="lead" --> 下記の内容で登録して宜しいですか？ <!-- InstanceEndEditable -->
		</div>
<!-- InstanceBeginEditable name="body" -->
		<form action="regist2.php" method="post">
			<dl>
				<dt>メールアドレス：</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['userMail']->value;?>
</dd>
				<dt>お名前：</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</dd>
				<dt>パスワード：</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['userPw']->value;?>
</dd>
			</dl>
			<p class="taC">
				<input type="submit" name="back" value="戻る">
				<input type="submit" value="この内容で登録">
			</p>
			<input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
">
			<input type="hidden" name="userName" value="<?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
">
			<input type="hidden" name="userPw" value="<?php echo $_smarty_tpl->tpl_vars['userPw']->value;?>
">
			<input type="hidden" name="m" value="reg2_end">
		</form>
		<!-- InstanceEndEditable -->
	</div>
</div>
</body>
<!-- InstanceEnd --></html><?php }} ?>
