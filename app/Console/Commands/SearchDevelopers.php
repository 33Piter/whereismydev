<?php

namespace App\Console\Commands;

use App\Jobs\GitHubApiJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SearchDevelopers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whereismydev:search';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Search for developers on GitHub based on specified filters.';

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
    public function handle()
    {
        $endpoint = 'https://api.github.com/search/users';
        $query = 'type:"user" language:"laravel" language:"php" repos:>1 repos:1:stars:>9 is:"public" location:"brazil" location:"brasil"';
        $per_page = 100;
        $numberOfResults = 300;

        $page = 1;
        $collection = collect();
        $resultsCount = 0;

        while ($resultsCount < $numberOfResults) {

            $response = Http::withToken(env('GITHUB_TOKEN'))->get($endpoint, [
                'q' => $query,
                'per_page' => $per_page,
                'page' => $page,
            ]);

            echo "page: $page \n";
            $collection = $collection->concat($response->collect()['items']);
            $page++;
            $resultsCount = $collection->count();
            echo "resultsCount: $resultsCount \n";
        }

        if($collection->isNotEmpty()){
            GitHubApiJob::dispatch($collection)->onConnection('redis');
        }

        return 0;
    }
}
