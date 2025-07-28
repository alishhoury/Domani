<?php

namespace App\Http\Controllers\Capsule;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Capsule;
use App\Http\Controllers\Controller;
use App\Services\Capsule\CreateCapsuleService;


class CreateCapsuleController extends Controller
{
    public function create(Request $request){

        $capsule = CreateCapsuleService::create($request);
        return $this->responseJson($capsule);
    

}}
