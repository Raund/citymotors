
<li {if isset($last) && $last == 'true'}class="last"{/if}>
	<a 
	href="{$node.link|escape:'html':'UTF-8'}"{if isset($currentCategoryId) && $node.id == $currentCategoryId} class="selected"{/if} <!--title="{$node.desc|strip_tags|trim|escape:'html':'UTF-8'}"-->>
		{$node.name|escape:'html':'UTF-8'}
	</a>
	{if $node.children|@count > 0}

		<ul class="submenu"><li>
			{foreach from=$node.children item=child name=categoryTreeBranch}
				{if $smarty.foreach.categoryTreeBranch.last}
					{include file="$branche_tpl_path" node=$child last='true'}
				{else}
					{include file="$branche_tpl_path" node=$child last='false'}
				{/if}
			{/foreach}</li>
		</ul>

	{/if}
</li>

<!--
        <li><a href="#">Гайки и болты</a></li>
        <li><a href="#">Центровочные кольца</a>
            <ul class="submenu">
                <li><a href="#">пластиковые</a></li>
                <li><a href="#">алюминиевые</a></li>
                <li><a href="#">Секретки</a></li>
            </ul>
        </li>
        <li><a href="#">Секретки на колеса</a></li>
        <li><a href="#">Автоинструмент</a></li>
        <li><a href="#">Дворники</a></li>
    -->
