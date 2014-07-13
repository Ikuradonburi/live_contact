<?php /* Smarty version Smarty-3.1.15, created on 2013-12-07 10:01:29
         compiled from "regist_form.html" */ ?>
<?php /*%%SmartyHeaderCode:1081752a2d054df2e50-73151051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44910c4c52dbe20e794b1d0e0ae18077b96196c2' => 
    array (
      0 => 'regist_form.html',
      1 => 1386406887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1081752a2d054df2e50-73151051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a2d054e4c1c7_14183363',
  'variables' => 
  array (
    'name' => 0,
    'error_name' => 0,
    'email' => 0,
    'error_mail' => 0,
    'password' => 0,
    'error_password' => 0,
    'error_image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a2d054e4c1c7_14183363')) {function content_52a2d054e4c1c7_14183363($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>会員登録</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>会員登録</h1>
</div>

<div id="content">
<p>次のフォームに必要事項をご記入ください。</p>
<form action="" method="post" enctype="multipart/form-data">
	<dl>
		<dt>ニックネーム<span class="required">必須</span></dt>
		<dd>
        	<input type="text" name="name" size="35" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />
					<?php echo $_smarty_tpl->tpl_vars['error_name']->value;?>

		</dd>
		<dt>メールアドレス<span class="required">必須</span></dt>
		<dd>
        	<input type="text" name="email" size="35" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
					<?php echo $_smarty_tpl->tpl_vars['error_mail']->value;?>

		</dd>
		<dt>パスワード<span class="required">必須</span></dt>
		<dd>
        	<input type="password" name="password" size="10" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" />
					<?php echo $_smarty_tpl->tpl_vars['error_password']->value;?>

			</dd>
		<dt>写真など</dt>
		<dd>
        	<input type="file" name="image" size="35"  />
					<?php echo $_smarty_tpl->tpl_vars['error_image']->value;?>

        </dd>
	</dl>
	<div><input type="submit" value="入力内容を確認する" /></div>
</form>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O Space. MYCOM" /></p>
</div>

</div>
</body>
</html>
<?php }} ?>
