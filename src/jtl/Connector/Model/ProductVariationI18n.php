<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * ProductVariationI18n Model
 * @access public
 */
class ProductVariationI18n extends DataModel
{
    /**
     * @var string
     */
    protected $_localeName;
    
    /**
     * @var int
     */
    protected $_productVariationId;
    
    /**
     * @var string
     */
    protected $_name;
    
    /**
     * ProductVariationI18n Setter
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        switch ($name) {
            case "_localeName":
            case "_name":
            
                $this->$name = (string)$value;
                break;
        
            case "_productVariationId":
            
                $this->$name = (int)$value;
                break;
        
        }
    }
    
    /**
     * ProductVariationI18n Getter
     *
     * @param string $name
     */
    public function __get($name)
    {
        return $this->$name;
    }
    
    /**
     * (non-PHPdoc)
     * @see \jtl\Core\Model\DataModel::map()
     */ 
    public function map($toWawi = false, \stdClass $obj = null)
    {
    
    }
}
?>