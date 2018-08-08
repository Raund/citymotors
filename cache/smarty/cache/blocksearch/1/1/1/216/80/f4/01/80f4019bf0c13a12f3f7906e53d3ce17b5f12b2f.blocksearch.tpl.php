<?php /*%%SmartyHeaderCode:4144484315ac29edc5521a9-70195243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '4144484315ac29edc5521a9-70195243',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac29edc55f9d0_22035192',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac29edc55f9d0_22035192')) {function content_5ac29edc55f9d0_22035192($_smarty_tpl) {?><div id="search_block_left"><form method="get" action="https://citymotors.com.ua/search" id="searchbox"> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderway" value="desc" /> <input type="text" id="search_query_block" placeholder="поиск по каталогу" name="search_query" value="" /> <button type="submit" id="search_button"><i class="fa fa-search"></i></button></form></div><?php }} ?>
