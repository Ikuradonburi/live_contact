<?php /* Smarty version Smarty-3.1.15, created on 2014-07-04 15:47:40
         compiled from "reg1_form.html" */ ?>
<?php /*%%SmartyHeaderCode:1039753b6b07ccf55e9-71083596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb7140cbe46cddea0a4065fbeaf210d8f3f8d2c' => 
    array (
      0 => 'reg1_form.html',
      1 => 1396756978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1039753b6b07ccf55e9-71083596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
    'userMail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53b6b07cde6138_85363722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b6b07cde6138_85363722')) {function content_53b6b07cde6138_85363722($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		新規登録（仮登録フォーム）
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
		<form action="" method="post">
		<dl>
			<dt>メールアドレス：</dt>
			<dd><input type="text" name="userMail" value="<?php echo $_smarty_tpl->tpl_vars['userMail']->value;?>
"></dd>
		</dl>
		<p class="taC">
			<input type="submit" value="この内容で登録">
			<input type="hidden" name="m" value="reg1_end">
		</p>
		</form>
<!-- InstanceEndEditable -->
	</div>
</div>
</body>
<!-- InstanceEnd --></html><?php }} ?>
