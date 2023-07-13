<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GetByIdController extends Controller
{
    public function __invoke(UsersRepositoryInterface $usersRepository, $id): Response
    {
        return response($usersRepository->getById($id), 200);
    }
}
