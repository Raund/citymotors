<?php /* Smarty version Smarty-3.1.19, created on 2018-08-08 18:02:28
         compiled from "D:\OpenServer\domains\citymotors.loc\admin1041\themes\default\template\helpers\kpi\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200675b6b0604e5ee57-43355257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03fe7aad1d4bc0d3a3147a2fbe4afaa5b0872ede' => 
    array (
      0 => 'D:\\OpenServer\\domains\\citymotors.loc\\admin1041\\themes\\default\\template\\helpers\\kpi\\row.tpl',
      1 => 1468350061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200675b6b0604e5ee57-43355257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'kpi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b6b0604e76541_15110181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6b0604e76541_15110181')) {function content_5b6b0604e76541_15110181($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['kpi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kpi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kpi']->key => $_smarty_tpl->tpl_vars['kpi']->value) {
$_smarty_tpl->tpl_vars['kpi']->_loop = true;
?>
		<div class="col-sm-6 col-lg-3">
			<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

		</div>			
		<?php } ?>
	</div>
</div><?php }} ?>
