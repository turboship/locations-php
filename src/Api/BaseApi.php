<?php

namespace TurboShip\Locations\Api;


use TurboShip\Api\ApiClient;

class BaseApi
{

    /**
     * @var ApiClient
     */
    protected $apiClient;
    
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient            = $apiClient;
    }
}