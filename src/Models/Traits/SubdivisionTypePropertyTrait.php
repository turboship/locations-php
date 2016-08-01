<?php

namespace TurboShip\Location\Models\Traits;


use TurboShip\Location\Models\SubdivisionType;

trait SubdivisionTypePropertyTrait
{
    
    /**
     * @var SubdivisionType
     */
    protected $subdivisionType;


    /**
     * @return SubdivisionType
     */
    public function getSubdivisionType()
    {
        return $this->subdivisionType;
    }

    /**
     * @param SubdivisionType $subdivisionType
     */
    public function setSubdivisionType($subdivisionType)
    {
        if ($subdivisionType instanceof SubdivisionType)
            $this->subdivisionType  = $subdivisionType;
        else 
            $this->subdivisionType  = new SubdivisionType($subdivisionType);
    }
}