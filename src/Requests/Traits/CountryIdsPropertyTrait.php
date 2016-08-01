<?php

namespace TurboShip\Location\Requests\Traits;


trait CountryIdsPropertyTrait
{

    /**
     * @var string|null
     */
    protected $countryIds;

    
    /**
     * @return null|string
     */
    public function getCountryIds()
    {
        return $this->countryIds;
    }

    /**
     * @param null|string $countryIds
     */
    public function setCountryIds($countryIds)
    {
        $this->countryIds = $countryIds;
    }
    
}