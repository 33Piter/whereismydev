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

        $devLocations = $this->choice(
            'What is the location of the devs you are looking for? Choose or type.',
            ['Brazil', 'United States', 'Canada', 'Argentina', 'India', 'France', 'Germany', 'Italy', 'Japan', 'China'],
            0,
            $maxAttempts = null,
            $allowMultipleSelections = true
        );

        $devLocationString = '';
        foreach ($devLocations as $location) {
            $devLocationString .= 'location:"'.$location.'" ';
        }

        $devLanguages = $this->choice(
            'What programming languages or frameworks does the devs need to know? Choose or type.',
            ['PHP', 'Laravel', 'Javascript', 'Python', 'Java', 'Go', 'C++', 'C#', 'TypeScript'],
            0,
            $maxAttempts = null,
            $allowMultipleSelections = true
        );

        $devLanguagesString = '';
        foreach ($devLanguages as $language) {
            $devLanguagesString .= 'language:"'.$language.'" ';
        }

        $numberOfRepositories = $this->ask('What is the minimum number of published repositories that devs must have?') ?? 1;
        $numberOfFollowers = $this->ask('What is the minimum number of followers that devs must have?') ?? 1;
        $numberOfResults = $this->ask('What is the maximum number of devs you want to find?') ?? 50;
        $numberOfStars = $this->ask('What is the minimum number of stars in published repositories that devs must have?') ?? 1;

        $endpoint = 'https://api.github.com/search/users';
        $query = 'type:"user" '.$devLocationString.$devLanguagesString.'repos:=>'. $numberOfRepositories .' followers:'.$numberOfFollowers.' repos:1:stars:=>'.$numberOfStars;
        $perPage = 100;
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
                echo "page: $actualPage \n";
                $collection = $collection->concat($response->collect()['items']);
                $actualPage++;
                $resultsCount = $collection->count();
                echo "resultsCount: $resultsCount \n";
            }
            else {
                $this->error('Something went wrong! Try doing a more comprehensive search.');
                return 0;
            }
        }

        if($collection->isNotEmpty()){
            GitHubApiJob::dispatch($collection)->onConnection('redis');
        }

        return 0;
    }
}
