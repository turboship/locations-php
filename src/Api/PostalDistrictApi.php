<?php

namespace TurboShip\Locations\Api;


use TurboShip\Locations\Models\PostalDistrict;
use TurboShip\Locations\Models\Subdivision;
use TurboShip\Locations\Requests\PostalDistrict\Contracts\GetPostalDistrictsRequestContract;
use TurboShip\Locations\Responses\PostalDistrict\GetPostalDistrictsResponse;

class PostalDistrictApi extends BaseApi
{

    /**
     * @param   GetPostalDistrictsRequestContract|array $request
     * @return  GetPostalDistrictsResponse
     */
    public function index($request = [])
    {
        $this->tryValidation($request);
        
        $data           = ($request instanceof GetPostalDistrictsRequestContract) ? $request->jsonSerialize() : $request;
        $result         = $this->apiClient->get('postalDistricts', $data);
        
        return new GetPostalDistrictsResponse($result);
    }

    /**
     * @param   int     $id
     * @return  PostalDistrict()
     */
    public function show($id)
    {
        $result             = $this->apiClient->get('postalDistricts/' . $id);
        $postalDistrict     = new PostalDistrict($result);

        return $postalDistrict;
    }

    /**
     * @param   int     $id
     * @return  Subdivision[]
     */
    public function getPostalDistrictSubdivisions($id)
    {
        $result             = $this->apiClient->get('postalDistricts/' . $id . '/subdivisions');
        
        $subdivisions       = [];
        foreach ($result AS $item)
        {
            $subdivisions[] = new Subdivision($item);
        }
        
        return $subdivisions;
    }
}