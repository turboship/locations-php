<?php

namespace TurboShip\Locations\Models\Contracts;


interface CountryContract
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getIso2();
    public function setIso2($iso2);
    public function getContinent();
    public function setContinent($continent);
}