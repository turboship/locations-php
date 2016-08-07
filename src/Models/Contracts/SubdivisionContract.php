<?php

namespace TurboShip\Locations\Models\Contracts;


interface SubdivisionContract
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getSymbol();
    public function setSymbol($symbol);
    public function getLocalSymbol();
    public function setLocalSymbol($localSymbol);
    public function getCountry();
    public function setCountry($country);
    public function getSubdivisionType();
    public function setSubdivisionType($subdivisionType);
}