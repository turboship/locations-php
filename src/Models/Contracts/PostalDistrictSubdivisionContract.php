<?php

namespace TurboShip\Locations\Models\Contracts;


interface PostalDistrictSubdivisionContract
{
    public function getId();
    public function setId($id);
    public function getPostalDistrict();
    public function setPostalDistrict($postalDistrict);
    public function getSubdivision();
    public function setSubdivision($subdivision);
}