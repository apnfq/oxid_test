<?php
/**
 * Created by PhpStorm.
 * User: apredeinas
 * Date: 2/4/14
 * Time: 10:36 AM
 */

class Nfq_Hotoffer_Controllers_Admin_Hotoffer extends oxAdminDetails {

    /**
     * Template name
     * @var string
     */
    protected $_template = 'nfq_hot_offer_admin.tpl';

    /**
     * Renders main template
     * @return string
     */
    public function render() {

        parent::render();

        $oArticle = oxNew("oxarticle");
        $this->_aViewData["article"] = $oArticle;

        $soxId = $this->getEditObjectId();

        if(isset($soxId) && $soxId != "-1") {
            $oArticle->loadInLang($this->_iEditLang, $soxId);
        }

        return $this->_template;

    }

    /**
     * Updates the hot offer param in db
     */
    public function update() {

        parent::save();

        $soxId = $this->getEditObjectId();
        $aParams = (int)oxConfig::getParameter("hot_offer");

        $oArticle = oxNew("oxarticle");
        $oArticle->load($soxId);

        $oArticle->setLanguage(0);

        $oArticle->assign(array('oxarticles__nfq_hotoffer_marked' => $aParams));
        $oArticle->setLanguage($this->_iEditLang);

        $oArticle->save();

        $this->setEditObjectId($oArticle->getId());
    }

}