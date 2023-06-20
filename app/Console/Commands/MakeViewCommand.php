<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeViewCommand extends Command
{
    protected $signature = 'make-view {view}';

    protected $description = 'create new blade file';

    public function handle()
    {
        $argument = $this->argument('view');
        $path = $this->getFullPath($argument);
        $this->checkFolder($path);
        if (File::exists($path)) {
            $this->error("File {$path} already exists");
            return;
        }
        File::put($path, $path);
        $this->info("File {$path} created");
    }

    public function getFullPath($argument)
    {
        $view = str_replace('.', '/', $argument) . '.blade.php';
        $path = "resources/views/{$view}";
        return $path;
    }

    public function checkFolder($path)
    {
        $directory = dirname($path);
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
    }
}
