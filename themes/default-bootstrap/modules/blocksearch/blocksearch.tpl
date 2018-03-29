
<!-- Block search module -->
<div id="search_block_left">
		<form method="get" action="{$link->getPageLink('search', true)|escape:'html':'UTF-8'}" id="searchbox">
    	    <input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderway" value="desc" />
			<input  type="text" id="search_query_block"  placeholder="поиск по каталогу" name="search_query" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
			<button type="submit" id="search_button"><i class="fa fa-search"></i></button>

	</form>
</div>

<!-- /Block search module -->
