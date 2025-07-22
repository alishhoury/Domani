<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;


use App\Models\Capsule;
use App\Console\Commands\EmailRevealedCapsules;


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::call(function () {

    domani::table('capsules')->where('is_revealed', 0)->where('reveal_at', '<', now())
    ->update(['is_revealed' => 1]);

})->daily();



Schedule::command('app:email-revealed-capsules')->daily();
