<?php

namespace App\Repositories\Eloquent;

use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;

final class UsersRepository implements UsersRepositoryInterface
{

    protected User $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function create(array $data): User
    {
        $data['password'] = Hash::make($data['password']);

        $this->model->fill($data);

        $this->model->save();

        return $this->model;
    }

    public function delete(int $id): void
    {
        $this->model->destroy($id);
    }

    public function getAll(): Collection
    {
        return $this->model->with('role')->get();
    }

    public function getById(int $id): User
    {
        return $this->model->with('role')->find($id)->first();
    }

    public function getByEmail(string $email): User
    {
        return $this->model->with('role')->where('email', $email)->first();
    }

    public function getByToken(string $token): User
    {
        return $this->model->with('role')->where('token', $token)->first();
    }

    public function update(int $id, array $data): bool
    {
        return $this->model->find($id)->update($data);
    }
}
