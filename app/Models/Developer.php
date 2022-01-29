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
        'github_profile_url',
        'avatar',
        'email',
        'phone',
    ];


    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setGithubProfileUrlAttribute($value)
    {
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
