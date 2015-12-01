<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Fillable fields for an Article.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body'
    ];

}
