<?php

namespace TurboShip\Location\Models\Traits;


use TurboShip\Location\Models\Country;

trait CountryPropertyTrait
{

    /**
     * @var Country
     */
    protected $country;

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country|array $country
     */
    public function setCountry($country)
    {
        if ($country instanceof Country)
            $this->country      = $country;
        else 
            $this->country      = new Country($country);
    }
}