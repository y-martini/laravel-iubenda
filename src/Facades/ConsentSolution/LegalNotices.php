<?php

namespace YMartini\Laravel\Iubenda\Facades\ConsentSolution;

use Illuminate\Support;
use YMartini\Laravel\Iubenda\ConsentSolution\LegalNotices\FacadeAccessor;

/**
 * @method static \YMartini\Laravel\Iubenda\ConsentSolution\LegalNotices\Requests\Create create()
 * @see \YMartini\Laravel\Iubenda\ConsentSolution\LegalNotices\FacadeAccessor
 */
class LegalNotices extends Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return FacadeAccessor::class;
    }
}
