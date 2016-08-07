<?php

namespace TurboShip\Locations\Api;


use TurboShip\Locations\Models\Continent;
use TurboShip\Locations\Models\Country;
use TurboShip\Locations\Requests\Continent\Contracts\GetContinentsRequestContract;
use TurboShip\Locations\Responses\Continent\GetContinentsResponse;

class ContinentApi extends BaseApi
{

    /**
     * @param   GetContinentsRequestContract|array $request
     * @return  GetContinentsResponse
     */
    public function index($request = [])
    {
        $this->tryValidation($request);
        
        $data               = ($request instanceof GetContinentsRequestContract) ? $request->jsonSerialize() : $request;
        $result             = $this->apiClient->get('continents', $data);
        
        return new GetContinentsResponse($result);
    }

    /**
     * @param   int     $id
     * @return  Continent
     */
    public function show($id)
    {
        $result             = $this->apiClient->get('continents/' . $id);
        $continent          = new Continent($result);
        
        return $continent;
    }

    /**
     * @param   int     $id
     * @return  Country[]
     */
    public function getContinentCountries($id)
    {
        $result             = $this->apiClient->get('continents/' . $id . '/countries');
        
        $countries          = [];
        foreach ($result AS $item)
        {
            $countries[]    = new Country($item);
        }

        return $countries;
    }
}