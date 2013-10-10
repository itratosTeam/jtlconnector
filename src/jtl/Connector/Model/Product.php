<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * Product Model
 * @access public
 */
class Product extends DataModel
{
    /**
     * @var string
     */
    protected $_id = "0";
    
    /**
     * @var string
     */
    protected $_masterProductId = "0";
    
    /**
     * @var string
     */
    protected $_manufacturerId = "0";
    
    /**
     * @var string
     */
    protected $_deliveryStatusId = "0";
    
    /**
     * @var string
     */
    protected $_unitId = "0";
    
    /**
     * @var string
     */
    protected $_basePriceUnitId = "0";
    
    /**
     * @var string
     */
    protected $_taxClassId = "0";
    
    /**
     * @var string
     */
    protected $_shippingClassId = "0";
    
    /**
     * @var string
     */
    protected $_sku = '';
    
    /**
     * @var string
     */
    protected $_note = '';
    
    /**
     * @var double
     */
    protected $_stockLevel = 0;
    
    /**
     * @var double
     */
    protected $_vat = 0.0;
    
    /**
     * @var double
     */
    protected $_minimumOrderQuantity = 0.0;
    
    /**
     * @var string
     */
    protected $_ean = '';
    
    /**
     * @var bool
     */
    protected $_isTopProduct = false;
    
    /**
     * @var double
     */
    protected $_productWeight = 0;
    
    /**
     * @var double
     */
    protected $_shippingWeight = 0;
    
    /**
     * @var bool
     */
    protected $_isNew = false;
    
    /**
     * @var double
     */
    protected $_recommendedRetailPrice = 0.0;
    
    /**
     * @var bool
     */
    protected $_considerStock = false;
    
    /**
     * @var bool
     */
    protected $_permitNegativeStock = false;
    
    /**
     * @var bool
     */
    protected $_considerVariationStock = false;
    
    /**
     * @var bool
     */
    protected $_isDivisible = false;
    
    /**
     * @var bool
     */
    protected $_considerBasePrice = false;
    
    /**
     * @var double
     */
    protected $_basePriceDivisor = 0.0;
    
    /**
     * @var string
     */
    protected $_keywords = '';
    
    /**
     * @var int
     */
    protected $_sort = 0;
    
    /**
     * @var string
     */
    protected $_created = "0000-00-00";
    
    /**
     * @var string
     */
    protected $_availableFrom = "0000-00-00";
    
    /**
     * @var string
     */
    protected $_manufacturerNumber = '';
    
    /**
     * @var string
     */
    protected $_serialNumber = '';
    
    /**
     * @var string
     */
    protected $_isbn = '';
    
    /**
     * @var string
     */
    protected $_asin = '';
    
    /**
     * @var string
     */
    protected $_unNumber = '';
    
    /**
     * @var string
     */
    protected $_hazardIdNumber = '';
    
    /**
     * @var string
     */
    protected $_taric = '';
    
    /**
     * @var bool
     */
    protected $_isMasterProduct = false;
    
    /**
     * @var double
     */
    protected $_takeOffQuantity = 0.0;
    
    /**
     * @var string
     */
    protected $_setArticleId = "0";
    
    /**
     * @var string
     */
    protected $_upc = '';
    
    /**
     * @var string
     */
    protected $_originCountry = '';
    
    /**
     * @var string
     */
    protected $_epid = '';
    
    /**
     * @var string
     */
    protected $_productTypeId = "0";
    
    /**
     * @var double
     */
    protected $_inflowQuantity = 0.0;
    
    /**
     * @var string
     */
    protected $_inflowDate = '';
    
    /**
     * @var double
     */
    protected $_supplierStockLevel = 0.0;
    
    /**
     * @var double
     */
    protected $_supplierDeliveryTime = 0.0;
    
    /**
     * @var string
     */
    protected $_bestBefore = '';
    
    /**
     * Product Setter
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
                case "_masterProductId":
                case "_manufacturerId":
                case "_deliveryStatusId":
                case "_unitId":
                case "_basePriceUnitId":
                case "_taxClassId":
                case "_shippingClassId":
                case "_sku":
                case "_note":
                case "_ean":
                case "_keywords":
                case "_created":
                case "_availableFrom":
                case "_manufacturerNumber":
                case "_serialNumber":
                case "_isbn":
                case "_asin":
                case "_unNumber":
                case "_hazardIdNumber":
                case "_taric":
                case "_setArticleId":
                case "_upc":
                case "_originCountry":
                case "_epid":
                case "_productTypeId":
                case "_inflowDate":
                case "_bestBefore":
                
                    $this->$name = (string)$value;
                    break;
            
                case "_stockLevel":
                case "_vat":
                case "_minimumOrderQuantity":
                case "_productWeight":
                case "_shippingWeight":
                case "_recommendedRetailPrice":
                case "_basePriceDivisor":
                case "_takeOffQuantity":
                case "_inflowQuantity":
                case "_supplierStockLevel":
                case "_supplierDeliveryTime":
                
                    $this->$name = (double)$value;
                    break;
            
                case "_isTopProduct":
                case "_isNew":
                case "_considerStock":
                case "_permitNegativeStock":
                case "_considerVariationStock":
                case "_isDivisible":
                case "_considerBasePrice":
                case "_isMasterProduct":
                
                    $this->$name = (bool)$value;
                    break;
            
                case "_sort":
                
                    $this->$name = (int)$value;
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