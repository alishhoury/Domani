<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

use App\Models\Capsule;


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::call(function () {

    domani::table('capsules')->where('is_revealed', 0)->where('reveal_at', '<', now())
    ->update(['is_revealed' => 1]);

})->daily();

















// Schedule::call(function () {
//     Capsule::where('is_revealed', 0)
//         ->where('reveal_at', '<', now())
//         ->update(['is_revealed' => 1]);
// })->everyFiveMinutes();

// Schedule::schedule(function (Schedule $schedule) {
//     $schedule->call(function () {
//         Capsule::where('is_revealed', 0)
//             ->where('reveal_at', '<', now())
//             ->update(['is_revealed' => 1]);
//     })->everyFiveMinutes();
// });