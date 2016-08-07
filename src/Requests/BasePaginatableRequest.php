<?php

namespace TurboShip\Locations\Requests;


use jamesvweston\Utilities\ArrayUtil AS AU;
use TurboShip\Locations\Requests\Contracts\PaginatableRequestContract;

class BasePaginatableRequest implements PaginatableRequestContract, \JsonSerializable
{

    /**
     * @var int
     */
    protected $limit;

    /**
     * @var int
     */
    protected $page;


    public function __construct($data = null)
    {
        if (is_array($data))
        {
            $this->limit            = AU::get($data['limit'], 80);
            $this->page             = AU::get($data['page'], 1);
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'limit'                 => $this->limit,
            'page'                  => $this->page,
        ];
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }
    
}