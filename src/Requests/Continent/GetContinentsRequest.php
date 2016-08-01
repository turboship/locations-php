<?php

namespace TurboShip\Location\Requests\Continent;


use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Location\Requests\BasePaginatableRequest;
use TurboShip\Location\Requests\Continent\Contracts\GetContinentsRequestContract;
use TurboShip\Location\Requests\Traits\IdsPropertyTrait;
use TurboShip\Location\Requests\Traits\NamesPropertyTrait;
use TurboShip\Location\Requests\Traits\SymbolsPropertyTrait;

class GetContinentsRequest extends BasePaginatableRequest implements GetContinentsRequestContract, \JsonSerializable
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
    
}