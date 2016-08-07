<?php

namespace TurboShip\Locations\Requests\Traits;

trait IdsPropertyTrait
{

    /**
     * @var string|null
     */
    protected $ids;


    /**
     * @return null|string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @param null|string $ids
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
    }
}