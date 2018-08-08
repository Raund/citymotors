<?php /* Smarty version Smarty-3.1.19, created on 2018-04-03 02:45:57
         compiled from "/home/citymoto/citymotors.com.ua/www/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20363579035ac2c0b506d428-98890730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a55dc59f3037255caa74fe28107d42b81359b1ed' => 
    array (
      0 => '/home/citymoto/citymotors.com.ua/www/themes/default-bootstrap/category-count.tpl',
      1 => 1468358872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20363579035ac2c0b506d428-98890730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac2c0b508b316_64164121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2c0b508b316_64164121')) {function content_5ac2c0b508b316_64164121($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
