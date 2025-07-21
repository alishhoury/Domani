<?php

namespace App\Http\Controllers\Capsule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Capsule;

class RetrieveCapsuleController extends Controller
{
    function getUserCapsules(){
        
    }
    
    function getPrivateCapsules(){
        
    }
    
    function getPublicCapsules(){
        
        $Capsules = Capsule::with(['media', 'tag', 'location'])->where('is_revealed', 0)->whereHas('tag', function ($query) {
        $query->where('private_mode', 0); })
        ->orderBy('reveal_at', 'desc')->take(20)->get();    

        return $this->responseJSON($Capsules);

        // $response = [];
        // $response["status"] = "success";
        // $response["payload"] = $Capsules;
        // return json_encode($response);
    }

    function getPublicByCountry(){


    }

    function getPublicByMood(){

    }

    function getUnlisted(){

    }
}
