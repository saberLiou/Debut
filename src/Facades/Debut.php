<?php

namespace saberLiou\Debut\Facades;

use Illuminate\Support\Facades\Facade;

class Debut extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'debut';
    }
}
