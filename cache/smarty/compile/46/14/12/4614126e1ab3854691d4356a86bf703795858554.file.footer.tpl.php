<?php /* Smarty version Smarty-3.1.19, created on 2018-08-08 17:55:53
         compiled from "D:\OpenServer\domains\citymotors.loc\themes\default-bootstrap\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:305015b6b0479341c24-32058710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4614126e1ab3854691d4356a86bf703795858554' => 
    array (
      0 => 'D:\\OpenServer\\domains\\citymotors.loc\\themes\\default-bootstrap\\footer.tpl',
      1 => 1486907335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305015b6b0479341c24-32058710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b6b04794149d5_06489736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6b04794149d5_06489736')) {function content_5b6b04794149d5_06489736($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\OpenServer\\domains\\citymotors.loc\\tools\\smarty\\plugins\\modifier.date_format.php';
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
