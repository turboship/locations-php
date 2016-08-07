<?php

namespace TurboShip\Locations\Responses\Continent;


use TurboShip\Locations\Models\Continent;
use TurboShip\Locations\Responses\BasePaginatedResponse;
use TurboShip\Locations\Responses\Continent\Contracts\GetContinentsResponseContract;

class GetContinentsResponse extends BasePaginatedResponse implements GetContinentsResponseContract
{

    public function __construct($data = null)
    {
        parent::__construct($data);
    }
    
    /**
     * @return Continent[]
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
            $this->data[]   = new Continent($item);
        }
    }
}