<?php /* Smarty version Smarty-3.1.19, created on 2018-04-10 12:01:11
         compiled from "/home/citymoto/citymotors.com.ua/www/themes/default-bootstrap/modules/blocksearch/blocksearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5400987895acc7d57e10802-16233441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80f4019bf0c13a12f3f7906e53d3ce17b5f12b2f' => 
    array (
      0 => '/home/citymoto/citymotors.com.ua/www/themes/default-bootstrap/modules/blocksearch/blocksearch.tpl',
      1 => 1468359096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5400987895acc7d57e10802-16233441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5acc7d57ead6b6_99421245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acc7d57ead6b6_99421245')) {function content_5acc7d57ead6b6_99421245($_smarty_tpl) {?>
<!-- Block search module -->
<div id="search_block_left">
		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
    	    <input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderway" value="desc" />
			<input  type="text" id="search_query_block"  placeholder="поиск по каталогу" name="search_query" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<button type="submit" id="search_button"><i class="fa fa-search"></i></button>

	</form>
</div>

<!-- /Block search module -->
<?php }} ?>
