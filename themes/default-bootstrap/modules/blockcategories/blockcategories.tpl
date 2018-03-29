
{if $blockCategTree && $blockCategTree.children|@count}
<!-- Block categories module -->

    <div class="catalog">Каталог товаров {if $page_name !='index'}<i class="fa fa-angle-down"></i>{/if}</div>

		<ul class="main-menu {if $isDhtml}dhtml{/if}">
			{foreach from=$blockCategTree.children item=child name=blockCategTree}
				{if $smarty.foreach.blockCategTree.last}
					{include file="$branche_tpl_path" node=$child last='true'}
				{else}
					{include file="$branche_tpl_path" node=$child}
				{/if}
			{/foreach}
		</ul>


<!-- /Block categories module -->

{/if}
