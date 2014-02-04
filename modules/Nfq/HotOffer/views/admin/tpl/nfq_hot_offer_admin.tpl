[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

<form name="transfer" id="transfer" action="[{ $oViewConf->getSelfLink() }]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{ $oxid }]">
    <input type="hidden" name="cl" value="hotoffer">
    <input type="hidden" name="editlanguage" value="[{ $editlanguage }]">
</form>
<form name="hot_offer_update" action="[{ $oViewConf->getSelfLink() }]" method="post">

    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="Nfq_Hotoffer_Controllers_Admin_Hotoffer">
    <input type="hidden" name="fnc" value="update">
    <input type="hidden" name="oxid" value="[{ $oxid }]">

    <div id="offer_cont">
        <label for="hot_offer_sel">[{ oxmultilang ident="hot_off_promote" }]</label>
        <input id="hot_offer_sel" type="checkbox" name="hot_offer" value="1" [{ if $article->oxarticles__nfq_hotoffer_marked->value == 1  }]checked="checked"[{ /if }] />
        <input type="submit" value="[{ oxmultilang ident="hot_off_update" }]" name="save" />
    </div>

</form>


 [{include file="bottomnaviitem.tpl"}]
 [{include file="bottomitem.tpl"}]