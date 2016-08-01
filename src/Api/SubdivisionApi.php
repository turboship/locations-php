<?php

namespace TurboShip\Locations\Api;


use TurboShip\Location\Models\Subdivision;
use TurboShip\Location\Models\SubdivisionAltName;
use TurboShip\Location\Requests\Subdivision\Contracts\GetSubdivisionsRequestContract;
use TurboShip\Location\Responses\Subdivision\GetSubdivisionsResponse;

class SubdivisionApi extends BaseApi
{

    /**
     * @param   GetSubdivisionsRequestContract|array $request
     * @return  GetSubdivisionsResponse
     */
    public function index($request = [])
    {
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
}