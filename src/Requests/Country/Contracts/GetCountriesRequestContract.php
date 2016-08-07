<?php

namespace TurboShip\Locations\Requests\Country\Contracts;


interface GetCountriesRequestContract
{
    public function getIds();
    public function setIds($ids);
    public function getNames();
    public function setNames($names);
    public function getIso2s();
    public function setIso2s($iso2s);
    public function getIso3s();
    public function setIso3s($iso3s);
    public function getLimit();
    public function setLimit($limit);
    public function getPage();
    public function setPage($page);
    public function jsonSerialize();
}