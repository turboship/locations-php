<?php

namespace TurboShip\Location\Models\Traits;


use TurboShip\Location\Models\Subdivision;

trait SubdivisionPropertyTrait
{

    /**
     * @var Subdivision
     */
    protected $subdivision;

    /**
     * @return Subdivision
     */
    public function getSubdivision()
    {
        return $this->subdivision;
    }

    /**
     * @param Subdivision|array $subdivision
     */
    public function setSubdivision($subdivision)
    {
        if ($subdivision instanceof Subdivision)
            $this->subdivision      = $subdivision;
        else
            $this->subdivision      = new Subdivision($subdivision);
    }
}