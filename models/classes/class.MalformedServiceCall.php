<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2013 (original work) Open Assessment Technologies SA (under the project TAO-PRODUCT);
 * 
 */

/**
 *  
 *
 * @access public
 * @author Joel Bout, <joel@taotesting.com>
 * @package taoWfTest
 * @subpackage models_classes
 */
class taoWfTest_models_classes_MalformedServiceCall
    extends taoDelivery_models_classes_CompilationFailedException
    implements common_exception_UserReadableException
{
    private $service;
    
    public function __construct($service, $message) {
        $this->service = $service;
        parent::__construct($message);
    }
    
    public function getUserMessage() {
        return __('The service call "%s" does not point to a valid item', $this->service->getLabel());
    }

}