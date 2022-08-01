<?php

namespace App\Interfaces\Repositories;

use App\Models\User;

interface UsersRepositoryInterface
{
    public function create(array $data);

    public function delete(int $id): void;

    public function getAll(): array;

    public function getById(int $id): object;

    public function getByEmail(string $email): object;

    public function getByToken(string $token): object;

    public function update(int $id, array $data): bool;
}
