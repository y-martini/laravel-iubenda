<?php

namespace YMartini\Laravel\Iubenda;

use GuzzleHttp\Client;

abstract class FacadeAccessor
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
