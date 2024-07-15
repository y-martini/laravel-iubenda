<?php

namespace YMartini\Laravel\Iubenda\Jobs\ConsentSolution\Consent;

use Illuminate\Bus;
use Illuminate\Contracts;
use Illuminate\Queue;
use Illuminate\Support;
use YMartini\Laravel\Iubenda\ConsentSolution;

abstract class Store implements Contracts\Queue\ShouldQueue
{
    use Queue\InteractsWithQueue, Bus\Queueable;

    public function handle(): void
    {
        if (!Support\Facades\Config::get('iubenda.consent_solution.api_key')) {
            Support\Facades\Log::warning('`iubenda.consent_solution.api_key` config is null');
            return;
        }
        $this->response($this->request()->execute());
    }

    abstract protected function request(): ConsentSolution\Consent\Requests\Create;

    abstract protected function response(ConsentSolution\Consent\Responses\Create $response): void;
}
