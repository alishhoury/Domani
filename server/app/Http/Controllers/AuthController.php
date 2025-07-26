<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\AuthService;

class AuthController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login','register']]);
    // }



    public function login(Request $request)
    {
        $user = AuthService::login($request);
        return $this->responseJson($user); 
    }



    public function register(Request $request){

        $user = AuthService::register($request);
        return $this->responseJson($user);

    }

}