<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution\LegalNotices\Responses;

use Psr\Http;
use YMartini\Laravel\Iubenda;

class Create extends Iubenda\Response
{
  public static function make(Http\Message\ResponseInterface $response): self
  {
    return new self();
  }
}
