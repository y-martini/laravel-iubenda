<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution\Consent\Requests;

use YMartini\Laravel\Iubenda\ConsentSolution\Consent;

class Create extends Consent\Request
{
    public function execute(): Consent\Responses\Create
    {
        return $this->response($this->post());
    }

    protected function response(\Psr\Http\Message\ResponseInterface $response): Consent\Responses\Create
    {
        return Consent\Responses\Create::make($response);
    }
}
