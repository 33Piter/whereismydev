<?php

namespace App\Jobs;

use App\Models\Developer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GitHubApiJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The Developer instance.
     *
     * @var \App\Models\Developer
     */
    protected Developer $developers;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($developers)
    {
        $this->developers = $developers;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->developers as $developer) {

            Developer::updateOrCreate(
                ['github_user_name' => $developer['login'], 'github_id' => $developer['id']],
                ['github_profile_url' => $developer['url'], 'avatar' => $developer['avatar_url']]
            );

        }
    }
}
