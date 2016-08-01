<?php

namespace TurboShip\Location\Responses\Subdivision;


use TurboShip\Location\Models\Subdivision;
use TurboShip\Location\Responses\BasePaginatedResponse;
use TurboShip\Location\Responses\Subdivision\Contracts\GetSubdivisionsResponseContract;

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