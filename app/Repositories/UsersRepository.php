<?php

namespace App\Repositories;

use App\Interfaces\Repositories\UsersRepositoryInterface;
use App\Models\User;

class UsersRepository implements UsersRepositoryInterface
{
    public function create(array $data): bool
    {
        $user = new User();

        $user->fill($data);

        return $user->save();
    }

    public function delete(int $id): void {
        User::destroy($id);
    }

    public function getAll(): array {
        return User::all();
    }

    public function getById(int $id): object {

        $user = new User();

        return $user->find($id)->first();
    }

    public function update(int $id, array $data): bool
    {

        $user = new User();

        return $user->find($id)->update($data);

    }
}
