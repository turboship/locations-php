<?php

namespace TurboShip\Locations\Models;


use TurboShip\Locations\Models\Contracts\PostalDistrictSubdivisionContract;
use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Locations\Models\Traits\PostalDistrictPropertyTrait;
use TurboShip\Locations\Models\Traits\SubdivisionPropertyTrait;

class PostalDistrictSubdivision implements PostalDistrictSubdivisionContract, \JsonSerializable
{

    use PostalDistrictPropertyTrait, SubdivisionPropertyTrait;
    
    /**
     * @var int
     */
    protected $id;


    public function __construct($data = null)
    {
        if (is_array($data))
        {
            $this->id               = AU::get($data['id']);
            $this->setPostalDistrict(AU::get($data['postalDistrict']));
            $this->setSubdivision(AU::get($data['subdivision']));
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['id']               = $this->id;
        $object['postalDistrict']   = $this->postalDistrict->jsonSerialize();
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

}