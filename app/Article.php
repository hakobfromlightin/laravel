<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    protected $dates = ['published_at']; //Carbon time format

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

    /* setName(published_at)Attribute  mutator*/
    public function setPublishedAtAttribute($date)
    {
//        $this->attributes['published_at'] = Carbon::parse($date);
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }
}
