<?php

namespace App\Interfaces\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

interface ReferralsRepositoryInterface
{

    public function create(string $refToken, int $referralId): Model;

    public function delete(int $id): void;

    public function getAll(): array;

    public function getById(int $id): object;

    public function getByUserId(string $userId): object;

    public function updateStatus(int $id, bool $status): void;

}
