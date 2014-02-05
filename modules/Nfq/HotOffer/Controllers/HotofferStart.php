<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Nfq_HotOffer_Controllers_HotOfferStart extends Nfq_HotOffer_Controllers_HotOfferStart_parent
{

    /**
     * Template variable getter. Returns hot offer list
     *
     * @return array
     */
    public function getHotOfferList()
    {
        if ($this->_aHotOfferList === null) {
            $oArtList = oxNew('oxarticlelist');
            $oArtList->loadHotOfferArticles(4);

            if (count($oArtList)) {
                $this->_aHotOfferList = $oArtList;
            }
        }

        return $this->_aHotOfferList;
    }

}