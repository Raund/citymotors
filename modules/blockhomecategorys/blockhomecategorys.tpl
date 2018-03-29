{if isset($subcategories)}
  <h2 class="catagory-main">{l s='Категории товаров' mod='blockhomecategorys'}</h2>

  <div id="subcategories">
    <ul class="inline_list">
      {foreach from=$subcategories item=subcategory}
	  <li class="clearfix">
	    <a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}" class="img">
	    {if $subcategory.id_image}
		<img src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'medium_default')}" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />
	    {else}
		<img src="{$img_cat_dir}default-medium_default.jpg" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />
	    {/if}
	    </a>
	    <a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" class="cat_name">{$subcategory.name|escape:'htmlall':'UTF-8'}</a>
	  </li>
      {/foreach}
    </ul>
    <br class="clear"/>
  </div>
    <!--Популярные товары
    <div class="popular">
        <h3>Популярные товары</h3>
        <div class="prod_list clearfix">
            <ul>
                <li>
                    <div class="prod_container">
                        <a href="{$base_dir}gajki-i-bolty/107-gajka-m12x15x34-khrom-konus-klyuch-17mm.html"><div class="prod_container_image">
                                <img src="{$img_dir}/gaika.jpg">
                                <div class="prices">16 грн</div>
                            </div>
                            <p class="detail">ГАЙКА ЗАКРЫТАЯ M12X1,5Х34 КОНУС, КЛЮЧ 17</p></a>
                    </div>
                </li>
                <li>
                    <div class="prod_container">
                        <a href="{$base_dir}sekretki-na-kolesa/271-gajki-sekretnye-m12x15x22-khrom-konus-vrkolco-kl17-19mm.html"><div class="prod_container_image">
                                <img src="{$img_dir}/secretka.jpg">
                                <div class="prices">350 грн</div>

                            </div>
                            <p class="detail">Гайки секретные M12X1,5X22 Хром Конус Вр.кольцо кл.17-19мм</p></a>
                    </div>
                </li>
                <li>
                    <div class="prod_container">
                        <a href="{$base_dir}gajki-i-bolty/84-bolt-m12x15x28-khrom-konus-klyuch-17-mm.html"><div class="prod_container_image">
                                <img src="{$img_dir}/bolt.jpg">
                                <div class="prices">20 грн</div>
                            </div>

                            <p class="detail">БОЛТ M12X1,5X28 ХРОМ КОНУС КЛЮЧ 17 ММ</p></a>
                </li>
                <li><div class="prod_container">
                        <a href="{$base_dir}centrovochnye-kolca/153-kolco-centrovochnoe-671-541.html"><div class="prod_container_image">
                                <img src="{$img_dir}/kolco.jpg">
                                <div class="prices">30 грн</div>
                            </div>
                            <p class="detail">КОЛЬЦО ЦЕНТРОВОЧНОЕ 67,1-54,1</p></a>
                </li>
            </ul>
        </div>
    </div>-->
{/if}
