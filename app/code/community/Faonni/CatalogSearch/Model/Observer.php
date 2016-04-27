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
class Faonni_CatalogSearch_Model_Observer
{
    /**
     * Dispatch event before action
     *
     * @param   Varien_Event_Observer $observer
     * @return  Faonni_CatalogSearch_Model_Observer
     */
    public function preDispatch(Varien_Event_Observer $observer)
    {
		if (!Mage::helper('faonni_catalogsearch')->isDisabled()) {
            return $this;
        }
		/** @var $action Mage_Core_Controller_Varien_Action */
        $action = $observer->getEvent()->getControllerAction();
		if ($action && 'advanced' == $action->getRequest()->getControllerName()) {
			$action->norouteAction();
		}
        return $this;
    }
}