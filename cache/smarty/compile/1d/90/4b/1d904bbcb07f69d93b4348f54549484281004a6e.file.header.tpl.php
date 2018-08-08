<?php /* Smarty version Smarty-3.1.19, created on 2018-04-03 00:21:32
         compiled from "/home/citymoto/citymotors.com.ua/www/themes/default-bootstrap/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20738476525ac29edc4ca948-09254760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d904bbcb07f69d93b4348f54549484281004a6e' => 
    array (
      0 => '/home/citymoto/citymotors.com.ua/www/themes/default-bootstrap/header.tpl',
      1 => 1486903936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20738476525ac29edc4ca948-09254760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'css_dir' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_defer' => 0,
    'js_files' => 0,
    'js_def' => 0,
    'js_uri' => 0,
    'HOOK_HEADER' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'HOOK_TOP' => 0,
    'page_name' => 0,
    'HOOK_LEFT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac29edc54cf00_60222804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac29edc54cf00_60222804')) {function content_5ac29edc54cf00_60222804($_smarty_tpl) {?><!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><![endif]-->
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<meta charset="utf-8" />
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value) {?>
		<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
		<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" /> 
		<meta name="apple-mobile-web-app-capable" content="yes" /> 
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
fonts.css"  type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
font-awesome.min.css"  type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
media.css"  type="text/css"/>
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['media']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<?php } ?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['js_defer']->value)&&!$_smarty_tpl->tpl_vars['js_defer']->value&&isset($_smarty_tpl->tpl_vars['js_files']->value)&&isset($_smarty_tpl->tpl_vars['js_def']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"></script>
	<?php } ?>
<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

		<link rel="stylesheet" href="http<?php if (Tools::usingSecureMode()) {?>s<?php }?>://fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css" media="all" />
		<!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
        <script type="text/javascript" src="/buyme/js/buyme.js"></script>
        <script type="text/javascript" src="/callme/js/callme.js"></script>
        <!-- Start SiteHeart code -->
         
             <!-- Start SiteHeart code -->
             <script>
                 (function(){
                     var widget_id = 823251;
                     _shcp =[{widget_id : widget_id}];
                     var lang =(navigator.language || navigator.systemLanguage
                             || navigator.userLanguage ||"en")
                             .substr(0,2).toLowerCase();
                     var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
                     var hcc = document.createElement("script");
                     hcc.type ="text/javascript";
                     hcc.async =true;
                     hcc.src =("https:"== document.location.protocol ?"https":"http")
                             +"://"+ url;
                     var s = document.getElementsByTagName("script")[0];
                     s.parentNode.insertBefore(hcc, s.nextSibling);
                 })();
             </script>
             <!-- End SiteHeart code -->
        <!-- End SiteHeart code -->
        
        
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-75836494-1', 'auto');
                ga('send', 'pageview');

            </script>
        
	</head>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter35341970 = new Ya.Metrika({
                    id:35341970,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/35341970" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <body>


    <script>

        $(function(){
            if(!($('#homepage-slider').length)){
                $('.main-menu').addClass('r-hide');
                $('.catalog').addClass('r-catalog');
                $('.catalog').on('click', function(){
                    $('.main-menu').toggleClass('r-hide');
                    $('.catalog i').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
                });
            };
        });

    </script>
    <div id="wraper">
        <div id="header_new">
            <div class="top_menu_nav clearfix">
                <ul class="top_menu">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/6-o-nas">О магазине</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/1-delivery">Доставка и оплата</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/8-akcii-i-skidki">Акции и скидки</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/4-about-us">Контакты</a></li>
                </ul>
                <ul class="bg_search">
                    <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displaySearch"),$_smarty_tpl);?>


                    </li>
                </ul>
            </div>
            <div class="header_contact clearfix">
                <a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"></a>
                <div class="contact">
                    <div class="telefone"><i class="fa fa-phone"></i>
                        (093)<span class="vud"> 833-17-78</span>,&nbsp
                        <i class="fa fa-phone"></i>
                        (067)<span class="vud"> 756-64-40</span>,&nbsp</br>
                        <img class="viber-header" src="../../themes/default-bootstrap/img/viber-long2.png"  alt="">
                        (066)<span class="vud"> 744-35-71</span></br></div>
                    <i class="fa fa-envelope-o"></i><a href="#" class="send_letter callme_viewform">Написать сообщение</a>
                    <i class="fa fa-phone-square"></i><a href="#" class="recall callme_viewform">Перезвоните мне</a><br>
                    <span class="time"><i class="fa fa-clock-o"></i> Пн-Вс <span class="vud">9:00-21:00</span></span>
                </div>
                <div class="cart_registration">
                    <ul class="right_part_header">
                        <li class="cart">
                            <i class="fa fa-shopping-cart"></i>
                           <!-- <a href="#">В вашей корзине пусто</a>-->
                            <?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

                        </li>
                        <li class="lock">
                            <i class="fa fa-unlock"></i>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="content clearfix">
                <?php if (($_smarty_tpl->tpl_vars['page_name']->value=='product')||($_smarty_tpl->tpl_vars['page_name']->value=='order-opc')) {?>
                <div class="sidebar" style="display: none;"></div>

            <?php } else { ?>
                <div class="sidebar">
                    <?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

                </div>
<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound') {?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
<?php }} ?>
