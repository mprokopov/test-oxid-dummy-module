<?php

/**
 * This Software is the property of OXID eSales and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license key
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * @category    module
 * @package     spih
 * @link        http://www.oxid-esales.com
 * @copyright   (C) OXID eSales AG 2003-2020
 */

use OxidProfessionalServices\Dummy\Model\DummyUser;

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'            => 'dummy',
    'title'         => [
        'de'        =>  'OXPS :: dummy project generic module',
        'en'        =>  'OXPS :: dummy project generic module',
    ],
    'description'   =>  [
        'de' => 'Dummy project generic module',
        'en' => 'Dummy project generic module',
    ],
    'version'     => '0.0.1',
    'author'      => 'OXID Professional Services',
    'url'         => 'www.oxid-esales.com',
    'email'       => 'ps@oxid-esales.com',
    'extend'      => [
        OxidEsales\Eshop\Application\Model\User::class => DummyUser::class,
    ],
    'settings'    => [
    ],
];
