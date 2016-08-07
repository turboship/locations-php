<?php

namespace TurboShip\Locations\Requests\Continent\Contracts;


interface GetContinentsRequestContract
{
    public function getIds();
    public function setIds($ids);
    public function getNames();
    public function setNames($names);
    public function getSymbols();
    public function setSymbols($symbols);
    public function getLimit();
    public function setLimit($limit);
    public function getPage();
    public function setPage($page);
    public function jsonSerialize();
}