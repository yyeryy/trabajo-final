<?php

namespace App\Domain;

class User
{
    private int $id;
    private string $email;

    public function __construct(int $id, string $email)
    {
        $this->id = $id;
        $this->email = $email;
    }

    //prueba

    public function getId(): int
    {
        return $this->id;
    }
}
