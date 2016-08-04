<?php

namespace TurboShip\Location\Requests\Address;


use TurboShip\Location\Requests\Address\Contract\VerifyAddressRequestContract;
use TurboShip\Locations\Requests\Validatable;

class VerifyAddressRequest implements VerifyAddressRequestContract, Validatable, \JsonSerializable
{

    public function jsonSerialize()
    {
        return [];
    }
    
    
    public function validate()
    {
        // TODO: Implement validate() method.
    }
}