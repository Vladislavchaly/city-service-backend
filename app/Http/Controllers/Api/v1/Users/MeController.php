<?php

namespace App\Http\Controllers\Api\v1\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MeController extends Controller
{
    public function __invoke(Request $request): Response
    {
        return response($request->user(), 200);
    }
}


