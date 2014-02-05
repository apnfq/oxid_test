[{ $smarty.block.parent }]
[{ if $_product->oxarticles__nfq_hotoffer_marked->value == 1 }]
<div class="hot-overlay">
    <img src="[{ $oViewConf->getModuleUrl("nfqhotoffer") }]out/img/hot_offer.png" />
</div>
[{ /if }]
