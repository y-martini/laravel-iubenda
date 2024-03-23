<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution\Consent\Responses;

use Psr\Http;
use YMartini\Laravel\Iubenda;

class Create extends Iubenda\Response
{
  public static function make(Http\Message\ResponseInterface $response): self
  {
    return new self();
  }
}
