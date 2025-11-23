<?php

namespace App\Modules\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use app\Modules\Users\Actions\CreateUserAction;
use app\Modules\Users\DTO\CreateUserDTO;
use Illuminate\Http\JsonResponse;
use App\Modules\Users\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function store(
        StoreUserRequest $request,
        CreateUserAction $action
    ): JsonResponse
    {
        $dto = new CreateUserDTO(
            name: $request->string('name')->toString(),
            email: $request->string('email')->toString(),
            password: $request->string('password')->toString() ?: null,
        );

        $user = $action($dto);

        return response()->json([
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
        ], 201);
    }
}
