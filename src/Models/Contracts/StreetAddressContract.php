<?php

namespace TurboShip\Locations\Models\Contracts;


interface StreetAddressContract
{
    public function getStreet1();
    public function setStreet1($street1);
    public function getStreet2();
    public function setStreet2($street2);
    public function getCity();
    public function setCity($city);
    public function getPostalCode();
    public function setPostalCode($postalCode);
    public function getSubdivision();
    public function setSubdivision($subdivision);
}