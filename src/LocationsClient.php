<?php

namespace TurboShip\Locations;


use TurboShip\Api\ApiClient;
use TurboShip\Locations\Api\AddressApi;
use TurboShip\Locations\Api\ContinentApi;
use TurboShip\Locations\Api\CountryApi;
use TurboShip\Locations\Api\PostalDistrictApi;
use TurboShip\Locations\Api\SubdivisionApi;
use TurboShip\Locations\Api\SubdivisionTypeApi;

class LocationsClient
{

    /**
     * @var AddressApi
     */
    public $addressApi;

    /**
     * @var ContinentApi
     */
    public $continentApi;

    /**
     * @var CountryApi
     */
    public $countryApi;

    /**
     * @var PostalDistrictApi
     */
    public $postalDistrictApi;

    /**
     * @var SubdivisionApi
     */
    public $subdivisionApi;

    /**
     * @var SubdivisionTypeApi
     */
    public $subdivisionTypeApi;
    
    /**
     * LocationsClient constructor.
     * @param $apiConfiguration
     */
    public function __construct($apiConfiguration)
    {
        $apiClient                  = new ApiClient($apiConfiguration);
        
        $this->addressApi           = new AddressApi($apiClient);
        $this->continentApi         = new ContinentApi($apiClient);
        $this->countryApi           = new CountryApi($apiClient);
        $this->postalDistrictApi    = new PostalDistrictApi($apiClient);
        $this->subdivisionApi       = new SubdivisionApi($apiClient);
        $this->subdivisionApi       = new SubdivisionTypeApi($apiClient);
    }
}