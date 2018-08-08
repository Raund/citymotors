<?php /* Smarty version Smarty-3.1.19, created on 2018-04-03 00:21:31
         compiled from "/home/citymoto/citymotors.com.ua/www/modules/blockhomecategorys/blockhomecategorys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15098017485ac29edb9d2070-80043432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03ae1ec087160e8e9e88335c83ce331a71e4159c' => 
    array (
      0 => '/home/citymoto/citymotors.com.ua/www/modules/blockhomecategorys/blockhomecategorys.tpl',
      1 => 1468358285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15098017485ac29edb9d2070-80043432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subcategories' => 0,
    'subcategory' => 0,
    'link' => 0,
    'mediumSize' => 0,
    'img_cat_dir' => 0,
    'base_dir' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac29edba16045_15895908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac29edba16045_15895908')) {function content_5ac29edba16045_15895908($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
  <h2 class="catagory-main"><?php echo smartyTranslate(array('s'=>'Категории товаров','mod'=>'blockhomecategorys'),$_smarty_tpl);?>
</h2>

  <div id="subcategories">
    <ul class="inline_list">
      <?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
	  <li class="clearfix">
	    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img">
	    <?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']) {?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'medium_default');?>
" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
	    <?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
default-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
	    <?php }?>
	    </a>
	    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="cat_name"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
	  </li>
      <?php } ?>
    </ul>
    <br class="clear"/>
  </div>
    <!--Популярные товары
    <div class="popular">
        <h3>Популярные товары</h3>
        <div class="prod_list clearfix">
            <ul>
                <li>
                    <div class="prod_container">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
gajki-i-bolty/107-gajka-m12x15x34-khrom-konus-klyuch-17mm.html"><div class="prod_container_image">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/gaika.jpg">
                                <div class="prices">16 грн</div>
                            </div>
                            <p class="detail">ГАЙКА ЗАКРЫТАЯ M12X1,5Х34 КОНУС, КЛЮЧ 17</p></a>
                    </div>
                </li>
                <li>
                    <div class="prod_container">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
sekretki-na-kolesa/271-gajki-sekretnye-m12x15x22-khrom-konus-vrkolco-kl17-19mm.html"><div class="prod_container_image">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/secretka.jpg">
                                <div class="prices">350 грн</div>

                            </div>
                            <p class="detail">Гайки секретные M12X1,5X22 Хром Конус Вр.кольцо кл.17-19мм</p></a>
                    </div>
                </li>
                <li>
                    <div class="prod_container">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
gajki-i-bolty/84-bolt-m12x15x28-khrom-konus-klyuch-17-mm.html"><div class="prod_container_image">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/bolt.jpg">
                                <div class="prices">20 грн</div>
                            </div>

                            <p class="detail">БОЛТ M12X1,5X28 ХРОМ КОНУС КЛЮЧ 17 ММ</p></a>
                </li>
                <li><div class="prod_container">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
centrovochnye-kolca/153-kolco-centrovochnoe-671-541.html"><div class="prod_container_image">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/kolco.jpg">
                                <div class="prices">30 грн</div>
                            </div>
                            <p class="detail">КОЛЬЦО ЦЕНТРОВОЧНОЕ 67,1-54,1</p></a>
                </li>
            </ul>
        </div>
    </div>-->
<?php }?>
<?php }} ?>
