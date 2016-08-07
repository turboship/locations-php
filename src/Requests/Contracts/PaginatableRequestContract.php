<?php

namespace TurboShip\Locations\Requests\Contracts;


interface PaginatableRequestContract
{
    public function getLimit();
    public function setLimit($limit);
    public function getPage();
    public function setPage($page);
}