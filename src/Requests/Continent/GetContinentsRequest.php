<?php

namespace TurboShip\Locations\Requests\Continent;


use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Locations\Requests\BasePaginatableRequest;
use TurboShip\Locations\Requests\Continent\Contracts\GetContinentsRequestContract;
use TurboShip\Locations\Requests\Traits\IdsPropertyTrait;
use TurboShip\Locations\Requests\Traits\NamesPropertyTrait;
use TurboShip\Locations\Requests\Traits\SymbolsPropertyTrait;
use TurboShip\Locations\Requests\Validatable;

class GetContinentsRequest extends BasePaginatableRequest implements GetContinentsRequestContract, Validatable, \JsonSerializable
{

    use IdsPropertyTrait, NamesPropertyTrait, SymbolsPropertyTrait;

    
    public function __construct($data = null)
    {
        parent::__construct($data);
        
        if (is_array($data))
        {
            $this->ids              = AU::get($data['ids']);
            $this->names            = AU::get($data['names']);
            $this->symbols          = AU::get($data['symbols']);
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
        $object                     = array_merge($object, parent::jsonSerialize());
        
        return $object;
    }
    
    
    public function validate()
    {
        // TODO: Implement validate() method.
    }

}