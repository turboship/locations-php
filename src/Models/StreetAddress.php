<?php

namespace TurboShip\Locations\Models;


use TurboShip\Locations\Models\Contracts\StreetAddressContract;
use TurboShip\Locations\Models\Traits\SubdivisionPropertyTrait;
use jamesvweston\Utilities\ArrayUtil AS AU;

class StreetAddress implements StreetAddressContract, \JsonSerializable
{

    use SubdivisionPropertyTrait;
    
    /**
     * @var string
     */
    protected $street1;

    /**
     * @var string|null
     */
    protected $street2;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $postalCode;


    public function __construct($data = null)
    {
        if (is_array($data))
        {
            $this->street1          = AU::get($data['street1']);
            $this->street2          = AU::get($data['street2']);
            $this->city             = AU::get($data['city']);
            $this->postalCode       = AU::get($data['postalCode']);
            $this->setSubdivision(AU::get($data['subdivision']));
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['street1']          = $this->street1;
        $object['street2']          = $this->street2;
        $object['city']             = $this->city;
        $object['postalCode']       = $this->postalCode;
        $object['subdivision']      = $this->subdivision->jsonSerialize();

        return $object;
    }

    /**
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param string $street1
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
    }

    /**
     * @return null|string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param null|string $street2
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    
}