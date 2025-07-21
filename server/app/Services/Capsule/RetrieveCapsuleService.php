<?php

namespace App\Services\Capsule;

use App\Models\Capsule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RetrieveCapsuleService
{
 
    static function getPublicCapsules(){

        return $Capsules = Capsule::where('is_revealed', 1)->where('private_mode', 0)
        ->orderBy('reveal_at', 'desc')->take(20)->get();    
 
    }

}
