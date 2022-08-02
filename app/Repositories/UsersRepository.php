<?php

namespace App\Repositories;

use App\Interfaces\Repositories\UsersRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

final class UsersRepository implements UsersRepositoryInterface
{

    public function create(array $data): User
    {
        $user = new User();

        $data['password'] = Hash::make($data['password']);

        $user->fill($data);

        $user->save();

        return $user;
    }

    public function delete(int $id): void {
        User::destroy($id);
    }

    public function getAll(): array {
        return User::with('role')->all();
    }

    public function getById(int $id): object {

        $user = new User();

        return $user::with('role')->find($id)->first();
    }

    public function getByEmail(string $email): object
    {
        $user = new User();

        return $user::with('role')->where('email', $email)->first();
    }

    public function getByToken(string $token): object
    {
        $user = new User();

        return $user::with('role')->where('token', $token)->first();
    }

    public function update(int $id, array $data): bool
    {

        $user = new User();

        return $user->find($id)->update($data);

    }
}
