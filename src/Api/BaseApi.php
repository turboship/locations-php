<?php

namespace TurboShip\Locations\Api;


use TurboShip\Api\ApiClient;
use TurboShip\Locations\Requests\Validatable;

class BaseApi
{

    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * @var bool
     */
    protected $validateRequests;

    
    public function __construct(ApiClient $apiClient, $validateRequests = true)
    {
        $this->apiClient            = $apiClient;
        $this->validateRequests     = $validateRequests;
    }

    protected function tryValidation($request)
    {
        if ($request instanceof Validatable)
        {
            $request->validate();
        }
    }
    
}