<?php

namespace App\Services\Capsule;

use App\Models\Capsule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RetrieveCapsuleService
{
 
    static function getPublicCapsules(){

        return Capsule::with('user:id,name')
            ->where('is_revealed', 1)
            ->where('private_mode', 0)
            ->orderBy('reveal_at', 'desc')
            ->take(20)
            ->get();
 
    }

    static function getUserCapsules($userId){

        return Capsule::with('user:id,name')
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

    }

}
