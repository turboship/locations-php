<?php

namespace TurboShip\Location\Models\Contracts;


interface PostalDistrictContract
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getFrench();
    public function setFrench($french);
    public function getSymbol();
    public function setSymbol($symbol);
    public function getCountry();
    public function setCountry($country);
}