<?php

namespace App\Interfaces\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ReferralTokensRepositoryInterface
{

    public function create(int $referralId): Model;

    public function delete(int $id): void;

    public function getAll(): Collection;

    public function getById(int $id): Model;

    public function getByUserId(int $userId): Model;

    public function getByToken(string $token): Model;
}
