<?php

namespace YMartini\Laravel\Iubenda\Facades\ConsentSolution;

use Illuminate\Support;
use YMartini\Laravel\Iubenda\ConsentSolution\Consent\FacadeAccessor;

/**
 * @method static \YMartini\Laravel\Iubenda\ConsentSolution\Consent\Requests\Create create()
 * @see \YMartini\Laravel\Iubenda\ConsentSolution\Consent\FacadeAccessor
 */
class Consent extends Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return FacadeAccessor::class;
    }
}
