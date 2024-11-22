<?php

namespace Mstfkhazaal\FilamentTitleWithSlug\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mstfkhazaal\FilamentTitleWithSlug\FilamentTitleWithSlug
 */
class FilamentTitleWithSlug extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mstfkhazaal\FilamentTitleWithSlug\FilamentTitleWithSlug::class;
    }
}
