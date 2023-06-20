<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrintEmail extends Command
{
    // u can delete ?
    protected $signature = 'print-email {email} {phone}';

    protected $description = 'Print my Email';

    public function handle()
    {
        $data = $this->arguments();
        $this->info('print data ' . json_encode($data));
    }
}
