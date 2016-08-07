<?php

namespace TurboShip\Locations\Requests\Traits;


trait SymbolsPropertyTrait
{

    /**
     * @var string|null
     */
    protected $symbols;


    /**
     * @return null|string
     */
    public function getSymbols()
    {
        return $this->symbols;
    }

    /**
     * @param null|string $symbols
     */
    public function setSymbols($symbols)
    {
        $this->symbols = $symbols;
    }
    
}