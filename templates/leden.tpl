{extends file="base.tpl"}

{block name=content}
    <div class="container">
    {foreach $leden as $jaar=>$generatie}
        <div class="panel panel-baldr">
        <div class="panel-heading">
            <h3 class="panel-title">{$jaar}</h3>
        </div>
        <div class="panel-body">

            {foreach $generatie as $lid}
                {if $lid@first}
                    <div class="row">
                        {elseif ($lid@iteration - 1) is div by 4}
                    </div>
                    <div class="row">
                {/if}
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="{$lid.foto}"
                             alt="{$lid.naam}">

                        <div class="image-caption">

                            <h3 class="text-center">{$lid.naam}</h3>

                        </div>
                    </div>
                </div>
                {if $lid@last}
                    </div>
                {/if}
            {/foreach}
        </div>
        </div>
    {/foreach}
    </div>

{/block}