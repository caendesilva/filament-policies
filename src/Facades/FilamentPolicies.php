<?php

namespace Desilva\FilamentPolicies\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Desilva\FilamentPolicies\FilamentPolicies
 */
class FilamentPolicies extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Desilva\FilamentPolicies\FilamentPolicies::class;
    }
}
