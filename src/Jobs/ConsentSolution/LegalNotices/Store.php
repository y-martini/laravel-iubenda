<?php

namespace YMartini\Laravel\Iubenda\Jobs\ConsentSolution\LegalNotices;

use Illuminate\Bus;
use Illuminate\Contracts;
use Illuminate\Queue;
use YMartini\Laravel\Iubenda\ConsentSolution;

abstract class Store implements Contracts\Queue\ShouldQueue
{
  use Queue\InteractsWithQueue, Bus\Queueable;

  public function handle(): void
  {
    $this->response($this->request()->execute());
  }

  abstract protected function request(): ConsentSolution\LegalNotices\Requests\Create;

  abstract protected function response(ConsentSolution\LegalNotices\Responses\Create $response): void;
}
