<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use Illuminate\Http\Response;

class UpdateByIdController extends Controller
{
    public function __invoke(UpdateRequest $request, UsersRepositoryInterface $usersRepository, $id): Response
    {
        return response(
            $usersRepository->update(
                $id,
                $request->all()
            ),
            200
        );
    }
}
