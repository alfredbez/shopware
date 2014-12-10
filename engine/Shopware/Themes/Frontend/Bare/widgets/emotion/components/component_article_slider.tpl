{* Slider panel *}
{block name="widget_emotion_component_product_slider"}
    <div class="panel has--border">

        {* Title *}
        {block name="widget_emotion_component_product_slider_title"}
            {if $Data.article_slider_title}
                <div class="panel--title article-slider--title is--underline">{$Data.article_slider_title}</div>
            {/if}
        {/block}

        {* Slider content based on the configuration *}
        {block name="widget_emotion_component_product_slider_content"}
            <div class="panel--body is--wide slider--article">
                <div class="product-slider--container">
                    {if $Data.article_slider_type == 'selected_article'}
                        {$articles = $Data.values}

                        {* Products inside the slider *}
                        {block name="widget_emotion_component_product_slider"}
                            {include file="widgets/emotion/slide_articles.tpl" articles=$articles sElementWidth=$sElementWidth sPerPage=$perPage sElementHeight=$sliderHeight-5}
                        {/block}
                    {/if}
                </div>
            </div>
        {/block}
    </div>
{/block}