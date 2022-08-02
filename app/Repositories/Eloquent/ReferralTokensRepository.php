<?php

namespace App\Repositories\Eloquent;

use App\Interfaces\Repositories\Eloquent\ReferralTokensRepositoryInterface;
use App\Models\ReferralToken;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

final class ReferralTokensRepository extends BaseRepository implements ReferralTokensRepositoryInterface
{

    public function __construct(ReferralToken $model)
    {
        parent::__construct($model);
    }

    public function create(int $userId): Model
    {
        $this->model->fill([
            'user_id' => $userId,
            'token' => Str::random(5)
        ]);

        $this->model->save();

        return $this->model;
    }

    public function delete(int $id): void
    {
        $this->model->destroy($id);
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function getById(int $id): Model
    {
        return $this->model->find($id)->first();
    }

    public function getByUserId(int $userId): Model
    {
        return $this->model->where('user_id', $userId)->first();
    }

    public function getByToken(string $token): Model
    {
        return $this->model->where('token', $token)->first();
    }
}
