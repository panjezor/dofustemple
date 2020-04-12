<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FullOptimize extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'optimize:full';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Caches everything accessible by artisan';

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
        $this->call('view:cache');
        $this->call('route:cache');
        $this->call('event:cache');
        $this->call('config:cache');
        $this->info('Backend cached successfully!');

    }
}
