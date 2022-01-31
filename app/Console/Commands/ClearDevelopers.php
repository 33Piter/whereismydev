<?php

namespace App\Console\Commands;

use App\Jobs\GitHubApiJob;
use App\Models\Developer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ClearDevelopers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'whereismydev:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all developers from the database.';

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
     * Execute the console command
     *
     * @return int
     */
    public function handle(): int
    {
        if ($this->confirm('All developers will be removed from the database, do you wish to continue?')) {
            Developer::truncate();
        }

        return 0;
    }
}
