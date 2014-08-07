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
class CustomerOrderItem extends DataType
{
    protected function loadProperties()
    {
        return array(
            new PropertyInfo('configItemId', 'Identity', null, false, true, false),
            new PropertyInfo('customerOrderId', 'Identity', null, false, true, false),
            new PropertyInfo('id', 'Identity', null, true, true, false),
            new PropertyInfo('productId', 'Identity', null, false, true, false),
            new PropertyInfo('shippingClassId', 'Identity', null, false, true, false),
            new PropertyInfo('name', 'string', null, false, false, false),
            new PropertyInfo('price', 'double', null, false, false, false),
            new PropertyInfo('quantity', 'int', null, false, false, false),
            new PropertyInfo('sku', 'string', null, false, false, false),
            new PropertyInfo('type', 'string', null, false, false, false),
            new PropertyInfo('unique', 'string', null, false, false, false),
            new PropertyInfo('vat', 'double', null, false, false, false),
            new PropertyInfo('variations', '\jtl\Connector\Model\CustomerOrderItemVariation', null, false, false, true),
        );
    }
}