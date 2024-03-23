<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution\Consent;

use YMartini\Laravel\Iubenda\ConsentSolution;

abstract class Request extends ConsentSolution\Request
{
    protected static function url(): string
    {
        return parent::url() . '/consent';
    }
}
