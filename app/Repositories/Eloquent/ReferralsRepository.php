<?php

namespace App\Repositories\Eloquent;

use App\Interfaces\Repositories\Eloquent\ReferralsRepositoryInterface;
use App\Interfaces\Repositories\Eloquent\ReferralTokensRepositoryInterface;
use App\Models\Referral;
use Illuminate\Database\Eloquent\Model;

final class ReferralsRepository extends BaseRepository implements ReferralsRepositoryInterface
{

    private ReferralTokensRepositoryInterface $referralTokensRepository;

    public function __construct(Referral $model, ReferralTokensRepositoryInterface $referralTokensRepository)
    {
        parent::__construct($model);
        $this->referralTokensRepository = $referralTokensRepository;
    }

    public function create(string $refToken, int $referralId): Model
    {
        $this->model->fill([
            'user_id' => $this->getUserIdByToken($refToken),
            'referral_id' => $referralId
        ]);

        $this->model->save();

        return $this->model;
    }

    public function delete(int $id): void
    {
        $this->model::destroy($id);
    }

    public function getAll(): array
    {
        return $this->model::all();
    }

    public function getById(int $id): Model
    {
        return $this->model->find($id)->first();
    }

    public function getByUserId(string $userId): Model
    {
        return $this->model->where('user_id', $userId)->first();
    }

    public function updateStatus(int $id, bool $status): void
    {
        $this->model->where('id', $id)->update(['status' => $status]);
    }

    public function createReferralToken(int $userId): string
    {
        $tokenObj = $this->referralTokensRepository->create($userId);
        return $tokenObj->getAttribute('token');
    }

    private function getUserIdByToken(string $token): int
    {
        $tokenObj = $this->referralTokensRepository->getByToken($token);
        return $tokenObj->user_id;
    }

}
