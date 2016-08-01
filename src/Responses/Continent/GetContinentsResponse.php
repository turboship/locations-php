<?php

namespace TurboShip\Location\Responses\Continent;


use TurboShip\Location\Models\Continent;
use TurboShip\Location\Responses\BasePaginatedResponse;
use TurboShip\Location\Responses\Continent\Contracts\GetContinentsResponseContract;

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