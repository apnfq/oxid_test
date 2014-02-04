<?php
/**
 * Created by PhpStorm.
 * User: apredeinas
 * Date: 2/4/14
 * Time: 2:24 PM
 */

class Nfq_HotOffer_Models_HotOfferOxarticle extends Nfq_HotOffer_Models_HotOfferOxarticle_Parent
{

    /**
     * Returns true/false if article is marked as hot offer.
     *
     * @return boolean;
     */
    public function isHotOffer()
    {
        return (bool)$this->oxarticles__nfq_hotoffer_marked->value;
    }

}