<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
    	return [
    	'username'=>$request->username,
    	];
    }
}
