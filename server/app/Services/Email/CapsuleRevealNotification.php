<?php

namespace App\Services\Email; 

use App\Mail\CapsuleRevealNotification as CapsuleRevealMail;
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

        $capsules = Capsule::select('id','user_id','reveal_at')
            ->with('user:id,name,email')
            ->whereDate('reveal_at', $today)
            ->get();

        // $capsules = Capsule::with('user:id,name,email')
        // ->latest()
        // ->take(1)
        // ->get();

        if ($capsules->isEmpty()) {
            return 'No capsules to email';
        }

        foreach ($capsules as $capsule) {
            if ($capsule->user && $capsule->user->email) {
                Mail::to($capsule->user->email)->send(new CapsuleRevealMail($capsule));
            }
        }

        return "{$capsule->user->name} Emailed Successfully.";

    }



}
