<?php

namespace TurboShip\Location\Models;


use TurboShip\Location\Models\Contracts\SubdivisionAltNameContract;
use TurboShip\Location\Models\Traits\SubdivisionPropertyTrait;
use jamesvweston\Utilities\ArrayUtil AS AU;

class SubdivisionAltName implements SubdivisionAltNameContract, \JsonSerializable
{

    use SubdivisionPropertyTrait;

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
            $this->setSubdivision(AU::get($data['subdivision']));
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['id']               = $this->id;
        $object['name']             = $this->name;
        $object['subdivision']      = $this->subdivision->jsonSerialize();

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