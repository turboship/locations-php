<?php

namespace TurboShip\Locations;


use TurboShip\Api\ApiClient;
use TurboShip\Locations\Api\AddressApi;
use TurboShip\Locations\Api\ContinentApi;
use TurboShip\Locations\Api\CountryApi;
use TurboShip\Locations\Api\PostalDistrictApi;
use TurboShip\Locations\Api\SubdivisionApi;

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
     * LocationsClient constructor.
     * @param   $apiConfiguration
     * @param   bool    $validateRequests
     */
    public function __construct($apiConfiguration, $validateRequests = true)
    {
        $apiClient                  = new ApiClient($apiConfiguration);
        
        $this->addressApi           = new AddressApi($apiClient, $validateRequests);
        $this->continentApi         = new ContinentApi($apiClient, $validateRequests);
        $this->countryApi           = new CountryApi($apiClient, $validateRequests);
        $this->postalDistrictApi    = new PostalDistrictApi($apiClient, $validateRequests);
        $this->subdivisionApi       = new SubdivisionApi($apiClient, $validateRequests);
    }
}