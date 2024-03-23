<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution\LegalNotices;

use YMartini\Laravel\Iubenda;

class FacadeAccessor extends Iubenda\FacadeAccessor
{
  public function create(): Requests\Create
  {
    return new Requests\Create($this->client);
  }
}
