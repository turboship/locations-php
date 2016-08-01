<?php

namespace TurboShip\Locations\Api;


use TurboShip\Location\Models\SubdivisionType;
use TurboShip\Location\Requests\Subdivision\Contracts\GetSubdivisionTypesRequestContract;
use TurboShip\Location\Requests\SubdivisionType\GetSubdivisionTypesResponse;

class SubdivisionTypeApi extends BaseApi
{

    /**
     * @param   GetSubdivisionTypesRequestContract|array $request
     * @return  GetSubdivisionTypesResponse
     */
    public function index($request = [])
    {
        $data           = ($request instanceof GetSubdivisionTypesRequestContract) ? $request->jsonSerialize() : $request;
        $result         = $this->apiClient->get('/subdivisions/types', $data);

        return new GetSubdivisionTypesResponse($result);
    }

    /**
     * @param   int     $id
     * @return  SubdivisionType
     */
    public function show($id)
    {
        $result         = $this->apiClient->get('/subdivisions/types/' . $id);
        $subdivisionType    = new SubdivisionType($result);

        return $subdivisionType;
    }
    
}