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

class Nfq_HotOffer_Models_HotOfferOxarticlelist extends Nfq_HotOffer_Models_HotOfferOxarticlelist_Parent {
    
    /**
     * Gets Hot offer list
     * @param type $limit
     */
    public function loadHotOfferArticles($limit = null)
    {

        $this->_aArray = array();
        $sArticleTable = getViewName('oxarticles');

        $sSelect = "SELECT * FROM $sArticleTable ";
        $sSelect .= "WHERE nfq_hotoffer_marked = 1 AND oxactive = 1 AND oxissearch = 1 ORDER BY oxtimestamp DESC ";
        
        if(!empty($limit)) {
            $sSelect .= "LIMIT " . (int)$limit;
        }

        $this->selectString($sSelect);
    }
    
}
