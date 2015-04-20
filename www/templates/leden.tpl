{extends file="base.tpl"}

{block name=content}
    <div class="container">
                    {foreach $leden as $lid}
    {if $lid@first}
        <div class="row">
            {elseif ($lid@iteration - 1) is div by 4}
        </div>
        <div class="row">
    {/if}
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="well">
            <img src="{$lid.foto}"
                 alt="Niet foto-geniek" class="img-responsive center-block">

            <div class="caption text-center">
                <h3>{$lid.naam}</h3>

                <p>{$lid.jaar}</p>
            </div>
        </div>
    </div>
    {if $lid@last}
        </div>
    {/if}
{/foreach}
                </div>
    </div>
{/block}