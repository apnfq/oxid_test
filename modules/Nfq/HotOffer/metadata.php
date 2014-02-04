<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id' => 'NfqModule',
    'title' => 'Hot Offer',
    'description' => '',
    'thumbnail' => '',
    'version' => '1.0.0',
    'author' => 'NFQ',
    'url' => 'http://www.nfq.lt',
    'email' => 'info@nfq.lt',
    'extend' => array(
        'oxarticle' => 'nfq_hotoffer_models_hotofferoxarticle',
    ),
    'templates' => array(
        'nfq_hot_offer_admin.tpl' => 'nfq/hotoffer/views/admin/tpl/nfq_hot_offer_admin.tpl',
    ),
    'events' => array(
        'onActivate' => 'Installer::onActivate',
        'onDeactivate' => 'Installer::onDeactivate'
    ),
    'files' => array(
        'Installer' => 'Nfq/NfqModule/Installer.php'
    )
);
