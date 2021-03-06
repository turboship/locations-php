<?php

namespace TurboShip\Locations\Requests\Subdivision;


use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Locations\Requests\BasePaginatableRequest;
use TurboShip\Locations\Requests\Subdivision\Contracts\GetSubdivisionTypesRequestContract;
use TurboShip\Locations\Requests\Traits\IdsPropertyTrait;
use TurboShip\Locations\Requests\Traits\NamesPropertyTrait;
use TurboShip\Locations\Requests\Validatable;

class GetSubdivisionTypesRequest extends BasePaginatableRequest implements GetSubdivisionTypesRequestContract, Validatable, \JsonSerializable
{

    use IdsPropertyTrait, NamesPropertyTrait;


    public function __construct($data = null)
    {
        parent::__construct($data);

        if (is_array($data))
        {
            $this->ids              = AU::get($data['ids']);
            $this->names            = AU::get($data['names']);
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['ids']              = $this->ids;
        $object['names']            = $this->names;
        $object                     = array_merge($object, parent::jsonSerialize());

        return $object;
    }
    
    public function validate()
    {
        // TODO: Implement validate() method.
    }
    
}