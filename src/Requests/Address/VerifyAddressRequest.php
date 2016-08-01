<?php

namespace TurboShip\Location\Requests\Address;


use TurboShip\Location\Requests\Address\Contract\VerifyAddressRequestContract;

class VerifyAddressRequest implements VerifyAddressRequestContract, \JsonSerializable
{

    public function jsonSerialize()
    {
        return [];
    }
}