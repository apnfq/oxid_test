<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id' => 'nfqhotoffer',
    'title' => 'Hot Offer',
    'description' => '',
    'thumbnail' => 'thumb.png',
    'version' => '1.0.0',
    'author' => 'NFQ',
    'url' => 'http://www.nfq.lt',
    'email' => 'info@nfq.lt',
    'extend' => array(
        'oxarticle' => 'nfq_hotoffer_models_hotofferoxarticle',
        'oxarticlelist' => 'nfq_hotoffer_models_hotofferoxarticlelist',
        'start' => 'nfq_hotoffer_controllers_hotofferstart'
    ),
    'templates' => array(
        'nfq_hot_offer_admin.tpl' => 'nfq/hotoffer/views/admin/tpl/nfq_hot_offer_admin.tpl',
        'nfq_hotoffer_front.tpl' => 'nfq/hotoffer/views/tpl/shop/nfq_hotoffer_front.tpl',

    ),
    'events' => array(
        'onActivate' => 'Installer::onActivate',
        'onDeactivate' => 'Installer::onDeactivate'
    ),
    'files' => array(
        'Installer' => 'Nfq/NfqModule/Installer.php'
    ),
    'blocks' => array(
        array('template' => 'page/details/inc/productmain.tpl', 'block' => 'details_productmain_zoom', 'file' => 'views/tpl/details/inc/productmain.tpl'),
        array('template' => 'widget/product/list.tpl', 'block' => 'hot_offer_overlay', 'file' => 'views/tpl/widget/product/list.tpl'),
        array('template' => 'widget/product/list.tpl', 'block' => 'hot_offer_css', 'file' => 'views/tpl/widget/product/list_css.tpl'),
        array('template' => 'page/shop/start.tpl', 'block' => 'hot_offer_homepage', 'file' => 'views/tpl/shop/start.tpl'),
        array('template' => 'widget/header/categorylist.tpl', 'block' => 'hot_offer_link', 'file' => 'views/tpl/widget/header/categorylist.tpl'),
    )
);
