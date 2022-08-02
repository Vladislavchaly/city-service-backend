<?php

namespace App\Repositories\Eloquent;

use App\Interfaces\Repositories\Eloquent\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements EloquentRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
