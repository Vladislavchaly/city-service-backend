<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * User
 *
 * @mixin Builder
 */
class Referral extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'referral_id',
        'status'
    ];

}
