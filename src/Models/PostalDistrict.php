<?php

namespace TurboShip\Locations\Models;


use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Locations\Models\Contracts\PostalDistrictContract;
use TurboShip\Locations\Models\Traits\CountryPropertyTrait;

class PostalDistrict implements PostalDistrictContract, \JsonSerializable
{

    use CountryPropertyTrait;
    
    
    /**
     * @var
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $french;

    /**
     * @var string
     */
    protected $symbol;


    public function __construct($data = null)
    {
        if (is_array($data))
        {
            $this->id               = AU::get($data['id']);
            $this->name             = AU::get($data['name']);
            $this->french           = AU::get($data['french']);
            $this->symbol           = AU::get($data['symbol']);
            $this->setCountry(AU::get($data['country']));
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['id']               = $this->id;
        $object['name']             = $this->name;
        $object['french']           = $this->french;
        $object['symbol']           = $this->symbol;
        $object['country']          = $this->country->jsonSerialize();

        return $object;
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFrench()
    {
        return $this->french;
    }

    /**
     * @param string $french
     */
    public function setFrench($french)
    {
        $this->french = $french;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }
    
}