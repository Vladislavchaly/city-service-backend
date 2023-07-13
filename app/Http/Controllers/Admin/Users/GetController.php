<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use Illuminate\Http\Response;

class GetController extends Controller
{
    public function __invoke(UsersRepositoryInterface $usersRepository): Response
    {
        return response($usersRepository->getAll(), 200);
    }
}
