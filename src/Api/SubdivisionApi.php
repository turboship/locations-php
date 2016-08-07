<?php

namespace TurboShip\Locations\Api;


use TurboShip\Locations\Models\Subdivision;
use TurboShip\Locations\Models\SubdivisionAltName;
use TurboShip\Locations\Models\SubdivisionType;
use TurboShip\Locations\Requests\Subdivision\Contracts\GetSubdivisionsRequestContract;
use TurboShip\Locations\Requests\Subdivision\Contracts\GetSubdivisionTypesRequestContract;
use TurboShip\Locations\Requests\SubdivisionType\GetSubdivisionTypesResponse;
use TurboShip\Locations\Responses\Subdivision\GetSubdivisionsResponse;

class SubdivisionApi extends BaseApi
{

    /**
     * @param   GetSubdivisionsRequestContract|array $request
     * @return  GetSubdivisionsResponse
     */
    public function index($request = [])
    {
        $this->tryValidation($request);
        
        $data           = ($request instanceof GetSubdivisionsRequestContract) ? $request->jsonSerialize() : $request;
        $result         = $this->apiClient->get('subdivisions', $data);
        
        return new GetSubdivisionsResponse($result);
    }

    /**
     * @param   int     $id
     * @return  Subdivision
     */
    public function show($id)
    {
        $result         = $this->apiClient->get('subdivisions/' . $id);
        $subdivision    = new Subdivision($result);
        
        return $subdivision;
    }

    /**
     * @param   int     $id
     * @return  SubdivisionAltName[]
     */
    public function getSubdivisionAltNames($id)
    {
        $result         = $this->apiClient->get('subdivisions/' . $id . '/altNames');
        
        $subdivisionAltNames    = [];
        foreach ($result AS $item)
        {
            $subdivisionAltNames[]  = new SubdivisionAltName($item);
        }

        return $subdivisionAltNames;
    }

    /**
     * @param   GetSubdivisionTypesRequestContract|array $request
     * @return  GetSubdivisionTypesResponse
     */
    public function getSubdivisionTypes($request = [])
    {
        $this->tryValidation($request);
        
        $data           = ($request instanceof GetSubdivisionTypesRequestContract) ? $request->jsonSerialize() : $request;
        $result         = $this->apiClient->get('/subdivisions/types', $data);

        return new GetSubdivisionTypesResponse($result);
    }

    /**
     * @param   int     $id
     * @return  SubdivisionType
     */
    public function showSubdivisionType($id)
    {
        $result         = $this->apiClient->get('/subdivisions/types/' . $id);
        $subdivisionType    = new SubdivisionType($result);

        return $subdivisionType;
    }
}