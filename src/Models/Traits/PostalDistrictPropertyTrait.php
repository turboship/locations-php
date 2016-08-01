<?php

namespace TurboShip\Location\Models\Traits;


use TurboShip\Location\Models\PostalDistrict;

trait PostalDistrictPropertyTrait
{

    /**
     * @var PostalDistrict
     */
    protected $postalDistrict;


    /**
     * @return PostalDistrict
     */
    public function getPostalDistrict()
    {
        return $this->postalDistrict;
    }

    /**
     * @param PostalDistrict $postalDistrict
     */
    public function setPostalDistrict($postalDistrict)
    {
        if ($postalDistrict instanceof PostalDistrict)
            $this->postalDistrict   = $postalDistrict;
        else 
            $this->postalDistrict   = new PostalDistrict($postalDistrict);
    }
}