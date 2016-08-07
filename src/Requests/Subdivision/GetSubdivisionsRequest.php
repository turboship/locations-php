<?php

namespace TurboShip\Locations\Requests\Subdivision;


use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Locations\Requests\BasePaginatableRequest;
use TurboShip\Locations\Requests\Subdivision\Contracts\GetSubdivisionsRequestContract;
use TurboShip\Locations\Requests\Traits\CountryIdsPropertyTrait;
use TurboShip\Locations\Requests\Traits\IdsPropertyTrait;
use TurboShip\Locations\Requests\Traits\NamesPropertyTrait;
use TurboShip\Locations\Requests\Traits\SymbolsPropertyTrait;
use TurboShip\Locations\Requests\Validatable;

class GetSubdivisionsRequest extends BasePaginatableRequest implements GetSubdivisionsRequestContract, Validatable, \JsonSerializable
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
    
    public function validate()
    {
        // TODO: Implement validate() method.
    }
    
}