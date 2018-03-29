<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">


<head>
    <meta charset="utf-8" />
    <title>DenFish</title>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" type="text/css" />
    <link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="libs/countdown/jquery.countdown.css"  type="text/css"/>
    <link rel="stylesheet" href="{$css_dir}fonts.css"  type="text/css"/>
    <link rel="stylesheet" href="{$css_dir}media.css"  type="text/css"/>
    <!-- Include CSS Files (in particular our global.css file -->

 {foreach from=$css_files key=css_uri item=media}
 <link href="{$css_uri}" rel="stylesheet" type="text/css" media="{$media}" />

 {/foreach}
 <!-- End Include CSS Files -->



 <!--Include the Hook Header.  This is the area where modules in the hook known as header are outputed -->

 {$HOOK_HEADER}
 <!-- End Include Hook Header -->


</head>
 
<body>
<!--скрипт підключення блоку fb-->
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!--скрипт підключення блоку fb-->
     <div id="wrapper">
         <div id="header">

                 {hook h="displayRightColumn"}
                 <ul class="right_nav right">
                     <li class="key">
                         <a href="#">Регистрация</a>
                     </li>
                     <li class="lock">
                        {hook h="displayNav"}
                     </li>
                     <li class="cart">
                         {$HOOK_TOP}

                    <li class="price">
                         <span class=" price ajax_cart_quantity{if $cart_qties == 0} unvisible{/if}">{$cart_qties}</span><!--для відображення кількості товарів (в файлі blockcart вона hidden-->
                     </li>
                     </ul>
             </div>
             <!--Include the Top Hook.
        This is the area where modules in the hook known as top are outputed -->

             <!-- End Include Top Hook -->
         </div>
          <div id="home">
             <div class="container clearfix">
                 <a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}">
                     <img class="logo" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
                 </a>
                 <div class="lozung clearfix">
                     <div class="str1">все что нужно</div>
                     <div class="str2">для рыболовного счастья</div>
                     <div class="str3">в одном месте!</div>
                 </div>
                 <div class="social">
                     <a href="#"><i class="fa fa-instagram"></i></a>
                     <a href="#"><i class="fa fa-vk"></i></a>
                     <a href="#"><i class="fa fa-facebook"></i></a>
                 </div>
                 <div class="catalog_name">Kаталог товаров</div>
                 <div class="phone"><span>+3 8050</span> 548 11 59</div>
             </div>
         </div>

            <!--Include the Left Hook.  This is the area where modules in the hook known as left are outputed -->
        <div class="container clearfix">
                    <div id="sidebar">

<!--Привязка до модуля поиск-->
              {$HOOK_LEFT_COLUMN}


              <!--<div class="advice">
                  <h3>Советы от DEN<span>FISH</span></h3>
                  <div class="advice_block clearfix">
                      <div class="advice_text"><i class="fa fa-info-circle fa-lg"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius cumque repellat, nulla. Corrupti voluptatem doloremque beatae earum aspernatur quibusdam dolore possimus iusto, laudantium ducimus, commodi aperiam praesentium saepe quos temporibus!
                      </div>
                      <ul class="adv">
                          <li><a href="#">Еще совет</a></li>
                          <li><a href="#">Смотреть все</a></li>
                      </ul>
                  </div>
              </div>-->
             <!--  <div class="banner"></div> -->




                      </div>


                 <!-- End Include left Hook -->

  <!-- End left column Div-->