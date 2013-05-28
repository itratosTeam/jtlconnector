<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * ConfigItemI18n Model
 * @access public
 */
class ConfigItemI18n extends DataModel
{
    /**
     * @var int
     */
    protected $_configItemId;
    
    /**
     * @var string
     */
    protected $_localeName;
    
    /**
     * @var string
     */
    protected $_name;
    
    /**
     * @var string
     */
    protected $_description;
    
    /**
     * ConfigItemI18n Setter
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        switch ($name) {
            case "_configItemId":
            
                $this->$name = (int)$value;
                break;
        
            case "_localeName":
            case "_name":
            case "_description":
            
                $this->$name = (string)$value;
                break;
        
        }
    }
    
    /**
     * ConfigItemI18n Getter
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