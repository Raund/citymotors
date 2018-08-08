<?php /* Smarty version Smarty-3.1.19, created on 2018-08-08 18:02:30
         compiled from "D:\OpenServer\domains\citymotors.loc\admin1041\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183985b6b0606e3fa43-66780057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe48485710b0bfd3cabea45d115baec38c8d0ad0' => 
    array (
      0 => 'D:\\OpenServer\\domains\\citymotors.loc\\admin1041\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1468350063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183985b6b0606e3fa43-66780057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b6b0607003206_34648122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6b0607003206_34648122')) {function content_5b6b0607003206_34648122($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
