<?php /* Smarty version Smarty-3.1.15, created on 2014-07-04 16:05:40
         compiled from "reg2_form.html" */ ?>
<?php /*%%SmartyHeaderCode:1039353b6b4b4ecf0c9-49783584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb566286d2062f3091b01439b3ca4b2f4ecfd9a' => 
    array (
      0 => 'reg2_form.html',
      1 => 1399962590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1039353b6b4b4ecf0c9-49783584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
    'userMail' => 0,
    'userName' => 0,
    'userPw' => 0,
    'userId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53b6b4b5112c74_83827214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b6b4b5112c74_83827214')) {function content_53b6b4b5112c74_83827214($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		新規登録（登録フォーム）
<!-- InstanceEndEditable -->
		</h1>
	</div>
	<div id="content">
		<div id="lead">
<!-- InstanceBeginEditable name="lead" -->
			<?php echo $_smarty_tpl->tpl_vars['text']->value;?>

<!-- InstanceEndEditable -->
		</div>
<!-- InstanceBeginEditable name="body" -->
		<form action="regist2.php" method="post">
			<dl>
				<dt>メールアドレス：</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['userMail']->value;?>
</dd>
				<dt>お名前：</dt>
				<dd><input type="text" name="userName" value="<?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
"></dd>
				<dt>パスワード：</dt>
				<dd><input type="text" name="userPw" value="<?php echo $_smarty_tpl->tpl_vars['userPw']->value;?>
"></dd>
			</dl>
			<p class="taC"><input type="submit" value="確認画面へ"></p>
			<input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
">
			<input type="hidden" name="m" value="reg2_conf">
		</form>
<!-- InstanceEndEditable -->
	</div>
</div>
</body>
<!-- InstanceEnd --></html><?php }} ?>
