<?php

namespace App\Http\Controllers\Capsule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Capsule;

class RetrieveCapsuleController extends Controller
{
    function getUserCapsules(){
        $Capsules = capsule::with(['media', 'tag', 'location']) ->get();
        $response = [];
        $response["status"] = "success";
        $response["payload"] = $Capsules;
        return json_encode($response);

    }

    function getPrivateCapsules(){
        
    }

    function getPublicCapsules(){

    }

    function getPublicByCountry(){


    }

    function getPublicByMood(){

    }

    function getUnlisted(){

    }
}
