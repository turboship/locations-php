<?php

namespace TurboShip\Locations\Models;

use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Locations\Models\Contracts\SubdivisionContract;
use TurboShip\Locations\Models\Traits\CountryPropertyTrait;
use TurboShip\Locations\Models\Traits\SubdivisionTypePropertyTrait;

class Subdivision implements SubdivisionContract, \JsonSerializable
{
    
    use CountryPropertyTrait, SubdivisionTypePropertyTrait;
    
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $symbol;

    /**
     * @var string
     */
    protected $localSymbol;


    public function __construct($data = null)
    {
        if (is_array($data))
        {
            $this->id               = AU::get($data['id']);
            $this->name             = AU::get($data['name']);
            $this->symbol           = AU::get($data['symbol']);
            $this->localSymbol      = AU::get($data['localSymbol']);
            $this->setCountry(AU::get($data['country']));
            $this->setSubdivisionType(AU::get($data['subdivisionType']));
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['id']               = $this->id;
        $object['name']             = $this->name;
        $object['symbol']           = $this->symbol;
        $object['localSymbol']      = $this->localSymbol;
        $object['country']          = $this->country->jsonSerialize();
        $object['subdivisionType']  = $this->subdivisionType->jsonSerialize();

        return $object;
    }
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
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

    /**
     * @return string
     */
    public function getLocalSymbol()
    {
        return $this->localSymbol;
    }

    /**
     * @param string $localSymbol
     */
    public function setLocalSymbol($localSymbol)
    {
        $this->localSymbol = $localSymbol;
    }
    
}