<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

use App\Console\Commands\UpdateRevealStatus;
use App\Console\Commands\EmailRevealedCapsules;


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');



Schedule::command('app:update-reveal-status')->dailyAt('00:00');

Schedule::command('app:email-revealed-capsules')->daily('01:00');
