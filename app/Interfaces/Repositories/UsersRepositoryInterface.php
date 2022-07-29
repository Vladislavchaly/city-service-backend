<?php

namespace App\Interfaces\Repositories;

interface UsersRepositoryInterface
{
    public function create(array $data): bool;

    public function delete(int $id): void;

    public function getAll(): array;

    public function getById(int $id): object;

    public function update(int $id, array $data): bool;
}
