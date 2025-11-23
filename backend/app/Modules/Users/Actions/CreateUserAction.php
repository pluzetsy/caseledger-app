<?php

namespace App\Modules\Users\Actions;

use app\Modules\Users\DTO\CreateUserDTO;
use App\Modules\Users\Models\User;

class CreateUserAction
{
    public function __invoke(CreateUserDTO $dto): User
    {
        return User::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => bcrypt($dto->password ?? 'secret'),
        ]);
    }
}
