<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrintEmail extends Command
{
    // u can delete ?
    protected $signature = 'print-email {email} {--M|mmm}';

    protected $description = 'Print my Email';

    public function handle()
    {
        $email = $this->argument('email');
        $this->info('print email ' . $email . ' command successfully');
    }
}
