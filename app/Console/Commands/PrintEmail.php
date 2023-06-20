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
        $this->info('print email command successfully');
    }
}
