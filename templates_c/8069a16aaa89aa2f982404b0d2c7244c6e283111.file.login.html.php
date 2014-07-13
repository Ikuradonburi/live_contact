<?php /* Smarty version Smarty-3.1.15, created on 2014-07-13 12:20:31
         compiled from "login.html" */ ?>
<?php /*%%SmartyHeaderCode:21130539175e7c83636-65389691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8069a16aaa89aa2f982404b0d2c7244c6e283111' => 
    array (
      0 => 'login.html',
      1 => 1405221238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21130539175e7c83636-65389691',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539175e7cbec89_33999164',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539175e7cbec89_33999164')) {function content_539175e7cbec89_33999164($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
			ログインフォーム
<!-- InstanceEndEditable -->
		</h1>
	</div>
	<div id="content">
		<div id="lead">
<!-- InstanceBeginEditable name="lead" -->
			入力されたメールアドレスとパスワードを入力してください。
<!-- InstanceEndEditable -->
		</div>
<!-- InstanceBeginEditable name="body" -->
		<form action="mem_top.html" method="post">
		<dl>
			<dt>メールアドレス：</dt>
			<dd><input type="text" name="userName" value=""></dd>
			<dt>パスワード：</dt>
			<dd><input type="text" name="userPw" value=""></dd>
		</dl>
		<p class="taC"><input type="submit" value="ログイン"></p>
		<p class="taR">
			<a href="pw_reminder.php">パスワードを忘れた方はこちら</a><br>
			<a href="regist.php">新規登録はこちら</a>
		</p>
		</form>
		
<!-- InstanceEndEditable -->
	</div>
</div>
</body>
<!-- InstanceEnd --></html><?php }} ?>
