<?php

namespace TurboShip\Locations\Models\Contracts;


interface SubdivisionTypeContract
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
}