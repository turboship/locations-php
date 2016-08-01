<?php

namespace TurboShip\Location\Requests\Subdivision;


use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Location\Requests\BasePaginatableRequest;
use TurboShip\Location\Requests\Subdivision\Contracts\GetSubdivisionTypesRequestContract;
use TurboShip\Location\Requests\Traits\IdsPropertyTrait;
use TurboShip\Location\Requests\Traits\NamesPropertyTrait;

class GetSubdivisionTypesRequest extends BasePaginatableRequest implements GetSubdivisionTypesRequestContract, \JsonSerializable
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
}