<?php /* Smarty version Smarty-3.1.19, created on 2018-04-03 00:21:32
         compiled from "/home/citymoto/citymotors.com.ua/www/themes/default-bootstrap/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3143244455ac29edc589f89-08396944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dee6d2b76b2322931c110657716873ac6ff032f' => 
    array (
      0 => '/home/citymoto/citymotors.com.ua/www/themes/default-bootstrap/footer.tpl',
      1 => 1486907335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3143244455ac29edc589f89-08396944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac29edc5986b8_18814978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac29edc5986b8_18814978')) {function content_5ac29edc5986b8_18814978($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/citymoto/citymotors.com.ua/www/tools/smarty/plugins/modifier.date_format.php';
?></div>

            <div class="footer">
                <div class="bot_menu_nav clearfix">
                    <ul class="bot_menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/6-o-nas">О магазине</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/1-delivery">Доставка и оплата</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/8-akcii-i-skidki">Акции и скидки</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/4-about-us">Контакты</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <i class="fa fa-envelope-o"></i>&nbspEmail: info@citymotors.com.ua <br>
                    <img class="viber-footer" src="../../themes/default-bootstrap/img/viber-long2.png" alt="">+3 (093) 833-17-78<br>
					<img class="viber-footer" src="../../themes/default-bootstrap/img/viber-long2.png" alt="">+3 (066) 744-35-71<br>
                    <i class="fa fa-phone"></i>&nbsp&nbsp&nbsp+3 (067) 756-64-40<br>                    
                    <i class="fa fa-copyright"></i>&nbsp&nbspИнтернет магазин "Сitymotors.com.ua" 2013-<?php echo smarty_modifier_date_format(time(),"%Y");?>
<br>
                </div>
            </div>
        </div>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </body>
</html><?php }} ?>
