<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Type
 */

namespace jtl\Connector\Type;

use \jtl\Connector\Type\PropertyInfo;

/**
 * @access public
 * @package jtl\Connector\Type
 */
class CustomerAttr extends DataType
{
    protected function loadProperties()
    {
        return array(
            new PropertyInfo('customerId', 'Identity', null, false, true, false),
            new PropertyInfo('id', 'Identity', null, true, true, false),
            new PropertyInfo('key', 'string', null, false, false, false),
            new PropertyInfo('value', 'string', null, false, false, false),
        );
    }
}