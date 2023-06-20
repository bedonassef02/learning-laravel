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
        $name = $this->confirm('are u sure?');
        $this->info('print name ' . $name);
    }
}
