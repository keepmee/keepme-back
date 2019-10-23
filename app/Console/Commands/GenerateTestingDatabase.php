<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateTestingDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testing-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate testing database after each test';

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
        shell_exec("mysql test_keepme < test_keepme.sql");
    }
}
