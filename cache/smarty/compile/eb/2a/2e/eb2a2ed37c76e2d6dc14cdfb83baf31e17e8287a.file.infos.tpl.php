<?php /* Smarty version Smarty-3.1.19, created on 2018-06-12 14:42:39
         compiled from "/home/citymoto/citymotors.com.ua/www/modules/massprice/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7337688525b1fb1afaac842-29933973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb2a2ed37c76e2d6dc14cdfb83baf31e17e8287a' => 
    array (
      0 => '/home/citymoto/citymotors.com.ua/www/modules/massprice/views/templates/hook/infos.tpl',
      1 => 1522353967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7337688525b1fb1afaac842-29933973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'last' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b1fb1afb0ce88_15087325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1fb1afb0ce88_15087325')) {function content_5b1fb1afb0ce88_15087325($_smarty_tpl) {?>

<div class="alert alert-message">  
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<p class="clear">For more modules & themes visit: www.catalogo-onlinersi.com.ar</p>
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HMBZNQAHN9UMJ">
<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/scr/pixel.gif" width="1" height="1">
	</fieldset>
</form>
</div>
<div class="alert alert-message"> 
 <p><strong><?php echo smartyTranslate(array('s'=>'Last rule used: ','mod'=>'masspriceplus'),$_smarty_tpl);?>
</strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['last']->value, ENT_QUOTES, 'UTF-8', true);?>
</p><br/>
 <p><?php echo smartyTranslate(array('s'=>'If you want to update combinations prices too, filter by manufacturers and attributes, please check MassPrice update plus: ','mod'=>'masspriceplus'),$_smarty_tpl);?>
<a href="http://catalogo-onlinersi.net/en/prices-and-promotions/424-mass-price-update-plus.html" target="_blank">MassPrice update plus</a></p><br/><br/>
	<center><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/readme.png" style="  width: 31px;margin: 5px;" /><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
moduleinstall.pdf" target="_blank">README</a> / 
		<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/terms.png" style="  width: 31px;margin: 5px;" /><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
termsandconditions.pdf" target="_blank">TERMS</a></center><br/>
        
          <center>  <p>Follow  us:</p></center>
     <center><p><a href="https://www.facebook.com/ShackerRSI" target="_blank"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/facebook.png" style="  width: 64px;margin: 5px;" /></a>
        <a href="https://twitter.com/prestashop_rsi" target="_blank"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/twitter.png" style="  width: 64px;margin: 5px;" /></a>
         <a href="https://www.pinterest.com/prestashoprsi/" target="_blank"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/pinterest.png" style="  width: 64px;margin: 5px;" /></a>
           <a href="https://plus.google.com/+shacker6/posts" target="_blank"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/googleplus.png" style="  width: 64px;margin: 5px;" /></a>
            <a href="https://www.linkedin.com/profile/view?id=92841578" target="_blank"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/linkedin.png" style="  width: 64px;margin: 5px;" /></a>
               <a href="https://www.youtube.com/channel/UCBFSNtJpjYj4zLX9nO_oZkg" target="_blank"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/youtube.png" style="  width: 64px;margin: 5px;" /></a>
            </p></center>
</div>
<?php }} ?>
