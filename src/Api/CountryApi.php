<?php

namespace TurboShip\Locations\Api;


use TurboShip\Location\Models\Country;
use TurboShip\Location\Models\PostalDistrict;
use TurboShip\Location\Models\Subdivision;
use TurboShip\Location\Requests\Country\Contracts\GetCountriesRequestContract;
use TurboShip\Location\Responses\Country\GetCountriesResponse;

class CountryApi extends BaseApi
{

    /**
     * @param   GetCountriesRequestContract|array $request
     * @return  GetCountriesResponse
     */
    public function index ($request = [])
    {
        $this->tryValidation($request);
        
        $data               = ($request instanceof GetCountriesRequestContract) ? $request->jsonSerialize() : $request;
        $result             = $this->apiClient->get('countries', $data);
        
        return new GetCountriesResponse($result);
    }
    
    /**
     * @param   int     $id
     * @return  Country
     */
    public function show($id)
    {
        $result             = $this->apiClient->get('countries/' . $id);
        $country            = new Country($result);
        
        return $country;
    }

    /**
     * @param   int     $id
     * @return  Subdivision[]
     */
    public function getCountrySubdivisions($id)
    {
        $result             = $this->apiClient->get('countries/' . $id . '/subdivisions');

        $subdivisions       = [];
        foreach ($result AS $item)
        {
            $subdivisions[] = new Subdivision($item);
        }

        return $subdivisions;
    }
    
    /**
     * @param   int     $id
     * @return  PostalDistrict[]
     */
    public function getCountryPostalDistricts($id)
    {
        $result             = $this->apiClient->get('countries/' . $id . '/postalDistricts');
        
        $postalDistricts    = [];
        foreach ($result AS $item)
        {
            $postalDistricts[]  = new PostalDistrict($item);
        }
        
        return $postalDistricts;
    }
}