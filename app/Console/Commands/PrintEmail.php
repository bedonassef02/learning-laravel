<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrintEmail extends Command
{
    // u can delete ?
    protected $signature = 'print-email';

    protected $description = 'Print my Email';

    public function handle()
    {
        $name = $this->secret('what is ur name? ');
        $this->info('print name ' . $name);
    }
}
