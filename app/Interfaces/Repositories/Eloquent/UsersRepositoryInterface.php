<?php

namespace App\Interfaces\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface UsersRepositoryInterface
{
    public function create(array $data): Model;

    public function delete(int $id): void;

    public function getAll(): Collection;

    public function getById(int $id): Model;

    public function getByEmail(string $email): Model;

    public function getByToken(string $token): Model;

    public function update(int $id, array $data): bool;
}
