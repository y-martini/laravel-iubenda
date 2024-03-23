<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution\Consent\Requests;

use Illuminate\Support;
use Psr\Http;
use YMartini\Laravel\Iubenda\ConsentSolution\Consent;

class Create extends Consent\Request
{
  public function execute(): Consent\Responses\Create
  {
    return $this->response($this->post());

  protected function response(Http\Messages\ResponseInterface $response): Consent\Responses\Create
  {
    return Consent\Responses\Create::make($response);
  }
}
