<?php

namespace App\Interfaces\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface UsersRepositoryInterface
{
    public function create(array $data): Model;

    public function delete(int $id): void;

    public function getAll(): Collection;

    public function getById(int $id): object;

    public function getByEmail(string $email): object;

    public function getByToken(string $token): object;

    public function update(int $id, array $data): bool;
}
