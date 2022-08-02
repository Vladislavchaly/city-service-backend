<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Interfaces\Repositories\UsersRepositoryInterface;
use App\Interfaces\Repositories\ReferralsRepositoryInterface;
use App\Notifications\SendReferralLink;
use Illuminate\Http\Response;

class RegistrationController extends Controller
{
    public function __invoke(
        RegistrationRequest          $request,
        UsersRepositoryInterface     $usersRepository,
        ReferralsRepositoryInterface $referralsRepository
    ): Response
    {
        $request->validated();

        $user = $usersRepository->create($request->all());

        $refToken = $referralsRepository->createReferralToken($user->id);

        $user->notify(new SendReferralLink($refToken));

        if (!$request->input('referralToken')) {
            $referralsRepository->create($request->input('referralToken'), $user->id);
        }

        return response([
            'token' => 'Bearer ' . $user->createToken('Laravel Password Grant Client')->accessToken
        ], 200);
    }
}
