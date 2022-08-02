<?php

namespace App\Interfaces\Repositories;

use App\Models\ReferralToken;
use App\Models\Referral;

interface ReferralsRepositoryInterface
{

    public function create(string $refToken, int $referralId): Referral;

    public function delete(int $id): void;

    public function getAll(): array;

    public function getById(int $id): object;

    public function getByUserId(string $userId): object;

    public function updateStatus(int $id, bool $status): void;

    public function createReferralToken(int $userId): string;

}
