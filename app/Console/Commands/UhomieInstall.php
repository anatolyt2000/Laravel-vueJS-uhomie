<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UhomieInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'uhomie:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install initialize';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
    }
}
