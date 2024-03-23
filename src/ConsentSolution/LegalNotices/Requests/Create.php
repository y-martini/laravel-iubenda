<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution\LegalNotices\Requests;

use Illuminate\Support;
use Psr\Http;
use YMartini\Laravel\Iubenda\ConsentSolution\LegalNotices;

class Create extends LegalNotices\Request
{
  public function timestamp(Support\Carbon $value): self
  {
    return $this->withBody('timestamp', $value->toIso8601ZuluString());
  }

  public function identifier(string $value): self
  {
    return $this->withBody('identifier', $value);
  }

  public function content(string $value): self
  {
    return $this->withBody('content', $value);
  }

  public function execute(): LegalNotices\Responses\Create
  {
    return $this->response($this->post());

  protected function response(Http\Messages\ResponseInterface $response): LegalNotices\Responses\Create
  {
    return LegalNotices\Responses\Create::make($response);
  }
}
