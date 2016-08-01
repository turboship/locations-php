<?php

namespace TurboShip\Locations\Api;


use TurboShip\Location\Requests\Address\Contract\VerifyAddressRequestContract;

class AddressApi extends BaseApi
{

    /**
     * @param   VerifyAddressRequestContract|array $request
     * @return  array
     */
    public function verify($request = [])
    {
        $data           = ($request instanceof VerifyAddressRequestContract) ? $request->jsonSerialize() : $request;
        $result         = $this->apiClient->post('/address/verify', $data);
        
        return $result;
    }
}