<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 * @subpackage CustomerOrder
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * customer order item variation
 *
 * @access public
 * @subpackage CustomerOrder
 */
class CustomerOrderItemVariation extends DataModel
{
    /**
     * @var Identity Unique customerOrderItemVariation id
     */
    protected $_id = null;
    
    /**
     * @var Identity Reference to customerOrderItem
     */
    protected $_customerOrderItemId = null;
    
    /**
     * @var Identity Reference to productVariation
     */
    protected $_productVariationId = null;
    
    /**
     * @var Identity Reference to productVariationValue
     */
    protected $_productVariationValueId = null;
    
    /**
     * @var string Variation name e.g. "color"
     */
    protected $_productVariationName = '';
    
    /**
     * @var string Variation value e.g. "red"
     */
    protected $_productVariationValueName = '';
    
    /**
     * @var string Optional custom text value for variation 
     */
    protected $_freeField = '';
    
    /**
     * @var double Optional extra surcharge (added to item price)
     */
    protected $_surcharge = 0;
    
    /**
     * @var mixed:string
     */
    protected $_identities = array(
        'id',
        'customerOrderItemId',
        'productVariationId',
        'productVariationValueId'
    );
    
    /**
     * CustomerOrderItemVariation Setter
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            if ($value === null) {
                $this->$name = null;
                return;
            }
        
            switch ($name) {
                case "_id":
                case "_customerOrderItemId":
                case "_productVariationId":
                case "_productVariationValueId":
                
                    $this->$name = Identity::convert($value);
                    break;
            
                case "_productVariationName":
                case "_productVariationValueName":
                case "_freeField":
                
                    $this->$name = (string)$value;
                    break;
            
                case "_surcharge":
                
                    $this->$name = (double)$value;
                    break;
            
            }
        }
    }
    
    /**
     * @param Identity $id Unique customerOrderItemVariation id
     * @return \jtl\Connector\Model\CustomerOrderItemVariation
     */
    public function setId(Identity $id)
    {
        $this->_id = $id;
        return $this;
    }
    
    /**
     * @return Identity Unique customerOrderItemVariation id
     */
    public function getId()
    {
        return $this->_id;
    }
    /**
     * @param Identity $customerOrderItemId Reference to customerOrderItem
     * @return \jtl\Connector\Model\CustomerOrderItemVariation
     */
    public function setCustomerOrderItemId(Identity $customerOrderItemId)
    {
        $this->_customerOrderItemId = $customerOrderItemId;
        return $this;
    }
    
    /**
     * @return Identity Reference to customerOrderItem
     */
    public function getCustomerOrderItemId()
    {
        return $this->_customerOrderItemId;
    }
    /**
     * @param Identity $productVariationId Reference to productVariation
     * @return \jtl\Connector\Model\CustomerOrderItemVariation
     */
    public function setProductVariationId(Identity $productVariationId)
    {
        $this->_productVariationId = $productVariationId;
        return $this;
    }
    
    /**
     * @return Identity Reference to productVariation
     */
    public function getProductVariationId()
    {
        return $this->_productVariationId;
    }
    /**
     * @param Identity $productVariationValueId Reference to productVariationValue
     * @return \jtl\Connector\Model\CustomerOrderItemVariation
     */
    public function setProductVariationValueId(Identity $productVariationValueId)
    {
        $this->_productVariationValueId = $productVariationValueId;
        return $this;
    }
    
    /**
     * @return Identity Reference to productVariationValue
     */
    public function getProductVariationValueId()
    {
        return $this->_productVariationValueId;
    }
    /**
     * @param string $productVariationName Variation name e.g. "color"
     * @return \jtl\Connector\Model\CustomerOrderItemVariation
     */
    public function setProductVariationName($productVariationName)
    {
        $this->_productVariationName = (string)$productVariationName;
        return $this;
    }
    
    /**
     * @return string Variation name e.g. "color"
     */
    public function getProductVariationName()
    {
        return $this->_productVariationName;
    }
    /**
     * @param string $productVariationValueName Variation value e.g. "red"
     * @return \jtl\Connector\Model\CustomerOrderItemVariation
     */
    public function setProductVariationValueName($productVariationValueName)
    {
        $this->_productVariationValueName = (string)$productVariationValueName;
        return $this;
    }
    
    /**
     * @return string Variation value e.g. "red"
     */
    public function getProductVariationValueName()
    {
        return $this->_productVariationValueName;
    }
    /**
     * @param string $freeField Optional custom text value for variation 
     * @return \jtl\Connector\Model\CustomerOrderItemVariation
     */
    public function setFreeField($freeField)
    {
        $this->_freeField = (string)$freeField;
        return $this;
    }
    
    /**
     * @return string Optional custom text value for variation 
     */
    public function getFreeField()
    {
        return $this->_freeField;
    }
    /**
     * @param double $surcharge Optional extra surcharge (added to item price)
     * @return \jtl\Connector\Model\CustomerOrderItemVariation
     */
    public function setSurcharge($surcharge)
    {
        $this->_surcharge = (double)$surcharge;
        return $this;
    }
    
    /**
     * @return double Optional extra surcharge (added to item price)
     */
    public function getSurcharge()
    {
        return $this->_surcharge;
    }
}