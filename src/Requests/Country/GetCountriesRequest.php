<?php

namespace TurboShip\Locations\Requests\Country;


use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Locations\Requests\BasePaginatableRequest;
use TurboShip\Locations\Requests\Country\Contracts\GetCountriesRequestContract;
use TurboShip\Locations\Requests\Traits\IdsPropertyTrait;
use TurboShip\Locations\Requests\Traits\NamesPropertyTrait;
use TurboShip\Locations\Requests\Validatable;

class GetCountriesRequest extends BasePaginatableRequest implements GetCountriesRequestContract, Validatable, \JsonSerializable
{

    use IdsPropertyTrait, NamesPropertyTrait;


    /**
     * @var string|null
     */
    protected $iso2s;

    /**
     * @var string|null
     */
    protected $iso3s;
    
    
    public function __construct($data = null)
    {
        parent::__construct($data);
        
        if (is_array($data))
        {
            $this->ids              = AU::get($data['ids']);
            $this->names            = AU::get($data['names']);
            $this->iso2s            = AU::get($data['iso2s']);
            $this->iso3s            = AU::get($data['iso3s']);
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['ids']              = $this->ids;
        $object['names']            = $this->names;
        $object['iso2s']            = $this->iso2s;
        $object['iso3s']            = $this->iso3s;
        $object                     = array_merge($object, parent::jsonSerialize());

        return $object;
    }
    
    
    public function validate()
    {
        // TODO: Implement validate() method.
    }

    /**
     * @return null|string
     */
    public function getIso2s()
    {
        return $this->iso2s;
    }

    /**
     * @param null|string $iso2s
     */
    public function setIso2s($iso2s)
    {
        $this->iso2s = $iso2s;
    }

    /**
     * @return null|string
     */
    public function getIso3s()
    {
        return $this->iso3s;
    }

    /**
     * @param null|string $iso3s
     */
    public function setIso3s($iso3s)
    {
        $this->iso3s = $iso3s;
    }
    
}