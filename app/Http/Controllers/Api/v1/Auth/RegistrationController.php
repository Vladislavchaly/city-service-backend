<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Requests\RegistrationRequest;
use App\Interfaces\Repositories\UsersRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController
{
    public function __invoke(RegistrationRequest $request, UsersRepositoryInterface $usersRepository)
    {
        $request->validated();
        $usersRepository->create($request->all());

        return response()->json([], Response::HTTP_OK);
    }
}
