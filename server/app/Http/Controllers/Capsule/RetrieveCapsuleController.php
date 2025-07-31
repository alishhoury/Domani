<?php

namespace App\Http\Controllers\Capsule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Capsule;
use App\Services\Capsule\RetrieveCapsuleService;

class RetrieveCapsuleController extends Controller
{
    function getUserCapsules(){
        $Capsules = RetrieveCapsuleService::getUserCapsules(auth()->user()->id);
        return $this->responseJSON($Capsules);
    }
    
    function getPrivateCapsules(){
        
    }
    
    function getPublicCapsules(){

        $Capsules = RetrieveCapsuleService::getPublicCapsules();
        
        return $this->responseJSON($Capsules);

    }

    function getPublicByCountry(){


    }

    function getPublicByMood(){

    }

    function getUnlisted(){

    }
}
