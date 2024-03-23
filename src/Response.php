<?php

namespace YMartini\Laravel\Iubenda;

use Psr\Http;

abstract class Response
{
  abstract public static function make(Http\Message\ResponseInterface $response): self;

  static protected function body(Http\Message\ResponseInterface $response): array
  {
    return json_decode($response->getBody(), true);
  }
}
