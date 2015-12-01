<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowGreeting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'h_make:greet {name=Hakob} {--greeting=Hi}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * Create a new command instance.
     *
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
        $this->info($this->option('greeting') . ', ' . $this->argument('name'));
    }
}
