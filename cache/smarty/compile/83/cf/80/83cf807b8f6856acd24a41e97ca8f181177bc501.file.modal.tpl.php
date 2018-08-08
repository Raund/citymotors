<?php /* Smarty version Smarty-3.1.19, created on 2018-04-03 00:21:13
         compiled from "/home/citymoto/citymotors.com.ua/www/admin1041/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13802778555ac29ec9ab7c00-79239998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83cf807b8f6856acd24a41e97ca8f181177bc501' => 
    array (
      0 => '/home/citymoto/citymotors.com.ua/www/admin1041/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1468350066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13802778555ac29ec9ab7c00-79239998',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac29ec9abaf74_77818273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac29ec9abaf74_77818273')) {function content_5ac29ec9abaf74_77818273($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
