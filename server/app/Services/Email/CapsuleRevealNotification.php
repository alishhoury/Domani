<?php

namespace App\Services\Email; 

use App\Mail\VerifiedUserMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Capsule;


class CapsuleRevealNotification
{
    /**
     * Create a new class instance.
     */
    public function revealEmail()
    {
        $today = now()->toDateString();

        // $capsules = Capsule::select('id','user_id','reveal_at')
        // ->with('user:id,name,email')->where('reveal_at', $today)->get();

        $capsules = Capsule::with('user:id,name,email')
        ->latest()
        ->take(1) // only get the most recent (your test)
        ->get();

        foreach($capsules as $capsule)
            Mail::to($capsule->user->email)->send(new CapsuleRevealNotification($capsule));



    }



}
