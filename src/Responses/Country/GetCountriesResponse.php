<?php

namespace TurboShip\Location\Responses\Country;


use TurboShip\Location\Models\Country;
use TurboShip\Location\Responses\BasePaginatedResponse;
use TurboShip\Location\Responses\Country\Contracts\GetCountriesResponseContract;

class GetCountriesResponse extends BasePaginatedResponse implements GetCountriesResponseContract
{

    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @return Country()[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param   array   $data
     */
    public function setData($data)
    {
        foreach ($data AS $item)
        {
            $this->data[]   = new Country($item);
        }
    }
    
}