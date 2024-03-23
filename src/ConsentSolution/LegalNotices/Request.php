<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution\LegalNotices;

use YMartini\Laravel\Iubenda\ConsentSolution;

abstract class Request extends ConsentSolution\Request
{
    protected static function url(): string
    {
        return parent::url() . '/legal_notices';
    }
}
