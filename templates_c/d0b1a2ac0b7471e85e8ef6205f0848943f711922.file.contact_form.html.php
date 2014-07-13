<?php /* Smarty version Smarty-3.1.15, created on 2014-07-05 16:00:37
         compiled from "contact_form.html" */ ?>
<?php /*%%SmartyHeaderCode:143353b7a2959f72b2-07558502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b1a2ac0b7471e85e8ef6205f0848943f711922' => 
    array (
      0 => 'contact_form.html',
      1 => 1404542205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143353b7a2959f72b2-07558502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
    'userName' => 0,
    'contactPart' => 0,
    'contactYear' => 0,
    'contactMonth' => 0,
    'contactDay' => 0,
    'contactPlace' => 0,
    'contactTime' => 0,
    'contactOption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53b7a295a5f413_75058974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b7a295a5f413_75058974')) {function content_53b7a295a5f413_75058974($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
			ライブ申し込み（フォーム）
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
		<form action="index.php" method="post">
		<dl>
			<dt>お名前：</dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
さん</dd>
			<dt>パート</dt>
			<dd>
				<?php echo $_smarty_tpl->tpl_vars['contactPart']->value;?>

			</dd>
			<dt>日付</dt>
			<dd>
				<select name="contactYear">
					<option value="">-</option>
					<?php echo $_smarty_tpl->tpl_vars['contactYear']->value;?>

				</select>
				年
				<select name="contactMonth">
					<option value=""></option>
					<?php echo $_smarty_tpl->tpl_vars['contactMonth']->value;?>

				</select>
				月
				<select name="contactDay">
					<option value=""></option>
					<?php echo $_smarty_tpl->tpl_vars['contactDay']->value;?>

				</select>
				日
			</dd>
			<dt>会場</dt>
			<dd>
				<select name="contactPlace">
					<option value="">選択してください</option>
					<?php echo $_smarty_tpl->tpl_vars['contactPlace']->value;?>

				</select>
			</dd>
			<dt>時間帯</dt>
			<dd>
				<?php echo $_smarty_tpl->tpl_vars['contactTime']->value;?>

			</dd>
			<dt>譜面台レンタル</dt>
			<dd>
				<select name="contactOption">
					<option value="0">なし</option>
					<?php echo $_smarty_tpl->tpl_vars['contactOption']->value;?>

				</select>
				<br>(1つ300円)
			</dd>
		</dl>
		<p class="taC"><input type="submit" value="この内容で申込"></p>
		<input type="hidden" name="m" value="contact_conf">
		</form>
<!-- InstanceEndEditable -->
	</div>
</div>
</body>
<!-- InstanceEnd --></html><?php }} ?>
