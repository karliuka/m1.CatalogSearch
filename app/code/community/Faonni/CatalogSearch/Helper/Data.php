<?php
/**
 * Faonni
 *  
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 * 
 * @package     Faonni_CatalogSearch
 * @copyright   Copyright (c) 2015 Karliuka Vitalii(karliuka.vitalii@gmail.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Faonni_CatalogSearch_Helper_Data 
	extends Mage_Core_Helper_Abstract
{
    /**
     * Check whether CatalogSearch functionality should be enabled
     *
     * @return bool
     */
    public function isDisabled()
    {
        return (bool)Mage::helper('Core')->isModuleEnabled('Faonni_CatalogSearch') && 
			Mage::getStoreConfig('catalog/seo/disable_advanced_search');
    }	
}