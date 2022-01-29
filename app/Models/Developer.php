<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Developer extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'github_id',
        'github_user_name',
        'avatar',
        'email',
        'phone',
    ];

    /**
     * Set the developer GitHub profile url.
     *
     * @param  string  $value
     * @return void
     */
    public function setGithubUserNameAttribute($value)
    {
        $this->attributes['github_user_name'] = $value;
        $this->attributes['github_profile_url'] = 'https://github.com/'.$value;
    }


    /**
     * Get the name of the index associated with the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'github_user_name';
    }

}
