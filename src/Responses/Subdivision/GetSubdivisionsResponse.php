<?php

namespace TurboShip\Locations\Responses\Subdivision;


use TurboShip\Locations\Models\Subdivision;
use TurboShip\Locations\Responses\BasePaginatedResponse;
use TurboShip\Locations\Responses\Subdivision\Contracts\GetSubdivisionsResponseContract;

class GetSubdivisionsResponse extends BasePaginatedResponse implements GetSubdivisionsResponseContract
{

    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @return Subdivision()[]
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
            $this->data[]   = new Subdivision($item);
        }
    }
}