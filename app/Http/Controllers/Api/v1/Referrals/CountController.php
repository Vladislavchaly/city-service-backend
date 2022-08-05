<?php

namespace App\Http\Controllers\Api\v1\Referrals;

use App\Http\Controllers\Controller;
use App\Interfaces\Repositories\Eloquent\ReferralsRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CountController extends Controller
{
    public function __invoke(Request $request, ReferralsRepositoryInterface $referralsRepository): Response
    {
        return response(['count' => $referralsRepository->countReferrals($request->user()->id, true)], 200);
    }
}
