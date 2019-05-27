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
 * Block to retrieve data from imprint config field.
 *
 * @category FireGento
 * @package  FireGento_MageSetup
 * @author   FireGento Team <team@firegento.com>
 */
class FireGento_MageSetup_Block_Imprint_Field extends FireGento_MageSetup_Block_Imprint_Content
{
    /**
     * Render imprint field
     *
     * @return string Field value
     * @throws Exception
     */
    protected function _toHtml()
    {

        if ($this->getValue() == 'email') {
            $isFrontend = ($this->getLayout()->getArea() === 'frontend');
            $isCheckout = ($this->getRequest()->getActionName() === 'placeOrder');

            // protect email address in frontend but not when placing order where it is used to
            // send order confirmation mails (which might include imprint's mail address, i.e.
            // in the withdrawal form)
            return $this->getEmail($isFrontend && !$isCheckout);
        }

        return $this->getData($this->getValue());
    }
}
