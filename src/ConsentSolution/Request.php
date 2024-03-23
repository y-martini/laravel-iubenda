<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution;

use Illuminate\Support;
use YMartini\Laravel\Iubenda;

abstract class Request extends Iubenda\Request
{
  protected static function url(): string
  {
    return 'https://consent.iubenda.com';
  }

  protected function headers(): array
  {
    return [
      ...parent::headers(),
      'ApiKey' => Support\Facades\Config::get('iubenda.consent_solution.api_key'),
    ];
  }
}
