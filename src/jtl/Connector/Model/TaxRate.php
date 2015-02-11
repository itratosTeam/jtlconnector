<?php
/**
 * @copyright 2010-2015 JTL-Software GmbH
 * @package jtl\Connector\Model
 * @subpackage Product
 */

namespace jtl\Connector\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tax rate model (set in JTL-Wawi ERP).
 *
 * @access public
 * @package jtl\Connector\Model
 * @subpackage Product
 * 
 * @Serializer\AccessType("public_method")
 */
class TaxRate extends DataModel
{
    /**
     * @var Identity Unique taxRate id
     * @Serializer\Type("jtl\Connector\Model\Identity")
     * @Serializer\SerializedName("id")
     * @Serializer\Accessor(getter="getId",setter="setId")
     */
    protected $id = null;

    /**
     * @var integer Optional priority number. Higher value means higher priority
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("priority")
     * @Serializer\Accessor(getter="getPriority",setter="setPriority")
     */
    protected $priority = 0;

    /**
     * @var double Tax rate value e.g. 19.00
     * @Serializer\Type("double")
     * @Serializer\SerializedName("rate")
     * @Serializer\Accessor(getter="getRate",setter="setRate")
     */
    protected $rate = 0.0;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->id = new Identity();
    }

    /**
     * @param Identity $id Unique taxRate id
     * @return \jtl\Connector\Model\TaxRate
     * @throws \InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setId(Identity $id)
    {
        return $this->setProperty('id', $id, 'Identity');
    }

    /**
     * @return Identity Unique taxRate id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $priority Optional priority number. Higher value means higher priority
     * @return \jtl\Connector\Model\TaxRate
     * @throws \InvalidArgumentException if the provided argument is not of type 'integer'.
     */
    public function setPriority(integer $priority)
    {
        return $this->setProperty('priority', $priority, 'integer');
    }

    /**
     * @return integer Optional priority number. Higher value means higher priority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param double $rate Tax rate value e.g. 19.00
     * @return \jtl\Connector\Model\TaxRate
     */
    public function setRate($rate)
    {
        return $this->setProperty('rate', $rate, 'double');
    }

    /**
     * @return double Tax rate value e.g. 19.00
     */
    public function getRate()
    {
        return $this->rate;
    }
}
