<?php

namespace YMartini\Laravel\Iubenda\Jobs\ConsentSolution\Consent;

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

  abstract protected function request(): ConsentSolution\Consent\Requests\Store;

  abstract protected function response(ConsentSolution\Consent\Responses\Store $response): void;
}
