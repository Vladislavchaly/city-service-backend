<?php

namespace App\Repositories\Eloquent;

use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

final class UsersRepository extends BaseRepository implements UsersRepositoryInterface
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function create(array $data): Model
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
        return $this->model->with('role')->all();
    }

    public function getById(int $id): Model
    {
        return $this->model->with('role')->find($id)->first();
    }

    public function getByEmail(string $email): Model
    {
        return $this->model->with('role')->where('email', $email)->first();
    }

    public function getByToken(string $token): Model
    {
        return $this->model->with('role')->where('token', $token)->first();
    }

    public function update(int $id, array $data): bool
    {
        return $this->model->find($id)->update($data);
    }
}
