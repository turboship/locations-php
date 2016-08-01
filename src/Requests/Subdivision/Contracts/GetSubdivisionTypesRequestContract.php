<?php

namespace TurboShip\Location\Requests\Subdivision\Contracts;


interface GetSubdivisionTypesRequestContract
{
    public function getIds();
    public function setIds($ids);
    public function getNames();
    public function setNames($names);
    public function getLimit();
    public function setLimit($limit);
    public function getPage();
    public function setPage($page);
    public function jsonSerialize();
}