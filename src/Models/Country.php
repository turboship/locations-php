<?php

namespace TurboShip\Locations\Models;


use TurboShip\Locations\Models\Contracts\CountryContract;
use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Locations\Models\Traits\ContinentPropertyTrait;

class Country implements CountryContract, \JsonSerializable
{

    use ContinentPropertyTrait;
    
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
    protected $iso2;


    public function __construct($data = null)
    {
        if (is_array($data))
        {
            $this->id               = AU::get($data['id']);
            $this->name             = AU::get($data['name']);
            $this->iso2             = AU::get($data['iso2']);
            $this->setContinent(AU::get($data['continent']));
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['id']               = $this->id;
        $object['name']             = $this->name;
        $object['iso2']             = $this->iso2;
        $object['continent']        = $this->continent->jsonSerialize();

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
    public function getIso2()
    {
        return $this->iso2;
    }

    /**
     * @param string $iso2
     */
    public function setIso2($iso2)
    {
        $this->iso2 = $iso2;
    }
    

}