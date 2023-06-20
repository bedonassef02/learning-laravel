<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrintEmail extends Command
{
    protected $signature = 'print-email';

    protected $description = 'Print my Email';

    public function handle()
    {
        $this->info('print email command successfully');
    }
}
