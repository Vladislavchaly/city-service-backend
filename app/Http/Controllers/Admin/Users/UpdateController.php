<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use Illuminate\Http\Response;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, UsersRepositoryInterface $usersRepository): Response
    {
        return response(
            $usersRepository->update(
                $request->user()->id,
                $request->all()
            ),
            200
        );
    }
}
