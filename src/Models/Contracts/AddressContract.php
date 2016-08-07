<?php

namespace TurboShip\Locations\Models\Contracts;


interface AddressContract
{
    public function getId();
    public function setId($id);
    public function getFirstName();
    public function setFirstName($firstName);
    public function getLastName();
    public function setLastName($lastName);
    public function getCompany();
    public function setCompany($company);
    public function getPhone();
    public function setPhone($phone);
    public function getEmail();
    public function setEmail($email);
}