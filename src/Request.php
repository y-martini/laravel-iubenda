<?php

namespace YMartini\Laravel\Iubenda;

use GuzzleHttp\Client;
use Psr\Http;

abstract class Request
{
    protected Client $client;

    protected array $body = [];

    protected array $headers = [];

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    abstract static protected function url(): string;

    protected function body(): array
    {
        return $this->body;
    }

    protected function headers(): array
    {
        return $this->headers;
    }

    protected function withBody(string $key, $value): self
    {
        $this->body[$key] = $value;

        return $this;
    }

    protected function withHeader(string $key, $value): self
    {
        $this->headers[$key] = $value;

        return $this;
    }

    protected function post(): Http\Message\ResponseInterface
    {
        return $this->client->post(static::url(), [
            'headers' => $this->headers(),
            \GuzzleHttp\RequestOptions::JSON => $this->body(),
        ]);
    }
}
