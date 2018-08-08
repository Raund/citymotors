<?php /* Smarty version Smarty-3.1.19, created on 2018-04-03 00:21:31
         compiled from "/home/citymoto/citymotors.com.ua/www/modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14179190335ac29edb986722-17181088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbff11de14117ac08aa73a5970c3078e9e5824fc' => 
    array (
      0 => '/home/citymoto/citymotors.com.ua/www/modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl',
      1 => 1468358825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14179190335ac29edb986722-17181088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_data' => 0,
    'post' => 0,
    'options' => 0,
    'modules_dir' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac29edb9b7b05_78914408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac29edb9b7b05_78914408')) {function content_5ac29edb9b7b05_78914408($_smarty_tpl) {?><div class="news">
    <p class="title"><!--<a href="<?php echo smartblog::GetSmartBlogLink('smartblog');?>
">--><?php echo smartyTranslate(array('s'=>'Статьи','mod'=>'smartbloghomelatestnews'),$_smarty_tpl);?>
</a></p>
    <div class="articles">
        <?php if (isset($_smarty_tpl->tpl_vars['view_data']->value)&&!empty($_smarty_tpl->tpl_vars['view_data']->value)) {?>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
               
               <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
               <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id'];?>
               <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
                 <a href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" class="feat_img_small" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
smartblog/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
-home-default.jpg"></a>
                   <p><a href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></p>
                <hr>

                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            <?php } ?>
        <?php }?>
        <div class="all-news">
            <a href="<?php echo smartblog::GetSmartBlogLink('smartblog');?>
"><?php echo smartyTranslate(array('s'=>'Все статьи','mod'=>'smartbloghomelatestnews'),$_smarty_tpl);?>
</a>
        </div>
     </div>
</div>

<?php }} ?>
