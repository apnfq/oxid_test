<?php
/**
* @copyright C UAB NFQ Solutions 2014
*
* This Software is the property of NFQ Solutions
* and is protected by copyright law – it is NOT Freeware.
*
* Any unauthorized use of this software without a valid license key
* is a violation of the license agreement and will be prosecuted by
* civil and criminal law.
*
* Contact UAB NFQ Solutions:
* E-mail: info@nfq.lt
* http://www.nfq.lt
*
*/

class Nfq_HotOffer_Controllers_HotOffer extends oxUBase {

    protected $_sThisTemplate  = 'nfq_hotoffer_front.tpl';
    
    /**
     * Gets list of hot offers products
     * @return type
     */
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