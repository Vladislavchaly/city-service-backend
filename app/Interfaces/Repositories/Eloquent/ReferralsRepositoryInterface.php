<?php

namespace App\Interfaces\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ReferralsRepositoryInterface
{

    public function create(string $refToken, int $referralId): Model;

    public function delete(int $id): void;

    public function getAll(): Collection;

    public function getById(int $id): Model;

    public function getByUserId(string $userId): Model;

    public function updateStatus(int $id, bool $status): void;

}
