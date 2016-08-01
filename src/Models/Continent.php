<?php

namespace TurboShip\Location\Models;

use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Location\Models\Contracts\ContinentContract;

class Continent implements ContinentContract, \JsonSerializable
{

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


    public function __construct($data = null)
    {
        if (is_array($data))
        {
            $this->id               = AU::get($data['id']);
            $this->name             = AU::get($data['name']);
            $this->symbol           = AU::get($data['symbol']);
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
    
    
}