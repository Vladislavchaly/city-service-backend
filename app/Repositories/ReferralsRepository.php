<?php

namespace App\Repositories;

use App\Interfaces\Repositories\ReferralsRepositoryInterface;
use App\Models\ReferralToken;
use App\Models\Referral;
use Illuminate\Support\Str;

final class ReferralsRepository implements ReferralsRepositoryInterface
{

    private Referral $referral;
    private ReferralToken $referralToken;

    public function __construct(Referral $referral, ReferralToken $referralToken)
    {
        $this->referral = $referral;
        $this->referralToken = $referralToken;
    }

    public function create(string $refToken, int $referralId): Referral
    {
        $this->referral->fill([
            'user_id' => $this->getUserIdByToken($refToken),
            'referral_id' => $referralId
        ]);

        $this->referral->save();

        return $this->referral;
    }

    public function delete(int $id): void
    {
        $this->referral::destroy($id);
    }

    public function getAll(): array
    {
        return $this->referral::all();
    }

    public function getById(int $id): object
    {
        return $this->referral->find($id)->first();
    }

    public function getByUserId(string $userId): object
    {
        return $this->referral->where('user_id', $userId)->first();
    }

    public function updateStatus(int $id, bool $status): void
    {
        $this->referral->where('id', $id)->update(['status' => $status]);
    }

    public function createReferralToken(int $userId): string
    {
        $this->referralToken->fill([
            'user_id' => $userId,
            'token' => Str::random(5)
        ]);

        $this->referralToken->save();

        return $this->referralToken->token;
    }

    private function getUserIdByToken(string $token): int
    {
        return $this->referralToken->where('token', $token)->first()->user_id;
    }

}
