<?php

namespace TurboShip\Locations\Responses\PostalDistrict;


use TurboShip\Locations\Models\PostalDistrict;
use TurboShip\Locations\Responses\BasePaginatedResponse;
use TurboShip\Locations\Responses\PostalDistrict\Contracts\GetPostalDistrictsResponseContract;

class GetPostalDistrictsResponse extends BasePaginatedResponse implements GetPostalDistrictsResponseContract
{

    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @return PostalDistrict()[]
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
            $this->data[]   = new PostalDistrict($item);
        }
    }
    
}