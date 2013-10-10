<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * CrossSelling Model
 * @access public
 */
class CrossSelling extends DataModel
{
    /**
     * @var string
     */
    protected $_id = "0";
    
    /**
     * @var string
     */
    protected $_crossSellingProductId = "0";
    
    /**
     * @var string
     */
    protected $_crossSellingGroupId = "0";
    
    /**
     * @var string
     */
    protected $_productId = "0";
    
    /**
     * CrossSelling Setter
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
                case "_crossSellingProductId":
                case "_crossSellingGroupId":
                case "_productId":
                
                    $this->$name = (string)$value;
                    break;
            
            }
        }
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