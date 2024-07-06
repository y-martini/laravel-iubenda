<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution\Consent\Requests;

use YMartini\Laravel\Iubenda\ConsentSolution;
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

    public function subject(ConsentSolution\Subject $value): self
    {
        return $this->withBody('subject', $value->toArray());
    }

    public function legal_notices(array $value): self
    {
        return $this->withBody('legal_notices', $value);
    }

    public function proofs(array $value): self
    {
        return $this->withBody('proofs', $value);
    }

    public function proof_documents_ids(array $value): self
    {
        return $this->withBody('proof_documents_ids', $value);
    }

    public function preferences(array $value): self
    {
        return $this->withBody('preferences', $value);
    }
}
