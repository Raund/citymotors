<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">

 
<head>
 
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
 
     <div id="wrapper">
           <div id="home">
                <div class="container clearfix">

       <!--Include the Top Hook.  
This is the area where modules in the hook known as top are outputed -->
        {$HOOK_TOP}
      <!-- End Include Top Hook -->
                </div> <!-- End container -->
            </div> <!-- End header -->
 
             <div id="sidebar">
      <!--Include the Left Hook.  
This is the area where modules in the hook known as left are outputed -->

      {$HOOK_LEFT_COLUMN}
      <!-- End Include left Hook -->
                      </div> <!-- End sidebar column Div-->