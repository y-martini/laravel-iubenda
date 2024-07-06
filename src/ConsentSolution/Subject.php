<?php

namespace YMartini\Laravel\Iubenda\ConsentSolution;

use Illuminate\Contracts\Support\Arrayable;

class Subject implements Arrayable
{
    private ?string $id;
    private ?string $email;
    private ?string $first_name;
    private ?string $last_name;
    private ?string $full_name;
    private bool $verified;
    private array $phones;

    public function __construct(
        ?string $id,
        ?string $email,
        ?string $first_name,
        ?string $last_name,
        ?string $full_name,
        bool $verified,
        array $phones,
    )
    {
        $this->id = $id;
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->full_name = $full_name;
        $this->verified = $verified;
        $this->phones = $phones;
    }

    public function toArray(): array
    {
        $a = [];

        if ($this->id){
            $a['id'] = $this->id;
        }

        if ($this->email){
            $a['email'] = $this->email;
        }

        if ($this->first_name){
            $a['first_name'] = $this->first_name;
        }

        if ($this->last_name){
            $a['last_name'] = $this->last_name;
        }

        if ($this->full_name){
            $a['full_name'] = $this->full_name;
        }

        if ($this->verified){
            $a['verified'] = $this->verified;
        }

        if ($this->phones){
            $a['phones'] = $this->phones;
        }

        return $a;
    }
}
//    {
//  "subject": {
//    "id": "J02eZvKYlo2ClwuJ1",
//    "email": "john@example.com",
//    "first_name": "John",
//    "last_name": "Doe",
//    "full_name": "John Doe",
//    "phones": [
//      { "number": "+395555555555", "label": "personal" }
//    ],
//    "verified": false
//  },