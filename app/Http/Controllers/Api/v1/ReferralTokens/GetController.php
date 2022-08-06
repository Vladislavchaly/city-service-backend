<?php

namespace App\Http\Controllers\Api\v1\ReferralTokens;

use App\Http\Controllers\Controller;
use App\Interfaces\Repositories\Eloquent\ReferralTokensRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GetController extends Controller
{
    public function __invoke(Request $request, ReferralTokensRepositoryInterface $referralTokensRepository): Response
    {
        return response($referralTokensRepository->getByUserId($request->user()->id), 200);
    }
}
