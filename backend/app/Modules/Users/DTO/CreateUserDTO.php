<?php

namespace App\Modules\Users\DTO;
class CreateUserDTO
{
    public function __construct(
        public string  $name,
        public string  $email,
        public ?string $password = null,
    )
    {
    }
}
