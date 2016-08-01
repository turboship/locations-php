<?php

namespace TurboShip\Location\Requests\Subdivision;


use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Location\Requests\BasePaginatableRequest;
use TurboShip\Location\Requests\Subdivision\Contracts\GetSubdivisionsRequestContract;
use TurboShip\Location\Requests\Traits\CountryIdsPropertyTrait;
use TurboShip\Location\Requests\Traits\IdsPropertyTrait;
use TurboShip\Location\Requests\Traits\NamesPropertyTrait;
use TurboShip\Location\Requests\Traits\SymbolsPropertyTrait;

class GetSubdivisionsRequest extends BasePaginatableRequest implements GetSubdivisionsRequestContract, \JsonSerializable
{

    use IdsPropertyTrait, NamesPropertyTrait, SymbolsPropertyTrait, CountryIdsPropertyTrait;

    
    public function __construct($data = null)
    {
        parent::__construct($data);

        if (is_array($data))
        {
            $this->ids              = AU::get($data['ids']);
            $this->names            = AU::get($data['names']);
            $this->symbols          = AU::get($data['symbols']);
            $this->countryIds       = AU::get($data['countryIds']);
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['ids']              = $this->ids;
        $object['names']            = $this->names;
        $object['symbols']          = $this->symbols;
        $object['countryIds']       = $this->countryIds;
        $object                     = array_merge($object, parent::jsonSerialize());

        return $object;
    }
}