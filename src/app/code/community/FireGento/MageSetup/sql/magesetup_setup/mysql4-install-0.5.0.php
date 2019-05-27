<?php
/**
 * This file is part of a FireGento e.V. module.
 *
 * This FireGento e.V. module is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_MageSetup
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2013-2015 FireGento Team (http://www.firegento.com)
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 */
/**
 * Setup script; Adds the delivery_time attribute for products
 *
 * @category FireGento
 * @package  FireGento_MageSetup
 * @author   FireGento Team <team@firegento.com>
 */

/* @var Mage_Eav_Model_Entity_Setup $installer */
$installer = $this;
$installer->startSetup();

$installer->addAttribute(
    'catalog_product',
    'delivery_time',
    array(
        'label'                      => 'Lieferzeit',
        'input'                      => 'text',
        'required'                   => 0,
        'user_defined'               => 1,
        'default'                    => '2-3 Tage',
        'group'                      => 'General',
        'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'                    => 1,
        'filterable'                 => 0,
        'searchable'                 => 0,
        'comparable'                 => 1,
        'visible_on_front'           => 1,
        'visible_in_advanced_search' => 1,
        'used_in_product_listing'    => 1,
        'is_html_allowed_on_front'   => 1,
    )
);

$installer->endSetup();
