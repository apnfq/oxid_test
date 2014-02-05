<?php
/**
 * Created by PhpStorm.
 * User: apredeinas
 * Date: 2/4/14
 * Time: 4:19 PM
 */

class Nfq_HotOffer_Controllers_HotOffer extends oxUBase {

    protected $_sThisTemplate  = 'nfq_hotoffer_front.tpl';
    
    public function getHotOfferList()
    {
        if ($this->_aHotOfferList === null) {
            $oArtList = oxNew('oxarticlelist');
            $oArtList->loadHotOfferArticles();

            if (count($oArtList)) {
                $this->_aHotOfferList = $oArtList;
            }

        }

        return $this->_aHotOfferList;
        
    }

}