<?php

namespace TurboShip\Locations\Requests\SubdivisionType;


use TurboShip\Locations\Models\SubdivisionType;
use TurboShip\Locations\Requests\SubdivisionType\Contracts\GetSubdivisionTypesResponseContract;
use TurboShip\Locations\Responses\BasePaginatedResponse;

class GetSubdivisionTypesResponse extends BasePaginatedResponse implements GetSubdivisionTypesResponseContract
{

    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @return SubdivisionType()[]
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
            $this->data[]   = new SubdivisionType($item);
        }
    }
    
}