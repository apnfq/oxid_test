<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Nfq_HotOffer_Models_HotOfferOxarticlelist extends Nfq_HotOffer_Models_HotOfferOxarticlelist_Parent {
    
    public function loadHotOfferArticles($limit = null)
    {

        $myConfig = $this->getConfig();

        $this->_aArray = array();
        $sArticleTable = getViewName('oxarticles');

        $sSelect = "SELECT * FROM $sArticleTable ";
        $sSelect .= "WHERE nfq_hotoffer_marked = 1 AND oxactive = 1 AND oxissearch = 1 ORDER BY oxtimestamp DESC ";
        
        $sSelect .= "LIMIT " . (int)$limit;

        $this->selectString($sSelect);
    }
    
}
