<?php

namespace TurboShip\Locations\Requests\Subdivision\Contracts;


interface GetSubdivisionsRequestContract
{
    public function getIds();
    public function setIds($ids);
    public function getNames();
    public function setNames($names);
    public function getSymbols();
    public function setSymbols($symbols);
    public function getCountryIds();
    public function setCountryIds($countryIds);
    public function getLimit();
    public function setLimit($limit);
    public function getPage();
    public function setPage($page);
    public function jsonSerialize();
}