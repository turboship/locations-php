<?php

namespace TurboShip\Location\Models\Contracts;


interface SubdivisionAltNameContract
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getSubdivision();
    public function setSubdivision($subdivision);
}