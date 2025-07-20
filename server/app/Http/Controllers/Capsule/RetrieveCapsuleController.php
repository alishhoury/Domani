<?php

namespace App\Http\Controllers\Capsule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RetrieveCapsuleController extends Controller
{
    function getUserCapsules(){

        $response = [];
        $response["status"] = "success";
        $response["payload"] = "Payload";
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
