<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="{$lang_iso}"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="{$lang_iso}"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="{$lang_iso}"><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="{$lang_iso}"><![endif]-->
<html lang="{$lang_iso}">
	<head>
		<meta charset="utf-8" />
		<title>{$meta_title|escape:'html':'UTF-8'}</title>
{if isset($meta_description) AND $meta_description}
		<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
{/if}
{if isset($meta_keywords) AND $meta_keywords}
		<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
{/if}
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" /> 
		<meta name="apple-mobile-web-app-capable" content="yes" /> 
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
        <link rel="stylesheet" href="{$css_dir}fonts.css"  type="text/css"/>
        <link rel="stylesheet" href="{$css_dir}font-awesome.min.css"  type="text/css"/>
        <link rel="stylesheet" href="{$css_dir}media.css"  type="text/css"/>
{if isset($css_files)}
	{foreach from=$css_files key=css_uri item=media}
		<link rel="stylesheet" href="{$css_uri|escape:'html':'UTF-8'}" type="text/css" media="{$media|escape:'html':'UTF-8'}" />
	{/foreach}
{/if}
{if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
	{$js_def}
	{foreach from=$js_files item=js_uri}
	<script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
	{/foreach}
{/if}
		{$HOOK_HEADER}
		<link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css" media="all" />
		<!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
        {literal}<script type="text/javascript" src="/buyme/js/buyme.js"></script>{/literal}
        {literal}<script type="text/javascript" src="/callme/js/callme.js"></script>{/literal}
        <!-- Start SiteHeart code -->
         {literal}
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
        {/literal}
        {literal}
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-75836494-1', 'auto');
                ga('send', 'pageview');

            </script>
        {/literal}
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
    <div id="wraper">
        <div id="header_new">
            <div class="top_menu_nav clearfix">
                <ul class="top_menu">
                    <li><a href="{$base_dir}content/6-o-nas">О магазине</a></li>
                    <li><a href="{$base_dir}content/1-delivery">Доставка и оплата</a></li>
                    <li><a href="{$base_dir}content/8-akcii-i-skidki">Акции и скидки</a></li>
                    <li><a href="{$base_dir}content/4-about-us">Контакты</a></li>
                </ul>
                <ul class="bg_search">
                    <li>{hook h="displaySearch"}

                    </li>
                </ul>
            </div>
            <div class="header_contact clearfix">
                <a class="logo" href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}"><img src="{$img_dir}/logo_podfon.png" alt=""></a>
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
                            {$HOOK_TOP}
                        </li>
                        <li class="lock">
                            <i class="fa fa-unlock"></i>
                            {hook h="displayNav"}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content clearfix">
                {if ($page_name=='product')||($page_name=='order-opc')}
                <div class="sidebar" style="display: none;"></div>

            {else}
                <div class="sidebar">
                    {$HOOK_LEFT_COLUMN}
                </div>
{/if}
                {if $page_name !='index' && $page_name !='pagenotfound'}
                    {include file="$tpl_dir./breadcrumb.tpl"}
                {/if}
