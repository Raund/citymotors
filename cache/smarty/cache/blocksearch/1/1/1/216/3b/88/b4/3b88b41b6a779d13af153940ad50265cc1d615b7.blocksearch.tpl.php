<?php /*%%SmartyHeaderCode:83355b6b04791614d1-16764620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b88b41b6a779d13af153940ad50265cc1d615b7' => 
    array (
      0 => 'D:\\OpenServer\\domains\\citymotors.loc\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch.tpl',
      1 => 1468359096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83355b6b04791614d1-16764620',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b6b04792015c0_58096518',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6b04792015c0_58096518')) {function content_5b6b04792015c0_58096518($_smarty_tpl) {?><div id="search_block_left"><form method="get" action="https://citymotors.loc/search" id="searchbox"> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderway" value="desc" /> <input type="text" id="search_query_block" placeholder="поиск по каталогу" name="search_query" value="" /> <button type="submit" id="search_button"><i class="fa fa-search"></i></button></form></div><?php }} ?>
