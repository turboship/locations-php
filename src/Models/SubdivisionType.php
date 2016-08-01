<?php

namespace TurboShip\Location\Models;


use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Location\Models\Contracts\SubdivisionTypeContract;

class SubdivisionType implements SubdivisionTypeContract, \JsonSerializable
{
    
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;


    public function __construct($data = null)
    {
        if (is_array($data))
        {
            $this->id               = AU::get($data['id']);
            $this->name             = AU::get($data['name']);
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['id']               = $this->id;
        $object['name']             = $this->name;

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

}