<?php

namespace TurboShip\Locations\Models\Contracts;

interface ContinentContract
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getSymbol();
    public function setSymbol($symbol);
}