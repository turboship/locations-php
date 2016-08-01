<?php

namespace TurboShip\Location\Requests\SubdivisionType;


use TurboShip\Location\Models\SubdivisionType;
use TurboShip\Location\Requests\SubdivisionType\Contracts\GetSubdivisionTypesResponseContract;
use TurboShip\Location\Responses\BasePaginatedResponse;

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