<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Fillable fields for  tag
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get all articles associated with the given tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany('App\Articles')->withTimestamps();
    }
}
