<?php

namespace App\Interfaces\Repositories;

interface UsersRepositoryInterface
{
    public function create(array $data): object;

    public function delete(int $id): void;

    public function getAll(): array;

    public function getById(int $id): object;

    public function update(int $id, array $data): bool;
}
