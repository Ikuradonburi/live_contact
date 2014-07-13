<?php /* Smarty version Smarty-3.1.15, created on 2014-01-18 08:46:05
         compiled from "sample09.html" */ ?>
<?php /*%%SmartyHeaderCode:2413952da2e1c531c17-80783656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '544a6f92c8a093f4bbba85a7eb0a94a06b4f223e' => 
    array (
      0 => 'sample09.html',
      1 => 1390031144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2413952da2e1c531c17-80783656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52da2e1c6e1488_32845970',
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52da2e1c6e1488_32845970')) {function content_52da2e1c6e1488_32845970($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>都道府県の一覧をドロップダウンに表示する</h1>
</div>

<div id="content">
<div style="margin-top: 200px">
<form action="" method="get">
<dl>
<dt>都道府県</dt>
<dd>
<select name="pref" id="pref"> 

		<!--<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['this'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['this']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['name'] = 'this';
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['prefs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['this']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['this']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['this']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['this']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['this']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['this']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['this']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['this']['total']);
?>-->

		<option value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['this']['index']];?>
"> <?php echo $_smarty_tpl->tpl_vars['prefs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['this']['index']];?>
 </option>

		<!--<?php endfor; endif; ?>-->


</select>
</dd>
</dl>
<input type="submit" value="送信する" />
</form>
</div>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O Space. MYCOM" /></p>
</div>

</div>





</body>
</html>
<?php }} ?>
