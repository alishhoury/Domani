<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Capsule;
use Illuminate\Support\Facades\Mail;
use App\Services\Email\CapsuleRevealNotification;

class EmailRevealedCapsules extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:email-revealed-capsules';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $emailService = new CapsuleRevealNotification;
        $result = $emailService->revealEmail();
    
        $this->info($result);
    }
}

