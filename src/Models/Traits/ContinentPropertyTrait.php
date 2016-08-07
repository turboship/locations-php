<?php

namespace TurboShip\Locations\Models\Traits;


use TurboShip\Locations\Models\Continent;

trait ContinentPropertyTrait
{

    /**
     * @var Continent
     */
    protected $continent;
    
    /**
     * @return Continent
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * @param Continent|array $continent
     */
    public function setContinent($continent)
    {
        if ($continent instanceof Continent)
            $this->continent    = $continent;
        else
            $this->continent    = new Continent($continent);
    }
}