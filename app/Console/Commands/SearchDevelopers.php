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
    public function handle(): int
    {
        if(!env('GITHUB_TOKEN')){
            echo "GitHub token not defined in .env file.\n";
            exit;
        }

        $devLocation = $this->anticipate(
            'What is the location of the devs you are looking for? Use arrows to choose or type.',
            ['Brazil', 'United States', 'Canada', 'Argentina', 'India', 'France', 'Germany', 'Italy', 'Japan', 'China'],
            'Brazil'
        );

        $devLanguage = $this->anticipate(
            'What programming language or framework does the devs need to know? Use arrows to choose or type.',
            ['PHP', 'Laravel', 'Javascript', 'Python', 'Java', 'Go', 'C++', 'C#', 'TypeScript'],
            'PHP'
        );

        $numberOfRepositories = $this->ask('What is the minimum number of published repositories that devs must have?') ?? 1;
        $numberOfFollowers = $this->ask('What is the minimum number of followers that devs must have?') ?? 1;
        $numberOfResults = $this->ask('What is the maximum number of devs you want to find?') ?? 50;
        $numberOfStars = $this->ask('What is the minimum number of stars in published repositories that devs must have?') ?? 1;

        $this->processGitHubApi($devLocation, $devLanguage, $numberOfRepositories, $numberOfFollowers, $numberOfStars, $numberOfResults);

        return 0;
    }

    private function processGitHubApi($devLocation, $devLanguage, $numberOfRepositories, $numberOfFollowers, $numberOfStars, $numberOfResults): void
    {
        $endpoint = 'https://api.github.com/search/users';
        $query = 'type:"user" location:'.$devLocation.' language:'.$devLanguage.' repos:=>'. $numberOfRepositories .' followers:'.$numberOfFollowers.' repos:1:stars:=>'.$numberOfStars;
        $perPage = 100;
        if ($numberOfResults < $perPage){
            $perPage = $numberOfResults;
        }
        $actualPage = 1;
        $collection = collect();
        $resultsCount = 0;

        while ($resultsCount < $numberOfResults) {
            $response = Http::withToken(env('GITHUB_TOKEN'))->get($endpoint, [
                'q' => $query,
                'per_page' => $perPage,
                'page' => $actualPage,
            ]);
            if($response->ok()) {
                $collection = $collection->concat($response->collect()['items']);
                if ($collection->isEmpty()) {
                    $this->error('No dev was found! Try doing a more comprehensive search.');
                    exit;
                }
                echo "page: $actualPage \n";
                $actualPage++;
                $resultsCount = $collection->count();
                echo "resultsCount: $resultsCount \n";
            }
            else {
                $this->error('Something went wrong with the GitHub API!');
                return;
            }
        }

        if($collection->isNotEmpty()){
            GitHubApiJob::dispatch($collection)->onConnection('redis');
        }
    }
}
