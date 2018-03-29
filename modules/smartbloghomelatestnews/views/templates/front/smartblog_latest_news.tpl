<div class="news">
    <p class="title"><!--<a href="{smartblog::GetSmartBlogLink('smartblog')}">-->{l s='Статьи' mod='smartbloghomelatestnews'}</a></p>
    <div class="articles">
        {if isset($view_data) AND !empty($view_data)}
            {assign var='i' value=1}
            {foreach from=$view_data item=post}
               
               {assign var="options" value=null}
               {$options.id_post = $post.id}
               {$options.slug = $post.link_rewrite}
                 <a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}"><img alt="{$post.title}" class="feat_img_small" src="{$modules_dir}smartblog/images/{$post.post_img}-home-default.jpg"></a>
                   <p><a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.title}</a></p>
                <hr>

                {$i=$i+1}
            {/foreach}
        {/if}
        <div class="all-news">
            <a href="{smartblog::GetSmartBlogLink('smartblog')}">{l s='Все статьи' mod='smartbloghomelatestnews'}</a>
        </div>
     </div>
</div>

