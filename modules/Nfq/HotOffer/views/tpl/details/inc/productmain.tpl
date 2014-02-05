[{ $smarty.block.parent }]
[{ if $oDetailsProduct->oxarticles__nfq_hotoffer_marked->value == 1 }]
[{oxstyle include=$oViewConf->getModuleUrl("nfqhotoffer", "out/css/style.css")}]
<div class="hot-overlay">
    <img src="[{ $oViewConf->getModuleUrl("nfqhotoffer") }]out/img/hot_offer.png" />
</div>
[{ /if }]
